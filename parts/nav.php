	<nav role="navigation" aria-label="Main menu">
		<ul class="navigation-menu">
			<li class="navigation-item">
				<a href="/" class="nav-txt-item">Home</a>
				<a href="/" class="svg-anchor"><?php echo file_get_contents("images/svg/home.svg"); ?></a>
			</li>
			<li class="navigation-item">
				<a href="/about.php" class="nav-txt-item">About</a>
				<a href="/about.php" class="svg-anchor"><?php echo file_get_contents("images/svg/about-us.svg"); ?></a>
			</li>
			<li class="navigation-item">
				<a href="/contact.php" class="nav-txt-item">Contact</a>
				<a href="/contact.php" class="svg-anchor"><?php echo file_get_contents("images/svg/contact.svg"); ?></a>
			</li>
			<li class="navigation-item dropdown-ignition">
				<a href="/payment.php" class="nav-txt-item">Pay Online</a>
				<a href="#" class="svg-anchor drop-marker"><?php echo file_get_contents("images/svg/more.svg"); ?></a>
				<ul class="dropdown-menu">
					<li class="dropdown-item"><a href="/payment.php">Pay Online</a></li>
					<li class="dropdown-item"><a href="/new-patients.php">New Patients</a></li>
					<li class="dropdown-item"><a href="/after-hours.php">After-hours</a></li>
					<li class="dropdown-item"><a href="/resources.php">Resources</a></li>
				</ul>  <!-- .dropdown-menu -->
			</li>  <!-- .navigation-item  .dropdown-ignition -->
			<li class="navigation-item item-to-dropdown">
				<a href="/new-patients.php" class="nav-txt-item">New Patients</a>
			</li>
			<li class="navigation-item item-to-dropdown">
				<a href="/after-hours.php" class="nav-txt-item">After-hours</a>
			</li>
			<li class="navigation-item item-to-dropdown">
				<a href="/resources.php" class="nav-txt-item">Resources</a>
			</li>
		</ul>  <!-- .navigation-menu -->
	</nav>

</div>  <!-- .head-container -->

<main role="main">