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
                                <h1>NENASTAVNO OSOBLJE</h1>
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
                            <h5 style="text-transform: uppercase;"><b>Nenastavno osoblje</b></h5>
                            <div class="red-line1"></div>

                            <p><b>Snežana Matić, dipl. pravnik</b></p>
                            <p>generalni sekretar</p>
                            <p>smatic@unionnikolatesla.edu.rs</p>

                            <br>

                            <p><b>Ruža Aničić, dipl. ekonomista</b></p>
                            <p>poslovni sekretar</p>
                            <p>ranicic@unionnikolatesla.edu.rs</p>

                            <br>

                            
                            <p><b>Slađana Trifunović Rodić magistar ekonomije</b></p>
                            <p>Studentska služba</p>
                            <p>srtrifunovic@fgm.edu.rs</p>

                            <br>

                            <p><b>Dragana Đokić, master inž. Mašinstva</b></p>
                            <p>Studentska služba</p>
                            <p>draganadjokic@unionnikolatesla.edu.rs</p>

                            <br>

                            <p><b>Jelena Ristić, dipl. ekonomista</b></p>
                            <p>Studentska služba</p>
                            <p>jristic@unionnikolatesla.edu.rs</p>

                            <br>

                            <p><b>Miloš Božilović, prof. fizičke kulture</b></p>
                            <p>Služba za marketing</p>
                            <p>mbozilovic@unionnikolatesla.edu.rs</p>

                            <br>

                            <p><b>Miloš Vrbanac, dipl. ekonomista</b></p>
                            <p>Služba za marketing</p>
                            <p>mvrbanac@unionnikolatesla.edu.rs</p>

                            <br>

                            <p><b>Mirela Šantić, bibliotekar – informatičar</b></p>
                            <p>Bibliotekar</p>
                            <p>msantic@unionnikolatesla.edu.rs</p>

                            <br>

                            <p><b>Aleksandra Bojičić</b></p>
                            <p>knjižničar</p>
                            <p>abojicic@unionnikolatesla.edu.rs</p>

                            <br>

                            <p><b>Marijana Vasić</b></p>
                            <p>kurirska služba</p>

                            <br>

                            <p><b>Aleksandra Gavrilović, dipl. ekonomista</b></p>
                            <p>Fotokopirnica</p>
                            <p>agavrilovic@unionnikolatesla.edu.rs</p>

                            <br>

                            <p><b>Nenad Milošev, dipl. ekonomista</b></p>
                            <p>Centar za informacione sisteme</p>
                            <p>sadmin@unionnikolatesla.edu.rs</p>

                            <br>

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