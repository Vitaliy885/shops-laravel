@extends('index')
@section('title')News @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/slider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/news.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/themify-icons.css') }}">
@endpush
@section('content')

    <!--? Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>News</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--? Hero Area End-->

    <!--================News Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                       @for($i = 0; $i < 5; $i++)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset('images/news/single_blog_1.png') }}" alt="">
                                    <div  class="blog_item_date">
                                        <h3>15</h3>
                                        <p>Jan</p>
                                    </div>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="single-blog.html">
                                        <h2>Google inks pact for new 35-storey office</h2>
                                    </a>
                                    <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                        he earth it first without heaven in place seed it second morning saying.</p>
                                    <ul class="blog-info-link">
                                        <li><i class="fa fa-user"></i> Travel, Lifestyle</li>
                                    </ul>
                                </div>
                            </article>
                        @endfor

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
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
                                    <input type="email" class="form-control"  placeholder='Enter email' required>
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
    <!--================News Area =================-->


@endsection
