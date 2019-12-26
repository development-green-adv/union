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
                                <h1>ISTORIJA UNIVERZITETA</h1>
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
                            <h5 style="text-transform: uppercase;"><b>Istorija univerziteta</b></h5>
                            <div class="red-line1"></div>

                            <p>
                                Univerzitet Union - Nikola Tesla ima korene na Univerzitetu “Union”. Među osnivačima Univerziteta
                                “Union” nalaze se tri fakulteta Univerziteta „Union ‒Nikola Tesla“: Fakultet za graditeljski
                                menadžment, Fakultet za preduzetnički biznis i Fakultet za menadžment nekretnina, a kasnije se
                                priključuje i Viša škola za ekološki inženjering. Na samim počecima univerziteta “Union”uz navedene
                                fakultete bili su još i Fakultet za industrijski menadžment i Fakultetza dizajn. Osnivačkim fakultetima
                                su se kasnije priključili još neki fakulteti koji su prihvaćenikao punopravni članovi, što su oni u
                                kasnijem periodu iskoristili za kreiranje nove politike rada na Univerzitetu. Sa tom politikom nije se
                                složio i većinski osnivač koji je u demokratskoj proceduri postao manjina i marta meseca 2010.
                                godine. Senat Univerziteta “Union” doneo je odluku da se iz nastavnog rada isključe Fakultet za
                                graditeljski menadžment, Fakultet za preduzetnički biznis i Fakultet za menadžment nekretnina. 
                            </p><br>
                            <p>
                                Za
                                Višu školu za ekološki inženjering Senat univerziteta “Union” nije smatrao da je ikada i bila član
                                Univerziteta. Kao odgovor na ovakvo ponašanje većine na Univerzitetu “Union”, njegov osnivač -
                                Kompanija “Graditelj inženjering” ‒donosi odluku da se pristupi osnivanju novog Univerziteta pod
                                nazivom „Union - Nikola Tesla“. Komisiji za akreditaciju predat je zahtev za akreditaciju i dana
                                29.9.2001. godine Ministarstvo prosvete i nauke resenjem br. 612-00-01339/2011-04 izdaje dozvolu
                                za rad Integrisanom Univerzitetu UNION – Nikola Tesla. Fakulteti koji su u sklopu Univerziteta
                                UNION – Nikola Tesla su: Fakultet za graditeljski menadžment Fakultet za ekologiju i zaštitu životne
                                sredine Fakultet za preduzetnički biznis Fakultet za menadžment nekretnina Fakultet za sport
                                Fakultet za menadžment Fakultet za poslovne studije i pravo Fakultet za strateški i operativni
                                menadžment Fakultet za diplomatiju i bezbednost
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