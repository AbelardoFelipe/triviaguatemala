let estado_musica = localStorage.getItem('pause');
//let form_config = document.getElementById('form-config');
let form = new FormData(document.getElementById('form-config'));
console.log(form);

let switch_music_background = document.getElementById('switch-music-background');
let switch_sound_efect = document.getElementById('switch-sound-efect');
let cache_time = document.getElementById('cache-time');

if(estado_musica == "true"){
    switch_music_background.checked = true;
}else{
    switch_music_background.checked = false;
}

switch_sound_efect.addEventListener('click',()=>{
    console.log(switch_sound_efect.checked);
})

cache_time.addEventListener('click', ()=>{
    //console.log(cache_time.valueAsNumber);
    localStorage.setItem('cache_time',cache_time.valueAsNumber);
    console.log(localStorage.getItem('cache_time'));
})
