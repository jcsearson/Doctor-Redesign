<?php include("parts/doctype.php"); ?>

	<?php include("parts/header.php"); ?>
	<?php include("parts/nav.php"); ?>

	<?php include("parts/sidebar.php"); ?>

	<section class="main-info-upper main-info" role="region">
		<h2>Helpful Information:</h2>
		<p>Below are some resources that can provide helpful insite regarding various aspects of childcare.  Please feel free to browse through them if you want additional information.</p>
	</section>  <!-- .main-info-upper   .main-info -->

	<section class="resource-container" role="region">
		<div class="single-resource">
			<a href="/resources-pregnant.php" class="resource-link"><?php echo file_get_contents("images/svg/pregnant.svg"); ?></a>
			<p class="resource-description">Click the button on the left to view information on having a healthy <a href="/resources-pregnant.php"><em>pregnancy</em></a>.</p>
		</div>
		<div class="single-resource">
			<h4 class="resource-name"><a href="/resources-infants.php" class="resource-link"><?php echo file_get_contents("images/svg/infant.svg"); ?></a></h4>
			<p class="resource-description">Click the button on the left to view information on <a href="/resources-infants.php"><em>infant</em></a> care.</p>
		</div>
		<div class="single-resource">
			<h4 class="resource-name"><a href="/resources-toddlers.php" class="resource-link"><?php echo file_get_contents("images/svg/toddler.svg"); ?></a></h4>
			<p class="resource-description">Click the button on the left to view information on <a href="/resources-toddlers.php"><em>toddler</em></a> health.</p>
		</div>
		<div class="single-resource">
			<h4 class="resource-name"><a href="/resources-teens.php" class="resource-link"><?php echo file_get_contents("images/svg/teen.svg"); ?></a></h4>
			<p class="resource-description">Click the button on the left to view information on <a href="/resources-teens.php"><em>teen</em></a> health.</p>
		</div>
	</section>  <!-- .main-info-lower   .main-info -->

<?php include("parts/footer.php"); ?>