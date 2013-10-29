<?php include("header.php"); ?>

<header></header>

<section id="section-logo" class="row">
	<div class="container">

		<div class="col-lg-12">
			<div id="logo-holder">
				<div class="logo"></div>
				<div class="title">Motion Revolution</div>
				<div class="location">Boston, MA</div>
			</div>
		</div>

	</div>
</section>

<section class="row">
	<div class="container">

		<div id="tagline" class="col-md-offset-2 col-md-8"><b>Motion Revolution</b> is a community of movements artists, technology innovators, and media creators united under one roof in Boston, MA.</div>

		<div class="feature col-sm-4">
			<div class="feature-icon move"></div>
			<h3>Move.</h3>
			<p>Unleash your human potential through parkour, freerunning, tricking and dance classes and open gym sessions. The movement center features:</p>
			<ul>
				<li>Spring floor and dance floor</li>
				<li>Obstacles for all levels of training</li>
				<li>Trampoline and foam pit</li>
				<li>Bouldering wall</li>
			</ul>
		</div>

		<div class="feature col-sm-4">
			<div class="feature-icon build"></div>
			<h3>Build.</h3>
			<p>Work on your latest project or with your startup team in a unique environment. Shared resources mean low overhead costs. The innovation center features:</p>
			<ul>
				<li>Hackerspace/coworking desks</li>
				<li>Private offices and storage space</li>
				<li>Workshop and meeting room</li>
				<li>Shared lounge and event space</li>
			</ul>
		</div>

		<div class="feature col-sm-4">
			<div class="feature-icon create"></div>
			<h3>Create.</h3>
			<p>Immerse yourself in the world of digital media, join forces with fellow creatives and designers, or take a workshop and learn a new skill. The multimedia center features:</p>
			<ul>
				<li>Equipment rentals</li>
				<li>Audio/video production suite</li>
				<li>Photography studio</li>
			</ul>
		</div>

	</div>
</section>

<!--<section class="row">
	<div class="container">

		<img id="ven-diagram" src="" />

	</div>
</section>-->

<section class="row">
	<div class="container">

		<div class="col-lg-12">
			<h1 class="block-heading">Drop us a line.</h1>
		</div>

		<div class="col-lg-8">
			<form id="form-contact" method="post" action="sendEmail.php">
                                <input type="text" name="name" id="name" value="Your name" onfocus="if (this.value == 'Your name') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Your name';}"/>
                                <input type="text" name="email" id="email" value="Your email" onfocus="if (this.value == 'Your email') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Your email';}"/>
                                <input type="text" name="subject" id="subject" value="Subject" onfocus="if (this.value == 'Subject') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Subject';}"/>
                                <textarea name="message" id="message" rows="6" cols="30" onfocus="if (this.value == 'Enter your message') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your message';}">Enter your message</textarea>	
				<input type="submit" name="submit" id="submit" value="Submit!" />
				<div class="clearfix"></div>
			</form>
		</div>

		<div class="col-lg-4">
			<div class="contact-sidebar">
				<h2>Get involved:</h2>
				<p>The Motion Collaborative is an early stage concept. If you would like to help us make it into reality, please fill out the following form and send it in:</p>
				<a class="link" data-toggle="modal" data-target="#modal-signup">The 30-second signup form</a>

				<h2>Connect</h2>
				<a class="icon-twitter" href="#" target="_blank">Twitter</a>
				<a class="icon-facebook" href="#" target="_blank">Facebook</a>
				<a class="icon-instagram" href="#" target="_blank">Instagram</a>
			</div>
		</div>

	</div>
</section>

<?php include("footer.php"); ?>
