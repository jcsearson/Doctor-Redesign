<?php include("parts/doctype.php"); ?>

	<?php include("parts/header.php"); ?>
	<?php include("parts/nav.php"); ?>

	<?php include("parts/sidebar.php"); ?>

	<section class="contact-submission-container">
		<?php
			$first_name = $_POST[ 'first_name' ];
			$middle_name = $_POST[ 'middle_name' ];
			$last_name = $_POST[ 'last_name' ];
			$email = $_POST[ 'email' ];
			$patient = $_POST[ 'patient' ];

			/* Combines 3 parts of Phone input into 1 for Message */
			$phone1 = $_POST[ 'phone1' ];
			$phone2 = $_POST[ 'phone2' ];
			$phone3 = $_POST[ 'phone3' ];
			$phone = '(' . $phone1 . ') ' . $phone2 . ' - ' . $phone3 . '.';

			/* Formatting the Name based on whether they have a middle name */
			if ($_POST[ 'middle_name' ]) {
				$full_name = $first_name . ' ' . $middle_name . ' ' . $last_name;
			} else {
				$full_name = $first_name . ' ' . $last_name;
			}

			/* Formatting Premptive Text Based on if they are a current patient or not */
			if ($patient === 'Yes') {
				$message .= "<hr><em>Patient's Name: </em>" . $full_name . '.<br>';
			} else {
				$message .= "<hr><em>Name: </em>" . $full_name . '.<br>';
			}

			/* Formatting the Message to include all Variables */
			$message .= '<em>Email: </em>' . $email .'<br>';
			$message .= '<em>Phone: </em>' . $phone . '<br>';
			$message .= '<em>Current Patient? </em>' . $patient . '.<br><br>';
			$message .= '<em>Message: </em>' . $_POST[ 'message' ];

			// ***********************************
			//  Change for Live:
			//  office@drstevencaplan.com
			$to = "j.c.searson@gmail.com";
			// ***********************************
			$subject = 'Conact Form Submission -- Dr. Steven E. Caplan';
			$headers = 'From: ' . $full_name;

			mail($to, $subject, $message, $headers);

			$thanks = "Thank you for your message $first_name, we will be sure to get back to you soon.  Please check and make sure that all of the information below is correct.  If you have any further questions, our front office can be reached by phone <i>(410) 601-8383</i> or by email <i>office@drstevencaplan.com</i>.  Have a great day!";
			$thanks .= "<br><br>" . $message . "<br><br><br>";
			echo $thanks;
		?>
		<span class="return-address">
			<span class="signature">
				<?php
					echo "The Office of Dr. Caplan<br>";
				?>
				<div class="address-stamp">
					<?php
						echo "2411 West Belvedere<br>Suite 508<br>Baltimore, MD 21215";
					?>
				</div>
			</span>
			<span class="time-stamp">
				<div class="clock">
					<?php
						echo $time;
					?>
				</div>
				<div class="calendar">
					<?php
						echo $timestamp;
					?>
				</div>
			</span>
		</span>  <!-- .signature -->
	</section>  <!-- .contact-submission-container -->

<?php include("parts/footer.php"); ?>