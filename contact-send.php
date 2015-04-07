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

<?php include("parts/doctype.php"); ?>

	<div class="top-content">
		<div class="head-container">
			<?php include("parts/header.php"); ?>
			<?php include("parts/nav.php"); ?>
		</div>  <!-- .head-container -->

		<main role="main">
			<?php include("parts/sidebar.php"); ?>

			<section class="contact-submission-container">
				<?php
					$first_name = $_POST[ 'first_name' ];
					$last_name = $_POST[ 'last_name' ];
					$email = $_POST[ 'email' ];
					$phone = $_POST[ 'phone' ];
					$patient = $_POST[ 'patient' ];
					$message = $_POST[ 'message' ];

					// ***********************************
					//  Change for Live:
					//  office@drstevencaplan.com
					$to = "j.c.searson@gmail.com";
					// ***********************************
					$subject = 'Conact Form Submission';

					mail($to, $subject, $phone, $patient, $message, "From: " . $first_name . ' ' . $last_name);

					$thanks = "Thank you for your message $first_name!  We will be sure to get back to you soon.   If you have any other questions, please contact us by phone <i>(410) 601-8383</i> or by email <i>office@drstevencaplan.com</i>.  Have a great day!";
					$thanks .= "<br><br><br>";
					echo $thanks;
				?>
				<span class="return-address">
					<span class="signature">
						<?php
							echo "The Office of Dr. Caplan<br>";
						?>
						<div class="address-stamp">
							<?php
								echo "2411 West Belvedere<br>";
								echo "Suite 508<br>";
								echo "Baltimore, MD 21215";
							?>
						</div>
					</span>
					<span class="time-stamp">
						<div class="clock">
							<?php
								echo "$time";
							?>
						</div>
						<div class="calendar">
							<?php
								echo "$timestamp";
							?>
						</div>
					</span>
				</span>  <!-- .signature -->
			</section>  <!-- .contact-submission-container -->
		</main>
	</div>  <!-- .top-content -->

	<?php include("parts/footer.php"); ?>

</body>
</html>