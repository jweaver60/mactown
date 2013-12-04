<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php bloginfo('name'); wp_title(' | ', true, 'left'); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<!-- Modal -->
		<div class="modal fade" id="locationsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel">LOCATIONS</h4>
		      </div>
		      <div class="modal-body">
		      	<div class="row">
		        	<div class="col-xs-12">
		        		<address>
									<strong>The Greene</strong><br />
									Address: 4398 Holly Dr. Dayton, Ohio<br />
									Telephone: 937-435-0134<br />
									Store Hours: Mon-Sat 10AM - 9PM<br />
									Store Hours: Sunday 12PM - 6PM
								</address>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<address>
									<strong>South Dayton</strong><br />
									Address: 8975 Kingsridge Dr. Dayton, Ohio<br />
									Telephone: 937-435-0134<br />
									Store Hours: Mon-Fri 9AM - 7PM<br />
									Store Hours: Closed Saturday &amp; Sunday
								</address>
							</div>
						</div>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div class="row">
			<div class="col-xs-12">
				<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				  <!-- Brand and toggle get grouped for better mobile display -->
				  <div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				      <span class="sr-only">Toggle navigation</span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				      <span class="icon-bar"></span>
				    </button>
				    <a class="navbar-brand" href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-gray.png" alt="MacTown"></a>
				  </div>

				  <!-- Collect the nav links, forms, and other content for toggling -->
				  <div class="collapse navbar-collapse navbar-ex1-collapse">
				    <ul class="nav navbar-nav navbar-right">
				    	<?php if (is_front_page()) { ?>
					      <li><a href="#home" class="scroll">Home</a></li>
					      <li><a href="#services" class="scroll">Services</a></li>
					      <li><a href="#retail" class="scroll">Products</a></li>
					      <li><a href="#trending" class="scroll">Trending</a></li>
					      <li><a href="#about-us" class="scroll">About</a></li>
					      <li><a href="#contact" class="scroll">Connect</a></li>
					      <li><a href="#" data-toggle="modal" data-target="#locationsModal">Locations</a></li>
					    <?php } else { ?>
					    	<li><a href="<?php echo site_url(); ?>#home">Home</a></li>
					      <li><a href="<?php echo site_url(); ?>#services">Services</a></li>
					      <li><a href="<?php echo site_url(); ?>#retail">Products</a></li>
					      <li><a href="<?php echo site_url(); ?>#trending">Trending</a></li>
					      <li><a href="<?php echo site_url(); ?>#about-us">About</a></li>
					      <li><a href="<?php echo site_url(); ?>#contact">Connect</a></li>
					      <li><a href="#" data-toggle="modal" data-target="#locationsModal">Locations</a></li>
					    <?php } ?>
				    </ul>
				  </div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
		<div class="container">
