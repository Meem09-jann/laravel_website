<!-- PAGE START -->
@extends('layouts.master')

<!-- ADD CSS HERE -->
@push('css')
    <style>

    </style>
@endpush

@section('content')
    <!-- PAGE CONTANT START -->
		<link href="{{ asset('assets/css/form.css') }}" rel="stylesheet" />
		<div class="container">
			<div class="Contact-Section wrapper ispage aboutsec1">
				<div class="row">
					<div class="col-sm-12">
						<div class="innertextleft">
							<h4 class="text-center">						
								Please fill-up the form below and we will get back to you about AWS account opening as soon as possible. 
								<br>If you have any query please call us at: +8801777174791
							</h4>
							<!-- <p class="p-style">
								TiCON System Ltd is an IT outsourcing and software development
								company, also provide some communication services and consultancy .
								Our company registered in Korea & Bangladesh .
							</p> -->
						</div>
					</div>
				</div>
				<div class="row drop-message">
					<div class="container contact-form">
						<div class="contact-image">
							<img
								src="{{ asset('assets/img/header.png')}}"
								alt="Contact us"
							/>
						</div>

						<div class="row">

							<!-- SHOW VALIDATION ERRORS IF ANY -->
						


							<form method="post" action="register">
								@csrf
								<!-- FIRST NAME -->
								<div class="col-md-6 col-sm-12 section">
									<input type="" class="form-control" name="first_name" placeholder="First name" required>
								</div>

								<!-- LAST NAME -->
								<div class="col-md-6 col-sm-12 section">
									<input type="" class="form-control" name="last_name" placeholder="Last Name" required>
								</div>

								<!-- EMAIL -->
								<div class="col-md-6 col-sm-12 section">
									<input type="" class="form-control" name="email" placeholder="Email" required>
								</div>

								<!-- PHONE -->
								<div class="col-md-6 col-sm-12 section">
									<input type="" class="form-control" name="phone" placeholder="Phone Number" required>
								</div>

								<!-- ADDRESS -->
								<div class="col-md-6 col-sm-12 section">
									<input type="" class="form-control" name="address" placeholder="Address">  
								</div>

								<!-- OCCUPATION -->
								<div class="col-sm-12 col-md-6 section">
									<select	class="form-control btn btn-default" id="occupation" name="occupation" required="required">
										<option value="" selected disabled>Please select Occupation</option>
										<option value="student">Student</option>
										<option value="startup">Startup/Entrepreneur/SME</option>
										<option value="Jobholder">Jobholder</option>
									</select>
								</div>

								<!-- INSTITUTE NAME -->
								<div class="col-md-12 col-sm-12 occupation section">
									<div class="student institute">
										<input type="" class="form-control" id="instituteName" placeholder="University Name" name="institute_name">
									</div>
									<!-- <div class="jod-holder">
										<input type="" class="form-control" id="" placeholder="Office Name">
									</div> -->
								</div>

								<!-- PREVIOUS EXPERIENCE -->
								<div class="col-md-12 col-sm-12 radio-data">
									<p class="col-md-12 col-sm-12 text-left zero">
										Do you have any previous experience of using AWS Cloud Services?  <label class="radio-inline">
											<input type="radio" name="previous_experience" value="1" checked>Yes
										</label>
										<label class="radio-inline">
											<input type="radio" name="previous_experience" value="0">No
										</label>
									</p>
								</div>

								<!-- PURPOSE -->
								<div class="col-md-12 col-sm-12 section">
									<input type="" class="form-control" name="purpose" placeholder="What is your intended use/ purpose of using, AWS Cloud Services? " required>
								</div>

								<!-- CURRENT USE-->
								<div class="col-md-12 col-sm-12 section">
									<input type="" class="form-control" name="current_use" placeholder="What hosting service / environment do you currently use?" required>
								</div>

								<!-- AGREEMENT -->
								<div class="col-md-12 col-sm-12 section">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
									<label class="form-check-label" for="defaultCheck1">
										I accept the Terms and Conditions of TiconSYS Ltd.
									</label>
								</div>

								<!-- SUBMIT -->
								<div class="row text-center">
									<button type="submit">Submit</button>
								</div>
								<br>
								<br>
							</form>
						</div>
						
						<br>
					</div>
				</div>
			</div>
		</div>
    <!-- PAGE CONTANT END -->
@endsection

<!-- ADD JS HERE -->
@push('js')
	<script type="text/javascript" src="{{ asset('assets/js/registration.js') }}"></script>
@endpush

<!-- PAGE END -->
