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
                                <h1>PRAVNA DOKUMENTACIJA</h1>
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
                            <h5 style="text-transform: uppercase;"><b>Pravna dokumentacija</b></h5>
                            <div class="red-line1"></div>

                            <h5>STATUT</h5><br>
                            
                            <p>Statut Univerziteta mozete preuzeti ovde  <a class="pdf_link" target="_blank" href="{{ asset('dokumenti/statut.pdf') }}"><b>Statut</b></a></p><br>

                            <h5>PRAVILNICI</h5><br>

                            <ul>
                                <li><a href="{{ asset('dokumenti/Pravilnik-o-studentskom-parlamentu-2019.pdf') }}" target="_blank" class="pdf_link">Pravilnik o studentskom parlamentu</a></li>
                                <li><a href="{{ asset('dokumenti/prav1.pdf') }}" target="_blank" class="pdf_link">Pravilnik o priznavanju stranih visokoškolskih isprava</a></li>
                                <li><a href="{{ asset('dokumenti/pravilnik-o-zastiti-podataka-o-licnosti.pdf') }}" target="_blank" class="pdf_link">Pravilnik o zaštiti podataka o ličnosti</a></li>
                                <li><a href="{{ asset('dokumenti/pravilnik-o-izboru-u-zvanja-i-zasnivanju-radnog-odnosa.pdf') }}" target="_blank" class="pdf_link">Pravilnik o izboru u zvanja i zasnivanju radnog odnosa</a></li>
                                <li><a href="{{ asset('dokumenti/Strategija-obezbedjenaj-kvaliteta.pdf') }}" target="_blank" class="pdf_link">Strategija obezbeđenja kvaliteta</a></li>
                                <li><a href="{{ asset('dokumenti/Pravilnik-o-doktorskim-studijama-i-odbrani-teme-2017.pdf') }}" target="_blank" class="pdf_link">Pravilnik o doktoriskim studijama i odbrani teme</a></li>
                                <li><a href="{{ asset('dokumenti/pravilnik-o-nacinu-podnosenja-prigovora-na-ocenu-i-ponovno-polaganje.pdf') }}" target="_blank" class="pdf_link">Pravilnik o načinu podnošenja prigovora na ocenu i ponovno polaganje</a></li>
                                <li><a href="{{ asset('dokumenti/Pravilnik-o-samovrednovanju.pdf') }}" target="_blank" class="pdf_link">Pravilnik o samovrednovanju</a></li>
                                <li><a href="{{ asset('dokumenti/pravilnik-o-studentskom-vrednovanju-pedagoskog-rada-nastavnika.pdf') }}" target="_blank" class="pdf_link">Pravilnik o studentskom vrednovanju pedagoškog nastavnika</a></li>
                                <li><a href="{{ asset('dokumenti/Pravilnik-o-udzbenicima.pdf') }}" target="_blank" class="pdf_link">Pravilnik o udžbenicima</a></li>
                                <li><a href="{{ asset('dokumenti/pravilnik-o-zasnivanju-radnog-odnos-i-izboru-u-zvanje.pdf') }}" target="_blank" class="pdf_link">Pravilnik o zasnivanju radnog odnosa i izboru u zvanje</a></li>
                                <li><a href="{{ asset('dokumenti/resenje-priv-suda.pdf') }}" target="_blank" class="pdf_link">Rešenje privrednog suda o promeni ovlašćenih lica</a></li>
                                <li><a href="{{ asset('dokumenti/kodeks-profesionalne-etike.pdf') }}" target="_blank" class="pdf_link">Kodeks profesionalne etike</a></li>
                                <li><a href="{{ asset('dokumenti/resenje-promena-u-registraciji-zakic.pdf') }}" target="_blank" class="pdf_link">Promena u registraciji</a></li>
                                <li><a href="{{ asset('dokumenti/zvestaj-samovred.pdf') }}" class="pdf_link" target="_blank">Izveštaj o samovrednovanju</a></li>
                            </ul><br>

                            <h5>ODLUKE</h5><br>

                            <ul>
                                <li><a href="#" target="_blank" class="pdf_link">Odluka o konstituisanju saveta Univerziteta</a></li>
                                <li><a href="#" target="_blank" class="pdf_link">Odluka sastava Senata Univerziteta</a></li>
                            </ul><br>

                            <h5>GODIŠNJI PLAN RADA</h5><br>
                            <p>Godisnji plan rada mozete pronaci <a href="{{ asset('dokumenti/godisnji-plan-rada-univerziteta.pdf') }}" target="_blank" class="pdf_link"><b>OVDE</b></a></p><br>

                            <h5>PETOGODISNJI PLAN RADA</h5><br>
                            <p>Ovde preuzimite <a href="{{ asset('dokumenti/petogodisni-plan-rada.pdf') }}" target="_blank" class="pdf_link">Petogodisnji plan rada univerziteta Union Nikola Tesla</a></p><br>

                            <h5>AKT O OSNIVANJU</h5><br>
                            
                            <ul>
                                <li><a href="{{ asset('dokumenti/Resenje-NAUKA-2018.pdf') }}" target="_blank" class="pdf_link">Resenje o osnivanju</a></li>
                                <li><a href="{{ asset('dokumenti/Odluka-o-akreditaciji-Union-Nikola-Tesla.pdf') }}" target="_blank" class="pdf_link">Odluka o akreditaciji univerziteta</a></li>
                                <li><a href="{{ asset('dokumenti/uverenje-o-akeditaciji-dozvola-za-rad-2011.pdf') }}" target="_blank" class="pdf_link">Uverenje o akreditaciji 1</a></li>
                                <li><a href="{{ asset('dokumenti/uverenje-o-akreditaciji.pdf') }}" target="_blank" class="pdf_link">Uverenje o akreditaciji 2</a></li>
                            </ul><br>

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