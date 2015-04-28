<?php

	/*
		Template Name: About
	*/
	/*This template is for the page describing the employees.*/
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<section class="main-info about-page-intro" role="region">

		<?php  // specifications for posts
			$args = array(
				'post_type'				=> 'articles',
				'cat'					=> '11',  // local: 11 / live:  2
			   	'posts_per_page'      	=> '1'
			);
			$query = new WP_Query($args);
			if ($query->have_posts()) : while($query->have_posts()) : $query->the_post();
		?>

		<h2><?php the_field('article_title_top'); ?></h2>
		<p><?php the_field('top_section'); ?></p>

		<?php
			endwhile; endif;
			wp_reset_query();
		?>

	</section>  <!-- .main-info-upper   .main-info  .staff-entry  -->




	<?php  // specifications for posts
		$args = array(
			'post_type'				=> 'staff',
		   	'posts_per_page'      	=> '-1',
		   	'orderby'				=> 'meta_value',
		   	'order'					=> 'ASC',
		   	'status'					=> 'published'
		);
		$query = new WP_Query($args);
		if ($query->have_posts()) : while($query->have_posts()) : $query->the_post();
	?>

	<section class="main-info-lower main-info staff-entry" role="region">
		<div class="staff-head-block">
			<h2 class="staff-title"><?php the_field('staff_name'); ?> <span class="credentials"><i><?php the_field('staff_certification'); ?></i></span></h2>
			<div class="thumb-container staff"><?php echo file_get_contents("$homeDirectory/images/svg/missing-thumb.svg"); ?></div>
		</div>
		<div class="staff-history">
			<p><?php the_field('staff_biography'); ?></p>
		</div>
	</section>  <!-- .main-info-lower   .main-info  .staff-entry  -->

	<?php
		endwhile; endif;
		wp_reset_query();
	?>

<?php get_footer(); ?>