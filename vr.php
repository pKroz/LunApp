<!DOCTYPE HTML>
<?php include_once './assets/head.php'?>
<title>QR CIISIC</title>
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
                                        <i class="mt-1 fa fa-plus color-highlight font-14 fa-fw text-center"></i>
                                        <strong class="font-13 ps-1 color-theme opacity-50 d-block">DNI: </strong><strong class="align-self-center ps-1 font-13 color-theme"><?php echo $dataCIISIC['dni']; ?></strong>
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
            <?php include_once './assets/footerqr.php'?>
        </div>
        <?php include_once './assets/menu-footer.php'?>
    </div>
    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>
</body>