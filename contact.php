<?php

	/*
		Template Name: Contact
	*/
	/*This template contains a contact form.*/
?>

<?php get_header(); ?>

	<?php  // specifications for posts
		$args = array(
			'post_type'				=> 'articles',
			'cat'					=> '4',
		   	'posts_per_page'      	=> '1'
		);
		$query = new WP_Query($args);
		if ($query->have_posts()) : while($query->have_posts()) : $query->the_post();
	?>

	<section class="contact-page pre-form-block" role="region">
		<h2><?php the_field('article_title_top'); ?></h2>
		<p><?php the_field('top_section'); ?></p>
	</section>  <!-- .main-info-upper   .main-info -->

	<?php
		endwhile; endif;
		wp_reset_query();
	?>

	<section class="contact-page form-block">
		<form id="contact-forms" name="form1" class="main-contact-form" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="contact-send">
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
						Message
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