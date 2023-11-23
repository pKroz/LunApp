<!DOCTYPE HTML>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<script type="text/javascript" src="scripts/xd.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
<link rel="shortcut icon" href="app/icons/favicon.ico" />
<title>VR - LunApp</title>
</head>
<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">
    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>
    <div id="page">
        <?php include_once './assets/header-footer-qr.php'?>
        <div class="page-content header-clear-medium">
            <div class="card card-style">
                <div class="content mt-n5 pt-3">
                    <div class="divider mb-2 mt-5"></div>
                        <div class="row mb-2">
                            <div class="col-12">
                                    <div class="d-flex">
                                        <iframe name="canetelab" src="https://framevr.io/canetelab" height="100%" width="100%" allow="camera;microphone;display-capture;xr-spatial-tracking" scrolling="no" frameBorder="0"></iframe>
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
            <?php include_once './assets/footer.php'?>
        </div>
        <?php include_once './assets/menu-footer.php'?>
    </div>
    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>
</body>