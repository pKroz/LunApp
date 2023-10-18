<!DOCTYPE HTML>
<?php include_once './assets/head.php'?>
<?php
				include('./config.php');
                $dni = trim($_GET['dni']);
				$sqlCIISIC = ("SELECT * FROM `ciisic` WHERE dni=$dni or id=$dni");
				$queryCIISIC = mysqli_query($con, $sqlCIISIC);
			?>
<?php 
while ($dataCIISIC = mysqli_fetch_array($queryCIISIC)) { ?>
<title>QR CIISIC - <?php echo $dataCIISIC['apellidos']; ?></title>
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
                    <div>
                        <span class="color-highlight font-300 d-block text-uppercase font-10 pt-3"><?php echo $dataCIISIC['id']; ?></span>
                        <div class="d-flex pb-0">
                            <div class="align-self-center flex-grow-1">
                                <strong class="color-theme font-20 d-block mt-0 mt-3 mb-3 pb-0"><i
                                        class="fa fa-user pe-2"></i><?php echo $dataCIISIC['nombres']; ?> <?php echo $dataCIISIC['apellidos']; ?></strong>
                            </div>
                        </div>
                    </div>

                    <div class="divider mb-2"></div>
                    <div class="row mb-2">
                    <div class="col-12">
                            <div class="d-flex">
                                <i class="mt-1 fa fa-plus color-highlight font-14 fa-fw text-center"></i>
                                <strong class="font-13 ps-1 color-theme opacity-50 d-block">DNI: </strong><strong class="align-self-center ps-1 font-13 color-white"><?php echo $dataCIISIC['dni']; ?></strong>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <i class="mt-1 fa fa-plus color-highlight font-14 fa-fw text-center"></i>
                                <strong class="font-13 ps-1 color-theme opacity-50 d-block">MODALIDAD: </strong><strong class="align-self-center ps-1 font-13 color-white"><?php echo $dataCIISIC['modalidad']; ?></strong>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <i class="mt-1 fa fa-plus color-highlight font-14 fa-fw text-center"></i>
                                <strong class="font-13 ps-1 color-theme opacity-50 d-block">TIPO DE INSCRIPCIÓN: </strong><strong class="align-self-center ps-1 font-13 color-white"><?php echo $dataCIISIC['tipo']; ?></strong>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <i class="mt-1 fa fa-plus color-highlight font-14 fa-fw text-center"></i>
                                <strong class="font-13 ps-1 color-theme opacity-50 d-block">CORREO: </strong><strong class="align-self-center ps-1 font-13 color-white"><?php echo $dataCIISIC['correo']; ?></strong>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <i class="mt-1 fa fa-plus color-highlight font-14 fa-fw text-center"></i>
                                <strong class="font-13 ps-1 color-theme opacity-50 d-block">CELULAR: </strong><strong class="align-self-center ps-1 font-13 color-white"><a href="https://wa.me/51<?php echo $dataCIISIC['celular']; ?>" class="color-white"><?php echo $dataCIISIC['celular']; ?></a></strong>
                            </div>
                        </div>
                    </div>
                    <h3>PREVISUALIZACIÓN DEL VOUCHER</h3>
                    <p class="mb-2">
                    </p>
                    <div class="card rounded-sm overflow-hidden" data-card-height="650">
                        <div class="bg-black opacity-60"></div>
                        <img src="https://drive.google.com/uc?export=view&id=<?php echo $dataCIISIC['idembed']; ?>">
                        <a href="<?php echo $dataCIISIC['comprobante']; ?>" data-menu="menu-reserve"
                        class="btn btn-full btn-m rounded-sm shadow-xl bg-highlight font-700 text-uppercase">VER COMPROBANTE DE PAGO</a>
                    </div>
                </div>
                <?php } 
            ?>
            </div>



            <?php include_once './assets/footerqr.php'?>

        </div>

        <?php include_once './assets/menu-footer.php'?>

    </div>

    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>
</body>