<?php head(); ?>
    <!-- Header Section End -->
    <!-- Header Section End -->
    <br><br><br>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>ÜRÜNLER</h4>
                        <div class="breadcrumb__links">
                            <a href="<?=home_url()?>">ANA SAYFA</a>
                            <span>ÜRÜNLER</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <?php foreach (get_categories() as $category) {
                                                        echo '<li><a href="' . home_url('products.php?category_id=' . $category['id']) . '">' . $category['name'] . '</a></li>';
                                                    } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">

                                    </div>
                                </div>
                                <div class="card">
                                </div>
                                <div class="card">
                                    <div class="card-heading">

                                    </div>
                                </div>
<!--                                <div class="card">-->
<!--                                    <div class="card-heading">-->
<!---->
<!--                                    </div>-->
<!--                                    <div id="collapseFive" class="collapse show" data-parent="#accordionExample">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="card">-->
<!--                                    <div class="card-heading">-->
<!--                                    </div>-->
<!--                                    <div id="collapseSix" class="collapse show" data-parent="#accordionExample">-->
<!--                                        <div class="card-body">-->
<!--                                            <h3>ETİKETLER</h3><br>-->
<!--                                            <div class="shop__sidebar__tags">-->
<!--                                                <a href="koltuk-takimlari.html">Koltuk Takımları</a><br>-->
<!--                                                <a href="#">Kanepeler</a><br>-->
<!--                                                <a href="#">Sandalyeler</a><br>-->
<!--                                                <a href="#">Aksesuarlar</a><br>-->
<!--                                                <a href="#">Berjerler</a><br>-->
<!--                                                <a href="#">Sandalyeler</a><br>-->
<!--                                                <a href="#">Aksesuarlar</a><br>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
<!--                                    <p>Showing 1 of 12 results</p>-->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php if ($products !== false): ?>
                            <?php foreach ($products as $product): ?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg"
                                             data-setbg="<?= get_thumbnail_url($product['id']) ?>">
                                        </div>
                                        <div class="product__item__text">
                                            <h6><?=$product['title']?></h6>
                                            <a href="<?= home_url('product.php?id='.$product['id']) ?>" class="add-cart">Ürünü İncele</a>
                                            <div class="product__color__select">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__pagination">
                            <?=$pagination_html?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Shop Section End -->

<?php footer(); ?>