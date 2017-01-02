<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>




<!--=====================Hero=======================-->
	<div id="hero" data-stellar-background-ratio="0.5">
		<!--<img class="particles animated fadeIn"  src="/wp-content/themes/final-iwoork/images/particles1.png" data-stellar-ratio="0.9" />
		<img class="particles"  src="/wp-content/themes/final-iwoork/images/particles2.png" data-stellar-ratio="1.5" />
		<img class="particles animated  fadeIn"  src="/wp-content/themes/final-iwoork/images/particles3.png" data-stellar-ratio="1.3" />
		<img class="particles"   src="/wp-content/themes/final-iwoork/images/particles4.png" data-stellar-ratio="3.8" />
		<img class="particles animated fadeIn"  src="/wp-content/themes/final-iwoork/images/particles5.png" data-stellar-ratio="0.3" />-->
		<div class="container">
			 <div class="parallax-img-container">
				<h1 class="text-center animated fadeIn slow">We are a <span class="semibold">development shop</span> based in Manila, Philippines.</h1>
			</div>
		</div>
	</div>

<!--=====================Product=======================-->
	<div id="product">
		<div class="container">
			<div class="row">
				<h1 class="text-center"> We help you <span class="semibold"> build your product</span></h1>
				<h2 class="text-center">This is what <span class="semibold"> we do best</span></h2>
			</div>
			<div id="services" class="row">
				<div class="col-md-3 col-sm-6 text-center products" id="drupal">
					<img src="<?php bloginfo('template_directory'); ?>/images/Services/Drupal_Icon.PNG"
					onmouseover="this.src='<?php bloginfo('template_directory'); ?>/images/Services/Drupal_Icon_hover.PNG'"
					onmouseout="this.src='<?php bloginfo('template_directory'); ?>/images/Services/Drupal_Icon.PNG'">
					<h4>drupal</h4>
					<p>Site architecture</p>
					<p>Module and theme development</p>
					<p>Module and theme development</p>
					<p>Scaling and performance</p>
				</div>
				<div class="col-md-3 col-sm-6 text-center products delay-25s" id="node">
					<img src="<?php bloginfo('template_directory'); ?>/images/Services/NodeJs_Icon.PNG"
					onmouseover="this.src='<?php bloginfo('template_directory'); ?>/images/Services/NodeJs_Icon_hover.PNG'"
					onmouseout="this.src='<?php bloginfo('template_directory'); ?>/images/Services/NodeJs_Icon.PNG'">
					<h4>Node JS</h4>
					<p>Site and code architecture</p>
					<p>Backend and frontend framework</p>
					<p>Package development (NPM)</p>
					<p>Scaling and performance</p>
				</div>
				<div class="col-md-3 col-sm-6 text-center products delay-05s" id="meteor">
					<img src="<?php bloginfo('template_directory'); ?>/images/Services/MeteorJsl_Icon.PNG"
					onmouseover="this.src='<?php bloginfo('template_directory'); ?>/images/Services/MeteorJsl_Icon_hover.PNG'"
					onmouseout="this.src='<?php bloginfo('template_directory'); ?>/images/Services/MeteorJsl_Icon.PNG'">
					<h4>Meteor JS</h4>
					<p>Site and code architecture</p>
					<p>Atmosphere package development</p>
					<p>Bundling and deployment</p>
					<p>Scaling and performance</p>
					<p>Development and operations (DevOps)</p>
					<p>Scaling and performance</p>
				</div>
				<div class="col-md-3 col-sm-6 text-center products delay-75s" id="app">
					<img src="<?php bloginfo('template_directory'); ?>/images/Services/MobileApp_Icon.PNG"
					onmouseover="this.src='<?php bloginfo('template_directory'); ?>/images/Services/MobileApp_Icon_hover.PNG'"
					onmouseout="this.src='<?php bloginfo('template_directory'); ?>/images/Services/MobileApp_Icon.PNG'">
					<h4>Mobile app</h4>
					<p>API development</p>
					<p>iOS</p>
					<p>Android</p>
					<p>Game development</p>
				</div>
			</div>
		</div>
	</div>
<!--=====================Featured Projects=======================-->
	<div id="projects">
		<div class="container">
			<div class="row">
				<h1 class="text-center"> Featured <span class="semibold"> Projects</span></h1>
			</div>
			<div class="row">
				<div class="col-md-4 col-xs-6" id="project1">
					<img src="<?php bloginfo('template_directory'); ?>/images/Project/ExpatHelper_Project.JPG">
					<h4><a target="blank" href="http://expathelpers.com/">Expat Helpers</a></h4>
				</div>
				<div class="col-md-4 col-xs-6" id="project2">
					<img src="<?php bloginfo('template_directory'); ?>/images/Project/GCRC_Project.JPG">
					<h4><a target="blank" href="http://gcrc.com.hk/">GCRC</a></h4>
				</div>
				<div class="col-md-4 col-xs-6" id="project3">
					<img src="<?php bloginfo('template_directory'); ?>/images/Project/PizzaExpress_Project.JPG">
					<h4><a target="blank" href="http://pizzaexpress.com.hk/">Pizza Express</a></h4>
				</div>
			</div><!--row-->
			<div class="row text-center">
				<div class="box bg-1">
					<a href="/projects/"><button class="button button--wayra button--border-thick button--text-upper button--size-s font-thin">See more</button></a>
				</div>
			</div>		
		</div>
	</div>
	<!--=====================Clients=======================-->
	<div id="clients">
		<div class="container">
			<div class="row">
				<h1 class="text-center"> <span class="semibold">Clients  </span> we've worked with</h1>
				<!--<div  id="trigger"></div>-->
				<h4 class="text-center">We've worked with companies ranging from startups to multi-national corporations and</h4 >
				<h4 class="text-center">provided unmatched services in building and improving their core products. </h4 >
			</div>
			<div class="client">
				<div class="row text-center">
					<a  target="blank" href="http://expathelpers.com/"><img class="client-icon" src="<?php bloginfo('template_directory'); ?>/images/Client_Icon/expathelpers.PNG"></a>
					<a  target="blank" href="http://www.fyiasia.tv"><img class="client-icon"  src="<?php bloginfo('template_directory'); ?>/images/Client_Icon/fyi.PNG"></a>
					<a  target="blank" href="http://www.historyasia.com/"><img class="client-icon"  src="<?php bloginfo('template_directory'); ?>/images/Client_Icon/history.PNG"></a>
					<a  target="blank" href="http://www.lifetimeasia.com/"><img class="client-icon"  src="<?php bloginfo('template_directory'); ?>/images/Client_Icon/lifetime.PNG"></a>
					<a  target="blank" href="http://pizzaexpress.com.hk/"><img class="client-icon"  src="<?php bloginfo('template_directory'); ?>/images/Client_Icon/pizzaexpress.PNG"></a>
				</div>
			</div>
			<div class="row text-center">
				<div class="box bg-1">
					<a href="/clients/"><button class="button button--wayra button--border-thick button--text-upper button--size-s font-thin">See more</button></a>
				</div>
		</div>
	</div>
	<!--=====================Contact=======================-->
	<div id="contact">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-6  col-md-offset-3">
					<h1>Contact</h1>
					<h4 >Leave us a message</h4 >
				</div>
			</div>
			<div class="clearfix">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
						<?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>




	

<?php get_footer(); ?>