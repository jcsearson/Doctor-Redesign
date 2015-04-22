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
		<div class="single-resource">
			<a href="/resources/pregnant" class="resource-link"><?php echo file_get_contents("$homeDirectory/images/svg/pregnant.svg"); ?></a>
			<p class="resource-description">Click the button on the left to view information on having a healthy <a href="/resources/pregnant"><em>pregnancy</em></a>.</p>
		</div>  <!-- .single-resource -->
		<div class="single-resource">
			<a href="/resources/infants" class="resource-link"><?php echo file_get_contents("$homeDirectory/images/svg/infant.svg"); ?></a>
			<p class="resource-description">Click the button on the left to view information on <a href="/resources/infants"><em>infant</em></a> care.</p>
		</div>  <!-- .single-resource -->
		<div class="single-resource">
			<a href="/resources/toddlers" class="resource-link"><?php echo file_get_contents("$homeDirectory/images/svg/toddler.svg"); ?></a>
			<p class="resource-description">Click the button on the left to view information on <a href="/resources/toddlers"><em>toddler</em></a> health.</p>
		</div>  <!-- .single-resource -->
		<div class="single-resource">
			<a href="/resources/teens" class="resource-link"><?php echo file_get_contents("$homeDirectory/images/svg/teen.svg"); ?></a>
			<p class="resource-description">Click the button on the left to view information on <a href="/resources/teens"><em>teen</em></a> health.</p>
		</div>  <!-- .single-resource -->
	</section>  <!-- .resource-container -->

<?php get_footer(); ?>