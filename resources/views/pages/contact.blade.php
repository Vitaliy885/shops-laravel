@extends('index')

@section('title')Contact @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/contact.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/MarkerCluster.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/MarkerCluster.Default.css') }}">
@endpush

@section('content')
    <!--? Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Contacts</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--? Hero Area End-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map"></div>
            </div>

            @include('components.messages')
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" method="post" action="{{ route('contact-form') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="text" cols="30" rows="9"
                                              placeholder=" Enter Message"></textarea>
                                    @error('text')
                                    <div class="alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" type="text"
                                           placeholder="Enter your Name">
                                    @error('name')
                                    <div class="alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="surname" type="text"
                                           placeholder="Enter your Surname">
                                    @error('surname')
                                    <div class="alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email"
                                           placeholder="Enter your Email">
                                    @error('email')
                                    <div class="alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Buttonwood, California.</h3>
                            <p>Rosemead, CA 91770</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+1 253 565 2365</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>support@colorlib.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
@push('scripts')
    <script src="{{ asset('js/leaflet.js') }}"></script>
    <script src="{{ asset('js/leaflet.markercluster.js') }}"></script>
    <script>

            var map = L.map('map', {
                center: [48.292216, 25.932923],
                zoom: 15,
                attributionControl: false
            });

            var icon = L.icon({
                iconUrl: '/images/store.png',
                iconSize:     [45, 45], // size of the icon
                iconAnchor:   [31, 64], // point of the icon which will correspond to marker's location
                popupAnchor:  [-6, -62]
            });

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: ''
            }).addTo(map);

            L.marker([48.292216, 25.932923], {icon: icon})
                .addTo(map)
                .bindPopup('Time Zone')
                .openPopup();

    </script>
@endpush
