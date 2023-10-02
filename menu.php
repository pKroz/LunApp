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
							<h6 class="font-12 opacity-60 mb-2">HORARIO</h6>
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
                            <h5 class="line-height-xs font-14 pt-1 opacity-40"><?php echo $dataActividad['horaInicio']; ?> - <?php echo $dataActividad['horaFin']; ?></h5>
                            
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
				<div class="col-6 ps-2">					<?php
					include('./config.php');
					$sqlActividades1 = ("SELECT * FROM `actividades`");
					$queryActividades1 = mysqli_query($con, $sqlActividades1);
					?>
					<?php 
                    while ($dataActividad1 = mysqli_fetch_array($queryActividades1)) { ?>
					<a href="actividad.php?id=<?php echo $dataActividad1['id']; ?>" class="card card-style mx-0 mb-3">
						<div class="card-top m-2">
							<span class="bg-highlight color-black font-11 px-2 py-1 font-700 rounded-xs shadow-xxl">15% OFF</span>
						</div>
						<img src="images/media/<?php echo $dataActividad1['id']; ?>_img4.jpg" alt="img" class="img-fluid">
						<div class="p-2 pb-0">
							<h4 class="mb-1"><?php echo ucfirst($dataActividad1['actividad']); ?></h4>
							<p class="pb-1 mb-0 font-11 mt-n1 opacity-70"><i class="fa fa-clock pe-1"></i><?php echo $dataActividad1['horaInicio']; ?> - <?php echo $dataActividad1['horaFin']; ?></p>
						</div>
						

					</a>
					<?php } 
                    ?>
				</div>
			</div>
		</div> -->
		<div class="content mt-2 mb-n3">
                <div>
                    <span class="color-highlight font-300 d-block text-uppercase font-10 pt-3">21 - 28 August 2025 - 09:00 AM</span>
                    <strong class="color-theme font-20 d-block mt-n2 mb-n2">Paradise Island Escape</strong>
                    <span class="font-11 color-theme opacity-30 d-block pb-2 pt-2"><i class="fa fa-map-marker pe-2"></i>Maldives Islands, Indian Ocean</span>
                </div>

                <div class="divider"></div>
                <h3>What does this place offer?</h3>
                <p class="mb-4">
                    Get ready for the new and improved cruise you'll never forget. It's going to be awesome! This year we're including Ketchup.
                </p>

                <div class="row mb-4">
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="align-self-center fa fa-wifi color-blue-dark font-14 fa-fw text-center"></i>
                            <strong class="align-self-center ps-2 ms-1 font-13 color-theme">Free Wifi</strong>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="align-self-center fa fa-parking color-yellow-dark font-18 fa-fw text-center"></i>
                            <strong class="align-self-center ps-2 ms-1 font-13 color-theme">Free Parking</strong>
                        </div>
                    </div>
                    <div class="mb-3"></div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="align-self-center fa fa-utensils color-gray-dark font-16 fa-fw text-center"></i>
                            <strong class="align-self-center ps-2 ms-1 font-13 color-theme">Kitchen</strong>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="align-self-center fa fa-bath color-dark-light font-18 fa-fw text-center"></i>
                            <strong class="align-self-center ps-2 ms-1 font-13 color-theme">Sauna</strong>
                        </div>
                    </div>
                    <div class="mb-3"></div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="align-self-center fa fa-water-ladder color-blue-dark font-16 fa-fw text-center"></i>
                            <strong class="align-self-center ps-2 ms-1 font-13 color-theme">Pool Access</strong>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="align-self-center fa fa-thermometer-half color-red-light font-18 fa-fw text-center"></i>
                            <strong class="align-self-center ps-2 ms-1 font-13 color-theme">Heat Pump</strong>
                        </div>
                    </div>
                    <div class="mb-3"></div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="align-self-center fa fa-fire color-red-dark font-16 fa-fw text-center"></i>
                            <strong class="align-self-center ps-2 ms-1 font-13 color-theme">BBQ Grill</strong>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="align-self-center fa fa-snowflake color-blue-light font-18 fa-fw text-center"></i>
                            <strong class="align-self-center ps-2 ms-1 font-13 color-theme">Air Conditioner</strong>
                        </div>
                    </div>
                    <div class="mb-3"></div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="align-self-center fa fa-paw color-brown-dark font-16 fa-fw text-center"></i>
                            <strong class="align-self-center ps-2 ms-1 font-13 color-theme">Pet Friendly</strong>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="align-self-center fa fa-smoking color-red-light font-18 fa-fw text-center"></i>
                            <strong class="align-self-center ps-2 ms-1 font-13 color-theme">No Smoking</strong>
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <h3>Where you're going</h3>
                <p class="mb-4">
                    Get ready for the new and improved cruise you'll never forget. It's going to be awesome! This year we're including Ketchup.
                </p>


                <div class="card rounded-m overflow-hidden" data-card-height="250">
                    <div class="card-top">
                        <a href="#" class="btn bg-white color-black btn-sm rounded-sm text-uppercase font-700 m-2"><i class="fa fa-car color-blue-dark pe-2"></i>Get directions</a>
                    </div>
                    <div class="card-bottom no-click">
                        <div class="bg-white rounded-m m-2 px-4 py-3 float-end">
                            <p class="color-black font-14 font-600 mb-1 mt-n1"><i class="fa fa-map-pin pe-2 me-1 font-13 color-red-dark"></i>United States</p>           
                            <p class="color-black font-12 line-height-xs opacity-50 mb-0">
                                California, Palo Alto <br> 1st Apple Street, 31515
                            </p>
                        </div>
                    </div>
                    <div class="card-overlay bg-black opacity-60 no-click"></div>
                    <iframe src='https://www.google.com/maps/embed/v1/view?key=AIzaSyAM3nxDVrkjyKwdIZp8QOplmBKLRVI5S_Y&center=-33.8569,151.2152&zoom=16&maptype=satellite' style="height:250px;" frameborder='0' allowfullscreen></iframe>
                </div>

                <div class="divider"></div>

                <h3>The 5 Day Vacation</h3>
                <p class="mb-4">
                    Get ready for the new and improved cruise you'll never forget. It's going to be awesome! This year we're including Ketchup.
                </p>

                <div class="calendar bg-theme m-0 mb-4 mx-n1 border-start border-theme" style="max-width:100%!important;">
                    <div class="cal-header">
                        <h4 class="cal-title text-center font-700 bg-highlight color-white">May 2027</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div class="cal-days bg-highlight opacity-80 bottom-0">
                        <a href="#">SUN</a>
                        <a href="#">MON</a>
                        <a href="#">TUE</a>
                        <a href="#">WED</a>
                        <a href="#">THU</a>
                        <a href="#">FRI</a>
                        <a href="#">SAT</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="cal-dates cal-dates-border">
                        <a href="#" class="cal-disabled">25</a>
                        <a href="#" class="cal-disabled">26</a>
                        <a href="#" class="cal-disabled">27</a>
                        <a href="#" class="cal-disabled">28</a>
                        <a href="#" class="cal-disabled">29</a>
                        <a href="#" class="cal-disabled">30</a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">7</a>
                        <a href="#">8</a>
                        <a href="#">9</a>
                        <a href="#" class="cal-selected"><i class="fa fa-circle color-highlight"></i><span>10</span></a>
                        <a href="#" class="cal-selected"><i class="fa fa-circle color-highlight"></i><span>11</span></a>
                        <a href="#" class="cal-selected"><i class="fa fa-circle color-highlight"></i><span>12</span></a>
                        <a href="#" class="cal-selected"><i class="fa fa-circle color-highlight"></i><span>13</span></a>
                        <a href="#" class="cal-selected"><i class="fa fa-circle color-highlight"></i><span>14</span></a>
                        <a href="#">15</a>
                        <a href="#">16</a>
                        <a href="#">17</a>
                        <a href="#">18</a>
                        <a href="#">19</a>
                        <a href="#">20</a>
                        <a href="#">5</a>
                        <a href="#">22</a>
                        <a href="#">23</a>
                        <a href="#">24</a>
                        <a href="#">25</a>
                        <a href="#">26</a>
                        <a href="#">27</a>
                        <a href="#">28</a>
                        <a href="#">29</a>
                        <a href="#">30</a>
                        <a href="#">31</a>
                        <a href="#" class="cal-disabled">1</a>
                        <a href="#" class="cal-disabled">2</a>
                        <a href="#" class="cal-disabled">3</a>
                        <a href="#" class="cal-disabled">4</a>
                        <a href="#" class="cal-disabled">5</a>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="divider"></div>

                <h3>4.98 - 12 Reviews</h3>
                <p class="mb-3">
                    Get ready for the new and improved cruise you'll never forget. It's going to be awesome! This year we're including Ketchup.
                </p>

                <div class="d-flex">
                    <div class="flex-grow-1 w-25 align-self-center"><strong class="color-theme">Perfect</strong></div>
                    <div class="w-75 align-self-center">
                        <div class="ms-2 progress rounded-m" style="height:8px">
                            <div class="progress-bar bg-green-dark" role="progressbar" style="width: 53%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="align-self-center"><strong class="color-theme ps-3">53%</strong></div>
                </div>
                <div class="d-flex">
                    <div class="flex-grow-1 w-25 align-self-center"><strong class="color-theme">Good</strong></div>
                    <div class="w-75 align-self-center">
                        <div class="ms-2 progress rounded-m" style="height:8px">
                            <div class="progress-bar bg-green-light" role="progressbar" style="width: 25%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="align-self-center"><strong class="color-theme ps-3">25%</strong></div>
                </div>
                <div class="d-flex">
                    <div class="flex-grow-1 w-25 align-self-center"><strong class="color-theme">Average</strong></div>
                    <div class="w-75 align-self-center">
                        <div class="ms-2 progress rounded-m" style="height:8px">
                            <div class="progress-bar bg-yellow-dark" role="progressbar" style="width: 18%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="align-self-center"><strong class="color-theme ps-3">18%</strong></div>
                </div>
                <div class="d-flex">
                    <div class="flex-grow-1 w-25 align-self-center"><strong class="color-theme">Bad</strong></div>
                    <div class="w-75 align-self-center">
                        <div class="ms-2 progress rounded-m" style="height:8px">
                            <div class="progress-bar bg-orange-light" role="progressbar" style="width: 9%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="align-self-center"><strong class="color-theme ps-3">9%</strong></div>
                </div>
                <div class="d-flex">
                    <div class="flex-grow-1 w-25 align-self-center"><strong class="color-theme">Horible</strong></div>
                    <div class="w-75 align-self-center">
                        <div class="ms-2 progress rounded-m" style="height:8px">
                            <div class="progress-bar bg-red-dark" role="progressbar" style="width: 7%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="align-self-center"><strong class="color-theme ps-3">2%</strong></div>
                </div>

                <div class="divider mt-4"></div>
                <a href="#" data-menu="menu-reserve" class="btn btn-full btn-m rounded-sm shadow-xl bg-highlight font-700 text-uppercase">Reserve Tickets</a>
                <div class="divider mt-4"></div>
                
                <div class="d-flex pb-1">
                    <div class="align-self-center">
                        <h6 class="mb-n1 pt-1 font-16">Enabled Hotels</h6>
                        <span class="font-11 opacity-50">Joined in January 2009</span>
                    </div>
                    <div class="align-self-center ms-auto">
                        <a href="#" class="btn btn-xxs bg-highlight rounded-s text-uppercase font-600">View Profile</a>
                    </div>
                </div>
                <div class="row mb-4 w-100">
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="align-self-center fa fa-comment color-blue-dark font-14 fa-fw text-center"></i>
                            <strong class="align-self-center ps-2 ms-1 font-13 color-theme">Responds Immediately</strong>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <i class="align-self-center fa fa-clock color-green-dark font-18 fa-fw text-center"></i>
                            <strong class="align-self-center ps-2 ms-1 font-13 color-theme">09:00 - 17:00</strong>
                        </div>
                    </div>
                </div>    

                
                <div class="divider mb-0 mt-4"></div>
                <div class="list-group list-custom-large">
                    <a href="#">
                        <i class="fa font-14 fa-star rounded-xl bg-yellow-dark"></i>
                        <span>12 Reviews - 4.8</span>
                        <strong>Verfied staying Customers</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>     
                    <a href="#">
                        <i class="fa font-14 fa-user rounded-xl bg-blue-dark"></i>
                        <span>Identity Verified</span>
                        <strong>For your Safety and Hosts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>     
                    <a href="#">
                        <i class="fa font-12 fa-home rounded-xl bg-brown-dark"></i>
                        <span>House Rules</span>
                        <strong>Check In: 3:00 PM / Check Out: 10:00AM</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>     
                    <a href="#">
                        <i class="fa font-14 fa-times rounded-xl shadow-xl bg-red-dark"></i>
                        <span>Cancelation Policy</span>
                        <strong>50% Unless announced 1 week prior</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>        
                    <a href="#">
                        <i class="fa font-14 fa-life-ring rounded-xl shadow-m bg-green-dark"></i>
                        <span>Safety and Property</span>
                        <strong>No Smoking / No Parties</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>        
                </div>

                <a href="#" class="btn btn-m btn-full mb-0 mt-3 rounded-sm text-uppercase font-900 border-red-dark color-red-dark bg-theme">Contact Host</a>

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
