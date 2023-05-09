<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="#"><img src="<?= home_url() ?>/design/img/Anje Logo/anjelogobeyaz.png" alt=""></a>
                    </div>
                    <p>Anje Modern Furniture Since 1997.</p>
                    <a href="#"><img src="<?= home_url() ?>/design/img/payment.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Satışlar</h6>
                    <ul>
                        <?php foreach (get_categories() as $get_category) {
                            ?>
                            <li><a href="<?= home_url('products.php?category_id='.$get_category['id']) ?>"><?= $get_category['name'] ?></a></li>
                            <?php
                        }?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Mağazamız</h6>
                    <ul>
                        <li><a href="#">Bizimle İletişime Geçin</a></li>
                        <li><a href="#">+90 (537) 024 86 32 </a></li>
                        <li><a href="#">İnegöl/Bursa</a></li>
                        <li><a href="#">24.Mobilya Sok</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6>Mesaj Atın</h6>
                    <div class="footer__newslatter">
                        <p>Teklifler İçin Bizimle E-Mail İle İletişime Geçin</p>
                        <form action="#">
                            <input type="text" placeholder="Mail Adresiniz">
                            <button type="submit"><span class="icon_mail_alt"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer__copyright__text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <p>Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        2020
                        All rights reserved | Anje Modern Living <i class="fa fa-heart-o"
                                                                    aria-hidden="true"></i> by <a
                                href="https://www.instagram.com/anje_mobilya/" target="_blank">Anje Sofa</a>
                    </p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="<?= home_url() ?>/assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= home_url() ?>/assets/js/bootstrap.min.js"></script>
<script src="<?= home_url() ?>/assets/js/jquery.nice-select.min.js"></script>
<script src="<?= home_url() ?>/assets/js/jquery.nicescroll.min.js"></script>
<script src="<?= home_url() ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= home_url() ?>/assets/js/jquery.countdown.min.js"></script>
<script src="<?= home_url() ?>/assets/js/jquery.slicknav.js"></script>
<script src="<?= home_url() ?>/assets/js/mixitup.min.js"></script>
<script src="<?= home_url() ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?= home_url() ?>/assets/js/main.js"></script>


<!-- Js Plugins -->
<script src="<?= home_url() ?>/assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= home_url() ?>/assets/js/bootstrap.min.js"></script>
<script src="<?= home_url() ?>/assets/js/jquery.nice-select.min.js"></script>
<script src="<?= home_url() ?>/assets/js/jquery.nicescroll.min.js"></script>
<script src="<?= home_url() ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= home_url() ?>/assets/js/jquery.countdown.min.js"></script>
<script src="<?= home_url() ?>/assets/js/jquery.slicknav.js"></script>
<script src="<?= home_url() ?>/assets/js/mixitup.min.js"></script>
<script src="<?= home_url() ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?= home_url() ?>/assets/js/main.js"></script>

<script>
    const swiper = new Swiper('.home_slider', {
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

    const swiper_product_detail_big = new Swiper('.product-detail-big-slider', {
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

    $(function () {
        $('.submit-button').click(function () {
            $.ajax({
                url: '<?=home_url('contact-send.php')?>',
                type: 'post',
                data: $('#contact-form').serialize(),
                success: function (data) {
                    if (data == 'success') {
                        alert('Mesajınız Gönderildi');
                    } else {
                        alert('Mesajınız Gönderilemedi');
                    }
                }
            });
        });
    });

</script>

<style>
    .home_slider .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>

</body>

</html>