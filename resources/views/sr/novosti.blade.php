@extends("layout/master")

@section("title", "Enter title here")

@section("seo_content")

    <meta name="keywords" content="" />
    <meta name="description" content="" />

@endsection

@section("content")

    @include("inc/header")


        <section class="studije_cover" style="background-image: url('{{ asset('images/web/studije-cover.png') }}');">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_contact">
                                <img class="img-fluid" src="{{ asset('images/web/fax-icon.png') }}">
                            </div>
                            <div class="footer_contact" style="padding-left: 15px;">
                                <h1>UNIVERZITET UNION</h1>
                                <!--<div class="red-line1" style="margin-top: 5px; margin-bottom: 10px;"></div>
                                <h6>OSNOVNE AKADEMSKE STUDIJE</h6>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="breadcrum">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p><b style="margin-right: 15px;">Vi ste ovde:</b> <a href="/">Naslovna</a> <!--<span><img src="{{ asset('images/web/blue-arrow-right.png') }}"></span> <a href="#">Osnovne studije</a> <span><img src="{{ asset('images/web/blue-arrow-right.png') }}"></span> <a href="#">Arhitektura i urbanizam</a> <span><img src="{{ asset('images/web/blue-arrow-right.png') }}"></span> <a href="#">Novosti</a>--></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="page_section">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <h5 style="text-transform: uppercase;"><b>NOVOST</b></h5>
                            <div class="red-line1"></div>
                            
                            <img class="img-fluid" src="../../../public/images_gallery/{{ $novost->main_image }}"><br><br>

                            <p style="margin-bottom: 5px;">{{ $novost->created_at }}</p>
                            <h6><b>{{ $novost->page_title }}</b></h6><br>
                            
                            {!! $novost->page_text !!}
                            

                            <div class="row" style="margin-top: 50px;">
                                <div class="col-12 col-md-6">
                                    <h5><b>GALERIJA</b></h5>
                                </div>
                            </div>

                            <div class="row">

                                <?php
                                    $imgs = explode(',', $novost['image_galley']);
                                ?>
                                @if(count($imgs) > 0)

                                    @foreach($imgs as $img)

                                        <div class="col-12 col-md-3 gallery_item">
                                            <img src="../../../public/images_gallery/{{ $img }}" class="img-fluid">
                                        </div>

                                    @endforeach

                                @endif
                                
                            </div>


                         </div>
                        <div class="col-12 col-md-4">
                             <img class="img-fluid" src="{{ asset('images/web/studije.png') }}"><br><br>
                             <img class="img-fluid" src="{{ asset('images/web/studije.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    
    @include("inc/footer")
   

@endsection