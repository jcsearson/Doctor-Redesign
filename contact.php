<?php

	/*
		Template Name: Contact
	*/
	/*This template contains a contact form.*/
?>

<?php get_header(); ?>

	<section class="contact-page pre-form-block" role="region">
		<h2>Want to get in touch with us?</h2>
		<h4>Please read the following before filling out a form.</h4>
		<p>E-mail is for <em>non-urgent</em> messages only and will be checked on a daily basis during routine office hours.  Please call the office for more immediate assistance.</p>
		<p>For children experiencing illness during routine office hours, please call the office at <em>410-601-8383</em> so that an appointment may be scheduled, if necessary.  Every effort is made to ensure that your child is seen within <em>24 hours</em>.  Any messages left with office staff will receive a prompt response.</p>
	</section>  <!-- .main-info-upper   .main-info -->

	<section class="contact-page form-block">
		<form id="contact-forms" name="form1" class="main-contact-form" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="contact-send">
			<header class="contact-form-head">
				<h2>Send us a message or request:</h2>
				<p>Use this form to send a message to any staff member in our office.  Messages will be checked daily.  Please ensure you provide accurate information on how you may be reached.  This site is for <em>non-urgent</em> messages only.  Please call the office if a prompt response is required.  Please be aware that this is <em>not</em> a secure site.  Do not send confidential information.  By providing your contact email address, be aware that you are consenting to it's use.   Please call the office to discuss any concerns you may have <em>before</em> providing such information.</p>
				<p class="make-urgent">If this is an emergency, please visit an emergency room or call 911 for assistance!</p>
			</header>  <!-- .contact-form-head -->

			<ul class="contact-form-body">
				<li class="submission-item item1">
					<label for="Field1" class="first-name">
						Name
					</label></ br>
					<span class="input-field">
						<input
							id="Field1"
							name="first_name"
							type="text"
							class="text-input"
							value=""
							size="10"
							tabindex="1"
							placeholder="first"
							/>
					</span>  <!-- .input-field -->
					<span class="input-field">
						<input
							id="Field1"
							name="middle_name"
							type="text"
							class="text-input"
							value=""
							size="10"
							tabindex="2"
							placeholder="middle"
							/>
					</span>  <!-- .input-field -->
					<span class="input-field">
						<input
							id="Field1"
							name="last_name"
							type="text"
							class="text-input"
							value=""
							size="14"
							tabindex="3"
							placeholder="last"
							/>
					</span>  <!-- .input-field -->
				</li>  <!-- .item1 -->
				<li class="submission-item item2">
					<label for="Field3" class="email">
						Email
					</label>
					<span class="input-field">
						<input
							id="Field2"
							name="email"
							type="email"
							spellcheck="false"
							class="text-input"
							value=""
							maxlength="50"
							tabindex="4"
							placeholder="example@gmail.com"
							/>
					</span>  <!-- .input-field -->
				</li>  <!-- .item2 -->
				<li class="submission-item item3">
					<label for="Field3" class="phone">
						Phone Number
					</label>
					<span class="input-field">
						<input
							id="Field3a"
							name="phone1"
							type="text"
							class="text-input"
							value=""
							maxlength="4"
							placeholder="###"
							size="4"
							tabindex="5"
							/>
					</span>  <!-- .input-field -->
					<span><p>-</p></span>
					<span class="input-field">
						<input
							id="Field3b"
							name="phone2"
							type="text"
							class="text-input"
							value=""
							maxlength="3"
							placeholder="###"
							size="4"
							tabindex="6"
							/>
					</span>  <!-- .input-field -->
					<span><p>-</p></span>
					<span class="input-field">
						<input
							id="Field3c"
							name="phone3"
							type="text"
							class="text-input"
							value=""
							maxlength="4"
							placeholder="####"
							size="7"
							tabindex="7"
							/>
					</span>  <!-- .input-field -->
				</li>  <!-- .item3 -->
				<li class="submission-item item4">
					<label for="Field4" class="patient">
						Current Patient?
					</label>
					<span class="checkbox input-field">
						<input
							id="Field4"
							name="patient"
							type="radio"
							class="checkbox"
							value="Yes"
							tabindex="8"
							/>
							<label for="Field4">Yes</label>
						<input
							id="Field4"
							name="patient"
							type="radio"
							class="checkbox"
							value="No"
							tabindex="9"
							checked
							/>
							<label for="Field4">No</label>
					</span>  <!-- .checkbox  .input-field -->
				</li>  <!-- .item4 -->
				<li class="submission-item item5">
					<label for="Field5" class="message">
						Leave your message below. Please identify the sender of the message. For medication refill requests, please provide medication name, dosage and whether script is to be collected or should be mailed. Please provide pharmacy phone number where appropriate.
					</label>
					<span class="message-box input-field">
						<textarea
							id="Field5"
							name="message"
							class="text-input"
							spellcheck="true"
							cols="50" rows="10"
							tabindex="10"
							onkeyup=""
							placeholder="Enter Message Here"
							/></textarea>
					</span>  <!-- .input-field -->
				</li>  <!-- .item5 -->
				<li class="submission-item button">
					<span class="submit">
						<button id="saveForm" name="saveForm" class="submit-form" type="submit" value="submit" tabindex="11">Send</button>
					</span>  <!-- .submit -->
				</li>   <!-- .button -->
			</ul>  <!-- .contact-form-body -->
		</form>
	</section>  <!-- .contact-form-container -->

<?php get_footer(); ?>