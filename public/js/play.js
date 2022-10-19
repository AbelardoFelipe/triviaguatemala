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
        
        DIALOG_AVATAR.classList.add('avatar-active');        
        DIALOG_AVATAR.children[0].classList.add('avatar-active');
            setTimeout(() => {
                DIALOG_AVATAR.classList.remove('avatar-active');        
                DIALOG_AVATAR.children[0].classList.remove('avatar-active');
              }, "1500")
                  
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
              }, "1500")
        
    }else{
        siguiente_e.classList.remove("fas");
        siguiente_e.classList.remove("fa-check"); 
        siguiente_e.classList.remove("fa-times");
    }

});
});

//Ejemplo de envio fetch al servidor
/* const data = new URLSearchParams("nombre=miguel angel&nacionalidad=español");
data.append('otroDato', 'otro valor');
fetch('../post.php', {
   method: 'POST',
   body: data
})
.then(function(response) {
   if(response.ok) {
       return response.text()
   } else {
       throw "Error en la llamada Ajax";
   }

})
.then(function(texto) {
   console.log(texto);
})
.catch(function(err) {
   console.log(err);
}); */