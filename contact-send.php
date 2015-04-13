<?php

	/*
		Template Name: Contact-send
	*/
	/*This template is the submission confirmation page for the contact form.*/
?>

<?php get_header(); ?>

	<?php get_sidebar(); ?>

	<section class="contact-submission-container">
		<?php
			/* Assign inputs to variables, then test all inputs for proper completion, then do nothing if passes test. */
			/* Check that a first name was entered and that it was valid. */
			if (empty($_POST[ 'first_name' ])) {
				$emptyNameError = "A first name is required.";
			} else {
				$first_name = test_input($_POST[ 'first_name' ]);
				if (!preg_match("/^[a-zA-Z ]*$/	", $first_name)) {
					$wrongNameError = "Only letters and spaces allowed.";
				}
			}
			/* Optional - Only check to make sure its letters - not characters. */
			$middle_name = test_input($_POST[ 'middle_name' ]);
			if (!preg_match("/^[a-zA-Z ]*$/	", $middle_name)) {
				$nameError = "Only letters and spaces allowed.";
			}
			/* Check that a last name was entered and that it was valid. */
			if (empty($_POST[ 'last_name' ])) {
				$emptyNameError = "A last name is required."
			} else {
				$last_name = test_input($_POST[ 'last_name' ]);
				if (!preg_match("/^[a-zA-Z ]*$/	", $last_name)) {
					$nameError = "Only letters and spaces allowed.";
				}
			}
			/* Check that an email was entered and it is a valid email address. */
			if (empty($_POST[ 'email' ])) {
				$emptyEmailError = "Please enter an email address.";
			} else {
				$email = test_input($_POST[ 'email' ]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  				$emailError = "The email you entered is not valid.";
				}
			}
			/* No check needed, default value set to "No". */
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
				$message .= "<hr><strong>Patient's Name: </strong>" . $full_name . '.<br>';
			} else {
				$message .= "<hr><strong>Name: </strong>" . $full_name . '.<br>';
			}

			/* Formatting the Message to include all Variables */
			$message .= '<strong>Email: </strong>' . $email .'<br>';
			$message .= '<strong>Phone: </strong>' . $phone . '<br>';
			$message .= '<strong>Current Patient? </strong>' . $patient . '.<br><br>';
			$message .= '<strong>Message: </strong>' . $_POST[ 'message' ];

			// ***********************************
			//  Change for Live:
			//  office@drstevencaplan.com
			$to = "j.c.searson@gmail.com";
			// ***********************************
			$subject = 'Contact Form Submission -- Dr. Steven E. Caplan';
			$from = 'From: ' . $full_name;

			mail($to, $subject, $message, $from);

			$thanks = "Thank you for your message $first_name, we will be sure to get back to you soon!   Please check and make sure that all of the information below is correct.  If you have any other questions, our front office can be reached by phone <i>(410) 601-8383</i> or by email <i>office@drstevencaplan.com</i>.  Have a great day!";
			$thanks .= "<br><br>" . $message . '<hr><br><br><br>';
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

<?php get_footer(); ?>