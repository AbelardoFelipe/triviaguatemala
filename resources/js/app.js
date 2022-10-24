
// require('./bootstrap');

// Seccion animacion de avatar
var canvas = document.getElementById('boy')
var c_boy = canvas.getContext('2d')
c_boy.shadowColor = "black"
c_boy.shadowBlur = 6
c_boy.shadowOffsetX = 6
c_boy.shadowOffsetY = 6

var images_boy = []
images_boy.length = 16

for(let i = 1; i < images_boy.length; i++){
    images_boy[i] = new Image()
    images_boy[i].src = '/storage/boy/Idle (' + i.toString() + ').png'
}

let i = 1;
let interval = setInterval(avatar_boy_idle, 100);

function avatar_boy_idle(){
    i++
    if(i >= 15){
        i = 1
    }
    c_boy.clearRect(50, 50, 400, 400)
    c_boy.drawImage(images_boy[i], 50,50,400,400)
}   
// termina seccion editar avatar

/* const progressBarFill = document.getElementById('progressBarFill');

let questionCounter = 8;
const MAX_QUESTIONS = 10;

 progressBarFill.style.width = `${(questionCounter / MAX_QUESTIONS) * 100}%`; */


