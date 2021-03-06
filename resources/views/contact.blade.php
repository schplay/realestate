@extends('layout')

@section('styles')
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
@endsection
@section('header')	
	<!-- Home -->
	<div class="home">
		<!-- Image by: https://unsplash.com/@breather -->
		<div class="home_background" style="background-image:url(images/contact.jpg)"></div>
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_title">
							<h2>single listings</h2>
						</div>
						<div class="breadcrumbs">
							<span><a href="index.html">Home</a></span>
							<span><a href="#"> Contact</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
	
@section('content')
	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6 contact_col">
					<div class="estate_contact_form">
						<div class="contact_title">say hello</div>
						<div class="estate_contact_form_container">
							<form id="estate_contact_form" class="estate_contact_form" action="https://formspree.io/david.d.myers@gmail.com" method="POST">
								<input id="estate_contact_form_name" class="estate_input_field estate_contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required." name="name">
								<input id="estate_contact_form_email" class="estate_input_field estate_contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required." name="email">
								<input id="estate_contact_form_address" class="estate_input_field estate_contact_form_subject" type="text" placeholder="Address" name="address">
								<input id="estate_contact_form_phone" class="estate_input_field estate_contact_form_subject" type="text" placeholder="Phone Number" name="phone">
								<textarea id="estate_contact_form_message" class="estate_text_field estate_contact_form_message" name="message" placeholder="How did you find out about us?"></textarea>
								<input id="estate_contact_form_budget" class="estate_input_field estate_contact_form_subject" type="number" placeholder="Budget" name="budget" min="0" step="0">
								<input type="text" name="_gotcha" style="display:none" />
								<div id="estate_contact_send_btn"  class="estate_contact_send_btn trans_200" value="Submit">send</div>
								<meta name="csrf-token" content="{{ csrf_token() }}">
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-3 contact_col">
					<div class="contact_title">contact info</div>
					<ul class="contact_info_list estate_contact">
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
							<div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
							<div class="contact_info_text">2556-808-8613</div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
							<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
							<div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>
						</li>
					</ul>
					<div class="estate_social">
						<ul class="estate_social_list">
							<li class="estate_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
							<li class="estate_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="estate_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li class="estate_social_item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
							<li class="estate_social_item"><a href="#"><i class="fab fa-behance"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 contact_col">
					<div class="contact_title">about</div>
					<div class="estate_about_text">
						<p>Lorem ipsum dolor sit amet, cons ectetur  quis ferme adipiscing elit. Suspen dis se tellus eros, placerat quis ferme ntum et, adipiscingvive rra sit ipsum amet lacus. </p>
						<p>Nam gravida quis placerat quis fe rme ntum et ferme sadipiscinge te llus semper augue.</p>
					</div>
				</div>

			</div>

		</div>

		<!-- Google Map -->
		
		<div class="estate_map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
				</div>
			</div>
		</div>

	</div>

	@endsection
	@section('scripts')
	<script src="js/contact_custom.js"></script>
	@endsection