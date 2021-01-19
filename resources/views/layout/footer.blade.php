<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="/images/logo.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Asorem ipsum adipolor sdit amet, consectetur adipisicing elitcf sed do eiusmod tem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Offers & Discounts</a></li>
                                <li><a href="#"> Get Coupon</a></li>
                                <li><a href="#">  Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>New Products</h4>
                            <ul>
                                <li><a href="#">Woman Cloth</a></li>
                                <li><a href="#">Fashion Accessories</a></li>
                                <li><a href="#"> Man Accessories</a></li>
                                <li><a href="#"> Rubber made Toys</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Support</h4>
                            <ul>
                                <li><a href="#">Frequently Asked Questions</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Report a Payment Issue</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer bottom -->
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-8 col-md-7">
                    <div class="footer-copy-right">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-5">
                    <div class="footer-copy-right f-right">
                        <!-- social -->
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
@stack('scripts')
<script>
    /* 1. Proloder */

    $(window).on('load', function () {
        $('#preloader-active').delay(450).fadeOut('slow');
        $('body').delay(450).css({
            'overflow': 'visible'
        });
    });


    /* 2. slick Nav */
    // mobile_menu
    var menu = $('ul#navigation');
    if(menu.length){
        menu.slicknav({
            prependTo: ".mobile_menu",
            closedSymbol: '+',
            openedSymbol:'-'
        });
    };

    /* 3. MainSlider-1 */
    function mainSlider() {
        var BasicSlider = $('.slider-active');
        BasicSlider.on('init', function (e, slick) {
            var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });
        BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
            var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
            doAnimations($animatingElements);
        });
        BasicSlider.slick({
            autoplay: true,
            autoplaySpeed: 7000,
            dots: false,
            fade: true,
            arrows: false,
            prevArrow: '<button type="button" class="slick-prev"><i class="ti-shift-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="ti-shift-right"></i></button>',
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
            ]
        });

        function doAnimations(elements) {
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            elements.each(function () {
                var $this = $(this);
                var $animationDelay = $this.data('delay');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay
                });
                $this.addClass($animationType).one(animationEndEvents, function () {
                    $this.removeClass($animationType);
                });
            });
        }
    }

    var product_slide = $('.product_img_slide');
    if (product_slide.length) {
        product_slide.owlCarousel({
            items: 1,
            loop: true,
            dots: true,
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 5000,
            nav: true,
            dots: false,
            navText: [" <i class='ti-angle-left'></i> ", "<i class='ti-angle-right'></i> "],
            responsive: {
                0: {
                    nav: false
                },
                768: {
                    nav: false
                },
                991: {
                    nav: true
                }
            }
        });
    }
    mainSlider();
</script>


