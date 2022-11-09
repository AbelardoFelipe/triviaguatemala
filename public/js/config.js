//let estado_musica = localStorage.getItem('pause');

let form_config = document.getElementById('form-config');

form_config.addEventListener('submit',(e)=>{
    e.preventDefault();
    
    let datos = new FormData(form_config);
    
    fetch('/configuracion/store', {
        headers: {
            'X-CSRF-TOKEN': window.CSRF_TOKEN
        },
       method: 'post',   
       body:datos
    })
    .then(function (response) {
        return response.json();
    }).then(function (data) {
        console.log(data)
    })
    .catch(function(err) {
        console.log(err);
     }); 
})




/* if(estado_musica == "true"){
    switch_music_background.checked = true;
}else{
    switch_music_background.checked = false;
} */

/* switch_email.addEventListener('click',()=>{
    console.log(switch_email.checked);
})

switch_music.addEventListener('click',()=>{
    console.log(switch_music.checked);
})

cache_time.addEventListener('click', ()=>{
    //console.log(cache_time.valueAsNumber);
    localStorage.setItem('cache_time',cache_time.valueAsNumber);
    console.log(localStorage.getItem('cache_time'));
}) */
