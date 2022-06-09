<footer>
	<div class="section-footer-top">
		<div class="container">
			<div class="row justify-content-center justify-content-lg-between align-items-center">
				<div class="col-auto pb-2 pb-md-0">
					<div class="row no-gutters text-white justify-content-center align-items-center">
						<div class="col-5 col-md-auto px-md-2">
							<a href="#form" class="btn btn-block btn-primary rounded-pill">Get Started</a>
						</div>
						<div class="col col-md-auto pl-3 pr-2 px-md-4 fw-500 h10">Let our professional team help you</div>
					</div>
				</div>
				<div class="col-auto pt-2 pt-md-0">
					<div class="row no-gutters text-white justify-content-center align-items-center">
						<div class="col-5 col-md-auto px-md-2">
							<a href="tel: <?= $phone_number ?>" class="btn btn-block btn-primary rounded-pill">Call Now</a>
						</div>
						<div class="col col-md-auto pl-3 pr-2 px-md-4 fw-500 h10">Quality services with affordable prices</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-footer-bottom">
		<div class="container">
			<div class="row justify-content-center justify-content-lg-between align-items-center">
				<div class="col-auto">
					<div class="row no-gutters mb-3 mb-md-0 justify-content-center">
						<div class="col-auto text-center">Copyright <?= date('Y') ?></div>
						<div class="col-auto px-2 px-md-4 px-xl-6 text-primary">|</div>
						<div class="col-auto text-center"><?= $site ?></div>
						<div class="col-auto px-2 px-md-4 px-xl-6 text-primary">|</div>
						<div class="col-auto text-center">All Rights Reserved
						</div>
					</div>
				</div>
				<div class="col-auto">
					<div class="row no-gutters justify-content-center justify-content-lg-end align-items-center">
						<div class="col-auto">Terms &amp; Conditions</div>
						<div class="col-auto px-2 px-md-4 px-xl-6 text-primary">|</div>
						<div class="col-auto">Privacy Policies</div>
						<div class="col-auto pl-lg-5 pl-xl-7 pt-4 pt-md-0"><?= renderImg("payment-methods.png","icons") ?></div>
						<!-- <div class="col-auto pl-lg-5">
							<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
								<?= renderImg("aiims1.png", "logo") ?>
							</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="javascript:" id="return-to-top">
	<div class="d-flex justify-content-center align-items-center h-100 w-100">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
		</svg>
	</div>
</a>
<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
</body>

</html>