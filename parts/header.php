<?php
	$year = date( 'Y' );
	$month = date( 'F' );
	$day = date( 'l' );
	$dayNumb = date( 'j' );
	$hour = date( 'h' );
	$minute = date( 'i' );

	if ( (date( 'H' )) >= '12' && ( (date( 'H' )) < '24') ) {
		$timeOfDay = ' pm';
	} else {
		$timeOfDay = ' am';
	}

	$time = (int)$hour . ' : ' . $minute;
	$time .= $timeOfDay;
	$timestamp = $day . ' ' . $month . ' ' . $dayNumb . ', ' . $year;
?>

<body>

<div class="top-content">
	<div class="head-container">

		<header class="clearfix" role="banner">
			<h1 class="title"><em>Steven E. Caplan, MD</em></h1>
			<div class="landing-image">
				<section class="office-hours" role="region">
					<h3>Hours of Operation:</h3>
					<div class="title-divider"></div>
					<p><em>Mon - Thur: 9am - 5pm</em></p>
					<p><em>Fri: 9am - 4pm</em></p>
					<div class="title-divider"></div>
					<p class="head-clock">Current Time:  <?php echo $time; ?></p>
					<div class="inner-arrow-down"></div>
					<div class="outer-arrow-down"></div>
				</section>  <!-- .office-hours -->
			</div>  <!-- .landing-image -->
		</header>