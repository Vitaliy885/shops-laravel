@extends('index')

@section('title') Shops @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/category.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slider.min.css') }}">
@endpush

@section('content')
    <!-- Latest Products Start -->
    <section class="popular-items popular-items-category latest-padding">
        <div class="container">
            <div class="row product-btn justify-content-between mb-40">
                <div class="properties__button">
                    <!--Nav Button  -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-all-projects-tab" data-toggle="tab"
                               href="#nav-all-projects"
                               role="tab" aria-controls="nav-all-projects" aria-selected="true">All projects</a>
                            <a class="nav-item nav-link" id="nav-e-commerce-tab" data-toggle="tab"
                               href="#nav-e-commerce"
                               role="tab" aria-controls="nav-e-commerce" aria-selected="false">E-Commerce</a>
                            <a class="nav-item nav-link" id="nav-landing-tab" data-toggle="tab" href="#nav-landing"
                               role="tab" aria-controls="nav-landing" aria-selected="false">Landing page</a>
                            <a class="nav-item nav-link" id="nav-e-learning-tab" data-toggle="tab"
                               href="#nav-e-learning"
                               role="tab" aria-controls="nav-e-learning" aria-selected="false">E-Learning</a>
                        </div>
                    </nav>
                    <!--End Nav Button  -->
                </div>
            </div>
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->
                <div class="tab-pane fade show active" id="nav-all-projects" role="tabpanel"
                     aria-labelledby="nav-all-projects-tab">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-popular-items text-center">
                                <div class="popular-img">
                                    <img src="{{ asset('images/gallery/prewie.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-item-content">
                                    <div class="top-row">
                                        <div class="porfolio-logo">
                                            <img src="{{ asset('images/gallery/ukrnafta.png') }}" alt="image description">
                                        </div>
                                    </div>
                                    <div class="description-holder">
                                        <div class="title">BARBER SHOP</div>
                                        <div class="info-block">Розробка рекламних постерів для маньяків своєї справи
                                        </div>
                                    </div>
                                    <div class="more-block">
                                            <span class="view-site">
                                                <span class="view-site-en">View project</span>
                                                <svg class="arrow"> <path fill-rule="evenodd" fill="#ff2020" d="M10.101,0.165 C9.896,-0.057 9.556,-0.057 9.345,0.165 C9.140,0.378 9.140,0.733 9.345,0.945 L13.178,4.943 L0.529,4.943 C0.234,4.943 -0.000,5.188 -0.000,5.495 C-0.000,5.803 0.234,6.055 0.529,6.055 L13.178,6.055 L9.345,10.045 C9.140,10.266 9.140,10.621 9.345,10.834 C9.556,11.055 9.897,11.055 10.101,10.834 L14.841,5.890 C15.053,5.677 15.053,5.322 14.841,5.110 L10.101,0.165 Z"></path> </svg>
                                            </span>
                                        <div class="line-portfolio"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-popular-items text-center">
                                <div class="popular-img">
                                    <img src="{{ asset('images/gallery/prewie.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-item-content">
                                    <div class="top-row">
                                        <div class="porfolio-logo">
                                            <img src="{{ asset('images/gallery/ukrnafta.png') }}" alt="image description">
                                        </div>
                                    </div>
                                    <div class="description-holder">
                                        <div class="title">BARBER SHOP</div>
                                        <div class="info-block">Розробка рекламних постерів для маньяків своєї справи
                                        </div>
                                    </div>
                                    <div class="more-block">
                                            <span class="view-site">
                                                <span class="view-site-en">View project</span>
                                                <svg class="arrow"> <path fill-rule="evenodd" fill="#ff2020" d="M10.101,0.165 C9.896,-0.057 9.556,-0.057 9.345,0.165 C9.140,0.378 9.140,0.733 9.345,0.945 L13.178,4.943 L0.529,4.943 C0.234,4.943 -0.000,5.188 -0.000,5.495 C-0.000,5.803 0.234,6.055 0.529,6.055 L13.178,6.055 L9.345,10.045 C9.140,10.266 9.140,10.621 9.345,10.834 C9.556,11.055 9.897,11.055 10.101,10.834 L14.841,5.890 C15.053,5.677 15.053,5.322 14.841,5.110 L10.101,0.165 Z"></path> </svg>
                                            </span>
                                        <div class="line-portfolio"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-popular-items text-center">
                                <div class="popular-img">
                                    <img src="{{ asset('images/gallery/prewie.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-item-content">
                                    <div class="top-row">
                                        <div class="porfolio-logo">
                                            <img src="{{ asset('images/gallery/ukrnafta.png') }}" alt="image description">
                                        </div>
                                    </div>
                                    <div class="description-holder">
                                        <div class="title">BARBER SHOP</div>
                                        <div class="info-block">Розробка рекламних постерів для маньяків своєї справи
                                        </div>
                                    </div>
                                    <div class="more-block">
                                            <span class="view-site">
                                                <span class="view-site-en">View project</span>
                                                <svg class="arrow"> <path fill-rule="evenodd" fill="#ff2020" d="M10.101,0.165 C9.896,-0.057 9.556,-0.057 9.345,0.165 C9.140,0.378 9.140,0.733 9.345,0.945 L13.178,4.943 L0.529,4.943 C0.234,4.943 -0.000,5.188 -0.000,5.495 C-0.000,5.803 0.234,6.055 0.529,6.055 L13.178,6.055 L9.345,10.045 C9.140,10.266 9.140,10.621 9.345,10.834 C9.556,11.055 9.897,11.055 10.101,10.834 L14.841,5.890 C15.053,5.677 15.053,5.322 14.841,5.110 L10.101,0.165 Z"></path> </svg>
                                            </span>
                                        <div class="line-portfolio"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card two -->
                <div class="tab-pane fade" id="nav-e-commerce" role="tabpanel" aria-labelledby="nav-e-commerce-tab">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-popular-items text-center">
                                <div class="popular-img">
                                    <img src="{{ asset('images/gallery/prewie.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-item-content">
                                    <div class="top-row">
                                        <div class="porfolio-logo">
                                            <img src="{{ asset('images/gallery/ukrnafta.png') }}" alt="image description">
                                        </div>
                                    </div>
                                    <div class="description-holder">
                                        <div class="title">BARBER SHOP</div>
                                        <div class="info-block">Розробка рекламних постерів для маньяків своєї справи
                                        </div>
                                    </div>
                                    <div class="more-block">
                                            <span class="view-site">
                                                <span class="view-site-en">View project</span>
                                                <svg class="arrow"> <path fill-rule="evenodd" fill="#ff2020" d="M10.101,0.165 C9.896,-0.057 9.556,-0.057 9.345,0.165 C9.140,0.378 9.140,0.733 9.345,0.945 L13.178,4.943 L0.529,4.943 C0.234,4.943 -0.000,5.188 -0.000,5.495 C-0.000,5.803 0.234,6.055 0.529,6.055 L13.178,6.055 L9.345,10.045 C9.140,10.266 9.140,10.621 9.345,10.834 C9.556,11.055 9.897,11.055 10.101,10.834 L14.841,5.890 C15.053,5.677 15.053,5.322 14.841,5.110 L10.101,0.165 Z"></path> </svg>
                                            </span>
                                        <div class="line-portfolio"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-popular-items text-center">
                                <div class="popular-img">
                                    <img src="{{ asset('images/gallery/prewie.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-item-content">
                                    <div class="top-row">
                                        <div class="porfolio-logo">
                                            <img src="{{ asset('images/gallery/ukrnafta.png') }}" alt="image description">
                                        </div>
                                    </div>
                                    <div class="description-holder">
                                        <div class="title">BARBER SHOP</div>
                                        <div class="info-block">Розробка рекламних постерів для маньяків своєї справи
                                        </div>
                                    </div>
                                    <div class="more-block">
                                            <span class="view-site">
                                                <span class="view-site-en">View project</span>
                                                <svg class="arrow"> <path fill-rule="evenodd" fill="#ff2020" d="M10.101,0.165 C9.896,-0.057 9.556,-0.057 9.345,0.165 C9.140,0.378 9.140,0.733 9.345,0.945 L13.178,4.943 L0.529,4.943 C0.234,4.943 -0.000,5.188 -0.000,5.495 C-0.000,5.803 0.234,6.055 0.529,6.055 L13.178,6.055 L9.345,10.045 C9.140,10.266 9.140,10.621 9.345,10.834 C9.556,11.055 9.897,11.055 10.101,10.834 L14.841,5.890 C15.053,5.677 15.053,5.322 14.841,5.110 L10.101,0.165 Z"></path> </svg>
                                            </span>
                                        <div class="line-portfolio"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-popular-items text-center">
                                <div class="popular-img">
                                    <img src="{{ asset('images/gallery/prewie.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-item-content">
                                    <div class="top-row">
                                        <div class="porfolio-logo">
                                            <img src="{{ asset('images/gallery/ukrnafta.png') }}" alt="image description">
                                        </div>
                                    </div>
                                    <div class="description-holder">
                                        <div class="title">BARBER SHOP</div>
                                        <div class="info-block">Розробка рекламних постерів для маньяків своєї справи
                                        </div>
                                    </div>
                                    <div class="more-block">
                                            <span class="view-site">
                                                <span class="view-site-en">View project</span>
                                                <svg class="arrow"> <path fill-rule="evenodd" fill="#ff2020" d="M10.101,0.165 C9.896,-0.057 9.556,-0.057 9.345,0.165 C9.140,0.378 9.140,0.733 9.345,0.945 L13.178,4.943 L0.529,4.943 C0.234,4.943 -0.000,5.188 -0.000,5.495 C-0.000,5.803 0.234,6.055 0.529,6.055 L13.178,6.055 L9.345,10.045 C9.140,10.266 9.140,10.621 9.345,10.834 C9.556,11.055 9.897,11.055 10.101,10.834 L14.841,5.890 C15.053,5.677 15.053,5.322 14.841,5.110 L10.101,0.165 Z"></path> </svg>
                                            </span>
                                        <div class="line-portfolio"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card three -->
                <div class="tab-pane fade" id="nav-landing" role="tabpanel" aria-labelledby="nav-landing-tab">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-popular-items text-center">
                                <div class="popular-img">
                                    <img src="{{ asset('images/gallery/prewie.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-item-content">
                                    <div class="top-row">
                                        <div class="porfolio-logo">
                                            <img src="{{ asset('images/gallery/ukrnafta.png') }}" alt="image description">
                                        </div>
                                    </div>
                                    <div class="description-holder">
                                        <div class="title">BARBER SHOP</div>
                                        <div class="info-block">Розробка рекламних постерів для маньяків своєї справи
                                        </div>
                                    </div>
                                    <div class="more-block">
                                            <span class="view-site">
                                                <span class="view-site-en">View project</span>
                                                <svg class="arrow"> <path fill-rule="evenodd" fill="#ff2020" d="M10.101,0.165 C9.896,-0.057 9.556,-0.057 9.345,0.165 C9.140,0.378 9.140,0.733 9.345,0.945 L13.178,4.943 L0.529,4.943 C0.234,4.943 -0.000,5.188 -0.000,5.495 C-0.000,5.803 0.234,6.055 0.529,6.055 L13.178,6.055 L9.345,10.045 C9.140,10.266 9.140,10.621 9.345,10.834 C9.556,11.055 9.897,11.055 10.101,10.834 L14.841,5.890 C15.053,5.677 15.053,5.322 14.841,5.110 L10.101,0.165 Z"></path> </svg>
                                            </span>
                                        <div class="line-portfolio"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-popular-items text-center">
                                <div class="popular-img">
                                    <img src="{{ asset('images/gallery/prewie.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-item-content">
                                    <div class="top-row">
                                        <div class="porfolio-logo">
                                            <img src="{{ asset('images/gallery/ukrnafta.png') }}" alt="image description">
                                        </div>
                                    </div>
                                    <div class="description-holder">
                                        <div class="title">BARBER SHOP</div>
                                        <div class="info-block">Розробка рекламних постерів для маньяків своєї справи
                                        </div>
                                    </div>
                                    <div class="more-block">
                                            <span class="view-site">
                                                <span class="view-site-en">View project</span>
                                                <svg class="arrow"> <path fill-rule="evenodd" fill="#ff2020" d="M10.101,0.165 C9.896,-0.057 9.556,-0.057 9.345,0.165 C9.140,0.378 9.140,0.733 9.345,0.945 L13.178,4.943 L0.529,4.943 C0.234,4.943 -0.000,5.188 -0.000,5.495 C-0.000,5.803 0.234,6.055 0.529,6.055 L13.178,6.055 L9.345,10.045 C9.140,10.266 9.140,10.621 9.345,10.834 C9.556,11.055 9.897,11.055 10.101,10.834 L14.841,5.890 C15.053,5.677 15.053,5.322 14.841,5.110 L10.101,0.165 Z"></path> </svg>
                                            </span>
                                        <div class="line-portfolio"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-popular-items text-center">
                                <div class="popular-img">
                                    <img src="{{ asset('images/gallery/prewie.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-item-content">
                                    <div class="top-row">
                                        <div class="porfolio-logo">
                                            <img src="{{ asset('images/gallery/ukrnafta.png') }}" alt="image description">
                                        </div>
                                    </div>
                                    <div class="description-holder">
                                        <div class="title">BARBER SHOP</div>
                                        <div class="info-block">Розробка рекламних постерів для маньяків своєї справи
                                        </div>
                                    </div>
                                    <div class="more-block">
                                            <span class="view-site">
                                                <span class="view-site-en">View project</span>
                                                <svg class="arrow"> <path fill-rule="evenodd" fill="#ff2020" d="M10.101,0.165 C9.896,-0.057 9.556,-0.057 9.345,0.165 C9.140,0.378 9.140,0.733 9.345,0.945 L13.178,4.943 L0.529,4.943 C0.234,4.943 -0.000,5.188 -0.000,5.495 C-0.000,5.803 0.234,6.055 0.529,6.055 L13.178,6.055 L9.345,10.045 C9.140,10.266 9.140,10.621 9.345,10.834 C9.556,11.055 9.897,11.055 10.101,10.834 L14.841,5.890 C15.053,5.677 15.053,5.322 14.841,5.110 L10.101,0.165 Z"></path> </svg>
                                            </span>
                                        <div class="line-portfolio"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card four -->
                <div class="tab-pane fade" id="nav-e-learning" role="tabpanel" aria-labelledby="nav-e-learning-tab">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-popular-items text-center">
                                <div class="popular-img">
                                    <img src="{{ asset('images/gallery/prewie.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-item-content">
                                    <div class="top-row">
                                        <div class="porfolio-logo">
                                            <img src="{{ asset('images/gallery/ukrnafta.png') }}" alt="image description">
                                        </div>
                                    </div>
                                    <div class="description-holder">
                                        <div class="title">BARBER SHOP</div>
                                        <div class="info-block">Розробка рекламних постерів для маньяків своєї справи
                                        </div>
                                    </div>
                                    <div class="more-block">
                                            <span class="view-site">
                                                <span class="view-site-en">View project</span>
                                                <svg class="arrow"> <path fill-rule="evenodd" fill="#ff2020" d="M10.101,0.165 C9.896,-0.057 9.556,-0.057 9.345,0.165 C9.140,0.378 9.140,0.733 9.345,0.945 L13.178,4.943 L0.529,4.943 C0.234,4.943 -0.000,5.188 -0.000,5.495 C-0.000,5.803 0.234,6.055 0.529,6.055 L13.178,6.055 L9.345,10.045 C9.140,10.266 9.140,10.621 9.345,10.834 C9.556,11.055 9.897,11.055 10.101,10.834 L14.841,5.890 C15.053,5.677 15.053,5.322 14.841,5.110 L10.101,0.165 Z"></path> </svg>
                                            </span>
                                        <div class="line-portfolio"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-popular-items text-center">
                                <div class="popular-img">
                                    <img src="{{ asset('images/gallery/prewie.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-item-content">
                                    <div class="top-row">
                                        <div class="porfolio-logo">
                                            <img src="{{ asset('images/gallery/ukrnafta.png') }}" alt="image description">
                                        </div>
                                    </div>
                                    <div class="description-holder">
                                        <div class="title">BARBER SHOP</div>
                                        <div class="info-block">Розробка рекламних постерів для маньяків своєї справи
                                        </div>
                                    </div>
                                    <div class="more-block">
                                            <span class="view-site">
                                                <span class="view-site-en">View project</span>
                                                <svg class="arrow"> <path fill-rule="evenodd" fill="#ff2020" d="M10.101,0.165 C9.896,-0.057 9.556,-0.057 9.345,0.165 C9.140,0.378 9.140,0.733 9.345,0.945 L13.178,4.943 L0.529,4.943 C0.234,4.943 -0.000,5.188 -0.000,5.495 C-0.000,5.803 0.234,6.055 0.529,6.055 L13.178,6.055 L9.345,10.045 C9.140,10.266 9.140,10.621 9.345,10.834 C9.556,11.055 9.897,11.055 10.101,10.834 L14.841,5.890 C15.053,5.677 15.053,5.322 14.841,5.110 L10.101,0.165 Z"></path> </svg>
                                            </span>
                                        <div class="line-portfolio"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-popular-items text-center">
                                <div class="popular-img">
                                    <img src="{{ asset('images/gallery/prewie.jpg') }}" alt="">
                                </div>
                                <div class="portfolio-item-content">
                                    <div class="top-row">
                                        <div class="porfolio-logo">
                                            <img src="{{ asset('images/gallery/ukrnafta.png') }}" alt="image description">
                                        </div>
                                    </div>
                                    <div class="description-holder">
                                        <div class="title">BARBER SHOP</div>
                                        <div class="info-block">Розробка рекламних постерів для маньяків своєї справи
                                        </div>
                                    </div>
                                    <div class="more-block">
                                            <span class="view-site">
                                                <span class="view-site-en">View project</span>
                                                <svg class="arrow"> <path fill-rule="evenodd" fill="#ff2020" d="M10.101,0.165 C9.896,-0.057 9.556,-0.057 9.345,0.165 C9.140,0.378 9.140,0.733 9.345,0.945 L13.178,4.943 L0.529,4.943 C0.234,4.943 -0.000,5.188 -0.000,5.495 C-0.000,5.803 0.234,6.055 0.529,6.055 L13.178,6.055 L9.345,10.045 C9.140,10.266 9.140,10.621 9.345,10.834 C9.556,11.055 9.897,11.055 10.101,10.834 L14.841,5.890 C15.053,5.677 15.053,5.322 14.841,5.110 L10.101,0.165 Z"></path> </svg>
                                            </span>
                                        <div class="line-portfolio"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Nav Card -->
        </div>
    </section>
    <!-- Latest Products End -->
    @include('components.shop-method-area')

@endsection
