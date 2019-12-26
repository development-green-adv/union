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
                                <h1>UPIS</h1>
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
                            <h5 style="text-transform: uppercase;"><b>Upis</b></h5>
                            <div class="red-line1"></div>

                            
                            <h5>Upis 2019/20</h5>
                            <a style="border: none; margin-top: 7px;" class="pdf_link" target="_blank" href="{{ asset('dokumenti/vodic-za-studente.pdf') }}"><b>Vodič za upis</b></a>
                            <br><br>

                            <p><b>Prijemni ispit</b></p><br>

                            <p><b>Arhitektura</b></p>
                            <p>Test opšte kulture</p>
                            <br>

                            <p><b>Građevinarstvo</b></p>
                            <p>Test iz matematike</p>
                            <br>
                            
                            <p><b>Ekonomija i finansije</b></p>
                            <p>Test opšte kulture</p>
                            <br>

                            <p><b>Međunarodna politika i bezbednost</b></p>
                            <p>Test opšte kulture</p>
                            <br>

                            <p><b>Preduzetnički biznis i menadžment nekretnina</b></p>
                            <p>Test opšte kulture</p>
                            <br>

                            <p><b>Zaštita životne sredine</b></p>
                            <p>Test iz biologije i hemije</p>

                            <br><br>

                            <p><b>Potrebna dokumenta</b></p>
                            <br>

                            <ul>
                                <li>2x ŠV-20 obrasca</li>
                                <li>Izvod iz matične knjige rođenih (original)</li>
                                <li>Overene kopije diplome iz srednje škole i sva četiri svedočanstva</li>
                                <li>Fotokopija lične karte</li>
                                <li>Indeks</li>
                                <li>3 fotografije</li>
                            </ul>

                            <br><br>

                            <p><b>Cene studiranja</b></p>
                            <br>

                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <p>Arhitektura</p>
                                    <p>Građevinarstvo</p>
                                    <p>Ekonomija i finansije</p>
                                    <p>Međunarodna politika i bezbednost</p>
                                    <p>Preduzetnički biznis i menadžment nekretnina</p>
                                    <p>Zaštita životne sredine</p>
                                </div>
                                <div class="col-12 col-md-4">
                                    <p>osnovne 3000eu</p>
                                    <p>osnovne 2400eu</p>
                                    <p>osnovne 1000eu</p>
                                    <p>osnovne 1500eu</p>
                                    <p>osnovne 1000eu</p>
                                    <p>osnovne 1500eu</p>
                                </div>
                                <div class="col-12 col-md-4">
                                    <p>master 3000eu</p>
                                    <p>master 2400eu</p>
                                    <p>master 1500eu</p>
                                    <p>master 2000eu</p>
                                    <p>master 1500eu</p>
                                    <p>master 2000eu</p>
                                </div>
                            </div>

                            <br><br>

                            <p>
                                Školarina se može platiti u IV jednake godišnje rate (po srednjem kursu NBS na dan uplate) na tekući račun
                                Univerziteta. U cenu su uračunati: prijava ispita, izdavanje potvrda, overe semestra i odbrana
                                diplomskog/master rada.  
                            </p>

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