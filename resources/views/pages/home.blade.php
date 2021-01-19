@extends('index')

@section('title')Home @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slider.min.css') }}">
@endpush

@section('content')
    <!-- ? New Product Start -->
    <section class="new-product-area section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle mb-70">
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <img src="/images/gallery/new_product1.png" alt="">
                        </div>
                        <div class="product-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <img src="/images/gallery/new_product2.png" alt="">
                        </div>
                        <div class="product-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <img src="/images/gallery/new_product3.png" alt="">
                        </div>
                        <div class="product-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  New Product End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area">
        <div class="container-fluid p-0 fix">
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img big-img" style="background-image: url('/images/gallery/gallery1.png');"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img big-img" style="background-image: url('/images/gallery/gallery2.png');"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url('/images/gallery/gallery3.png');"></div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12  col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url('/images/gallery/gallery4.png');"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <!--? Popular Items Start -->
    <div class="popular-items section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-70 text-center">
                        <h2>Popular Items</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <div class="popular-img">
                            <img src="/images/gallery/popular1.png" alt="">
                            <div class="img-cap">
                                <span>Add to cart</span>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <div class="popular-img">
                            <img src="/images/gallery/popular2.png" alt="">
                            <div class="img-cap">
                                <span>Add to cart</span>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <div class="popular-img">
                            <img src="/images/gallery/popular3.png" alt="">
                            <div class="img-cap">
                                <span>Add to cart</span>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <div class="popular-img">
                            <img src="/images/gallery/popular4.png" alt="">
                            <div class="img-cap">
                                <span>Add to cart</span>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <div class="popular-img">
                            <img src="/images/gallery/popular5.png" alt="">
                            <div class="img-cap">
                                <span>Add to cart</span>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <div class="popular-img">
                            <img src="/images/gallery/popular6.png" alt="">
                            <div class="img-cap">
                                <span>Add to cart</span>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button -->
            <div class="row justify-content-center">
                <div class="room-btn pt-70">
                    <a href="catagori.html" class="btn view-btn1">View More Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Items End -->
    @include('components.video-area')
    <!--? Watch Choice  Start-->
    <div class="watch-area section-padding30">
        <div class="container">
            <div class="row align-items-center justify-content-between padding-130">
                <div class="col-lg-5 col-md-6">
                    <div class="watch-details mb-40">
                        <h2>Watch of Choice</h2>
                        <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                        <a href="shop.html" class="btn">Show Watches</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="choice-watch-img mb-40">
                        <img src="images/gallery/choce_watch1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="choice-watch-img mb-40">
                        <img src="images/gallery/choce_watch2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="watch-details mb-40">
                        <h2>Watch of Choice</h2>
                        <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                        <a href="shop.html" class="btn">Show Watches</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Watch Choice  End-->
    @include('components.shop-method-area')
@endsection

@push('scripts')
    <script src="{{ asset('js/slick.min.js') }}"></script>
@endpush
