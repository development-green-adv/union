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
                                <h1>AKREDITACIJA</h1>
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
                            <h5 style="text-transform: uppercase;"><b>Akreditacija</b></h5>
                            <div class="red-line1"></div>

                            <h5>IZVEŠTAJI</h5><br>

                            <p>Rešenje o akreditaciji naučnoistraživačkog rada NIR možete pronaći <a class="pdf_link" href="{{ asset('dokumenti/resenje-nir.pdf') }}" target="_blank"><b>OVDE.</b></a></p><br>

                            <ul>
                                <li><a class="pdf_link" href="{{ asset('dokumenti/tabela-5.1.pdf') }}" target="_blank">Tabela 5.1</a>Zbirni pregled naučnoistraživačkih projekata koji se trenutno realizuju na univerzitetu</li>
                                <li><a class="pdf_link" href="{{ asset('dokumenti/tabela-5.2.pdf') }}" target="_blank">Tabela 5.2</a>Lista naučnoistražvačkih projekata koji se trenutno realizuju u visokoškolskoj ustanovi</li>
                                <li><a class="pdf_link" href="{{ asset('dokumenti/tabela-5.3.pdf') }}" target="_blank">Tabela 5.3</a>Lista saradnika uključenih u naučnoistraživačke i umetničkoistraživačke projekte koji se
                                    trenutno realizuju u visokoškolskoj ustanovi.</li>


                                <li> <a class="pdf_link" style="border: none;" href="{{ asset('dokumenti/tabela-5.4.pdf') }}" target="_blank">Tabela 5.4</a>Zbirni pregled naučnoistraživačkih rezultata u ustanovi u prethodnoj kalendarskoj godini
                                    Plan naučnoistraživačkog ili umetničkoistraživačkog rada - <a class="pdf_link" href="{{ asset('dokumenti/tabela-5.1.pdf') }}" target="_blank">Prilog 5.1</a></li>


                                <li>Dokument o akreditaciji ustanove kao NIO - <a href="{{ asset('dokumenti/tabela-5.2.pdf') }}" class="pdf_link" target="_blank">Prilog 5.2</a></li>
                                <li>Godišnji izveštaj ustanove ili srodan dokument - <a href="{{ asset('dokumenti/tabela-5.3.pdf') }}" class="pdf_link" target="_blank">Prilog 5.3</a></li>
                                <li>Spisak  najznačajnijih objavljenih rezultata ustanove za predhodnu kalendarsku godinu (sistematisan
                                    po oznakama resornog Ministarstva, ne više od 50 referenci) - <a href="{{ asset('dokumenti/prilog-5.4.pdf') }}" class="pdf_link" target="_blank">Prilog 5.4</a></li>
                                <li>Finansijski plan za 2018. godinu - <a href="{{ asset('dokumenti/finansijski-plan-20.pdf') }}" class="pdf_link" target="_blank">Prilog</a></li>
                            </ul><br>

                            <p>
                                Komisija za vrednovanje kvaliteta
                            </p><br>
                            
                            <a class="pdf_link" target="_blank" href="{{ asset('dokumenti/trategija-obezbedjenja-kvaliteta.pdf') }}">Strategija obezbedjenja kvaliteta</a>

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