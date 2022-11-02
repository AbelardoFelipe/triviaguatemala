const CACHE_PLAY = 'cache-1';

self.addEventListener('install', e =>{
    const cacheProm = caches.open( CACHE_PLAY)
        .then( cache =>{
            return cache.addAll([
                '/',
                '/css/app.css',
                '/css/play.css',
                '/images/avatars/',
                'images/fondo.jpg',
                '/js/app.js',
                '/js/avatar.js',
                '/js/dash.js',
                '/js/play.js',
                '/sound/008864060_prev.mp3',
                '/sound/008864068_prev.mp3',
                '/sound/inquiring-discovery-117953.mp3',
                'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css'
            ]);
        });
})