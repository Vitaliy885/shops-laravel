@extends('index')
@section('title')Google inks pact for new 35-storey office @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/slider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/news.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/themify-icons.css') }}">
@endpush
@section('content')
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ asset('/images/news/single_blog_1.png') }}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>Second divided from form fish beast made every of seas
                                all gathered us saying he our
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><i class="fa fa-user"></i> Travel, Lifestyle</li>
                            </ul>
                            <p class="excert">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower
                            </p>
                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training. who has the willpower to actually
                            </p>
                            <div class="quote-wrapper">
                                <div class="quotes">
                                    MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                    should have to spend money on boot camp when you can get the MCSE study materials yourself at
                                    a fraction of the camp price. However, who has the willpower to actually sit through a
                                    self-imposed MCSE training.
                                </div>
                            </div>
                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower
                            </p>
                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training. who has the willpower to actually
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'>
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Search</button>
                            </form>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                              @for($i = 0; $i < 5; $i ++)
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Resaurant food</p>
                                            <p>(37)</p>
                                        </a>
                                    </li>
                                @endfor
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            @for($i = 0; $i < 5; $i ++)
                                <div class="media post_item">
                                    <img src="{{ asset('/images/news/post_1.png') }}" alt="post">
                                    <div class="media-body">
                                        <a href="single-blog.html">
                                            <h3>From life was you fish...</h3>
                                        </a>
                                        <p>January 12, 2019</p>
                                    </div>
                                </div>
                            @endfor
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                @for($i = 0; $i < 5; $i ++)
                                    <li>
                                        <a href="#">project</a>
                                    </li>
                                @endfor
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                               @for($i = 0; $i < 5; $i ++)
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('/images/news/post_5.png') }}" alt="">
                                        </a>
                                    </li>
                                @endfor
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->

@endsection
