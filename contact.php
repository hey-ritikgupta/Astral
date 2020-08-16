<?php include('header.php') ?>

<!-- Page Title START -->
<div class="page-title-section" style="background-image: url('img/content/breadcrumb.jpg');">
	<div class="black-overlay-70"></div>
	<div class="container">
		<h1>Contact us</h1>
		<p>Experience you can trust, service you can count on.</p>
	</div>
</div>
<!-- Page Title END -->

<div class="section-wrapper section-wrapper--sm">
	<div class="container">
		<div class="row mt-40 contact-text">
			<div class="col-md-4 col-sm-4 col-12">
				<div class="feature-float clearfix">
					<div class="feature-float-icon">
						<i class="icon-cursor"></i>
					</div>
					<div class="feature-float-content">
						<h4>Find us</h4>
						<a href="https://goo.gl/maps/sGvcfyNKuApmJr5N8">Astral SteriTech Pvt. Ltd <br>911, G.I.D.C., Makarpura,<br>
Vadodara, Gujarat, India 390010</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-12">
				<div class="feature-float clearfix">
					<div class="feature-float-icon">
						<i class="icon-speech-bubbles"></i>
					</div>
					<div class="feature-float-content">
						<h4>Write Us</h4>
						<a href="mailto:admin@astralsteritech.com">admin@astralsteritech.com</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-12">
				<div class="feature-float clearfix">
					<div class="feature-float-icon">
						<i class="icon-smartphone"></i>
					</div>
					<div class="feature-float-content">
						<h4>Call Us</h4>
						<a href="tel:02652638063">+91-265-2638063</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Let's Talk START-->
<div class="section-wrapper section-wrapper--gray" id="form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 col-lg-8 mb-4">
				<h3 class="s-subtitle-top textcolor text-center">Let's Talk</h3>
				<h3 class="s-title-lg text-center">Have Any Questions?</h3>
			</div>
		</div>
		<!-- Form Start -->
		<form class="white-form mt-3"  method="post" autocomplete="off" name="google-sheet" id="contact-form">
			<div class="row">
				<div class="col-md-4 col-sm-6 col-12">
					<input type="text" name="Name" placeholder="Name *" required>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<input type="email" name="Email" placeholder="E-mail *" required>
				</div>
				<div class="col-md-4 col-sm-12 col-12">
					<input type="text" name="Subject" placeholder="Subject*" required>
				</div>
				<div class="col-md-12">
					<textarea name="Message" placeholder="Message *" required></textarea>
				</div>
				<div class="col-md-12 text-center">
					<button type="submit" name="submit" class="button-primary button-xl hvr-sweep-to-right mt-3">Send Message</button>
				</div>
			</div>
		</form>
		<!-- Form End -->
	</div>
</div>
<!--Let's Talk END-->

<div class="map">
<!--
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2z0JvQvtC90LTQvtC9LCDQktC10LvQuNC60L7QsdGA0LjRgtCw0L3QuNGP!5e0!3m2!1sru!2s!4v1587626950211!5m2!1sru!2s" height="400" width="100%" style="border:0;">
	</iframe>
-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7385.642547037162!2d73.192347!3d22.246859!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc42e6b7b35cb%3A0x92c6e8dd7441ac77!2sAstral%20Steri%20Tech%20Private%20Limited!5e0!3m2!1sen!2sin!4v1593638527588!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbwCcwDPhaY0-m-GevlJ_f17TGZsx8W-2llqi8eBUxiCJhklvLH1/exec'
            const form = document.forms['google-sheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for Contacting us..!"))
                .catch(error => console.error('Error!', error.message))
            })


</script>

<?php include('footer.php') ?>