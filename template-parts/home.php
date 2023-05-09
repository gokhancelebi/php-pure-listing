<?php head(); ?>

<!-- Hero Section Begin -->
<section class="hero">
    <!-- Slider main container -->
    <div class="swiper home_slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php foreach ($slider_images as $image): ?>

                <div class="swiper-slide">
                    <img src="<?= home_url() ?>/uploads/images/slider_images/<?= $image["image_url"] ?>">
                </div>

            <?php endforeach; ?>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-4">
                <div class="banner__item">
                    <div class="banner__item__pic">
                        <img src="<?= home_url() ?>/design/img/banner/oval.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Yeni Tasarım</h2>
                        <a href="<?= home_url('contact.php') ?>">Teklif Alın</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="<?= home_url() ?>/design/img/banner/soho1.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Soho Berjerimiz</h2>
                        <a href="<?= home_url('contact.php') ?>">Teklif Alın</a>
                    </div>
                </div>
            </div>
            <!--            <div class="col-lg-7">-->
            <!--                <div class="banner__item banner__item--last">-->
            <!--                    <div class="banner__item__pic">-->
            <!--                        <img src="--><?php //=home_url()?><!--/design/img/banner/armada1.jpg" alt="">-->
            <!--                    </div>-->
            <!--                    <div class="banner__item__text">-->
            <!--                        <h2>Armada</h2>-->
            <!--                        <a href="--><?php //=home_url('contact.php')?><!--">Şimdi İncele</a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">Ürünlerimiz</li>
                    <!--                    <li data-filter=".new-arrivals">Yeni Dizaynlar</li>-->
                    <!--                    <li data-filter=".hot-sales">Öneriler</li>-->
                </ul>
            </div>
        </div>
        <div class="row product__filter">
            <?php foreach (get_products() as $get_product) {
                ?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"
                             data-setbg="<?= get_thumbnail_url($get_product['id']) ?>">
                            <span class="label">New</span>
                        </div>
                        <div class="product__item__text">
                            <h6><?php echo $get_product['title']; ?></h6>
                            <a href="<?= home_url('products.php?id=' . $get_product['id']); ?>" class="simdiincele">Şimdi
                                İncele</a>
                        </div>
                    </div>
                </div>
                <?php
            } ?>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Categories Section Begin -->
<section class="categories spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="categories__text">
                    <h2>Kolay Kurulum <br/> <span>Hızlı Teslimat</span> <br/>New Design</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories__hot__deal">
                    <img src="<?= home_url() ?>/design/img/ovaltanitim.jpg" alt="">
                    <div class="hot__deal__sticker">
                        <span>Şimdi Harekete Geç</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <a href="<?= home_url('contact.php') ?>" class="primary-btn">Teklif İste</a>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Instagram Section Begin -->
<section class="instagram spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="instagram__pic">
                    <div class="instagram__pic__item set-bg"
                         data-setbg="<?= home_url() ?>/design/img/instagram/armada1.jpg"></div>
                    <div class="instagram__pic__item set-bg"
                         data-setbg="<?= home_url() ?>/design/img/instagram/oval.jpg"></div>
                    <div class="instagram__pic__item set-bg"
                         data-setbg="<?= home_url() ?>/design/img/instagram/armadaberjer.jpg"></div>
                    <div class="instagram__pic__item set-bg"
                         data-setbg="<?= home_url() ?>/design/img/instagram/panamacorner.jpg"></div>
                    <div class="instagram__pic__item set-bg"
                         data-setbg="<?= home_url() ?>/design/img/instagram/gucciberjer.jpg"></div>
                    <div class="instagram__pic__item set-bg"
                         data-setbg="<?= home_url() ?>/design/img/instagram/montanakanepe.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="instagram__text">
                    <h2>Instagram</h2>
                    <p>Yenilikler İçin İnstagram Hesabımız Üzerinden Bizlere Ulaşabilir Ve Bizi Takipte Kalarak
                        Yenilikleri Öğrenebilirsiniz</p>
                    <img src="<?= home_url() ?>/design/img/icon/instagram.png" style="width: 16px; height: 16px; "
                         alt="instagram">
                    <h3>#anje_mobilya</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>2023 İstanbul/TURKEY Fair</span>
                    <h2>Furniture Fair</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <?php foreach ($blogs as $blog) {
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/Fuar/Fuar1.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="<?= home_url() ?>/design/img/icon/calendar.png"
                                       alt=""> 16 February 2023</span>
                            <h5><?=$blog['title']?></h5>
                            <a href="<?=home_url('blog-detail.php?id='.$blog['id'])?>">Daha Fazla</a>
                        </div>
                    </div>
                </div>
                <?php
            } ?>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->


<?php footer(); ?>
