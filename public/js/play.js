const BTNS_RESPONSE = document.querySelectorAll('button[data-is-correct]');
//console.log(BTNS_RESPONSE);
const BTN_NEXT_QUESTION = document.getElementById('btn-siguiente-pregunta');
console.log(BTN_NEXT_QUESTION);

BTNS_RESPONSE.forEach(btn => {
console.log(btn);
btn.addEventListener("click", ()=>{

    let is_correct = btn.dataset.isCorrect;
    if(is_correct == 1){
        console.log(is_correct);
        console.log(btn.innerText);
        BTN_NEXT_QUESTION.disabled=false;
        btn.nextSibling.classList.remove="fas fa-check";
    }

});
});
