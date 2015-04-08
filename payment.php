<?php

	/*
		Template Name: Payment
	*/
	/*This template is for describing how to make payments to the practice online (via external link).*/
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<section class="main-info-upper main-info" role="region">
		<h2>Pay Bill Online:</h2>
		<p><em>Instructions:</em> Click the "<em>PAY ONLINE</em>" button below.  You can pay with your <i>Mastercard</i>, <i>Visa</i>, <i>Discover Card</i> or from your <i>Checking</i> account.</p>
		<p><em>Note: </em> <em>Please enter the name as it appears on your bill</em>, to ensure that the appropriate account is credited.  Thank you!</p>
	</section>  <!-- .main-info-upper   .main-info -->

	<section class="payment-container main-info-lower" role="region">
		<div class="button-strike"></div>
		<a class="payment-button" href="https://payments.paysimple.com/Login/CheckOutFormLogin/0oPz5QsDaDXLHxc8TrKpOhEHI1Y-" target="_blank">Pay Online!</a>  <!-- .payment-button -->
	</section>  <!-- .payment-container  .main-info-lower -->

<?php get_footer(); ?>