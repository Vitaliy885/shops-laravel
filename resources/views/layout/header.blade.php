<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact-data') }}">Messages</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="/images/logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->

<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{ route('/') }}"><img src="/images/logo.png" alt=""></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="{{ route('/') }}">Головна</a></li>
                                <li><a href="{{ route('projects') }}">Каталог</a></li>
                                <li class="sale"><a href="#">Розпродаж</a>
                                    <ul class="submenu">
                                        <li><a href="shop.html">iPhone 12</a></li>
                                        <li><a href="product_details.html">iPhone 12 Pro</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('about') }}">Про нас</a></li>
                                <li><a href="{{ route('news') }}">Блог</a></li>
                                <li class="hot"><a href="{{ route('contact') }}">Напиши нам</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Right -->
                    <div class="header-right">
                        <ul>
                            <li>
                                <div class="nav-search search-switch">
                                    <span class="flaticon-search"></span>
                                </div>
                            </li>
                            <li><a href="cart.html"><span class="flaticon-shopping-cart"></span></a> </li>
                        </ul>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
