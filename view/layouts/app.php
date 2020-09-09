<?php 
	$app=new App();
	class App{

		public function __construct(){
			?>
				<!doctype html>
				<html class="no-js" lang="zxx">

				<head>
				    <meta charset="utf-8">
				    <meta name="author" content="Sumon Rahman">
				    <meta name="description" content="">
				    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
				    <meta http-equiv="x-ua-compatible" content="ie=edge">
				    <meta name="viewport" content="width=device-width, initial-scale=1.0">
				    <!-- Title -->
				    <title><?php echo constant('APP_NAME') ?></title>
				    <!-- Place favicon.ico in the root directory -->
				    <link rel="apple-touch-icon" href="<?php echo constant('APP_STATIC') ?>/images/icono.png">
				    <link rel="icon" type="image/icon" href="<?php echo constant('APP_STATIC') ?>/images/icon.ico" />
				    <!-- Plugin-CSS -->
				    <link rel="stylesheet" href="<?php echo constant('APP_STATIC') ?>/css/bootstrap.min.css">
				    <link rel="stylesheet" href="<?php echo constant('APP_STATIC') ?>/css/owl.carousel.min.css">
				    <link rel="stylesheet" href="<?php echo constant('APP_STATIC') ?>/css/linearicons.css">
				    <link rel="stylesheet" href="<?php echo constant('APP_STATIC') ?>/css/magnific-popup.css">
				    <link rel="stylesheet" href="<?php echo constant('APP_STATIC') ?>/css/animate.css">
				    <!-- Main-Stylesheets -->
				    <link rel="stylesheet" href="<?php echo constant('APP_STATIC') ?>/css/normalize.css">
				    <link rel="stylesheet" href="<?php echo constant('APP_STATIC') ?>/css/style.css">
				    <link rel="stylesheet" href="<?php echo constant('APP_STATIC') ?>/css/responsive.css">

				    <link rel="stylesheet" href="<?php echo constant('APP_STATIC') ?>/css/main.css">
				    
				    <script src="<?php echo constant('APP_STATIC') ?>/js/vendor/modernizr-2.8.3.min.js"></script>
				    <!--[if lt IE 9]>
				        <script src="public///oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
				        <script src="public///oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
				    <![endif]-->
				</head>

				<body data-spy="scroll" data-target=".mainmenu-area">
				    <!-- Preloader-content -->
				    <div class="preloader">
				        <span><i class="lnr lnr-sun"></i></span>
				    </div>
				    <!-- MainMenu-Area -->
				    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
				        <div class="container-fluid">
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                </button>
				                <h1>
				                	<a style="color:white; font-size:4rem;width:150%;padding-top:2rem " class="navbar-brand" href="<?php echo constant('APP_HOST')?>">
				                		CurriculumVitae
				                	</a>
				                </h1>
				            </div>
				            <div class="collapse navbar-collapse" id="primary_menu">
				                <ul class="nav navbar-nav mainmenu app-ul-nav">
				                    <li class="active"><a href="#home_page">Inicio</a></li>
				                    <li><a href="#about_page">Descripción</a></li>
				                    <li><a href="#features_page">Conocimientos</a></li>
				                    <li><a href="#gallery_page">Galeria</a></li>
				                    <li><a href="#contact_page">Contacto</a></li>
				                </ul>
				            </div>
				        </div>
				    </nav>
				    <!-- MainMenu-Area-End -->
				    <!-- Home-Area -->
				    <header class="home-area overlay angle" id="home_page">
				        <div class="container">
				            <div class="row">
				                <div class="col-xs-12 col-md-5 col-sm-12">
				                    <!-- mobile-image-->
				                    <figure class="wow fadeInUp" data-wow-delay="0.2s">
				                        <img src="<?php echo constant('APP_STATIC') ?>/images/yo.jpg" style="border-radius:50%" alt="">
				                    </figure>
				                </div>
				                <div class="col-xs-12 col-md-7">
				                    <div class="space-80 hidden-xs"></div>
				                    <h1 style="font-size:8rem" class="app-user-name wow fadeInUp" data-wow-delay="0.4s">Jesús Esteban Villalta Gonzalez</h1>
				                    <div class="space-20"></div>
				                    <div class="space-20"></div>
				                    <div class="space-20"></div>
				                    <div class="space-20"></div>
				                    <div class="space-20"></div>
				                    <div class="space-20"></div>
				                </div>
				            </div>
				        </div>
				    </header>
				    <!--  start content     -->
			
			<?php 
		}
		public function __destruct(){
			?>
				<footer class="subscribe-area section-padding" style="padding-bottom:0px" id="contact_page">
			        <div class="section-padding">
			            <div class="container">
			                <div class="row">
			                    <div class="col-xs-12">
			                        <div class="page-title text-center">
			                            <h3 class="title" style="color: white">Contactos</h3>
			                            <div class="space-60"></div>
			                        </div>
			                    </div>
			                </div>
			                <div class="row">
			                    <div class="col-xs-12 col-sm-2">
			                        <div class="footer-box">
			                            <div class="box-icon">
			                                <span class="lnr lnr-map-marker"></span>
			                            </div>
			                            <p class='app-p-footer' style='color:white'>Venezuela, Guarico, San Juan de los Morros</p>
			                        </div>
			                        <div class="space-30 hidden visible-xs"></div>
			                    </div>
			                    <div class="col-xs-12 col-sm-2">
			                        <div class="footer-box">
			                            <div class="box-icon">
			                                <span class="lnr lnr-phone-handset"></span>
			                            </div>
			                            <p class='app-p-footer' style='color:white'>+58 (412) 480-84-94</p>
			                        </div>
			                        <div class="space-30 hidden visible-xs"></div>
			                    </div>
			                    <div class="col-xs-12 col-sm-4">
			                        <div class="footer-box">
			                            <div class="box-icon">
			                                <span class="lnr lnr-envelope"></span>
			                            </div>
			                            <p class='app-p-footer' style='color:white'>jesusesteban12321@gmail.com
			                            </p>
			                        </div>
			                    </div>
			                    <div class="col-xs-12 col-sm-2">
			                        <div class="footer-box">
			                            <div class="box-icon">
			                                <span class="lnr lnr-location" ></span>
			                            </div>
			                            <p class='app-p-footer' style='color:white'>@root_12321
			                            </p>
			                        </div>
			                    </div>
			                    <div class="col-xs-12 col-sm-2">
			                        <div class="footer-box">
			                            <div class="box-icon">
			                                <span class="lnr lnr-cloud"></span>
			                            </div>
			                            <p class='app-p-footer' style='color:white'>@esteban12321
			                            </p>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <!-- Footer-Bootom -->
			        <div class="footer-bottom">
			            <div class="container">
			                <div class="row">
			                    <div class="col-xs-12 col-md-5">
			                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			            <span>Copyright&copy;<script>document.write(new Date().getFullYear());</script> Developer, Jesus Villalta</span>
			            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			                        <div class="space-30 hidden visible-xs"></div>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <!-- Footer-Bootom-End -->
			    </footer>
			    <!-- Footer-Area-End -->
			    <!--Vendor-JS-->
			    <script src="<?php echo constant('APP_STATIC')?>/js/vendor/jquery-1.12.4.min.js"></script>
			    <script src="<?php echo constant('APP_STATIC')?>/js/vendor/jquery-ui.js"></script>
			    <script src="<?php echo constant('APP_STATIC')?>/js/vendor/bootstrap.min.js"></script>
			    <!--Plugin-JS-->
			    <script src="<?php echo constant('APP_STATIC')?>/js/owl.carousel.min.js"></script>
			    <script src="<?php echo constant('APP_STATIC')?>/js/contact-form.js"></script>
			    <script src="<?php echo constant('APP_STATIC')?>/js/ajaxchimp.js"></script>
			    <script src="<?php echo constant('APP_STATIC')?>/js/scrollUp.min.js"></script>
			    <script src="<?php echo constant('APP_STATIC')?>/js/magnific-popup.min.js"></script>
			    <script src="<?php echo constant('APP_STATIC')?>/js/wow.min.js"></script>
			    <!--Main-active-JS-->
			    <script src="<?php echo constant('APP_STATIC')?>/js/main.js"></script>
			</body>

			</html>
	
			<?php 
		}
	}
 ?>