@extends("layout/master")

@section("title", "Enter title here")

@section("seo_content")

    <meta name="keywords" content="" />
    <meta name="description" content="" />

@endsection

@section("content")

    @include("inc/header")


        <section class="showcase">
            <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">

                    @if(count($baners) > 0)

                        @foreach($baners as $baner)

                            <div class="carousel-item active">
                                <img src="../public/images_gallery/{{ $baner->baner_image }}" alt="Los Angeles">
                                <div class="carousel-caption">
                                    <img class="slider_img" src="{{ asset('images/web/slider-icon.png') }}">
                                    <h3 class="slider_title">{{ $baner->title }}</h3>
                                    <p>
                                        {{ $baner->subtitle }}
                                    </p>
                                    <div class="red-line"></div>

                                    @if($baner->link != "")

                                        <a style="text-decoration: none; color: #fff !important;" class="slider_link" href="{{ $baner->link }}">@if($baner->link_name != "") {{ $baner->link_name }} @else DETALJNIJE @endif</a>

                                    @endif

                                </div>   
                            </div>

                        @endforeach    

                    @else

                        <div class="carousel-item active">
                            <img src="{{ asset('images/web/slider1.png') }}" alt="Los Angeles">
                            <div class="carousel-caption">
                                <img class="slider_img" src="{{ asset('images/web/slider-icon.png') }}">
                                <h3 class="slider_title">Predupisni rok je otvoren!</h3>
                                <p class="slider-text">
                                    Saznajte više o prijemnom ispitu
                                </p>
                                <div class="red-line"></div>

                                <a style="text-decoration: none;" class="slider_link" href="/sr/upis">DETALJNIJE</a>

                            </div>   
                        </div>

                    @endif

                </div>
            </div>
        </section>
        

        <div class="container about_section">
            <div class="row">
                <div class="col-12 col-md-2 text-center offset-md-2 company_services company_services_first" style="padding-right: 0px; padding-left: 0px;">
                    <div class="about_section-card">
                        <a style="color: #fff;" href="/sr/novosti"><img class="img-fluid" src="{{ asset('images/web/novosti.png') }}">
                        <h5>NOVOSTI</h5></a>
                    </div>
                </div>
                <div class="col-12 col-md-2 text-center company_services" style="padding-right: 0px; padding-left: 0px;">
                    <div class="about_section-card">
                        <a style="color: #fff;" href="/sr/kontakt"><img class="img-fluid" src="{{ asset('images/web/hands.png') }}">
                        <h5>ZAKAŽITE SASTANAK</h5></a>
                    </div>
                </div>
                <div class="col-12 col-md-2 text-center company_services" style="padding-right: 0px; padding-left: 0px;">
                    <div class="about_section-card">
                        <a style="color: #fff;" href="/sr/kontakt"><img class="img-fluid" src="{{ asset('images/web/location.png') }}">
                        <h5>LOKACIJA</h5></a>
                    </div>
                </div>
                <div class="col-12 col-md-2 text-center company_services company_services_last" style="padding-right: 0px; padding-left: 0px;">
                    <div  class="about_section-card">
                        <a style="color: #fff;" href="/sr/kontakt"><img class="img-fluid" src="{{ asset('images/web/prijava.png') }}">
                            <h5>PRIJAVITE SE</h5></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container university_section">
            <div class="row">
                <div class="col-12 col-md-6 mb-5 mb-md-0">
                    <h5 class="dobrodosli-naslov"><b>DOBRODOŠLI NA UNIVERZITET<br> UNION NIKOLA TESLA</b></h5>
                    <div class="red-line1"></div>
                    <p class="dobrodosli-text">
                        Univerzitet akredituje studijske programe osnovnih akademskih studija u teničko-tehnološkom polju i to:
                        Građevinarstvo, Arhitektura i urbanizam, u društveno - humanističkom: Predzetnički biznis i menadžment 
                        nekretnina, Međunarodna politika i bezbednost a u prirodno - matematičkom: Zaštita životne sredine.
                    </p><br>
                    <a class="red-link" href="/sr/o-univerzitetu">O univerzitetu</a>
                    <a class="red-link" href="/sr/istorija-univerziteta">Pročitaj više</a>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center mb-4 mb-md-0">
                            <img class="img-fluid" src="{{ asset('images/web/about1.png') }}">
                            <a style="border: none;" href="/sr/o-univerzitetu"><p class="ponuda">SEDIŠTE UNIVERZITETA</p></a>
                        </div>
                        <div class="col-12 col-md-4 text-center mb-4 mb-md-0">
                            <img class="img-fluid" src="{{ asset('images/web/about2.png') }}">
                            <p class="ponuda">STA KAŽU NEKI AKADEMCI</p>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <img class="img-fluid" src="{{ asset('images/web/about3.png') }}">
                            <p class="ponuda">ALUMNI</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        @include("inc/news-sr")

        <section class="studijski_programi" style="background-image: url('{{ asset('images/web/studijski.png') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <img class="img-fluid" src="{{ asset('images/web/univerzitet-icon.png') }}"><br><br>
                        <h3><b>STUDIJSKI PROGRAMI</b></h3>
                        <h4 style="margin-top: 10px; margin-bottom: 20px;">UNIVERZITET UNION NIKOLA TESLA</h4>
                        <div class="red-line"></div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-12 col-md-4 text-center mb-5 mb-md-0">
                        <img class="img-fluid" src="{{ asset('images/web/graphic1.png') }}">
                        <h5>OSNOVNE STUDIJE</h5>
                    </div>
                    <div class="col-12 col-md-4 text-center mb-5 mb-md-0">
                        <img class="img-fluid" src="{{ asset('images/web/graphic2.png') }}">
                        <h5>MASTER STUDIJE</h5>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <img class="img-fluid" src="{{ asset('images/web/graphic3.png') }}">
                        <h5>DOKTORSKE STUDIJE</h5>
                    </div>
                </div>
            </div>
        </section>



    @include("inc/footer")


@endsection