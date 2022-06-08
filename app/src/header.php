<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.png" type="image/png">
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
		<div class="header-top-bar py-3">
			<div class="container">
				<div class="row justify-content-center justify-content-lg-between align-items-center">
					<div class="col-auto">
						<a href="./">
							<?= renderImg("logo.png", "logo") ?>
						</a>
					</div>
					<div class="col-auto">
						<div class="row justify-content-center justify-content-lg-end no-gutters align-items-center">
							<div class="col-12 col-md-auto ml-lg-3 mr-2 mr-lg-0">
								<a href="#form-quote" class="btn btn-block btn-primary rounded-0 text-white py-3 px-md-5">
									Get A Quote
								</a>
							</div>
							<div class="col-12 col-md-auto ml-lg-2">
								<a href="tel:<?= $phone_number ?>" class="btn btn-block btn-secondary rounded-0 text-white py-3 px-md-5">
									Call Us <?= $phone_number ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>