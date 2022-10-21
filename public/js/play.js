const BTNS_RESPONSE = document.querySelectorAll('button[data-is-correct]');
const BTN_NEXT_QUESTION = document.getElementById('btn-siguiente-pregunta');
const DIALOG_AVATAR =document.getElementById('dialog-avatar');

BTNS_RESPONSE.forEach(btn => {
let siguiente_e = btn.nextSibling;

btn.addEventListener("click", ()=>{

    let is_correct = btn.dataset.isCorrect;
    if(is_correct == 1){
        siguiente_e.classList.add("fas");
        siguiente_e.classList.add("fa-check");
        siguiente_e.classList.add("pregunta-ok"); 

        sendDetailPoint(1,1,"",1,5);
        
        DIALOG_AVATAR.classList.add('avatar-active');        
        DIALOG_AVATAR.children[0].classList.add('avatar-active');
            setTimeout(() => {
                DIALOG_AVATAR.classList.remove('avatar-active');        
                DIALOG_AVATAR.children[0].classList.remove('avatar-active');
              }, "2000")
                  
        BTN_NEXT_QUESTION.disabled=false;

    }else if (is_correct == 0){
        siguiente_e.classList.add("fas");
        siguiente_e.classList.add("fa-times");
        siguiente_e.classList.add("pregunta-error");
        
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

//Ejemplo de envio fetch al servidor

function sendDetailPoint(user=1,numero_pregunta,nivel="",intento="",punto=""){
 const data = new URLSearchParams("user_id="+user+"&numero_pregunta="+numero_pregunta+"&nivel="+nivel+"&intento="+intento+"&punto="+punto);
fetch('/preguntas', {
    headers: {
        'X-CSRF-TOKEN': window.CSRF_TOKEN
    },
   method: 'post',
   body:data
})
.then(function(response) {
   if(response.ok) {
       return response.text();
   } else {
       throw "Error en la llamada Ajax";
   }

})
.then(function(texto) {
   console.log(texto);
})
.catch(function(err) {
   console.log(err);
});
}