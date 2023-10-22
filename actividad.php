<!DOCTYPE HTML>
<?php include_once './assets/head.php'?>
<?php
				include('./config.php');
                $id = trim($_GET['id']);
				$sqlActividades = ("SELECT * FROM `actividades` a INNER JOIN `detalles` d ON a.id = d.id_actividad WHERE a.id=$id");
				$queryActividades = mysqli_query($con, $sqlActividades);
			?>
<?php 
while ($dataActividad = mysqli_fetch_array($queryActividades)) { ?>
<title>Travel & Tour - <?php echo $dataActividad['actividad']; ?></title>
</head>

<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">

        <?php include_once './assets/header-footer-act.php'?>

        <div class="page-content header-clear-medium">

            <div class="card card-style">
                <div class="splide single-slider slider-no-dots" id="single-slider-home">
                    <div class="splide__track">
                        <div class="splide__list">

                            <div class="splide__slide">
                                <div class="card rounded-0 shadow-l">
                                    <img class="img-fluid"
                                        src="images/media/<?php echo $dataActividad['id']; ?>_img1.jpg">
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="card rounded-0 shadow-l">
                                    <img class="img-fluid"
                                        src="images/media/<?php echo $dataActividad['id']; ?>_img2.jpg">
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="card rounded-0 shadow-l">
                                    <img class="img-fluid"
                                        src="images/media/<?php echo $dataActividad['id']; ?>_img3.jpg">
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="card rounded-0 shadow-l">
                                    <img class="img-fluid"
                                        src="images/media/<?php echo $dataActividad['id']; ?>_img4.jpg">
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
                                <strong class="color-theme font-20 d-block mt-0 mb-0 pb-0"><?php echo $dataActividad['actividad']; ?></strong>
                                <span class="font-11 color-theme opacity-30 d-block pb-2"><i
                                        class="fa fa-clock pe-1"></i><?php echo $dataActividad['tiempo']; ?></span>

                            </div>
                            <div class="align-self-center flex-shrink-1">
                                <a href="#"
                                    class="btn btn-full btn-sm font-900 text-uppercase rounded-sm shadow-xxl bg-highlight mb-3 d-flex justify-content-center"><i
                                        class="fa fa-vr-cardboard pe-2 me-1 font-15 color-white"></i>Tour</a>
                            </div>
                        </div>
                    </div>



                    <div class="divider mb-4"></div>

                    <h3>¿En qué consiste la actividad?</h3>
                    <p class="mb-4">
                    <?php echo $dataActividad['descripcion']; ?>
                    </p>


                    <div class="content">
<div class="row mb-0">

<div class="col-5">
<a class="card mx-0 mb-2 card-style external-link" data-card-height="130" data-gallery="gallery-b" href="images/pictures/13l.jpg" style="background-image: url(&quot;images/pictures/13.jpg&quot;); height: 130px;"></a>
<a class="card mx-0 mb-2 card-style external-link" data-card-height="130" data-gallery="gallery-b" href="images/pictures/28l.jpg" style="background-image: url(&quot;images/pictures/28.jpg&quot;); height: 130px;"></a>
</div>
<div class="col-7 ps-0">
<a class="card mx-0 mb-3 card-style external-link" data-card-height="270" data-gallery="gallery-b" href="images/pictures/11l.jpg" style="background-image: url(&quot;images/pictures/11.jpg&quot;); height: 270px;">
<div class="card-bottom">
<h2 class="color-white text-center mb-n1">Sticky Rocks</h2>
<p class="color-white text-center opacity-50 pb-3">
Built with Love &amp; Care
</p>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
</div>

<div class="col-6 pe-0">
<a class="card mx-0 mb-3 card-style external-link" data-card-height="300" data-gallery="gallery-b" href="images/pictures/14l.jpg" style="background-image: url(&quot;images/pictures/14.jpg&quot;); height: 300px;">
<div class="card-bottom">
<h3 class="color-white text-center mb-n1">Captions</h3>
<p class="color-white text-center opacity-50 pb-3 font-13">
The Sky is the Limit.
</p>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
</div>
<div class="col-6">
<a class="card mx-0 mb-2 card-style external-link" data-card-height="95" data-gallery="gallery-b" href="images/pictures/18l.jpg" style="background-image: url(&quot;images/pictures/18.jpg&quot;); height: 95px;"></a>
<a class="card mx-0 mb-2 card-style external-link" data-card-height="95" data-gallery="gallery-b" href="images/pictures/20l.jpg" style="background-image: url(&quot;images/pictures/20.jpg&quot;); height: 95px;"></a>
<a class="card mx-0 mb-2 card-style external-link" data-card-height="95" data-gallery="gallery-b" href="images/pictures/21l.jpg" style="background-image: url(&quot;images/pictures/21.jpg&quot;); height: 95px;"></a>
</div>

<div class="col-4">
<a class="card mx-0 mb-2 card-style external-link" data-card-height="95" data-gallery="gallery-b" href="images/pictures/13l.jpg" style="background-image: url(&quot;images/pictures/13.jpg&quot;); height: 95px;"></a>
</div>
<div class="col-4 px-0">
<a class="card mx-0 mb-2 card-style external-link" data-card-height="95" data-gallery="gallery-b" href="images/pictures/11l.jpg" style="background-image: url(&quot;images/pictures/11.jpg&quot;); height: 95px;"></a>
</div>
<div class="col-4">
<a class="card mx-0 mb-2 card-style external-link" data-card-height="95" data-gallery="gallery-b" href="images/pictures/10l.jpg" style="background-image: url(&quot;images/pictures/10.jpg&quot;); height: 95px;"></a>
</div>

<div class="col-12">
<a class="card mx-0 mb-2 card-style external-link" data-card-height="150" data-gallery="gallery-b" href="images/pictures/28l.jpg" style="background-image: url(&quot;images/pictures/28.jpg&quot;); height: 150px;">
<h1 class="card-center color-white text-center mb-0">Sticky is Limitless</h1>
<div class="card-overlay bg-gradient"></div>
</a>
</div>

<div class="col-6 pe-1">
<a class="card card-style mx-0 mb-3 bg-1 external-link" href="images/pictures/1l.jpg" data-card-height="210" data-gallery="gallery-d" style="height: 210px;">
<div class="card-bottom">
<h1 class="color-white text-center mb-3">Bootstrap</h1>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
<a class="card card-style mx-0 mb-3 bg-6 external-link" href="images/pictures/6l.jpg" data-card-height="165" data-gallery="gallery-d" style="height: 165px;">
<div class="card-bottom">
<h1 class="color-white text-center mb-3">SCSS</h1>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
</div>
<div class="col-6 ps-2">
<a class="card card-style mx-0 mb-3 bg-29 external-link" href="images/pictures/29l.jpg" data-card-height="120" data-gallery="gallery-d" style="height: 120px;">
<div class="card-bottom">
<h5 class="color-white text-center mb-3">Dark Mode Ready</h5>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
<a class="card card-style mx-0 mb-3 bg-18 external-link" href="images/pictures/18l.jpg" data-card-height="120" data-gallery="gallery-d" style="height: 120px;">
<div class="card-bottom">
<h4 class="color-white text-center mb-3">PWA Ready</h4>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
<a class="card card-style mx-0 mb-3 bg-14 external-link" href="images/pictures/14l.jpg" data-card-height="120" data-gallery="gallery-d" style="height: 120px;">
<div class="card-bottom">
<h4 class="color-white text-center mb-3">RTL Ready</h4>
</div>
<div class="card-overlay bg-gradient"></div>
</a>
</div>
</div>
</div>

                    <div class="divider mb-4"></div>
                    <h3>Detalles</h3>
                    <p class="mb-2">
                        Te mostramos algunos datos que debes tomar en cuenta para realizar satisfactoriamente esta
                        actividad.
                    </p>
                    <div class="row mb-2">
                        <div class="col-6">
                            <div class="d-flex">
                                <i class="mt-1 fa fa-plus color-highlight font-14 fa-fw text-center"></i>
                                <strong
                                    class="align-self-center ps-1 font-13 color-theme"><?php echo $dataActividad['r1']; ?></strong>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex">
                                <i class="mt-1 fa fa-plus color-highlight font-14 fa-fw text-center"></i>
                                <strong
                                    class="align-self-center ps-1 font-13 color-theme"><?php echo $dataActividad['r2']; ?></strong>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex">
                                <i class="mt-1 fa fa-plus color-highlight font-14 fa-fw text-center"></i>
                                <strong
                                    class="align-self-center ps-1 font-13 color-theme"><?php echo $dataActividad['r3']; ?></strong>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex">
                                <i class="mt-1 fa fa-plus color-highlight font-14 fa-fw text-center"></i>
                                <strong
                                    class="align-self-center ps-1 font-13 color-theme"><?php echo $dataActividad['r4']; ?></strong>
                            </div>
                        </div>
                   
                    </div>
                    <div class="divider mt-4"></div>
                    <a href="https://api.whatsapp.com/send/?phone=51<?php echo $dataActividad['reserva']; ?>&text=Quisiera reservar la actividad de <?php echo ucfirst($dataActividad['actividad']); ?>" data-menu="menu-reserve"
                        class="btn btn-full btn-m rounded-sm shadow-xl bg-highlight font-700 text-uppercase ">Realizar
                        reserva</a>

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