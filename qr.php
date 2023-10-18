<!DOCTYPE HTML>
<?php include_once './assets/head.php'?>
<?php
				include('./config.php');
                $dni = trim($_GET['dni']);
                $id = trim($_GET['id']);
				$sqlCIISIC = ("SELECT * FROM `ciisic` WHERE dni=$dni or id=$id");
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

        <?php include_once './assets/header-footer-act.php'?>

        <div class="page-content header-clear-medium">

            <div class="card card-style">

                <div class="content mt-n5 pt-3">
                    <div>
                        <span class="color-highlight font-300 d-block text-uppercase font-10 pt-3">Actividades en Lunahuana</span>

                        <div class="d-flex pb-0">
                            <div class="align-self-center flex-grow-1">
                                <strong class="color-theme font-20 d-block mt-0 mb-0 pb-0"><?php echo $dataCIISIC['id']; ?></strong>
                                <span class="font-11 color-theme opacity-30 d-block pb-2"><i
                                        class="fa fa-clock pe-1"></i><?php echo $dataCIISIC['id']; ?></span>

                            </div>
                        </div>
                    </div>



                    <div class="divider mb-4"></div>

                    <h3>¿En qué consiste la actividad?</h3>
                    <p class="mb-4">
                    <?php echo $dataCIISIC['id']; ?>
                    </p>
                    <div class="card rounded-sm overflow-hidden" data-card-height="650">
                        <div class="bg-black opacity-60"></div>
                        <img src="https://drive.google.com/uc?export=view&id=<?php echo $dataCIISIC['idembed']; ?>">
                    </div>

                    <div class="divider mb-4"></div>
                    <h3>Detalles</h3>
                    <p class="mb-2">
                        Si
                    </p>
                    <div class="divider mt-4"></div>
                    <a href="<?php echo $dataCIISIC['comprobante']; ?>" data-menu="menu-reserve"
                        class="btn btn-full btn-m rounded-sm shadow-xl bg-highlight font-700 text-uppercase ">Ver comprobante</a>

                </div>
                <?php } 
            ?>
            </div>



            <?php include_once './assets/footer.php'?>

        </div>

        <?php include_once './assets/menu-footer.php'?>

    </div>

    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>
</body>