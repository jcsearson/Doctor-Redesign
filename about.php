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

	<section class="main-info-lower main-info staff-entry" role="region">

		<?php $query = new WP_Query( 'post_type=employees' ); ?>
		<?php if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

		<div class="staff-head-block">
			<h2 class="staff-title"><?php the_field('employee_name'); ?> <span class="credentials"><i><?php the_field('employee_certification'); ?></i></span></h2>
			<div class="thumb-container"><?php the_field('employee_photo'); ?></div>
		</div>
		<div class="staff-history">
			<p><?php the_field('employee_biography'); ?></p>
		</div>

		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>

	</section>  <!-- .main-info-lower   .main-info  .staff-entry  -->

<?php get_footer(); ?>