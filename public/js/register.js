const APP = {
    SW: null,
    init() {
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker
                .register('./sw.js', {
                    scope: './',
                })
                .then((registration) => {
                    APP: SW = registration.installing ||
                        registration.waiting ||
                        registration.active;
                    console.log("service worker registrado");
                });
        } else {
            console.log('service worker no esta soportado');
        }
    },
}

document.addEventListener('DOMContentLoaded',APP.init);