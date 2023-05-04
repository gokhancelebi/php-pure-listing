<?php head();?>


<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="img/hero/Montana1.jpg" >
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>New Design</h6>
                            <h2>Montana Sofa Set</h2>
                            <a  href="#" class="primary-btn">Şimdi İnceleyin<span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="img/hero/Elisha1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>New Design</h6>
                            <h2>Elisha Sofa Set</h2>
                            <a href="#" class="primary-btn">Şimdi İnceleyin<span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="img/hero/panama1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>New Design</h6>
                            <h2>Elisha Sofa Set</h2>
                            <a href="#" class="primary-btn">Şimdi İnceleyin<span class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        <img src="img/banner/oval.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Yeni Tasarım</h2>
                        <a href="#">Teklif Alın</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="img/banner/soho1.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Soho Berjerimiz</h2>
                        <a href="#">Teklif Alın</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img src="img/banner/armada1.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Armada</h2>
                        <a href="#">Şimdi İncele</a>
                    </div>
                </div>
            </div>
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
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/Elisha1.jpg">
                        <span class="label">New</span>
                    </div>
                    <div class="product__item__text">
                        <h6>Elisha Sofa Set</h6>
                        <a href="#" class="simdiincele">Şimdi İncele</a>
                    </div>
                </div>
            </div>
           <?php foreach (get_products() as $get_product) {
               ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?=get_thumbnail_url($get_product['id'])?>">
                        <span class="label">New</span>
                    </div>
                    <div class="product__item__text">
                        <h6><?php echo $get_product['title'];?></h6>
                        <a href="#" class="simdiincele">Şimdi İncele</a>
                    </div>
                </div>
            </div>
            <?php
           }?>
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
                    <h2>Kolay Kurulum <br /> <span>Hızlı Teslimat</span> <br />New Design</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories__hot__deal">
                    <img src="img/ovaltanitim.jpg" alt="">
                    <div class="hot__deal__sticker">
                        <span>Şimdi Harekete Geç</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <a href="#" class="primary-btn">Şimdi İncele</a>
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
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/armada1.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/oval.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/armadaberjer.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/panamacorner.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/gucciberjer.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/montanakanepe.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="instagram__text">
                    <h2>Instagram</h2>
                    <p>Yenilikler İçin İnstagram Hesabımız Üzerinden Bizlere Ulaşabilir Ve Bizi Takipte Kalarak Yenilikleri Öğrenebilirsiniz</p>
                    <img src="img/icon/instagram.png" style="width: 16px; height: 16px; " alt="instagram"><h3>#anje_mobilya</h3>
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
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/Fuar/Fuar1.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="img/icon/calendar.png" alt=""> 16 February 2023</span>
                        <h5>Fuarda Yaşananlar</h5>
                        <a href="#">Daha Fazla</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/Fuar/Fuar2.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="img/icon/calendar.png" alt=""> 21 February 2023</span>
                        <h5>Fuar Görselleri</h5>
                        <a href="#">Daha Fazla</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/Fuar/fuar.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="img/icon/calendar.png" alt=""> 28 February 2023</span>
                        <h5>Fuar Videoları</h5>
                        <a href="#">Daha Fazla</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->


<?php footer();?>
