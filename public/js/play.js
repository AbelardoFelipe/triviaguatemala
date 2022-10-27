const BTNS_RESPONSE = document.querySelectorAll('button[data-is-correct]');
const BTN_NEXT_QUESTION = document.getElementById('btn-siguiente-pregunta');
const DIALOG_AVATAR = document.getElementById('dialog-avatar');
const USER_ID = document.querySelector('a[data-user-id]');
const NUMERO_PREGUNTA = document.querySelector('h2[data-user-numero-pregunta]');
const NIVEL = document.querySelector('p[data-user-nivel]');
const SHOW_PUNTOS = document.getElementById('show-puntos');
const SHOW_NIVEL = document.getElementById('show-nivel');
const PROGRES_BAR = document.getElementById('progressBarFill');
const PREGUNTA_APROBADO = document.querySelector('div[data-user-aprobado]');


const BTN_PLAY = document.querySelectorAll('i[data-music]');
//console.log(BTN_PLAY);
const MUSIC_GAME = document.getElementById('music-background');
let play_state = localStorage.getItem("pause");

BTN_PLAY.forEach(btn => {
  btn.addEventListener("click", ()=>{
    if(btn.id == "play"){
        localStorage.setItem("pause", true);
        nameDisplayCheck();
        MUSIC_GAME.pause();
        btn.style.display="none";
        BTN_PLAY[1].style.display="block";
    }

    if(btn.id == "stop"){
        localStorage.removeItem("pause");
        nameDisplayCheck();
        MUSIC_GAME.play();
        btn.style.display="none";
        BTN_PLAY[0].style.display="block";
    }
  })  
});

progresBar();
function progresBar(){
    let fill = (PREGUNTA_APROBADO.dataset.userAprobado*10)+'%';
    PROGRES_BAR.style.width=fill;
}

BTNS_RESPONSE.forEach(btn => {
let siguiente_e = btn.nextSibling;

btn.addEventListener("click", ()=>{
    
    let is_correct = btn.dataset.isCorrect;
    
    if(is_correct == 1){
        playSoundBtnYes();     
        siguiente_e.classList.add("fas");
        siguiente_e.classList.add("fa-check");
        siguiente_e.classList.add("pregunta-ok");
    
        if(btn.attributes[1].value == "false"){                       
            sendDetailPoint(USER_ID.dataset.userId,NUMERO_PREGUNTA.dataset.userNumeroPregunta,NIVEL.dataset.userNivel,1,5,1);
            refreshPunto();
            BTNS_RESPONSE.forEach(btn_clicked => {
                btn_clicked.attributes[1].value="true";
            });
        }

        DIALOG_AVATAR.classList.add('avatar-active');        
        DIALOG_AVATAR.children[0].classList.add('avatar-active');
            setTimeout(() => {
                DIALOG_AVATAR.classList.remove('avatar-active');        
                DIALOG_AVATAR.children[0].classList.remove('avatar-active');
              }, "2000")
        if(PREGUNTA_APROBADO.dataset.userAprobado < 10){
            BTN_NEXT_QUESTION.disabled=false;
        }          
        
    }else if (is_correct == 0){    
        playSoundBtnNo();    
        siguiente_e.classList.add("fas");
        siguiente_e.classList.add("fa-times");
        siguiente_e.classList.add("pregunta-error");
        
        if(btn.attributes[1].value == "false"){            
            sendDetailPoint(USER_ID.dataset.userId,NUMERO_PREGUNTA.dataset.userNumeroPregunta,NIVEL.dataset.userNivel,1,0,0);
            btn.attributes[1].value="true";
        }

        DIALOG_AVATAR.classList.add('avatar-active');        
        DIALOG_AVATAR.children[1].classList.add('avatar-active');
            setTimeout(() => {
                DIALOG_AVATAR.classList.remove('avatar-active');        
                DIALOG_AVATAR.children[1].classList.remove('avatar-active');
              }, "2000")
        
    }else{
        siguiente_e.classList.remove("fas");
        siguiente_e.classList.remove("fa-check"); 
        siguiente_e.classList.remove("fa-times");
    }

});
});

//Envio fetch data al servidor

async function sendDetailPoint(user_id,numero_pregunta,nivel="",intento="",punto=0, aprobado=""){
 
 let punteo = {  
    user_id:user_id,  
    numero_pregunta: numero_pregunta,
    nivel: nivel,
    intento: intento,
    punto: punto,
    aprobado: aprobado
  };

await fetch('/preguntas', {
    headers: {
        'X-CSRF-TOKEN': window.CSRF_TOKEN,
        "Content-type": "application/json; charset=UTF-8",
        "Access-Control-Allow-Origin": "*"
    },
   method: 'put',   
   body: JSON.stringify(punteo)
})
.then(function (response) {
    return response.json();
}).then(function (data) {
});
}

async function refreshPunto(){
   
   await fetch('/preguntas/refreshpunto', {
       headers: {
           'X-CSRF-TOKEN': window.CSRF_TOKEN,
           "Content-type": "application/json; charset=UTF-8",
           "Access-Control-Allow-Origin": "*"
       },
      method: 'get'   
     // body: JSON.stringify(punteo)
   })
   .then(function (response) {
       return response.json();
   }).then(function (data) {
    SHOW_PUNTOS.textContent=data[0];
    let fill = (data[1]*10)+'%';
    PROGRES_BAR.style.width=fill;
    SHOW_NIVEL.textContent=data[1];
   });
   }

   function playSoundBtnNo() {
    let audio = document.getElementById('btn-click-sound-no');
    if (!audio) return; //We exit the function if there is no sound to play
    audio.currentTime = 0; //We rewind the track if it is currently been playing.
    audio.play();
    audio.classList.add('playing');
}

function playSoundBtnYes() {
    let audio = document.getElementById('btn-click-sound-yes');
    if (!audio) return; //We exit the function if there is no sound to play
    audio.currentTime = 0; //We rewind the track if it is currently been playing.
    audio.play();
    audio.classList.add('playing');
}

function nameDisplayCheck() {
    if(play_state){
        MUSIC_GAME.pause();
        BTN_PLAY[0].style.display = "none";
        BTN_PLAY[1].style.display="block";
    }else{
        MUSIC_GAME.play();
        BTN_PLAY[1].style.display = "none";
        BTN_PLAY[0].style.display="block";
    }
}

document.body.onload = nameDisplayCheck;
window.onload = function music_back(){
    //MUSIC_GAME.autoplay = true;
    console.log(MUSIC_GAME);
}