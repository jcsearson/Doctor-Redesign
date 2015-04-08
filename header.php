<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<!-- Metas -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge, Chrome=1">
	<meta name="description" content="The Template for Steven Caplan, MD">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Steven E. Caplan, M.D.</title>

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/favicons/apple-touch-icon-180x180.png">

	<?php wp_head(); ?>  <!-- e.g. jQuery -->

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css?<?php echo filemtime(TEMPLATEPATH . 'css/style.css'); ?>" />

	<!--[if lt IE 7]> <html class="no-js ie ie6" lang="en"> <![endif]-->
    	<!--[if IE 7]>    <html class="no-js ie ie7" lang="en"> <![endif]-->
    	<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
    	<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
    	<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
</head>
<?php flush(); ?>

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

			<nav role="navigation" aria-label="Main menu">
				<ul class="navigation-menu">
					<li class="navigation-item">
						<a href="/" class="nav-txt-item">Home</a>
						<a href="/" class="svg-anchor"><?php echo file_get_contents("echo get_template_directory_uri();/images/svg/home.svg"); ?></a>
					</li>
					<li class="navigation-item">
						<a href="/about" class="nav-txt-item">About</a>
						<a href="/about" class="svg-anchor"><?php echo file_get_contents("echo get_template_directory_uri();/images/svg/about-us.svg"); ?></a>
					</li>
					<li class="navigation-item">
						<a href="/contact" class="nav-txt-item">Contact</a>
						<a href="/contact" class="svg-anchor"><?php echo file_get_contents("echo get_template_directory_uri();/images/svg/contact.svg"); ?></a>
					</li>
					<li class="navigation-item dropdown-ignition">
						<a href="/payment" class="nav-txt-item">Pay Online</a>
						<a href="#" class="svg-anchor drop-marker"><?php echo file_get_contents("echo get_template_directory_uri();/images/svg/more.svg"); ?></a>
						<ul class="dropdown-menu">
							<li class="dropdown-item"><a href="/payment">Pay Online</a></li>
							<li class="dropdown-item"><a href="/new-patients">New Patients</a></li>
							<li class="dropdown-item"><a href="/after-hours">After-hours</a></li>
							<li class="dropdown-item"><a href="/resources">Resources</a></li>
						</ul>  <!-- .dropdown-menu -->
					</li>  <!-- .navigation-item  .dropdown-ignition -->
					<li class="navigation-item item-to-dropdown">
						<a href="/new-patients" class="nav-txt-item">New Patients</a>
					</li>
					<li class="navigation-item item-to-dropdown">
						<a href="/after-hours" class="nav-txt-item">After-hours</a>
					</li>
					<li class="navigation-item item-to-dropdown">
						<a href="/resources" class="nav-txt-item">Resources</a>
					</li>
				</ul>  <!-- .navigation-menu -->
			</nav>

		</div>  <!-- .head-container -->

		<main role="main">