<?php
	get_header();
?>


<nav class="navbar fixed-top navbar-light bg-faded">
  <div class="container">
  	<div class="logo">
   	<div class="logo1">
		<!-- // <img src="<?php echo get_theme_file_uri('./images/logo.png');?>"> -->
		<h2 class="lgtext">UNDAUNTED</h2>
		<p class="text-center caption">Web Services</p>
	</div>
	</div>
		<?php 
			wp_nav_menu();
		?>

	</div>
	
</nav>
<div class="heroImage">
	<div class="hero-text container">
		<h1>UNDAUNTED</h1>
		<p>WEB SERVICES</p>
		<p class="text-right caption1">-Be Undaunted With Us!</p>
	</div>
</div>
<div class="who">
	<div class="container">
		
			<h1 class="text-center">Who are we?</h1>
			<p class="text-center"><span class="quote">“ </span>We are professional web developers and digital marketers, aiming to help businesses to take advantage of online platform to reach out to more customers and generate more leads and build customers for life.<span class="quote"> "</span></p>
	</div>

</div>
<div class="container">

	<div class="services">

		<h1 class="text-center">Our Services</h1>

		<div class="row pad">
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 d-flex justify-content-center pad1">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="..." alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 d-flex justify-content-center pad1">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="..." alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 d-flex justify-content-center pad1">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="..." alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>
		

		
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 d-flex justify-content-center pad1">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="..." alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 d-flex justify-content-center pad1">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="..." alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 d-flex justify-content-center pad1">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="..." alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Card title</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>
		</div>

		<div class="row d-flex justify-content-center all-btn">
			<a href="#" class="btn btn-primary bpad">View All Services</a>
		</div>
	</div>	
</div>

<div class="contactus">
	<div class="container">
		
			<h1 class="text-center">Let's talk</h1>
			<div class="row d-flex justify-content-center">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
			<form>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <!-- <label for="fname">First Name<span class="red">*</span></label> -->
				      <input type="text" class="form-control" id="fname" placeholder="First Name*">
				    </div>
				    <div class="form-group col-md-6">
				      <!-- <label for="lname">Last Name<span class="red">*</span></label> -->
				      <input type="text" class="form-control" id="lname" placeholder="Last Name*">
				    </div>
				  </div>
				  <div class="form-group">
				    <!-- <label for="email">E-mail<span class="red">*</span></label> -->
				    <input type="email" class="form-control" id="email" placeholder="Enter your email id*">
				    
				  </div>
				  <div class="form-row">
				  <div class="form-group col-md-6">
				    <!-- <label for="mobile">Mobile Number<span class="red">*</span></label> -->
				    <input type="mobile" class="form-control" id="mobile" placeholder="Mobile Number*">
				  </div>
				  <div class="form-group col-md-6">
				      <!-- <label for="interest">Interested in<span class="red">*</span></label> -->
				      <select id="interest" class="form-control">
				        <option selected>-- Interested In --</option>
				        <option name="marketing">Marketing</option>
				        <option name="web_services">Web Services</option>
				      </select>
				    </div>
				</div>
				 <div class="form-group col-md-12">
				 	<div class="row">
				 	<!-- <label for="message">Message<span class="red">*</span></label> -->
				 	<textarea id="message" class="col-md-12" rows="6" placeholder="Enter your message here*" id="message"></textarea>
				 	<small>We'll never share your details with anyone.</small>
				 </div>
				 </div>
				  <button type="submit" class="btn btn-primary col-12">Submit</button>
				</form>
				</div>
			</div>
			<div class="row text-center">
				<h4 class="col-12" style="padding-top:10px;">or</h4>
			</div>
			<div class="row">
				<div class="col-12 text-center orcontact">
					<h1>Contact us at:</h1>

					<p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;<a href="tel:918686195154" class="black">+91 8686195154</a></p>
					<p><i class="fa fa-envelope red"></i>&nbsp;<a href="mailto:akhil.munagala2@gmail.com" class="black">akhil.munagala2@gmail.com</a></p>
					
				</div>
			</div>
			
	</div>

</div>
<?php
	get_footer();
?>