<?php
head();
?>
<!-- Shop Details Section Begin -->
<section class="shop-details">
    <div class="product__details__pic">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__breadcrumb">
                        <a href="<?= home_url() ?>">Home</a>
                        <a href="<?= home_url() ?>/products.php">Ürünler</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <ul class="nav nav-tabs" role="tablist"
                        style="max-height: 750px;overflow-y: scroll; width: max-content; display: flex;flex-direction: column">
                        <?php
                        if ($images) {
                            $index = 1;
                            foreach ($images as $image) {
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" >
                                        <div class="product__thumb__pic    set-bg set_gallery_image"
                                             data-index = "<?php echo $index; $index++ ?>"
                                             data-setbg="<?php echo $image['image'] ?>">
                                        </div>
                                    </a>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__pic__item">
                                <!-- Slider main container -->
                                <div class="swiper product-detail-big-slider">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        <?php
                                        if ($images) {
                                            foreach ($images as $image) {
                                                ?>
                                                <div class="swiper-slide"><img class="open-lightbox" src="<?php echo $image['image'] ?>">
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <!-- If we need pagination -->
                                    <div class="swiper-pagination"></div>

                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product__details__content">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="product__details__text">
                        <h4><?= $product['title'] ?></h4>
                    </div>
                    <!--                    <h4 id="hizayazi" >Benzersiz Tasarımı İle Yeni Koltuk Takımımız Armada Sofa Set.</h4>-->
                    <div class="product__details__option">
                    </div>
                    <div class="product__details__cart__option">
                        <div class="quantity">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                               role="tab">Açıklama</a>
                        </li>
                        <!--                        <li class="nav-item">-->
                        <!--                            <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Müşteri Değerlendirmeleri</a>-->
                        <!--                        </li>-->
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-5" role="tabpanel">
                            <div class="product__details__tab__content">
                                <div class="product__details__tab__content__item">
                                    <h5>Ürün Açıklaması</h5>
                                    <div>
                                        <?= $product['description'] ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--                        <div class="tab-pane" id="tabs-6" role="tabpanel">-->
                        <!--                            <div class="product__details__tab__content">-->
                        <!--                                <div class="product__details__tab__content__item">-->
                        <!--                                    <h5>Products Infomation</h5>-->
                        <!--                                    <p>A Pocket PC is a handheld computer, which features many of the same-->
                        <!--                                        capabilities as a modern PC. These handy little devices allow-->
                        <!--                                        individuals to retrieve and store e-mail messages, create a contact-->
                        <!--                                        file, coordinate appointments, surf the internet, exchange text messages-->
                        <!--                                        and more. Every product that is labeled as a Pocket PC must be-->
                        <!--                                        accompanied with specific software to operate the unit and must feature-->
                        <!--                                        a touchscreen and touchpad.</p>-->
                        <!--                                    <p>As is the case with any new technology product, the cost of a Pocket PC-->
                        <!--                                        was substantial during it’s early release. For approximately $700.00,-->
                        <!--                                        consumers could purchase one of top-of-the-line Pocket PCs in 2003.-->
                        <!--                                        These days, customers are finding that prices have become much more-->
                        <!--                                        reasonable now that the newness is wearing off. For approximately-->
                        <!--                                        $350.00, a new Pocket PC can now be purchased.</p>-->
                        <!--                                </div>-->
                        <!--                                <div class="product__details__tab__content__item">-->
                        <!--                                    <h5>Material used</h5>-->
                        <!--                                    <p>Polyester is deemed lower quality due to its none natural quality’s. Made-->
                        <!--                                        from synthetic materials, not natural like wool. Polyester suits become-->
                        <!--                                        creased easily and are known for not being breathable. Polyester suits-->
                        <!--                                        tend to have a shine to them compared to wool and cotton suits, this can-->
                        <!--                                        make the suit look cheap. The texture of velvet is luxurious and-->
                        <!--                                        breathable. Velvet is a great choice for dinner party jacket and can be-->
                        <!--                                        worn all year round.</p>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="tab-pane" id="tabs-7" role="tabpanel">-->
                        <!--                            <div class="product__details__tab__content">-->
                        <!--                                <p class="note">Nam tempus turpis at metus scelerisque placerat nulla deumantos-->
                        <!--                                    solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis-->
                        <!--                                    ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo-->
                        <!--                                    pharetras loremos.</p>-->
                        <!--                                <div class="product__details__tab__content__item">-->
                        <!--                                    <h5>Products Infomation</h5>-->
                        <!--                                    <p>A Pocket PC is a handheld computer, which features many of the same-->
                        <!--                                        capabilities as a modern PC. These handy little devices allow-->
                        <!--                                        individuals to retrieve and store e-mail messages, create a contact-->
                        <!--                                        file, coordinate appointments, surf the internet, exchange text messages-->
                        <!--                                        and more. Every product that is labeled as a Pocket PC must be-->
                        <!--                                        accompanied with specific software to operate the unit and must feature-->
                        <!--                                        a touchscreen and touchpad.</p>-->
                        <!--                                    <p>As is the case with any new technology product, the cost of a Pocket PC-->
                        <!--                                        was substantial during it’s early release. For approximately $700.00,-->
                        <!--                                        consumers could purchase one of top-of-the-line Pocket PCs in 2003.-->
                        <!--                                        These days, customers are finding that prices have become much more-->
                        <!--                                        reasonable now that the newness is wearing off. For approximately-->
                        <!--                                        $350.00, a new Pocket PC can now be purchased.</p>-->
                        <!--                                </div>-->
                        <!--                                <div class="product__details__tab__content__item">-->
                        <!--                                    <h5>Material used</h5>-->
                        <!--                                    <p>Polyester is deemed lower quality due to its none natural quality’s. Made-->
                        <!--                                        from synthetic materials, not natural like wool. Polyester suits become-->
                        <!--                                        creased easily and are known for not being breathable. Polyester suits-->
                        <!--                                        tend to have a shine to them compared to wool and cotton suits, this can-->
                        <!--                                        make the suit look cheap. The texture of velvet is luxurious and-->
                        <!--                                        breathable. Velvet is a great choice for dinner party jacket and can be-->
                        <!--                                        worn all year round.</p>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Shop Details Section End -->

<!-- Related Section Begin -->
<section class="related spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="related-title">Son Eklenen Ürünler</h3>
            </div>
        </div>
        <div class="row">
            <?php
            if ($latest_products) {
                foreach ($latest_products as $latest_product) {
                    ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg"
                                 data-setbg="<?= get_thumbnail_url($latest_product['id']) ?>">
                                <span class="label">New</span>
                            </div>
                            <div class="product__item__text">
                                <h6><?= $latest_product['title'] ?></h6>
                                <a href="<?= home_url('urun-detay/' . $latest_product['id']) ?>" class="add-cart">Şimdi
                                    İncele</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- Related Section End -->

<?php
footer();
?>
