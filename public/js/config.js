//let estado_musica = localStorage.getItem('pause');

let form_config = document.getElementById('form-config');
/* console.log(form_config); */
form_config.addEventListener('submit',(e)=>{
    e.preventDefault();
    
    let datos = new FormData(form_config);
    for (var entrie of datos.entries()) {
        console.log(entrie[0]+ ': ' + entrie[1]); 
    }
    let peticion = {
        headers: {
            'X-CSRF-TOKEN': window.CSRF_TOKEN,
            "Content-type": "application/json; charset=UTF-8",
            "Access-Control-Allow-Origin": "*"
        },
        method: 'POST',
        body: JSON.stringify(datos)        
    }
    /* emailLoading.classList.remove("loading-active");
    console.log(emailLoading); */
    fetch('/configuracion/store',peticion)
        .then(respuesta => respuesta.json())
        .then(respuesta => {            
            if(respuesta['respuesta'] == true){
                /* emailLoading.classList.add("loading-active");
                swal("Éxito!", "Tu correo ha sido enviado!", "success").then((value)=>{
                    location.reload();
                }); */
                console.log("llego");
                console.log(respuesta);
            }else if(respuesta['respuesta'] == false) {
                /* emailLoading.classList.add("loading-active");
                swal("Error!", "Tu correo no se ha enviado, revisa tus datos.", "error"); */
                console.log(respuesta);
            } else{                
                /* for(const resultado in respuesta){                
                    let padre = document.querySelector("#"+resultado);                
                    padre.classList.add("resaltar");
                    let txt = document.createElement("span");
                    txt.classList.add("text-danger");
                    txt.classList.add("remov-error-form");
                    txt.innerHTML = respuesta[resultado];
                    document.querySelector("#"+resultado).insertAdjacentElement("afterend",txt);
                    emailLoading.classList.add("loading-active");
                } */
            }            
        }).catch(error => console.log("error JS",error));
    
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
