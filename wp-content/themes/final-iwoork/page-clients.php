<?php
/*
Template Name: Clients Page
*/
?>

<?php get_header(); ?>
	<div id="clients-page" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<h1 class="text-center"> <span class="semibold">Clients  </span> we've worked with</h1>
				<h4 class="text-center">We've worked with companies ranging from startups to multi-national corporations and</h4 >
				<h4 class="text-center">provided unmatched services in building and improving their core products. </h4 >
			</div>
			<div class="col-md-8 col-md-offset-2">
				<div class="row client">
					<div class="wrapper clearfix">
						<div class="row text-center  animated fadeIn slow">
							<?php
								$query = new WP_Query('post_type=client');
							
									while ( $query->have_posts() ) : $query->the_post();
								 		the_post_thumbnail('full'); 
									endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>