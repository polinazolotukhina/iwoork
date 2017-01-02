<?php
/*
Template Name: about
*/
?>

<?php get_header(); ?>
	<div id="product" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<h1 class="text-center"> We help you <span class="semibold"> build your product</span></h1>
				<h2 class="text-center">This is what <span class="semibold"> we do best</span></h2>
			</div>
			<div id="services" class="row  animated fadeIn slow">
				<div class="col-md-3 text-center">
					<img src="<?php bloginfo('template_directory'); ?>/images/Services/Drupal_Icon.PNG">
					<h4>drupal</h4>
					<p>Site architecture</p>
					<p>Module and theme development</p>
					<p>Module and theme development</p>
					<p>Scaling and performance</p>
				</div>
				<div class="col-md-3 text-center">
					<img src="<?php bloginfo('template_directory'); ?>/images/Services/NodeJs_Icon.PNG">
					<h4>Node JS</h4>
					<p>Site and code architecture</p>
					<p>Backend and frontend framework</p>
					<p>Package development (NPM)</p>
					<p>Scaling and performance</p>
				</div>
				<div class="col-md-3 text-center">
					<img src="<?php bloginfo('template_directory'); ?>/images/Services/MeteorJsl_Icon.PNG">
					<h4>Meteor JS</h4>
					<p>Site and code architecture</p>
					<p>Atmosphere package development</p>
					<p>Bundling and deploymentScaling and performance</p>
					<p>Development and operations (DevOps)</p>
					<p>Scaling and performance</p>
				</div>
				<div class="col-md-3 text-center">
					<img src="<?php bloginfo('template_directory'); ?>/images/Services/MobileApp_Icon.PNG">
					<h4>Mobile app</h4>
					<p>API development</p>
					<p>iOS</p>
					<p>Android</p>
					<p>Game development</p>
				</div>
			</div>
		</div>
	</div>			
			

<?php get_footer(); ?>