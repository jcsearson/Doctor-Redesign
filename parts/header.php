<?php
	/* Set to correct timezone */
	date_default_timezone_set('EST5EDT');

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

	GLOBAL $time;
	GLOBAL $timestamp;

	$time = (int)$hour . ' : ' . $minute;
	$time .= $timeOfDay;
	$timestamp = $day . ' ' . $month . ' ' . $dayNumb . ', ' . $year;
?>

<body>

<div class="top-content">
	<div class="head-container">

		<header class="clearfix" role="banner">
			<div class="title">
				<h1 class="practice-title"><strong>Steven E. Caplan, MD</strong></h1>
			</div>
			<div class="landing-image">
				<section class="office-hours" role="region">
					<h3>Hours of Operation:</h3>
					<div class="title-divider"></div>
					<p><strong>Mon - Thur: 9am - 5pm</strong></p>
					<p><strong>Fri: 9am - 4pm</strong></p>
					<div class="title-divider"></div>
					<p class="head-clock"><strong>Current Time:</strong>  <?php echo $time; ?></p>
					<div class="inner-arrow-down"></div>
					<div class="outer-arrow-down"></div>
				</section>  <!-- .office-hours -->
			</div>  <!-- .landing-image -->
		</header>