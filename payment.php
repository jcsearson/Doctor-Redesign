<?php

	/*
		Template Name: Payment
	*/
	/*This template is for describing how to make payments to the practice online (via external link).*/
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<section class="main-info-upper main-info" role="region">

		<?php  // specifications for posts
			$args = array(
				'post_type'				=> 'articles',
				'cat'					=> '6',
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

	</section>  <!-- .main-info-upper   .main-info -->

	<section class="payment-container main-info-lower" role="region">
		<div class="button-strike"></div>
		<a class="payment-button" href="https://payments.paysimple.com/Login/CheckOutFormLogin/0oPz5QsDaDXLHxc8TrKpOhEHI1Y-" target="_blank">Pay Online!</a>  <!-- .payment-button -->
	</section>  <!-- .payment-container  .main-info-lower -->

<?php get_footer(); ?>