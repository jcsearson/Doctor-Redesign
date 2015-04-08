<?php

	/*
		Template Name: About
	*/
	/*This template is for the page describing the employees.*/
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<section class="main-info about-page-intro" role="region">
		<h2>Meet Our Staff!!!</h2>
		<p><em>It is important to us that you feel comfortable from the moment you step through our doors to the time that you leave us.  Our outstanding staff will make this time an easy one for both the child and parent!</em></p>
	</section>  <!-- .main-info-upper   .main-info  .staff-entry  -->

	<?php  // specifications for posts
		$args = array(
			'post_type'				=> 'employees',
		   	'posts_per_page'      	=> '-1',
		   	'orderby'				=> 'meta_value',
		   	'order'					=> 'ASC',
		   	'status'					=> 'published'
		);
	?>
	<?php $query = new WP_Query($args); ?>
	<?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

	<section class="main-info-lower main-info staff-entry" role="region">
		<div class="staff-head-block">
			<h2 class="staff-title"><?php the_field('employee_name'); ?> <span class="credentials"><i><?php the_field('employee_certification'); ?></i></span></h2>
			<?php
				if ( the_field('employee_photo') ) {
					echo '<div class="thumb-container">' . the_field('employee_photo') . '</div>';
				} else {
					echo '<div class="thumb-container"></div>';
				}
			?>
		</div>
		<div class="staff-history">
			<p><?php the_field('employee_biography'); ?></p>
		</div>
	</section>  <!-- .main-info-lower   .main-info  .staff-entry  -->

	<?php endwhile; endif; ?>
	<?php wp_reset_query(); ?>

<?php get_footer(); ?>