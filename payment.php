<?php include("parts/doctype.php"); ?>

	<div class="top-content">
		<div class="head-container">
			<?php include("parts/header.php"); ?>
			<?php include("parts/nav.php"); ?>
		</div>  <!-- .head-container -->

		<main role="main">
			<?php include("parts/sidebar.php"); ?>

			<section class="main-info-upper main-info" role="region">
				<h2>Pay Bill Online:</h2>
				<p><em>Instructions:</em> Click the "<em>PAY ONLINE</em>" button below.  You can pay with your <i>Mastercard</i>, <i>Visa</i>, <i>Discover Card</i> or from your <i>Checking</i> account.</p>
				<p><em>Note: </em> <em>Please enter the name as it appears on your bill</em>, to ensure that the appropriate account is credited.  Thank you!</p>
			</section>  <!-- .main-info-upper   .main-info -->

			<section class="payment-container main-info-lower" role="region">
				<div class="button-strike"></div>
				<a class="payment-button" href="https://payments.paysimple.com/Login/CheckOutFormLogin/0oPz5QsDaDXLHxc8TrKpOhEHI1Y-" target="_blank">Pay Online!</a>  <!-- .payment-button -->
			</section>  <!-- .payment-container  .main-info-lower -->
		</main>
	</div>  <!-- .top-content -->

<?php include("parts/footer.php"); ?>