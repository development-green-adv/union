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
                                <h1>PRIDRUŽENI ČLANOVI UNIVERZITETA</h1>
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
                            <h5 style="text-transform: uppercase;"><b>Pridruženi članovi univerziteta</b></h5>
                            <div class="red-line1"></div>

                            <!--<h5></h5><br>-->

                            <ul>
                                <li><a href="https://www.fzs.edu.rs/" target="_blank" class="pdf_link">Fakultet za sport</a></li>
                                <li><a href="http://www.fpn.rs/" target="_blank" class="pdf_link">Fakultet primenjenih nauka</a></li>
                                <li><a href="https://fim.edu.rs/" target="_blank" class="pdf_link">Fakultet za inženjerski menadžment</a></li>
                                <li><a href="https://www.fiti.edu.rs/" target="_blank" class="pdf_link">Fakultet za informacione tehnologije i inženjerstvo</a></li>
                                <li><a href="https://www.fpsp.edu.rs/" target="_blank" class="pdf_link">Fakultet za poslovne studije i pravo</a></li>
                                <li><a href="http://www.ppf.edu.rs/" target="_blank" class="pdf_link">Poslovni i pravni fakultet</a></li>
                                <li><a href="http://www.famns.edu.rs/" target="_blank" class="pdf_link">Fakultet za menadžment</a></li>
                                <li><a href="http://konstantinveliki.edu.rs/" target="_blank" class="pdf_link">Fakultet za pravo, bezbednost i menadžment</a></li>
                                <li><a href="http://www.diplomatija.com/" target="_blank" class="pdf_link">Fakultet za diplomatiju i bezbednost</a></li>
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