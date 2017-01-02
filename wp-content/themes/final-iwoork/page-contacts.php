<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>
			
	<div id="contact-page">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-6 col-md-offset-3">
					<h1>Contact</h1>
					<h4 >Leave us a message</h4 >
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3  animated fadeIn slow">
					<?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>