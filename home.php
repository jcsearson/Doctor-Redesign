<?php

	/*
		Template Name: Home
	*/
	/*This is the template displayed on the home (landing) page.*/
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<?php  // specifications for posts
		$args = array(
			'post_type'				=> 'articles',
			'cat'					=> '2',  // local: 2 / live:  5
		   	'posts_per_page'      	=> '1'
		);
		$query = new WP_Query($args);
		if ($query->have_posts()) : while($query->have_posts()) : $query->the_post();
	?>

	<section class="main-info-upper main-info" role="region">
		<h2><?php the_field('article_title_top'); ?></h2>
		<p><img src="<?php echo $homeDirectory; ?>/images/content/dr-caplan-office.jpg" alt=""><?php the_field('top_section'); ?></p>
	</section>  <!-- .main-info-upper   .main-info -->

	<div class="main-divider"></div>

	<section class="main-info-lower main-info" role="region">
		<h2><?php the_field('article_title_bottom'); ?></h2>
		<p><?php the_field('bottom_section'); ?></p>
	</section>  <!-- .main-info-lower   .main-info -->

	<?php
		endwhile; endif;
		wp_reset_query();
	?>

<?php get_footer(); ?>