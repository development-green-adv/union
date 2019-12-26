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
                                <h1>STUDENTSKI PARLAMENT</h1>
                                <div class="red-line1" style="margin-top: 5px; margin-bottom: 10px;"></div>
                                <h6>UNIVERZITET - UNION NIKOLA TESLA</h6>
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
                            <h5 style="text-transform: uppercase;"><b>Studentski parlament</b></h5>
                            <div class="red-line1"></div>

                            <!--<h5></h5><br>-->

                            <ul>
                                <li><a class="pdf_link" target="_blank" href="{{ asset('dokumenti/Odluka-o-članovima-stud-parlamena.pdf') }}">Odluka o članovima studentskog parlamenta</a></li>
                                <li><a class="pdf_link" target="_blank" href="{{ asset('dokumenti/Odluka-o-imenovanju-predstavnika-stud-u-Senatu.pdf') }}">Odluka o imenovanju predstavnika studenata u senatu</a></li>
                                <li><a class="pdf_link" target="_blank" href="{{ asset('dokumenti/Odluka-o-imenovanju-studenta-prorektora.pdf') }}">Odluka o imenovanju studenta prorektora</a></li>
                                <li><a class="pdf_link" target="_blank" href="{{ asset('dokumenti/Pravilnik-o-studentskom-parlamentu-2019.pdf') }}">Pravilnik o studentskom parlamentu 2019</a></li>
                            </ul>

                        </div>
                       <div class="col-12 col-md-4">
                            <img class="img-fluid" src="{{ asset('images/web/studije.png') }}"><br><br>
                            <img class="img-fluid" src="{{ asset('images/web/studije.png') }}">
                       </div>
                   </div>
               </div>
           </div>
       </section>
        

       @include("inc/news-sr")


    @include("inc/footer")


@endsection