const BTNS_RESPONSE = document.querySelectorAll('button[data-is-correct]');
const BTN_NEXT_QUESTION = document.getElementById('btn-siguiente-pregunta');

BTNS_RESPONSE.forEach(btn => {
let siguiente_e = btn.nextSibling;

btn.addEventListener("click", ()=>{

    let is_correct = btn.dataset.isCorrect;
    if(is_correct == 1){

        BTN_NEXT_QUESTION.disabled=false;
        siguiente_e.classList.add("fas");
        siguiente_e.classList.add("fa-check");
        siguiente_e.classList.add("pregunta-ok");    

    }else if (is_correct == 0){
        siguiente_e.classList.add("fas");
        siguiente_e.classList.add("fa-times");
        siguiente_e.classList.add("pregunta-error");               
    }else{
        siguiente_e.classList.remove("fas");
        siguiente_e.classList.remove("fa-check"); 
        siguiente_e.classList.remove("fa-times");
    }

});
});
