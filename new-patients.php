<?php

	/*
		Template Name: New-patients
	*/
	/*This template provides information for potential new patients of the practice.*/
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<?php  // specifications for posts
		$args = array(
			'post_type'				=> 'articles',
			'cat'					=> '5',
		   	'posts_per_page'      	=> '1'
		);
		$query = new WP_Query($args);
		if ($query->have_posts()) : while($query->have_posts()) : $query->the_post();
	?>

	<section class="main-info-upper main-info" role="region">
		<h2><?php the_field('article_title_top'); ?></h2>
		<p><?php the_field('top_section'); ?></p>
	</section>  <!-- .main-info-upper   .main-info -->

	<section class="main-info-lower main-info" role="region">
		<h2><?php the_field('article_title_bottom'); ?></h2>
		<p><?php the_field('bottom_section'); ?></p>
	</section>  <!-- .main-info-lower   .main-info -->

	<?php
		endwhile; endif;
		wp_reset_query();
	?>

<?php get_footer(); ?>