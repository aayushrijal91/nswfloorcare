<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<section class="services">
    <div class="curved-arrow"><?= renderImg("curved-arrow.png", "icons") ?></div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-11">
                <div class="row no-gutters justify-content-between align-items-center pb-2">
                    <div class="col-12 col-md-7 col-lg-auto px-2">
                        <div class="text-secondary font-helvetica fw-800 h3">We Ensure Great Results Every Time.</div>
                        <div class="h14 fw-400">With all the best and latest equipment we can ensure you will always be
                            happy with the results!</div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 px-2 pt-4 pt-md-0">
                        <a href="#form" class="btn btn-block btn-secondary rounded-0 text-white py-2 py-md-3 py-lg-4 fw-700">
                            Get Started With Us Today
                        </a>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-6 col-lg-4 px-2 py-4">
                        <div class="service-card">
                            <?= renderImg("tile-grout.jpg", "lib", "w-100") ?>
                            <div class="title">Tile &amp; Grout Cleaning</div>
                            <div class="description">
                                Cleaning tile & grout takes a combination of specialised industrial equipment and heavy
                                duty cleaning products. By using specially developed cleaning solutions & high pressure
                                van mounted cleaning equipment we are able to clean your tiles & grout to the highest
                                standards.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 px-2 py-4">
                        <div class="service-card">
                            <?= renderImg("all-stone.jpg", "lib", "w-100") ?>
                            <div class="title">All Stone Floor Cleaning &amp; Sealing</div>
                            <div class="description">
                                All Porous stone should be sealed. Sealing your stone helps prevent & reduce staining.
                                It provides a barrier for a short time to prevent stains penetrating and helps reduce
                                the damage caused from the stain itself.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 px-2 py-4">
                        <div class="service-card">
                            <?= renderImg("high-pressure.jpg", "lib", "w-100") ?>
                            <div class="title">High Pressure Cleaning</div>
                            <div class="description">
                                For external areas like driveways, pavements and brickwork. High Pressure washing is a
                                great way to clean the grime from concrete driveways, pathways and patios. By using a
                                pressure washer, you'll eliminate oil stains, slippery moss and algae, and the danger
                                that someone will slip.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 px-2 py-4">
                        <div class="service-card">
                            <?= renderImg("driveway-cleaning.jpg", "lib", "w-100") ?>
                            <div class="title">Driveway Cleaning &amp; Sealing</div>
                            <div class="description">
                                We clean and seal various types of stone and other materials both internal, external,
                                walls and floors. Including
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 px-2 py-4">
                        <div class="service-card">
                            <?= renderImg("grout-sealing.jpg", "lib", "w-100") ?>
                            <div class="title">Grout Sealing</div>
                            <div class="description">
                                We clean and seal various types of stone and other materials both internal, external,
                                walls and floors. Including
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 px-2 py-4">
                        <div class="service-card">
                            <?= renderImg("stone-floor.jpg", "lib", "w-100") ?>
                            <div class="title">Stone Floor Restoration</div>
                            <div class="description">
                                At NSW floor care we can provide minor stone restoration before applying a premium
                                sealer.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="see-more-services">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-4 px-2 py-4">
                            <div class="service-card">
                                <?= renderImg("tile-grout.jpg", "lib", "w-100") ?>
                                <div class="title">Tile &amp; Grout Cleaning</div>
                                <div class="description">
                                    Cleaning tile & grout takes a combination of specialised industrial equipment and heavy
                                    duty cleaning products. By using specially developed cleaning solutions & high pressure
                                    van mounted cleaning equipment we are able to clean your tiles & grout to the highest
                                    standards.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 px-2 py-4">
                            <div class="service-card">
                                <?= renderImg("tile-grout.jpg", "lib", "w-100") ?>
                                <div class="title">Tile &amp; Grout Cleaning</div>
                                <div class="description">
                                    Cleaning tile & grout takes a combination of specialised industrial equipment and heavy
                                    duty cleaning products. By using specially developed cleaning solutions & high pressure
                                    van mounted cleaning equipment we are able to clean your tiles & grout to the highest
                                    standards.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 px-2 py-4">
                            <div class="service-card">
                                <?= renderImg("tile-grout.jpg", "lib", "w-100") ?>
                                <div class="title">Tile &amp; Grout Cleaning</div>
                                <div class="description">
                                    Cleaning tile & grout takes a combination of specialised industrial equipment and heavy
                                    duty cleaning products. By using specially developed cleaning solutions & high pressure
                                    van mounted cleaning equipment we are able to clean your tiles & grout to the highest
                                    standards.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center pt-3 pt-md-4">
                    <div class="col-12">
                        <button id="show-more-services" class="btn btn-block btn-secondary rounded-0 text-white py-2 py-lg-4 h10 fw-700 text-uppercase">
                            See More Services
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="brands">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-11">
                <div class="row no-gutters justify-content-between align-items-center">
                    <div class="col-12 col-lg-auto h7 text-black text-center pb-3 pb-lg-0">
                        <span class="fw-700">Brands</span> We Work With
                    </div>
                    <div class="col-lg-auto">
                        <div class="row no-gutters align-items-center">
                            <div class="col-6 col-md col-lg-auto px-4 py-2 py-md-0 text-center"><?= renderImg("klindex.png", "logo", "px-2") ?></div>
                            <div class="col-6 col-md col-lg-auto px-4 py-2 py-md-0 text-center"><?= renderImg("spirit.png", "logo", "px-2") ?></div>
                            <div class="col-6 col-md col-lg-auto px-4 py-2 py-md-0 text-center"><?= renderImg("master.png", "logo", "px-2") ?></div>
                            <div class="col-6 col-md col-lg-auto px-4 py-2 py-md-0 text-center"><?= renderImg("whyte.png", "logo", "px-2") ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="quick-contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-11">
                <div class="row no-gutters justify-content-between align-items-end">
                    <div class="col-lg-5">
                        <div class="h1 fw-700 text-white letter-spacing-n04 line-height-3">No Job Too Big Or Too Small<span class="text-secondary">.</span></div>
                    </div>
                    <div class="col-lg-5 col-xxl-4 pt-4 pt-md-5 pt-lg-0">
                        <div class="text-white letter-spacing-n02 fw-500 h5 line-height-1"><span class="fw-700">At NSW Floor Care</span> we service residential, commercial and all strata.</div>
                        <div class="row no-gutters pt-3 pt-md-4">
                            <div class="col-5 col-md-4 col-lg-5 pr-2">
                                <a href="#form" class="btn btn-block btn-secondary py-3 px-md-4">
                                    Enquire Now
                                </a>
                            </div>
                            <div class="col-5 col-md-4 col-lg-5 pl-2">
                                <a href="tel:<?= $phone_number ?>" class="btn btn-block border-white bordered text-white px-md-4">
                                    <?= $phone_number ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>