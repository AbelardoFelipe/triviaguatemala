const BTNS_RESPONSE = document.querySelectorAll('button[data-is-correct]');
//console.log(BTNS_RESPONSE);
const BTN_NEXT_QUESTION = document.getElementById('btn-siguiente-pregunta');
//console.log(BTN_NEXT_QUESTION);

BTNS_RESPONSE.forEach(btn => {
console.log(btn);
let siguiente_e = btn.nextSibling;
//console.log(siguiente_e);

btn.addEventListener("click", ()=>{

    let is_correct = btn.dataset.isCorrect;
    if(is_correct == 1){
        /* console.log(is_correct);
        console.log(btn.innerText); */
        BTN_NEXT_QUESTION.disabled=false;
        siguiente_e.classList.add("fas");
        siguiente_e.classList.add("fa-check");     
        console.log(siguiente_e);
    }else if (is_correct == 0){
        /* siguiente_e.classList.remove("fas");
        siguiente_e.classList.remove("fa-check");  */
        siguiente_e.classList.add("fas");
        siguiente_e.classList.add("fa-x");
    }else{
        /* siguiente_e.classList.remove("fas");
        siguiente_e.classList.remove("fa-check"); 
        siguiente_e.classList.remove("fa-solid");
        siguiente_e.classList.remove("fa-x"); */
    }

});
});
