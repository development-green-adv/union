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
                                <h1 style="text-transform: uppercase;">{{ $category->category_name }}</h1>
                                <div class="red-line1" style="margin-top: 5px; margin-bottom: 10px;"></div>
                                <h6>
                                    
                                    @switch($currentPage->alias)
                                        @case("o-master-studijama")
                                            MASTER STUDIJE
                                            @break
                                            
                                        @case("o-osnovnim-studijama")
                                            OSNOVNE STUDIJE
                                            @break
                                            
                                        @case("o-doktorskim-studijama")
                                            DOKTORSKE STUDIJE
                                            @break
                                    
                                        @default
                                            <span>Something went wrong, please try again</span>
                                    @endswitch
                                    
                                </h6>
                            </div>
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
                            <h5 style="text-transform: uppercase;"><b>{{ $category->category_name }}</b></h5>
                            <div class="red-line1"></div>

                            {!! $currentPage->page_text !!}

                        </div>
                       <div class="col-12 col-md-4">

                            <h5 class="text-uppercase"><b>Dodatne informacije</b></h5>
                            <div class="red-line1"></div>
                            <?php
                                
                                if($currentPage->link_1){
                                    $link1 = explode("^", $currentPage->link_1);
                                    $link_opis1 = $link1[0];
                                    $link_link1 = $link1[1];
                                }else{

                                    $link_opis1 = "";
                                    $link_link1 = "";

                                }

                                if($currentPage->link_2){
                                    $link2 = explode("^", $currentPage->link_2);
                                    $link_opis2 = $link2[0];
                                    $link_link2 = $link2[1];
                                }else{

                                    $link_opis2 = "";
                                    $link_link2 = "";

                                }

                                if($currentPage->link_3){
                                    $link3 = explode("^", $currentPage->link_3);
                                    $link_opis3 = $link3[0];
                                    $link_link3 = $link3[1];
                                }else{

                                    $link_opis3 = "";
                                    $link_link3 = "";

                                }

                                if($currentPage->link_4){
                                    $link4 = explode("^", $currentPage->link_4);
                                    $link_opis4 = $link4[0];
                                    $link_link4 = $link4[1];
                                }else{

                                    $link_opis4 = "";
                                    $link_link4 = "";

                                }
                                

                            ?>

                            <ul>
                                @if($currentPage->link_1 != "") <li><a style="border: none;" class="pdf_link" href="{{ $link_link1 }}">{{ $link_opis1 }}</a></li> @endif
                                @if($currentPage->link_2 != "") <li><a style="border: none;" class="pdf_link" href="{{ $link_link2 }}">{{ $link_opis2 }}</a></li> @endif
                                @if($currentPage->link_3 != "") <li><a style="border: none;" class="pdf_link" href="{{ $link_link3 }}">{{ $link_opis3 }}</a></li> @endif
                                @if($currentPage->link_4 != "") <li><a style="border: none;" class="pdf_link" href="{{ $link_link4 }}">{{ $link_opis4 }}</a></li> @endif
                            </ul>                          

                            <!--<img class="img-fluid" src="{{ asset('images/web/studije.png') }}"><br><br>
                            <img class="img-fluid" src="{{ asset('images/web/studije.png') }}">-->
                       </div>
                   </div>
               </div>
           </div>
       </section>

       @include("inc/news-sr")


    @include("inc/footer")


@endsection