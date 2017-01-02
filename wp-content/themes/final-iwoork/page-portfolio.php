<?php
/*
Template Name: portfolio
*/
?>

<?php get_header(); ?>

	<div id="projects" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<h1 class="text-center"> Featured <span class="semibold"> Projects</span></h1>
			</div>
			<div class="wrapper clearfix  animated fadeIn slow">
				<?php
					$query = new WP_Query('post_type=project');
				
						while ( $query->have_posts() ) : $query->the_post();
					?>
						<div class="col-md-4 project col-xs-6">
							<?php the_post_thumbnail('full'); ?> 
							<h4><a href="<?php $key="website"; echo get_post_meta($post->ID, $key, true);?>" target="_blank"><?php the_title(); ?></a></h4>  	
						</div>				 
				<?php endwhile; ?>
			</div>

		</div>
	</div>		
			

<?php get_footer(); ?>