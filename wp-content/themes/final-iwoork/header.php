<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
				
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
          
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="../"><img src="<?php bloginfo('template_directory'); ?>/images/iwoork-logo.png"></a>
					</div>

					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<div class="text-right hidden-sm hidden-xs">
							<h4>CALL US +63.917-312-1387
								<a href="https://www.linkedin.com/company/iwoork-web-solutions" target="_blank" class="myfa"><span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x animated"></i>
								  	<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span>
								</a>
								<a href="https://twitter.com/iwoork" target="_blank" class="myfa"><span class="fa-stack fa-lg">
								 	<i class="fa fa-circle fa-stack-2x"></i>
								 	<i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span>
								</a>
								<a href="https://www.facebook.com/iwoork.web" target="_blank" class="myfa"><span class="fa-stack fa-lg">
								 	<i class="fa fa-circle fa-stack-2x"></i>
								 	<i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span>
								</a>
							</h4>
						</div><!--row-->
						<div class="right">
							 <?php 
							if ( is_front_page() ) {
								wp_bootstrap_page_nav();
							} else {
								wp_bootstrap_main_nav();
							}
						?>
						</div>
					</div>

				</div> <!-- end .container -->
			</div> <!-- end .navbar -->
		
		</header> <!-- end header -->
		

