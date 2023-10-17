<!DOCTYPE HTML>
<?php include_once './assets/head.php'?>
<title>LunApp - Menú</title>
</head>


<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>

<div id="page">

	<?php include_once './assets/header-footer-menu.php'?>

    <div class="page-content">

	<div class="content notch-clear">
            <div class="d-flex pt-2">
                <div class="align-self-center me-auto">
                    <strong class="text-uppercase opacity-60 font-12">Welcome</strong>
                    <h1 class="mt-n2 font-30">Explore</h1>
                </div>
                <div class="align-self-center ms-auto mt-1">
                    <a href="#" class="d-block"><img src="images/pictures/6s.jpg" class="img-fluid shadow-xl rounded-circle" width="52" alt="img"></a>
                </div>
            </div>
        </div>

        <div class="content mt-n1">
            <div class="search-box bg-theme color-theme rounded-m shadow-l">
                <i class="fa fa-search"></i>
                <input type="text" class="border-0" placeholder="Search for a place... (try island)" data-search>
				<a href="#" class="clear-search disabled mt-0"><i class="fa fa-times color-red-dark"></i></a>
            </div>
            <div class="search-results disabled-search-list mt-3">
                <div class="card card-style mx-0 px-2 p-0 mb-0">
					<?php
					include('./config.php');
					$sqlActividades = ("SELECT * FROM `actividades`");
					$queryActividades = mysqli_query($con, $sqlActividades);
					?>
					<?php 
                    while ($dataActividad = mysqli_fetch_array($queryActividades)) { ?>
                    <a href="#" class="d-flex py-2" data-filter-item data-filter-name="all maldives tropical island escape">
                        <div>
                            <img src="images/travel/6s.jpg" class="rounded-sm me-3" width="50" alt="img">
                        </div>
                        <div>
                            <span class="color-highlight font-400 d-block pt-0 text-uppercase font-10">Tropical Island</span>
                            <strong class="color-theme font-16 d-block mt-n2">Maldives</strong>
                        </div>
                        <div class="ms-auto text-end align-self-center pe-2">
                            <h5 class="line-height-xs font-18 pt-3">S/. <?php echo $dataActividad['precio']; ?></h5>
                            <span class="font-10 d-block mt-n2"><?php echo trim($dataActividad['tiempo'],"."); ?></span>
                        </div>
                    </a>
					<?php } 
                    ?>
                </div>
            </div>
        </div>
        <div class="search-no-results disabled mt-4">
            <div class="card card-style">
                <div class="content">
                    <h1>No Results</h1>
                    <p>
                        Your search brought up no results. Try using a different keyword. Or try typying all
                        to see all items in the demo. These can be linked to anything you want.
                    </p>
                </div>
            </div>
        </div>


		<div class="d-flex px-3 mb-n3">
            <div class="align-self-center">
                <h4 class="mb-0">Recommended</h4>
            </div>
        </div>

        <div class="splide double-slider slider-no-dots visible-slider" id="double-slider-1a">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <a href="#" class="mx-3" data-menu="menu-reserve">
                            <div class="card card-style me-0 mb-0" style="background-image:url(images/travel/4m.jpg);" data-card-height="250">
								<div class="card-top p-2">
									<span class="color-black bg-white px-2 py-1 rounded-xs font-11"><i class="fa fa-star color-yellow-dark pe-2"></i>4.95</span>
								</div>
                                <div class="card-bottom p-2 px-2">
                                    <h4 class="color-white line-height-s">Maldive<br> Islands</h4>
									<span class="color-white font-10 opacity-60"><i class="fa fa-map-marker pe-2"></i>Indian Ocean</span>
                                </div>
                                <div class="card-overlay bg-gradient"></div>
                            </div>
                        </a>
                    </div>
                    <div class="splide__slide">
                        <a href="#" class="mx-3" data-menu="menu-reserve">
                            <div class="card card-style me-0 mb-0" style="background-image:url(images/travel/2m.jpg);" data-card-height="250">
                                <div class="card-top p-2">
									<span class="color-black bg-white px-2 py-1 rounded-xs font-11"><i class="fa fa-star color-yellow-dark pe-2"></i>4.92</span>
								</div>
								<div class="card-bottom p-2 px-2">
									<h4 class="color-white line-height-s">Mount Rushmore</h4>
									<span class="color-white font-10 opacity-60"><i class="fa fa-map-marker pe-2"></i>United States</span>
								</div>
                                <div class="card-overlay bg-gradient"></div>
                            </div>
                        </a>
                    </div>
                    <div class="splide__slide">
                        <a href="#" class="mx-3" data-menu="menu-reserve">
                            <div class="card card-style me-0 mb-0" style="background-image:url(images/travel/7m.jpg);" data-card-height="250">
								<div class="card-top p-2">
									<span class="color-black bg-white px-2 py-1 rounded-xs font-11"><i class="fa fa-star color-yellow-dark pe-2"></i>4.87</span>
								</div>
								<div class="card-bottom p-2 px-2">
									<h4 class="color-white line-height-s">Blue<br> Lagoon</h4>
									<span class="color-white font-10 opacity-60"><i class="fa fa-map-marker pe-2"></i>Europe, Iceland</span>
								</div>
								<div class="card-overlay bg-gradient"></div>
							</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

		<div class="d-flex px-3">
			<div class="align-self-center">
				<h4 class="mb-0">Great Deals</h4>
			</div>
		</div>

		<div class="content mt-2 mb-n3">
			<div class="row">
				<div class="col-6 pe-2">
					<a href="#" data-menu="menu-reserve" class="card card-style mx-0 mb-3">
						<div class="card-top m-2">
							<span class="bg-white color-black font-11 px-2 py-1 font-700 rounded-xs shadow-xxl">15% OFF</span>
						</div>
						<img src="images/travel/4m.jpg" alt="img" class="img-fluid">
						<div class="p-2">
							<h4 class="mb-0">Island Exploring</h4>
							<p class="mb-0 font-11 mt-n1 opacity-70"><i class="fa fa-map-marker pe-2"></i>Europe, Iceland</p>
						</div>
						<div class="divider mb-0"></div>
						<h5 class="p-2 font-12">$1550 / 7 Days <span class="float-end font-400 font-11 color-green-dark">30 Left</span></h5>
					</a>
				</div>
				<div class="col-6 ps-2">
					<a href="#" data-menu="menu-reserve" class="card card-style mx-0 mb-3">
						<div class="card-top m-2">
							<span class="bg-white color-black font-11 px-2 py-1 font-700 rounded-xs shadow-xxl">25% OFF</span>
						</div>
						<img src="images/travel/7m.jpg" alt="img" width="100" class="img-fluid">
						<div class="p-2">
							<h4 class="mb-0">Mountain Hikes</h4>
							<p class="mb-0 font-11 mt-n1 opacity-70"><i class="fa fa-map-marker pe-2"></i>Europe, France</p>
						</div>
						<div class="divider mb-0"></div>
						<h5 class="p-2 font-12">$1320 / 5 Days <span class="float-end font-400 font-11 color-yellow-dark">5 Left</span></h5>
					</a>
				</div>
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
