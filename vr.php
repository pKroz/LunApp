<?php
// Comprueba si se ha proporcionado idProyecto a través de GET
if (isset($_GET['op'])) {?>

<?php if (($_GET['op'])=='1') {?>

<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
    <script type="text/javascript" src="scripts/xd.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
    <link rel="shortcut icon" href="app/icons/favicon.ico" />
    <title>LunApp - VR</title>
</head>

<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">
    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>
    <div id="page">
        <div class="header header-fixed header-logo-center">
            <a href="menu.php" class="header-title back-to-top">Travel & Tour</a>
            <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
        </div>

        <div id="footer-bar" class="footer-bar-1">
            <a href="info.php"><i class="fa fa-info"></i><span>Información</span></a>
            <a href="menu.php"><i class="fa fa-home"></i><span>Inicio</span></a>
            <a href="#" data-menu="menu-settings"><i class="fa fa-cog"></i><span>Ajustes</span></a>
        </div>
        <div class="page-content header-clear-medium">
            <div class="card card-style">
                <div class="content mt-n5 pt-3">
                    <div class="divider mb-2 mt-5"></div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <div class="d-flex">
                                <iframe id="canetelab" name="canetelab" src="https://framevr.io/canetelab"
                                    height="800px" width="100%"
                                    allow="camera;microphone;display-capture;xr-spatial-tracking" scrolling="no"
                                    frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="card rounded-sm overflow-hidden mb-0">
                        <div class="bg-black opacity-60"></div>
                        <button class="btn btn-full btn-m rounded-sm shadow-xl bg-highlight font-700 text-uppercase"
                            onclick="toggleFullscreen()">Pantalla Completa</button>
                    </div>
                </div>
            </div>

            <div class="footer card card-style">
                <a href="#" class="footer-title"><span class="color-highlight">LunApp</span></a>
                <p class="footer-text"><span>Aplicativo enfocado al turismo en Lunahuana, elaborado para el Semillero de
                        Investigación CLAB</span><br><br>Diseñado por Enabled y configurado por krozDev</p>
                <div class="text-center mb-3">
                    <a href="#" class="icon icon-xs rounded-sm shadow-l me-1 bg-facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" data-menu="menu-share" class="icon icon-xs rounded-sm me-1 shadow-l bg-highlight"><i
                            class="fa fa-share-alt "></i></a>
                    <a href="#" class="back-to-top icon icon-xs rounded-sm shadow-l bg-dark-light"><i
                            class="fa fa-angle-up"></i></a>
                </div>
                <p class="footer-copyright">Copyright &copy; CLAB <span id="copyright-year">2023</span>. All Rights
                    Reserved.</p>
                <p class="footer-links"><a href="#" class="color-highlight">Política de privacidad</a> | <a href="#"
                        class="color-highlight">Términos y condiciones</a> | <a href="#"
                        class="back-to-top color-highlight">Volver arriba</a></p>
                <div class="clear"></div>
            </div>
        </div>
        <div id="menu-settings" class="menu menu-box-bottom menu-box-detached">
            <div class="menu-title mt-0 pt-0">
                <h1>Ajuste</h1>
                <p class="color-highlight">Aplica modificaciones al diseño</p><a href="#" class="close-menu"><i
                        class="fa fa-times color-white"></i></a>
            </div>
            <div class="divider divider-margins mb-n2"></div>
            <div class="content">
                <div class="list-group list-custom-small">
                    <a href="#" data-toggle-theme data-trigger-switch="switch-dark-mode" class="pb-2 ms-n1">
                        <i class="fa font-12 fa-moon rounded-s bg-highlight color-white me-3"></i>
                        <span>Modo oscuro</span>
                        <div class="custom-control scale-switch ios-switch">
                            <input data-toggle-theme type="checkbox" class="ios-input" id="switch-dark-mode">
                            <label class="custom-control-label" for="switch-dark-mode"></label>
                        </div>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                <div class="list-group list-custom-large">
                    <a data-menu="menu-highlights" href="#">
                        <i class="fa font-14 fa-tint bg-green-dark rounded-s"></i>
                        <span>Color auxiliar</span>
                        <strong>Escoger entre los 16 colores diferentes</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a data-menu="menu-backgrounds" href="#" class="border-0">
                        <i class="fa font-14 fa-cog bg-blue-dark rounded-s"></i>
                        <span>Color de fondo</span>
                        <strong>Escoger entre los 10 colores diferentes</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Menu Settings Highlights-->
        <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached">
            <div class="menu-title">
                <h1>Color auxiliar</h1>
                <p class="color-highlight">Configurar el color auxiliar</p><a href="#" class="close-menu"><i
                        class="fa fa-times"></i></a>
            </div>
            <div class="divider divider-margins mb-n2"></div>
            <div class="content">
                <div class="highlight-changer">
                    <a href="#" data-change-highlight="blue"><i class="fa fa-circle color-blue-dark"></i><span
                            class="color-blue-light">Predeterminado</span></a>
                    <a href="#" data-change-highlight="red"><i class="fa fa-circle color-red-dark"></i><span
                            class="color-red-light">Red</span></a>
                    <a href="#" data-change-highlight="orange"><i class="fa fa-circle color-orange-dark"></i><span
                            class="color-orange-light">Orange</span></a>
                    <a href="#" data-change-highlight="pink2"><i class="fa fa-circle color-pink2-dark"></i><span
                            class="color-pink-dark">Pink</span></a>
                    <a href="#" data-change-highlight="magenta"><i class="fa fa-circle color-magenta-dark"></i><span
                            class="color-magenta-light">Purple</span></a>
                    <a href="#" data-change-highlight="aqua"><i class="fa fa-circle color-aqua-dark"></i><span
                            class="color-aqua-light">Aqua</span></a>
                    <a href="#" data-change-highlight="teal"><i class="fa fa-circle color-teal-dark"></i><span
                            class="color-teal-light">Teal</span></a>
                    <a href="#" data-change-highlight="mint"><i class="fa fa-circle color-mint-dark"></i><span
                            class="color-mint-light">Mint</span></a>
                    <a href="#" data-change-highlight="green"><i class="fa fa-circle color-green-light"></i><span
                            class="color-green-light">Green</span></a>
                    <a href="#" data-change-highlight="grass"><i class="fa fa-circle color-green-dark"></i><span
                            class="color-green-dark">Grass</span></a>
                    <a href="#" data-change-highlight="sunny"><i class="fa fa-circle color-yellow-light"></i><span
                            class="color-yellow-light">Sunny</span></a>
                    <a href="#" data-change-highlight="yellow"><i class="fa fa-circle color-yellow-dark"></i><span
                            class="color-yellow-light">Goldish</span></a>
                    <a href="#" data-change-highlight="brown"><i class="fa fa-circle color-brown-dark"></i><span
                            class="color-brown-light">Wood</span></a>
                    <a href="#" data-change-highlight="night"><i class="fa fa-circle color-dark-dark"></i><span
                            class="color-dark-light">Night</span></a>
                    <a href="#" data-change-highlight="dark"><i class="fa fa-circle color-dark-light"></i><span
                            class="color-dark-light">Dark</span></a>
                    <div class="clearfix"></div>
                </div>
                <a href="#" data-menu="menu-settings"
                    class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Volver
                    a ajustes</a>
            </div>
        </div>
        <!-- Menu Settings Backgrounds-->
        <div id="menu-backgrounds" class="menu menu-box-bottom menu-box-detached">
            <div class="menu-title">
                <h1>Color de fondo</h1>
                <p class="color-highlight">Configurar el color de fondo</p><a href="#" class="close-menu"><i
                        class="fa fa-times"></i></a>
            </div>
            <div class="divider divider-margins mb-n2"></div>
            <div class="content">
                <div class="background-changer">
                    <a href="#" data-change-background="default"><i class="bg-theme"></i><span
                            class="color-dark-dark">Predeterminado</span></a>
                    <a href="#" data-change-background="plum"><i class="body-plum"></i><span
                            class="color-plum-dark">Plum</span></a>
                    <a href="#" data-change-background="magenta"><i class="body-magenta"></i><span
                            class="color-dark-dark">Magenta</span></a>
                    <a href="#" data-change-background="dark"><i class="body-dark"></i><span
                            class="color-dark-dark">Dark</span></a>
                    <a href="#" data-change-background="violet"><i class="body-violet"></i><span
                            class="color-violet-dark">Violet</span></a>
                    <a href="#" data-change-background="red"><i class="body-red"></i><span
                            class="color-red-dark">Red</span></a>
                    <a href="#" data-change-background="green"><i class="body-green"></i><span
                            class="color-green-dark">Green</span></a>
                    <a href="#" data-change-background="sky"><i class="body-sky"></i><span
                            class="color-sky-dark">Sky</span></a>
                    <a href="#" data-change-background="orange"><i class="body-orange"></i><span
                            class="color-orange-dark">Orange</span></a>
                    <a href="#" data-change-background="yellow"><i class="body-yellow"></i><span
                            class="color-yellow-dark">Yellow</span></a>
                    <div class="clearfix"></div>
                </div>
                <a href="#" data-menu="menu-settings"
                    class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Volver
                    a ajustes</a>
            </div>
        </div>
        <!-- Menu Share -->
        <div id="menu-share" class="menu menu-box-bottom menu-box-detached">
            <div class="menu-title mt-n1">
                <h1>Share the Love</h1>
                <p class="color-highlight">Just Tap the Social Icon. We'll add the Link</p><a href="#"
                    class="close-menu"><i class="fa fa-times"></i></a>
            </div>
            <div class="content mb-0">
                <div class="divider mb-0"></div>
                <div class="list-group list-custom-small list-icon-0">
                    <a href="auto_generated" class="shareToFacebook external-link">
                        <i class="font-18 fab fa-facebook-square color-facebook"></i>
                        <span class="font-13">Facebook</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="auto_generated" class="shareToTwitter external-link">
                        <i class="font-18 fab fa-twitter-square color-twitter"></i>
                        <span class="font-13">Twitter</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="auto_generated" class="shareToLinkedIn external-link">
                        <i class="font-18 fab fa-linkedin color-linkedin"></i>
                        <span class="font-13">LinkedIn</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="auto_generated" class="shareToWhatsApp external-link">
                        <i class="font-18 fab fa-whatsapp-square color-whatsapp"></i>
                        <span class="font-13">WhatsApp</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="auto_generated" class="shareToMail external-link border-0">
                        <i class="font-18 fa fa-envelope-square color-mail"></i>
                        <span class="font-13">Email</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>
    <script>
    function toggleFullscreen() {
        var iframe = document.getElementById("canetelab");
        if (iframe.requestFullscreen) {
            iframe.requestFullscreen();
        } else if (iframe.mozRequestFullScreen) {
            /* Firefox */
            iframe.mozRequestFullScreen();
        } else if (iframe.webkitRequestFullscreen) {
            /* Chrome, Safari & Opera */
            iframe.webkitRequestFullscreen();
        } else if (iframe.msRequestFullscreen) {
            /* IE/Edge */
            iframe.msRequestFullscreen();
        }
    }
    </script>
</body>


<?php } else { ?>
<?php if (($_GET['op'])=='2') {?>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
    <script type="text/javascript" src="scripts/xd.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
    <link rel="shortcut icon" href="app/icons/favicon.ico" />
    <title>LunApp - VR</title>
    <script src="https://aframe.io/releases/1.5.0/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-environment-component/dist/aframe-environment-component.min.js"></script>
    <script src="https://unpkg.com/aframe-animation-component@%5E3.2.x/dist/aframe-animation-component.min.js"></script>
    <script src="https://unpkg.com/aframe-template-component@3.x.x/dist/aframe-template-component.min.js"></script>
    <script src="https://unpkg.com/aframe-layout-component@3.x.x/dist/aframe-layout-component.min.js"></script>
    <script src="https://unpkg.com/aframe-event-set-component@3.x.x/dist/aframe-event-set-component.min.js"></script>
</head>

<body>

    <a-scene>
        <a-assets>
            <audio id="click-sound" src="audio/click.ogg"></audio>
            <!-- Images. -->
            <img id="city" src="images/media/iglesia.jpg">
            <img id="city-thumb" src="images/media/iglesia-t.jpg">
            <img id="cubes" src="images/media/plaza.jpg">
            <img id="cubes-thumb" src="images/media/plaza-t.jpg">
            <img id="sechelt" src="images/media/rio.jpg">
            <img id="sechelt-thumb" src="images/media/rio-t.jpg">

            <script id="plane" type="text/html">
            <a-entity class="link" geometry="primitive: plane; height: 1: width: 1"
                material="shader: flat; src: ${thumb}" sound="on: click; src: #click-sound"
                set-image="on: click; target: #image-360; src: ${image}" event-set__1="_event: mousedown; scale: 1 1 1"
                event-set__2="_event: mouseup; scale: 1.2 1.2 1" event-set__3="_event: mouseenter; scale: 1.2 1.2 1"
                event-set__4="_event: mouseleave; scale: 1 1 1"></a-entity>
            </script>
        </a-assets>
        <!-- 360-degree image. -->
        <a-sky id="image-360" radius="10" src="#city"></a-sky>
        <!-- Link we will build. -->
        <a-entity id="links" layout="layout: line; margin: 1.5" position="-1.5 1 -2.5">
            <a-entity template="src: #plane" data-thumb="#city-thumb" data-image="#city"></a-entity>
            <a-entity template="src: #plane" data-thumb="#cubes-thumb" data-image="#cubes"></a-entity>
            <a-entity template="src: #plane" data-thumb="#sechelt-thumb" data-image="#sechelt"></a-entity>
        </a-entity>
        <!-- Camera + Cursor. -->
        <a-camera>
            <a-cursor id="cursor">
                <a-animation begin="click" easing="ease-in" attribute="scale" fill="backwards" from="0.1 0.1 0.1"
                    to="1 1 1" dur="150"></a-animation>
                <a-animation begin="cursor-fusing" easing="ease-in" attribute="scale" from="1 1 1" to="0.1 0.1 0.1"
                    dur="1500"></a-animation>
            </a-cursor>
        </a-camera>
    </a-scene>
    <script>
    AFRAME.registerComponent('set-image', {

        schema: {
            on: {
                type: 'string'
            },
            target: {
                type: 'selector'
            },
            src: {
                type: 'string'
            },
            dur: {
                type: 'number',
                default: 300
            }
        },

        init: function() {
            console.log('set-image init')
            const data = this.data;
            const el = this.el;

            this.setupFadeAnimation();

            el.addEventListener(data.on, function() {
                console.log("clicked");
                // Fade out image.
                data.target.emit('set-image-fade');
                // Wait for fade to complete.
                setTimeout(function() {
                    // Set image.
                    data.target.setAttribute('material', 'src', data.src);
                }, data.dur);
            });
        },

        setupFadeAnimation: function() {
            const data = this.data;
            const targetEl = this.data.target;

            // Only set up once.
            if (targetEl.dataset.setImageFadeSetup) {
                return;
            }
            targetEl.dataset.setImageFadeSetup = true;

            // Create animation.
            targetEl.setAttribute('animation__fade', {
                property: 'material.color',
                startEvents: 'set-image-fade',
                dir: 'alternate',
                dur: data.dur,
                from: '#FFF',
                to: '#000'
            });
        }
    });
    </script>
</body>

</html>

<?php } else { ?>
<?php if (($_GET['op'])=='3') {?>
    <html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
    <script type="text/javascript" src="scripts/xd.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
    <link rel="shortcut icon" href="app/icons/favicon.ico" />
    <title>LunApp - VR</title>
    <script src="https://aframe.io/releases/1.5.0/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-environment-component/dist/aframe-environment-component.min.js"></script>
    <script src="https://unpkg.com/aframe-animation-component@%5E3.2.x/dist/aframe-animation-component.min.js"></script>
    <script src="https://unpkg.com/aframe-template-component@3.x.x/dist/aframe-template-component.min.js"></script>
    <script src="https://unpkg.com/aframe-layout-component@3.x.x/dist/aframe-layout-component.min.js"></script>
    <script src="https://unpkg.com/aframe-event-set-component@3.x.x/dist/aframe-event-set-component.min.js"></script>
</head>

<body>

<a-scene>
<a-assets>
<video id="video" src="images/media/canotaje360.mp4"
               autoplay loop crossorigin="anonymous"></video>
</a-assets>

<a-videosphere src="#video" rotation="0 180 0"></a-videosphere>
    </a-scene>
    
</body>

</html>

<?php }}}} else{?>
<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
    <script type="text/javascript" src="scripts/xd.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
    <link rel="shortcut icon" href="app/icons/favicon.ico" />
    <title>LunApp - VR</title>
</head>

<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">
    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>
    <div id="page">
        <div class="header header-fixed header-logo-center">
            <a href="menu.php" class="header-title back-to-top">Travel & Tour</a>
            <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-4"><i class="fas fa-lightbulb"></i></a>
        </div>

        <div id="footer-bar" class="footer-bar-1">
            <a href="info.php"><i class="fa fa-info"></i><span>Información</span></a>
            <a href="menu.php"><i class="fa fa-home"></i><span>Inicio</span></a>
            <a href="#" data-menu="menu-settings"><i class="fa fa-cog"></i><span>Ajustes</span></a>
        </div>
        <div class="page-content header-clear-medium">
            <div class="card card-style">
                <div class="content mb-0">
                    <h1 class="text-center mb-0">Mundo virtual</h1>
                    <p class="text-center color-highlight font-11 mt-n1 pb-0 mb-1">Obten información acerca de las
                        actividades en este mundo virtual.</p>
                    <a href="https://app.pkroz.net/vr.php?op=1"
                        class="btn btn-m btn-center-l text-uppercase font-900 bg-highlight rounded-sm shadow-xl mb-4">Entrar
                        al mundo virtual</a>
                </div>
            </div>
            <div class="card card-style">
                <div class="content mb-0">
                    <h1 class="text-center mb-0">Lugares destacados</h1>
                    <p class="text-center color-highlight font-11 mt-n1 pb-0 mb-1">Visualiza los lugares destacados de
                        Lunahuana.</p>
                    <a href="https://app.pkroz.net/vr.php?op=2"
                        class="btn btn-m btn-center-l text-uppercase font-900 bg-highlight rounded-sm shadow-xl mb-4">Ver
                        lugares destacados</a>
                </div>
            </div>
            <div class="card card-style">
                <div class="content mb-0">
                    <h1 class="text-center mb-0">Actividades destacadas</h1>
                    <p class="text-center color-highlight font-11 mt-n1 pb-0 mb-1">Visualiza las actividades en
                        Lunahuana.</p>
                    <a href="https://app.pkroz.net/vr.php?op=3"
                        class="btn btn-m btn-center-l text-uppercase font-900 bg-highlight rounded-sm shadow-xl mb-4">Ver
                        actividades destacados</a>
                </div>
            </div>
            <div class="footer card card-style">
                <a href="#" class="footer-title"><span class="color-highlight">LunApp</span></a>
                <p class="footer-text"><span>Aplicativo enfocado al turismo en Lunahuana, elaborado para el Semillero de
                        Investigación CLAB</span><br><br>Diseñado por Enabled y configurado por krozDev</p>
                <div class="text-center mb-3">
                    <a href="#" class="icon icon-xs rounded-sm shadow-l me-1 bg-facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" data-menu="menu-share" class="icon icon-xs rounded-sm me-1 shadow-l bg-highlight"><i
                            class="fa fa-share-alt "></i></a>
                    <a href="#" class="back-to-top icon icon-xs rounded-sm shadow-l bg-dark-light"><i
                            class="fa fa-angle-up"></i></a>
                </div>
                <p class="footer-copyright">Copyright &copy; CLAB <span id="copyright-year">2023</span>. All Rights
                    Reserved.</p>
                <p class="footer-links"><a href="#" class="color-highlight">Política de privacidad</a> | <a href="#"
                        class="color-highlight">Términos y condiciones</a> | <a href="#"
                        class="back-to-top color-highlight">Volver arriba</a></p>
                <div class="clear"></div>
            </div>
        </div>
        <div id="menu-settings" class="menu menu-box-bottom menu-box-detached">
            <div class="menu-title mt-0 pt-0">
                <h1>Ajuste</h1>
                <p class="color-highlight">Aplica modificaciones al diseño</p><a href="#" class="close-menu"><i
                        class="fa fa-times color-white"></i></a>
            </div>
            <div class="divider divider-margins mb-n2"></div>
            <div class="content">
                <div class="list-group list-custom-small">
                    <a href="#" data-toggle-theme data-trigger-switch="switch-dark-mode" class="pb-2 ms-n1">
                        <i class="fa font-12 fa-moon rounded-s bg-highlight color-white me-3"></i>
                        <span>Modo oscuro</span>
                        <div class="custom-control scale-switch ios-switch">
                            <input data-toggle-theme type="checkbox" class="ios-input" id="switch-dark-mode">
                            <label class="custom-control-label" for="switch-dark-mode"></label>
                        </div>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                <div class="list-group list-custom-large">
                    <a data-menu="menu-highlights" href="#">
                        <i class="fa font-14 fa-tint bg-green-dark rounded-s"></i>
                        <span>Color auxiliar</span>
                        <strong>Escoger entre los 16 colores diferentes</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a data-menu="menu-backgrounds" href="#" class="border-0">
                        <i class="fa font-14 fa-cog bg-blue-dark rounded-s"></i>
                        <span>Color de fondo</span>
                        <strong>Escoger entre los 10 colores diferentes</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Menu Settings Highlights-->
        <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached">
            <div class="menu-title">
                <h1>Color auxiliar</h1>
                <p class="color-highlight">Configurar el color auxiliar</p><a href="#" class="close-menu"><i
                        class="fa fa-times"></i></a>
            </div>
            <div class="divider divider-margins mb-n2"></div>
            <div class="content">
                <div class="highlight-changer">
                    <a href="#" data-change-highlight="blue"><i class="fa fa-circle color-blue-dark"></i><span
                            class="color-blue-light">Predeterminado</span></a>
                    <a href="#" data-change-highlight="red"><i class="fa fa-circle color-red-dark"></i><span
                            class="color-red-light">Red</span></a>
                    <a href="#" data-change-highlight="orange"><i class="fa fa-circle color-orange-dark"></i><span
                            class="color-orange-light">Orange</span></a>
                    <a href="#" data-change-highlight="pink2"><i class="fa fa-circle color-pink2-dark"></i><span
                            class="color-pink-dark">Pink</span></a>
                    <a href="#" data-change-highlight="magenta"><i class="fa fa-circle color-magenta-dark"></i><span
                            class="color-magenta-light">Purple</span></a>
                    <a href="#" data-change-highlight="aqua"><i class="fa fa-circle color-aqua-dark"></i><span
                            class="color-aqua-light">Aqua</span></a>
                    <a href="#" data-change-highlight="teal"><i class="fa fa-circle color-teal-dark"></i><span
                            class="color-teal-light">Teal</span></a>
                    <a href="#" data-change-highlight="mint"><i class="fa fa-circle color-mint-dark"></i><span
                            class="color-mint-light">Mint</span></a>
                    <a href="#" data-change-highlight="green"><i class="fa fa-circle color-green-light"></i><span
                            class="color-green-light">Green</span></a>
                    <a href="#" data-change-highlight="grass"><i class="fa fa-circle color-green-dark"></i><span
                            class="color-green-dark">Grass</span></a>
                    <a href="#" data-change-highlight="sunny"><i class="fa fa-circle color-yellow-light"></i><span
                            class="color-yellow-light">Sunny</span></a>
                    <a href="#" data-change-highlight="yellow"><i class="fa fa-circle color-yellow-dark"></i><span
                            class="color-yellow-light">Goldish</span></a>
                    <a href="#" data-change-highlight="brown"><i class="fa fa-circle color-brown-dark"></i><span
                            class="color-brown-light">Wood</span></a>
                    <a href="#" data-change-highlight="night"><i class="fa fa-circle color-dark-dark"></i><span
                            class="color-dark-light">Night</span></a>
                    <a href="#" data-change-highlight="dark"><i class="fa fa-circle color-dark-light"></i><span
                            class="color-dark-light">Dark</span></a>
                    <div class="clearfix"></div>
                </div>
                <a href="#" data-menu="menu-settings"
                    class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Volver
                    a ajustes</a>
            </div>
        </div>
        <!-- Menu Settings Backgrounds-->
        <div id="menu-backgrounds" class="menu menu-box-bottom menu-box-detached">
            <div class="menu-title">
                <h1>Color de fondo</h1>
                <p class="color-highlight">Configurar el color de fondo</p><a href="#" class="close-menu"><i
                        class="fa fa-times"></i></a>
            </div>
            <div class="divider divider-margins mb-n2"></div>
            <div class="content">
                <div class="background-changer">
                    <a href="#" data-change-background="default"><i class="bg-theme"></i><span
                            class="color-dark-dark">Predeterminado</span></a>
                    <a href="#" data-change-background="plum"><i class="body-plum"></i><span
                            class="color-plum-dark">Plum</span></a>
                    <a href="#" data-change-background="magenta"><i class="body-magenta"></i><span
                            class="color-dark-dark">Magenta</span></a>
                    <a href="#" data-change-background="dark"><i class="body-dark"></i><span
                            class="color-dark-dark">Dark</span></a>
                    <a href="#" data-change-background="violet"><i class="body-violet"></i><span
                            class="color-violet-dark">Violet</span></a>
                    <a href="#" data-change-background="red"><i class="body-red"></i><span
                            class="color-red-dark">Red</span></a>
                    <a href="#" data-change-background="green"><i class="body-green"></i><span
                            class="color-green-dark">Green</span></a>
                    <a href="#" data-change-background="sky"><i class="body-sky"></i><span
                            class="color-sky-dark">Sky</span></a>
                    <a href="#" data-change-background="orange"><i class="body-orange"></i><span
                            class="color-orange-dark">Orange</span></a>
                    <a href="#" data-change-background="yellow"><i class="body-yellow"></i><span
                            class="color-yellow-dark">Yellow</span></a>
                    <div class="clearfix"></div>
                </div>
                <a href="#" data-menu="menu-settings"
                    class="mb-3 btn btn-full btn-m rounded-sm bg-highlight shadow-xl text-uppercase font-900 mt-4">Volver
                    a ajustes</a>
            </div>
        </div>
        <!-- Menu Share -->
        <div id="menu-share" class="menu menu-box-bottom menu-box-detached">
            <div class="menu-title mt-n1">
                <h1>Share the Love</h1>
                <p class="color-highlight">Just Tap the Social Icon. We'll add the Link</p><a href="#"
                    class="close-menu"><i class="fa fa-times"></i></a>
            </div>
            <div class="content mb-0">
                <div class="divider mb-0"></div>
                <div class="list-group list-custom-small list-icon-0">
                    <a href="auto_generated" class="shareToFacebook external-link">
                        <i class="font-18 fab fa-facebook-square color-facebook"></i>
                        <span class="font-13">Facebook</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="auto_generated" class="shareToTwitter external-link">
                        <i class="font-18 fab fa-twitter-square color-twitter"></i>
                        <span class="font-13">Twitter</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="auto_generated" class="shareToLinkedIn external-link">
                        <i class="font-18 fab fa-linkedin color-linkedin"></i>
                        <span class="font-13">LinkedIn</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="auto_generated" class="shareToWhatsApp external-link">
                        <i class="font-18 fab fa-whatsapp-square color-whatsapp"></i>
                        <span class="font-13">WhatsApp</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="auto_generated" class="shareToMail external-link border-0">
                        <i class="font-18 fa fa-envelope-square color-mail"></i>
                        <span class="font-13">Email</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>
</body>
<?php }?>