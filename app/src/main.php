<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<section class="services">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-11">
                <div class="row no-gutters justify-content-between align-items-center">
                    <div class="col-auto px-2">
                        <div class="text-secondary font-helvetica fw-800 h3">We Ensure Great Results Every Time.</div>
                        <div class="h14 fw-400">With all the best and latest equipment we can ensure you will always be happy with the results!</div>
                    </div>
                    <div class="col-3 px-2">
                        <a href="#form" class="btn btn-block btn-secondary rounded-0 text-white py-3 py-md-4 fw-700">
                            Get Started With Us Today
                        </a>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-6 col-lg-4 px-2 py-4">
                        <?= renderImg("tile-grout.jpg", "lib", "w-100") ?>
                    </div>
                    <div class="col-md-6 col-lg-4 px-2 py-4">
                        <?= renderImg("all-stone.jpg", "lib", "w-100") ?>
                    </div>
                    <div class="col-md-6 col-lg-4 px-2 py-4">
                        <?= renderImg("high-pressure.jpg", "lib", "w-100") ?>
                    </div>
                    <div class="col-md-6 col-lg-4 px-2 py-4">
                        <?= renderImg("driveway-cleaning.jpg", "lib", "w-100") ?>
                    </div>
                    <div class="col-md-6 col-lg-4 px-2 py-4">
                        <?= renderImg("grout-sealing.jpg", "lib", "w-100") ?>
                    </div>
                    <div class="col-md-6 col-lg-4 px-2 py-4">
                        <?= renderImg("stone-floor.jpg", "lib", "w-100") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>