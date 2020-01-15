@extends("layout/master")

@section("title", "Enter title here")

@section("seo_content")

    <meta name="keywords" content="" />
    <meta name="description" content="" />

@endsection

@section("content")

    @include("inc/header")


        <section class="studije_cover" style="background-image: url('{{ asset('images/web/studije-cover.png') }}');">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_contact">
                                <img class="img-fluid" src="{{ asset('images/web/fax-icon.png') }}">
                            </div>
                            <div class="footer_contact">
                                <h1>NOVOSTI</h1>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <section class="breadcrum">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><b style="margin-right: 15px;">Vi ste ovde:</b> <a href="/">Naslovna</a> <span><img src="{{ asset('images/web/blue-arrow-right.png') }}"></span> <a href="#">Novosti</a></p>
                    </div>
                </div>
            </div>
        </section>


        <section class="page_section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <h5 style="text-transform: uppercase;"><b>NOVOSTI</b></h5>
                            <div class="red-line1"></div>

                            @if(count($novosti) > 0)

                                @foreach($novosti as $novost)

                                    <div class="row novost_item" style="margin-bottom: 20px;">
                                        <div class="col-12 col-md-5" style="padding: 15px;">
                                            <img class="img-fluid" src="/public/images_gallery/{{ $novost->main_image }}">
                                        </div>
                                        <div class="col-12 col-md-7" style="padding-top: 10px;">
                                            <p>{{ $novost->created_at }}</p>
                                            <h6><b>{{ $novost->page_title }}</b></h6>
                                            {!! substr($novost->page_text, 0, 130).".."; !!}

                                            <br><br>

                                            <a href="/sr/novost/{{ $novost->alias }}/{{ $novost->id }}">DETALJNIJE</a>
                                        </div>
                                    </div>

                                @endforeach

                            
                            @else

                                <p>Trenutno nema novosti</p>

                            @endif
                            

                         </div>
                        <div class="col-12 col-md-4">
                             <img class="img-fluid" src="{{ asset('images/web/studije.png') }}"><br><br>
                             <img class="img-fluid" src="{{ asset('images/web/studije.png') }}">
                        </div>
                    </div>
                </div>
        </section>

    
    @include("inc/footer")
   

@endsection