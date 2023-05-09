<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=isset($title) ? $title : 'Ana Sayfa'?></title>


    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="<?=home_url()?>/assets/swiper/swiper-bundle.min.css">

    <base href="<?=home_url()?>">
    <!-- Css Styles -->
    <link rel="stylesheet" href="<?=home_url()?>/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?=home_url()?>/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?=home_url()?>/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?=home_url()?>/assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?=home_url()?>/assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?=home_url()?>/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?=home_url()?>/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?=home_url()?>/assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?=home_url()?>/assets/css/whatsapp.css" type="text/css">

    <!-- swiper js -->
    <script src="<?=home_url()?>/assets/swiper/swiper-bundle.min.js"></script>


</head>

<body>
<div id="preloder">
    <div class="loader"></div>
</div>
<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">

    </div>
    <div id="mobile-menu-wrap"></div>
</div>
<!-- Offcanvas Menu End -->

<header class="header">
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <div class="header__logo">
                <a href="<?=home_url()?>"><img src="<?=home_url()?>/assets/images/anje-logo-1.png" style="width: 300px;" height="45" alt=""></a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <nav class="header__menu mobile-menu">
                <ul>
                    <li><a href="<?=home_url()?>">Ana Sayfa</a></li>
                    <li><a href="<?=home_url('products.php')?>">Ürünler</a>
                        <ul class="dropdown">
                            <?php
                            $categories = get_categories();
                            foreach ( $categories as $category) {
                                ?>
                                <li><a href="<?=home_url('products.php?category_id=' . $category['id'])?>"><?=$category['name']?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li><a href="<?=home_url('blogs.php')?>">Blog</a></li>
                    <li><a href="<?=home_url('contact.php')?>">İletişim</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-3 col-md-3">
            <div class="header__nav__option">
                <a href="#" class="search-switch"><img src="<?=home_url()?>/assets/images/icon/search.png" alt=""></a>
                <a href="#"><img src="<?=home_url()?>/assets/images/icon/whatsapp.png" style="width: 13px; height: 13; "  alt=""></a>
                <a href="#"><img src="<?=home_url()?>/assets/images/icon/instagram.png" style="width: 13px; height: 13;" alt=""></a>
            </div>
        </div>
    </div>
    <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>

