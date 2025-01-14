@extends('landing-page.layouts.app')
@section('content')
    
<link rel="stylesheet" href="{{asset('assets-landingpage/css/home.css')}}">


<section id="tour">
    <div class="isi">
        <p style="color: #B4B4BD">Best Location</p>
        <div class="page-heading">
            <h1>Indonesian Tourism</h1>
            <p>
                Extraordinary natural beauty, enjoy the rich culture and experience the friendliness of the local
                people
            </p>
        </div>
        <div class="candi" style="margin-bottom: 50px;">
            <div class="con">
                <div class="gambar1">
                    <div class="texts">

                        <div class="text">
                            <p>Bromo, East java</p>
                            <h2>Bromo Tengger Tour</h2>
                        </div>
                    </div>
                </div>
                <div class="gambar2">
                    <div class="texts">

                        <div class="text">
                            <p>Bali Beach Tourism</p>
                            <h2>Denpasar, Bali</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="con">
                <div class="gambar3">
                    <div class="texts">

                        <div class="text">
                            <p>Lampung, South Sumatra</p>
                            <h2>Sumatra Tourism</h2>
                        </div>
                    </div>
                </div>
                <div class="gambar4">
                    <div class="texts">

                        <div class="text">
                            <p>Jogjakarta, Central Java</p>
                            <h2>Borobudur Temple Tour</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<section id="services">
    <div class="isi">
        <div class="gambar1">
            <div class="texts">
                <div class="text">
                    {{-- <p>Sewu Temple Samadhi</p> --}}
                </div>
            </div>
        </div>
        <div class="accordion" style="width: 500px" id="accordionExample">
            <div class="mb-5">
                <h5 style="color: #B4B4BD">How it works</h5>
                <h1>One click for you</h1>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="fa-brands fa-searchengin me-2"></i> <strong>Find your desinations</strong>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Embark on a journey to discover your dream destination, where adventure and relaxation await
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="fa-solid fa-cart-shopping me-2"></i> <strong> Book a ticket</strong>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Ensure a smooth travel experience by bookings ticket to your prefreed destination via our
                        booking platform
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="fa-solid fa-money-check me-2"></i> <strong>Make a payment</strong>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        We offer a variety of payments options to meet your preference and ensure a hassle-free
                        trnasaction process
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        <i class="fa-solid fa-plane me-2"></i> <strong>Explore Destinations</strong>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        You'll be immersed in a captivating tapestry of sights , sounds and tastes as you wind your
                        way through the ancient streets
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="tourpackages">
    <div class="isi">
        <h5 style="color: #B4B4BD">Tour packages</h5>
        <div class="page-heading">
            <h1>Indonesian Tourism</h1>
            <p>
                Our tourist destinations offer an unrivaled blend of natural beauty and cultural richness
            </p>
        </div>
        <div class="atraksi">
            <div class="gambar1">
                <div class="texts">
                    <div class="text">
                        <p>Bali Tour Package</p>
                    </div>
                </div>
            </div>
            <div class="gambar2">
                <div class="texts">
                    <div class="text">
                        <p>Java Tour Package</p>
                    </div>
                </div>
            </div>
            <div class="gambar3">
                <div class="texts">

                    <div class="text">
                        <p>Solo Tour Package</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section id="blog" class="d-flex justify-content-center pt-5" style="background-color: #F8F8FC">
    <div class="isi mb-5" style="width: 80%">
        <h4 class="text-center" style="color: #B4B4BD">Our Blog</h4>
        <h1 class="text-center mb-5">Our travel memories</h1>
        <div class="d-flex justify-content-center gap-3">
            <div class="card" style="width: 50%; height: 500px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <img src="{{asset('assets-landingpage/img/7.jpg')}}" class="card-img-top h-50" alt="...">
                <div class="card-body">
                    <h6 class="card-title" style="color: #B4B4BD">Nov 14, 2024</h6>
                    <h4 class="card-title">2024 Travel Trends - what you need to know</h4>
                    <p class="card-title fs-6" style="color: #B4B4BD">
                        Traveling allows you to escape routine, discover hidden gems, embrace different traditions,
                        taste unique cuisines, connect with nature, gain fresh perspectives, and return home with
                        stories that last a lifetime.</p>
                </div>
            </div>
            <div class="card" style="width: 50%; height: 500px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <img src="{{asset('assets-landingpage/img/8.jpg')}}" class="card-img-top h-50" alt="...">
                <div class="card-body">
                    <h6 class="card-title" style="color: #B4B4BD">Nov 14, 2024</h6>
                    <h4 class="card-title">2024 Travel Trends - what you need to know</h4>
                    <p class="card-title fs-6" style="color: #B4B4BD">Traveling opens the door to unforgettable
                        experiences, exploring new cultures, meeting diverse people, enjoying breathtaking
                        landscapes, and creating cherished memories that inspire personal growth and broaden your
                        perspective on life.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
