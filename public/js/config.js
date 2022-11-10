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
        window.location.reload();
    });
})
