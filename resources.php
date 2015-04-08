<?php

	/*
		Template Name: Resources
	*/
	/*This template provides helpful resources for patients of the practice.*/
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<section class="main-info-upper main-info" role="region">
		<h2>Helpful Information:</h2>
		<p>Below are some resources that can provide helpful insite regarding various aspects of childcare.  Please feel free to browse through them if you want additional information.</p>
	</section>  <!-- .main-info-upper   .main-info -->

	<section class="resource-container" role="region">

		<?php $query = new WP_Query( 'post_type=resources' ); ?>
		<?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

		<div class="single-resource">
			<h4 class="resource-name"><a href="<?php the_field('resource_link'); ?>" class="resource-link" target="_blank"><?php the_field('resource_name'); ?></a></h4>
			<p class="resource-description"><?php the_field('resource_description'); ?></p>
		</div>

		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>

	</section>  <!-- .main-info-lower   .main-info -->

<?php get_footer(); ?>