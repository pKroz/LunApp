<!DOCTYPE HTML>
<?php include_once './assets/head.php'?>
<title>LunApp - Canopy</title>
</head>

<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

    <?php include_once './assets/header-footer-act.php'?>
    <?php
				include('./config.php');
                $id = trim($_GET['id']);
				$sqlActividades = ("SELECT * FROM `actividades` a INNER JOIN `detalles` d ON a.id = d.id_actividad WHERE a.id=$id");
				$queryActividades = mysqli_query($con, $sqlActividades);
			?>
    <div class="page-content header-clear-medium">

        <div class="card card-style">
            <div class="splide single-slider slider-no-dots" id="single-slider-home">
                <div class="splide__track">
                    <div class="splide__list">
                    <?php 
                    while ($dataActividad = mysqli_fetch_array($queryActividades)) { ?>
                        <div class="splide__slide">
                            <div class="card rounded-0 shadow-l">
                                <img class="img-fluid" src="images/media/<?php echo $dataActividad['id']; ?>_img1.jpg">
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="card rounded-0 shadow-l">
                                <img class="img-fluid" src="images/media/<?php echo $dataActividad['id']; ?>_img2.jpg">
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="card rounded-0 shadow-l">
                                <img class="img-fluid" src="images/media/<?php echo $dataActividad['id']; ?>_img3.jpg">
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="card rounded-0 shadow-l">
                                <img class="img-fluid" src="images/media/<?php echo $dataActividad['id']; ?>_img4.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            
			
            <div class="content mt-n5 pt-3">
                <div>
                    <span class="color-highlight font-300 d-block text-uppercase font-10 pt-3">Actividades en Lunahuana</span>
                  
                    <div class="d-flex pb-0">
                    <div class="align-self-center flex-grow-1">
                        <strong class="color-theme font-20 d-block mt-0 mb-0 pb-0">Canopy</strong>
                        <span class="font-11 color-theme opacity-30 d-block pb-2"><i class="fa fa-clock pe-1"></i><?php echo $dataActividad['horaInicio']; ?> - <?php echo $dataActividad['horaFin']; ?></span>

                    </div>
                    <div class="align-self-center flex-shrink-1">
                        <a href="#" class="btn btn-full btn-sm font-900 text-uppercase rounded-sm shadow-xxl bg-highlight mb-3"><i class="fa fa-vr-cardboard pe-2 me-1 font-15 color-white"></i>Realizar tour</a>
                    </div>
                </div>
                </div>

                

                <div class="divider mb-4"></div>

                <h3>¿En qué consiste la actividad?</h3>
                <p class="mb-4">
                Deporte extremo que consiste en el desplazamiento de un punto a otro mediante cables horizontales que están trazados en bosques entre las ramas de árboles. Y así sentir y vivir la sensación de volar, como también apreciar el paisaje y la naturaleza desde las alturas
                </p>


                <div class="card rounded-sm overflow-hidden" data-card-height="400">
                    <div class="bg-black opacity-60"></div>
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1693531052327!6m8!1m7!1sCAoSK0FGMVFpcE12SXN3R0tKMGZKS2daa2RWVjRCSHB2RmtCcHlrS3FpT0pwaGc.!2m2!1d-12.9462624!2d-76.14112089999999!3f345.01369001105314!4f-8.738306394426317!5f0.7820865974627469" style="height:400px;" frameborder='0' allowfullscreen></iframe></div>

                <div class="divider mb-4"></div>
                <h3>Detalles</h3>
                <p class="mb-2">
                    Te mostramos algunos datos que debes tomar en cuenta para realizar satisfactoriamente esta actividad.
                </p>
                <div class="row mb-2">
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="pt-2 fa fa-plus color-highlight font-13 fa-fw text-center"></i>
                            <strong class="align-self-center ps-1 font-13 color-theme"><?php echo $dataActividad['recomendacion1']; ?></strong>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="pt-2 fa fa-plus color-highlight font-13 fa-fw text-center"></i>
                            <strong class="align-self-center ps-1 font-13 color-theme"><?php echo $dataActividad['recomendacion2']; ?></strong>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="pt-2 fa fa-plus color-highlight font-13 fa-fw text-center"></i>
                            <strong class="align-self-center ps-1 font-13 color-theme"><?php echo $dataActividad['recomendacion3']; ?></strong>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="pt-2 fa fa-plus color-highlight font-13 fa-fw text-center"></i>
                            <strong class="align-self-center ps-1 font-13 color-theme"><?php echo $dataActividad['recomendacion4']; ?></strong>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="pt-2 fa fa-plus color-highlight font-13 fa-fw text-center"></i>
                            <strong class="align-self-center ps-1 font-13 color-theme"><?php echo $dataActividad['recomendacion5']; ?></strong>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="pt-2 fa fa-plus color-highlight font-13 fa-fw text-center"></i>
                            <strong class="align-self-center ps-1 font-13 color-theme"><?php echo $dataActividad['recomendacion6']; ?></strong>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="pt-2 fa fa-plus color-highlight font-13 fa-fw text-center"></i>
                            <strong class="align-self-center ps-1 font-13 color-theme"><?php echo $dataActividad['recomendacion7']; ?></strong>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="pt-2 fa fa-plus color-highlight font-13 fa-fw text-center"></i>
                            <strong class="align-self-center ps-1 font-13 color-theme"><?php echo $dataActividad['recomendacion8']; ?></strong>
                        </div>
                    </div>
                </div>
                <div class="divider mt-4"></div>
                <a href="#" data-menu="menu-reserve" class="btn btn-full btn-m rounded-sm shadow-xl bg-highlight font-700 text-uppercase ">Realizar reserva</a>

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
