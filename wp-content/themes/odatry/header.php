<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?php bloginfo('title'); ?></title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"/>
	<link rel="stylesheet" href="http://kachestvo/wp-content/themes/odatry/libs/owl-carousel/owl.carousel.css"/>
	<link rel="stylesheet" href="http://kachestvo/wp-content/themes/odatry/libs/fancybox/jquery.fancybox.css"/>
	<link rel="stylesheet" href="http://kachestvo/wp-content/themes/odatry/libs/countdown/jquery.countdown.css"/>
	<link rel="stylesheet" href="http://kachestvo/wp-content/themes/odatry/css/fonts.css"/>
	<link rel="stylesheet" href="http://kachestvo/wp-content/themes/odatry/libs/bootstrap/bootstrap-grid-3.3.1.min.css"/>
	<link rel="stylesheet" href="http://kachestvo/wp-content/themes/odatry/libs/font-awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="http://kachestvo/wp-content/themes/odatry/css/media.css"/>
</head>
<body>
		<div class="page-wrap">
			<header class="top_header">
				<div class="header_topline">
					<div class="container">
						<div class="row">
						
							<div class="col-xs-12">
								<ul class="soc_buttons">
									
									<li>
										<a class="soc_buttons_round_first" id="vk" href="#"><i class="fa fa-vk"></i></a>
									</li>
									
									<li >
										<a href="#" class="soc_buttons_round" id="google"><i class="fa fa-google-plus"></i></a>
									</li>

									<li  >
										<a href="#" class="soc_buttons_round" id="twitter"><i class="fa fa-twitter"></i></a>
									</li>

									<li >
										<a href="#" class="soc_buttons_round" id="facebook"><i class="fa fa-facebook"></i></a>
									</li>
									
									
								</ul>		

								<!--	
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>-->
									
								
							</div>
						</div>
					</div>	
				</div>
				<div class="header_logo">
					<div class="container">
						<div class="row">
							<div class="row">
								<div class="logo_section">	
										<div class="col-xs-2">
											<div class="logo_div">
												<img class="logo_img" src="/wp-content/themes/odatry/img/logo.png" alt="">
											</div>
										</div>
										<div class="col-xs-6 " class="wrap_academy">
											<div class="name_academy">
												<?php bloginfo('name');?>
											</div>
											<div class="credo_academy">
												<?php bloginfo('description');?>
											</div>
										</div>
										<div class="col-xs-4" class="search_col">
											<?php get_search_form();?>
										</div>
								</div>
							</div>
							<div class="row">
								<nav class="menu_row" >
									
									<div  class="col-xs-12" id="menu">	
																							
											<?php wp_nav_menu();?>
									
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			
			</header>