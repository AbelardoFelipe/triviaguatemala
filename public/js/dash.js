// require('./bootstrap');

// Seccion animacion de avatar
var canvas = document.getElementById('boy');
var c_boy = canvas.getContext('2d');
c_boy.shadowColor = "black"
c_boy.shadowBlur = 6
c_boy.shadowOffsetX = 6
c_boy.shadowOffsetY = 6

var images_boy = []
const avatar_seleccion = document.getElementById('avatar-seleccionado').value;
let avatar_src = ''
if (avatar_seleccion.includes("boy")){ 
    canvas.width = 300
    images_boy.length = 16 
    avatar_src = 'boy/Idle__'
}
if (avatar_seleccion.includes("Rosita")) {
    images_boy.length = 17
    avatar_src = 'Rosita/Idle__'
}
if (avatar_seleccion.includes("Vaquerita")) {
    images_boy.length = 11
    avatar_src = 'Vaquerita/Idle__'
}
if (avatar_seleccion.includes("Vaquerito")){ 
    c_boy.scale(0.8,1)
    images_boy.length = 10
    avatar_src = 'Vaquerito/Idle__'
} 


for(let i = 1; i < images_boy.length; i++){
    images_boy[i] = new Image()
    images_boy[i].src = '/images/avatars/' + avatar_src + i.toString() + '.png'
}

let i = 1;
let interval = setInterval(avatar_boy_idle, 100);

function avatar_boy_idle(){
    i++
    if(i >= images_boy.length){
        i = 1
    }
    c_boy.clearRect(50, 50, 400, 400)
    c_boy.drawImage(images_boy[i], 50,50,400,400)
}   
// termina seccion editar avatar

const progressBarFill = document.getElementById('progressBarFill');

let questionCounter = 8;
const MAX_QUESTIONS = 10;

 progressBarFill.style.width = `${(questionCounter / MAX_QUESTIONS) * 100}%`;


//  cambios de humor
let last_loggin = document.getElementById('last_loggin').value;

let ahora = moment();
let last = moment(last_loggin);
let diferencia = ahora.diff(last, 'days');
let humor_pj = document.getElementById('humor_personaje')

if (diferencia > 2){
    humor_pj.src = '/images/sad.gif'
}else{
    humor_pj.src = '/images/happy.gif'
}



// termina cambios de humor