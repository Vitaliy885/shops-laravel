@extends('index')

@section('title') Product @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/product.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/themify-icons.css') }}">
@endpush
@section('content')
    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="product_img_slide owl-carousel">
                        <div class="single_product_img">
                            <img src="images/gallery/gallery1.png" alt="#" class="img-fluid">
                        </div>
                        <div class="single_product_img">
                            <img src="images/gallery/gallery01.png" alt="#" class="img-fluid">
                        </div>
                        <div class="single_product_img">
                            <img src="images/gallery/gallery1.png" alt="#" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="single_product_text text-center">
                        <h3>Foam filling cotton slow <br>
                            rebound pillows</h3>
                        <p>
                            Seamlessly empower fully researched growth strategies and interoperable internal or
                            “organic” sources. Credibly innovate granular internal or “organic” sources whereas high
                            standards in web-readiness. Credibly innovate granular internal or organic sources whereas
                            high standards in web-readiness. Energistically scale future-proof core competencies
                            vis-a-vis impactful experiences. Dramatically synthesize integrated schemas. with optimal
                            networks.
                        </p>
                        <div class="card_area">
                            <div class="product_attributes_area">
                                <div class="attribute-list">
                                    <h2 class="characteristics-title">Характеристики</h2>
                                    <li class="attribute__group">
                                        <span class="attribute__group-name">Общие атрибуты</span>
                                    </li>
                                    <li class="attribute-item">
                                        <span class="attribute__name attribute__name--static">Код товара:</span>
                                        <span class="attribute__value">5443-10008</span>
                                    </li>
                                    <div class="attribute-item">
                                        <span class="attribute__name attribute__name--static">Производитель:</span>
                                        <span class="attribute__value">Guten Kauf</span>
                                    </div>

                                    <li class="attribute-item">
                                        <span class="attribute__name">
                                            Страна производитель                                                                                    </span>
                                        <span class="attribute__value">Германия/Украина</span>
                                    </li>
                                    <li class="attribute-item">
                                        <span class="attribute__name">
                                            Гарантия                                                                                    </span>
                                        <span class="attribute__value">5 лет</span>
                                    </li>
                                    <li class="attribute__group">
                                        <span class="attribute__group-name">Атрибуты матрасов</span>
                                    </li>

                                    <li class="attribute-item">
                                        <span class="attribute__name">
                                            Нагрузка на 1 сп. место                                                                                        <span
                                                class="info attribute__value" data-modal="" data-modal-type="info"
                                                data-modal-attribute="65" data-modal-product="3700">
                                                </span>
                                                                                    </span>
                                        <span class="attribute__value">до 130 кг</span>
                                    </li>
                                    <li class="attribute-item">
                                        <span class="attribute__name">
                                            Тип (основа) матраса                                                                                        <span
                                                class="info attribute__value" data-modal="" data-modal-type="info"
                                                data-modal-attribute="27" data-modal-product="3700">
                                                </span>
                                                                                    </span>
                                        <span class="attribute__value">пруж. блок Pocket Spring</span>
                                    </li>
                                    <li class="attribute-item">
                                        <span class="attribute__name">
                                            Высота матраса                                                                                    </span>
                                        <span class="attribute__value">21 см</span>
                                    </li>
                                    <li class="attribute-item">
                                        <span class="attribute__name">
                                            Жёсткость матраса                                                                                    </span>
                                        <span class="attribute__value">средней жесткости/жесткий</span>
                                    </li>
                                    <li class="attribute-item">
                                        <span class="attribute__name">
                                            Наполнение матраса                                                                                        <span
                                                class="info attribute__value" data-modal="" data-modal-type="info"
                                                data-modal-attribute="26" data-modal-product="3700">
                                                </span>
                                                                                    </span>
                                        <span class="attribute__value">air foam, жесткий войлок, кокосовая койра, хлопок, шерсть, спанбонд</span>
                                    </li>
                                    <li class="attribute-item">
                                        <span class="attribute__name">
                                            Ткань чехла                                                                                        <span
                                                class="info attribute__value" data-modal="" data-modal-type="info"
                                                data-modal-attribute="22" data-modal-product="3700">
                                                </span>
                                                                                    </span>
                                        <span class="attribute__value">стрейч-жаккард</span>
                                    </li>
                                    <li class="attribute-item">
                                        <span class="attribute__name">
                                            Съемный чехол матраса                                                                                    </span>
                                        <span class="attribute__value">нет</span>
                                    </li>
                                    <li class="attribute-item">
                                        <span class="attribute__name">
                                            Двусторонний                                                                                        <span
                                                class="info attribute__value" data-modal="" data-modal-type="info"
                                                data-modal-attribute="15" data-modal-product="3700">
                                                </span>
                                                                                    </span>
                                        <span class="attribute__value">да</span>
                                    </li>
                                    <li class="attribute-item">
                                        <span class="attribute__name">
                                            Эффект "зима-лето"                                                                                        <span
                                                class="info attribute__value" data-modal="" data-modal-type="info"
                                                data-modal-attribute="14" data-modal-product="3700">
                                                </span>
                                                                                    </span>
                                        <span class="attribute__value">да</span>
                                    </li>
                                </div>
                            </div>
                            <div class="add_to_cart">
                                <a href="#" class="btn_3">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->
    <!-- subscribe part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>Get promotions & updates!</h2>
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic”
                            sources credibly innovate granular internal .</p>
                        <div class="subscribe_form">
                            <input type="email" placeholder="Enter your mail">
                            <a href="#" class="btn_1">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe part end -->
    <br><br>
    @include('components.shop-method-area')
@endsection

@push('scripts')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
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
    </script>
@endpush
