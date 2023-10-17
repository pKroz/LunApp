<!DOCTYPE HTML>
<?php include_once './assets/head.php'?>
<title>LunApp - Menú</title>
</head>


<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

	<?php include_once './assets/header-footer-menu.php'?>

    <div class="page-content">

		<div class="card card-style mx-0 mb-0 rounded-0" data-card-height="400" style="background-image:url('images/pictures_vertical/bg1.jpg')">
			<div class="card-top">
				
			</div>
			<div class="card-bottom mb-4">
				<h1 class="color-white text-center mb-0 font-28">Atractivos de Lunahuana</h1>
				<p class="color-white text-center mb-3 ">Encuentra los sitios más visitados aquí!</p>
			</div>
			<div class="card-overlay bg-gradient rounded-0"></div>
		</div>

        <div class="content mt-n4">
            <div class="search-box bg-theme color-theme rounded-m shadow-l">
                <i class="fa fa-search"></i>
                <input type="text" class="border-0" placeholder="Buscar una actividad" data-search>
				<a href="#" class="clear-search disabled no-click mt-0"></a>
            </div>
            <div class="search-results disabled-search-list mt-3">
                <div class="card card-style mx-0 px-2 py-2 mb-0">
					<a href="#" class="d-flex py-1" data-filter-name="all">
                        <div class="ps-2 align-self-center">
							<h6 class="font-12 opacity-60 mb-2">ACTIVIDAD</h6>
						</div>
						<div class="pe-2 align-self-center ms-auto">
							<h6 class="font-12 opacity-60 mb-2 text-end">PRECIO</h6>
							<h6 class="font-12 opacity-60 mb-2 text-end">DURACIÓN</h6>
						</div>
					<a>
					<a data-filter-name="all" class="divider mb-1 mx-2"></a>
					<?php
					include('./config.php');
					$sqlActividades = ("SELECT * FROM `actividades`");
					$queryActividades = mysqli_query($con, $sqlActividades);
					?>
					<?php 
                    while ($dataActividad = mysqli_fetch_array($queryActividades)) { ?>
                    <a href="actividad.php?id=<?php echo $dataActividad['id']; ?>" class="d-flex" data-filter-item data-filter-name="all <?php echo $dataActividad['actividad']; ?>">
                        <div class="ps-2 align-self-center">
                            <strong class="color-theme font-16 d-block"><?php echo ucfirst($dataActividad['actividad']); ?></strong>
                        </div>
                        <div class="ms-auto text-end align-self-center pe-2">
							<h5 class="line-height-xs font-14 pt-1 mb-1 opacity-40">S/. <?php echo $dataActividad['precio']; ?></h5>
                            <h5 class="line-height-xs font-14 opacity-30"><?php echo trim($dataActividad['tiempo'],"."); ?></h5>
						</div>
                    </a>
					<?php } 
                    ?>
                    
                </div>
            </div>	
        </div>

		<!-- <div class="content mt-2 mb-n3">
			<h5 class="mb-2">Lo más visto</h5>
			<div class="row">
				<div class="col-6 ps-2">
					
					<a href="" class="card card-style mx-0 mb-3">
						<div class="card-top m-2">
							<span class="bg-highlight color-black font-11 px-2 py-1 font-700 rounded-xs shadow-xxl">15% OFF</span>
						</div>
						<img src="images/media/img4.jpg" alt="img" class="img-fluid">
						<div class="p-2 pb-0">
							<h4 class="mb-1"></h4>
							<p class="pb-1 mb-0 font-11 mt-n1 opacity-70"></i>a</p>
						</div>
						

					</a>
					
				</div>
			</div>
		</div> -->
		<div class="content mt-2 mb-n3">
			<div class="row">
			<?php
			include('./config.php');
					$sqlActividades1 = ("SELECT * FROM `actividades`");
					$queryActividades1 = mysqli_query($con, $sqlActividades1);
					?>
					<?php 
                    while ($dataActividad1 = mysqli_fetch_array($queryActividades1)) { ?>
				<div class="col-6 pe-2">
					<a href="actividad.php?id=<?php echo $dataActividad1['id']; ?>" data-menu="menu-reserve" class="card card-style mx-0 mb-3">
						<!-- <div class="card-top m-2">
							<span class="bg-theme color-black font-11 px-2 py-1 font-700 rounded-xs shadow-xxl">15% OFF</span>
						</div> -->
						<img src="images/media/<?php echo $dataActividad1['id']; ?>_img1.jpg" alt="img" class="img-fluid">
						<div class="p-2">
							<h4 class="mb-0"><?php echo ucfirst($dataActividad1['actividad']); ?></h4>
							<div class="divider mt-1 mb-1"></div>
							<h5 class="font-17 mb-0">S/. <?php echo $dataActividad1['precio']; ?><span class="float-end font-400 font-11"><i class="fa fa-clock pe-1"></i><?php echo $dataActividad1['tiempo']; ?></span></h5>
						</div>
						
					</a>
				</div>
				<?php } 
                    ?>
				
			</div>
		</div>

        <?php include_once './assets/footer.php'?>

    </div>
    <!-- End of Page Content-->
	
    <!-- All Menus, Action Sheets, Modals, Notifications, Toasts, Snackbars get Placed outside the <div class="page-content"> -->
    <?php include_once './assets/menu-footer.php'?>

</div>

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>

</body>
