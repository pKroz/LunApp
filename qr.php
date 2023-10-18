<!DOCTYPE HTML>
<?php include_once './assets/head.php'?>
<?php
				include('./config.php');
                $dni = trim($_GET['dni']);
				$sqlCIISIC = ("SELECT * FROM `ciisic` WHERE dni=$dni");
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
                            <div class="align-self-center flex-shrink-1">
                                <a href="#"
                                    class="btn btn-full btn-sm font-900 text-uppercase rounded-sm shadow-xxl bg-highlight mb-3 d-flex justify-content-center"><i
                                        class="fa fa-vr-cardboard pe-2 me-1 font-15 color-white"></i>Tour</a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-style">
<a href="#" data-menu="portfolio-1" class="card card-style mx-0 mb-0 rounded-0 preload-img entered loaded" data-src="images/pictures/21w.jpg" data-card-height="200" style="height: 200px; background-image: url(&quot;images/pictures/21w.jpg&quot;);" data-ll-status="loaded">
<div class="card-bottom ms-3 mb-3">
<h1 class="color-white mb-0">Portfolio Title 1</h1>
</div>
<div class="card-overlay bg-gradient rounded-0"></div>
</a>
<div class="content">
<p>A small description about your project goes here. Then, you can access the portfolio project to see it in detail.</p>
<a href="#" class="color-theme font-12"><i class="fa fa-link font-10 me-2"></i>View More: <span class="color-highlight">Project Title 1</span></a><br>
<a href="#" class="color-theme font-12"><i class="fa fa-bookmark font-10 me-2"></i>Built For: <span class="color-highlight">Envato Marketplaces</span></a><br>
<a href="#" class="color-theme font-12"><i class="fa fa-tag font-10 me-2"></i>Tags: <span class="color-highlight">Portfolio, Product, Images</span></a><br>
</div>
</div>


                    <div class="divider mb-4"></div>

                    <h3>¿En qué consiste la actividad?</h3>
                    <p class="mb-4">
                    <?php echo $dataCIISIC['id']; ?>
                    </p>
                    <div class="card rounded-sm overflow-hidden" data-card-height="200">
                        <div class="bg-black opacity-60"></div>
                        <img src="https://drive.google.com/uc?export=view&id=<?php echo $dataCIISIC['idembed']; ?>">
                    </div>

                    <div class="divider mb-4"></div>
                    <h3>Detalles</h3>
                    <p class="mb-2">
                        Te mostramos algunos datos que debes tomar en cuenta para realizar satisfactoriamente esta
                        actividad.
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