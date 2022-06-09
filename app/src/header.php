<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.jpg" type="image/jpg">
	<title><?= $site ?></title>
	<link rel="stylesheet" href="./assets/css/main.css?v=0.1">

	<!-- Recaptcha Here -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse').value = token;
			});
		});
	</script>

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-53QJ99B');
	</script>
	<!-- End Google Tag Manager -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42792316-100"></script>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());
		gtag('config', 'AW-10929575584');
		gtag('config', 'UA-42792316-100');
	</script>

	<!-- Global site tag (gtag.js) - Google Ads -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10929575584"></script>

	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());
		gtag('config', 'AW-10929575584');
	</script>

</head>

<body>
	<!-- Google Tag Manager (noscript) -->

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53QJ99B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<!-- End Google Tag Manager (noscript) -->
	<header>
		<div class="header-top-bar">
			<div class="container-fluid">
				<div class="row justify-content-end">
					<div class="col-12 col-xxl-11 pr-xl-5">
						<div class="row no-gutters justify-content-center justify-content-md-between align-items-center">
							<div class="col-auto">
								<a href="./">
									<?= renderImg("logo.png", "logo") ?>
								</a>
							</div>
							<div class="col-5 col-lg-6 letter-spacing-01 h9 px-lg-6 text-capitalize text-center py-4 py-md-0 d-none d-md-block d-lg-none">
								<span class="fw-700">With over 20 Years of Experience</span> in The industry
							</div>
							<div class="col-auto col-md-12 col-lg-auto pt-md-4 pt-xl-0">
								<div class="row justify-content-center justify-content-xl-end no-gutters align-items-center">
									<div class="col-auto letter-spacing-01 h9 px-lg-6 text-capitalize text-center py-4 py-md-0 d-md-none d-xl-block">
										<span class="fw-700">With over 20 Years of Experience</span> in The industry
									</div>
									<div class="col-6 col-md-auto px-1">
										<a href="tel:<?= $phone_number ?>" class="btn btn-block border-secondary bordered text-secondary px-md-5">Call Now</a>
									</div>
									<div class="col-6 col-md-auto px-1">
										<a href="#form" class="btn btn-block btn-secondary py-3 px-md-4">
											<div>Get <span class="fw-700">Free Quote</span></div>
										</a>
									</div>
									<div class="col-12 col-md-auto pt-2 pt-md-0 px-1">
										<a href="https://www.facebook.com" class="btn btn-block btn-tertiary py-3 px-md-4">
											<div><?= renderImg("facebook.png", "icons") ?></div>
											<div class="pt-1 pl-3">Find Us On Facebook</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner">
			<div class="container-fluid">
				<div class="row px-xxl-5 justify-content-lg-center">
					<div class="col-xl-8 banner-content">
						<div class="row no-gutters align-items-end h-100 justify-content-md-center">
							<div class="col-lg-8 pr-xxl-5">
								<div class="description">
									<div class="text-white h10 font-helvetica fw-600">The Best Branded Products On Your Surfaces</div>
									<div class="h2 fw-400 text-white line-height-1 py-4"><span class="fw-700">NSW Floor Care</span> Provides Specialised Cleaning &amp; Sealing</div>
									<div class="text-white h12 font-helvetica fw-600">No job too big or too small. At NSW Floor Care we service residential, commercial and all strata.</div>
									<div class="experience-banner">
										<div class="row no-gutters">
											<div class="col-md-8">
												<div class="h6 fw-700 line-height-1">With Over 20 Years Of Experience In The Industry.</div>
												<div class="fw-500 h15 py-3">If you need advice on cleaning & sealing your old or new floors, or need a professional to do it for you, then you have come to the right place.</div>
												<div class="row no-gutters">
													<div class="col-auto d-flex align-items-center pr-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
															<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
														</svg>
														<div class="pl-2 h14 fw-700">Fixed Upfront Pricing</div>
													</div>
													<div class="col-auto d-flex align-items-center pl-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
															<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
														</svg>
														<div class="pl-2 h14 fw-700">Affordable Rates</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div data-aos="slide-up"><?= renderImg("broom.png", "lib") ?></div>
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-xl-4 pl-xxl-5 py-5 py-xl-3">
						<div class="letter-spacing-01 text-primary h4 line-height-1 text-center">NSW Floor Care <span class="fw-700">Provides Specialised Cleaning &amp; Sealing</span></div>
						<div class="text-center h11 py-3">Simply fill in our form &amp; we'll get back to you as soon as possible</div>
						<form action="./src/form" method="POST">
							<input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
							<div class="row no-gutters">
								<div class="col-12">
									<input class="form-control border-0 rounded-0" type="text" placeholder="Name" name="name" required>
								</div>
								<div class="col-12 pt-2 pt-md-3">
									<input class="form-control border-0 rounded-0" type="tel" placeholder="Phone" name="phone" required>
								</div>
								<div class="col-12 pt-2 pt-md-3">
									<input class="form-control border-0 rounded-0" type="text" placeholder="Postcode" name="postcode" required>
								</div>
								<div class="col-12 pt-2 pt-md-3">
									<input class="form-control border-0 rounded-0" type="email" placeholder="Email Address" name="email" required>
								</div>
								<div class="col-12 pt-2 pt-md-3">
									<select name="service" class="form-control border-0 rounded-0" required>
										<option value="" disabled selected>Service</option>
										<option>Tile & Grout Cleaning</option>
										<option>All Stone Floor Cleaning & Sealing</option>
										<option>High Pressure Cleaning</option>
										<option>Driveway Cleaning & Sealing</option>
										<option>Grout Sealing</option>
										<option>Stone Floor Restoration</option>
										<option>All Hard floor surface Cleaning</option>
										<option>All natural stone cleaning and sealing</option>
										<option>Walls and floors cleaning</option>
									</select>
								</div>
								<div class="col-12 pt-2 pt-md-3">
									<button type="submit" class="btn btn-block bg-primary text-white form-control rounded-0 fw-700 h10">
										Get Free Quote
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>