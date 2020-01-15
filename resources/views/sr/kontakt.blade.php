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
                            <div class="footer_contact mb-3 mb-md-0">
                                <img class="img-fluid" src="{{ asset('images/web/fax-icon.png') }}">
                            </div>
                            <div class="footer_contact">
                                <h1>KONTAKTIRAJTE NAS</h1>
                                <div class="red-line1" style="margin-top: 5px; margin-bottom: 10px;"></div>
                                <h6>UNIVERZITET UNION - NIKOLA TESLA</h6>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <section class="breadcrum">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p><b style="margin-right: 15px;">Vi ste ovde:</b> <a href="#">Naslovna</a> <span><img src="{{ asset('images/web/blue-arrow-right.png') }}"></span> <a href="#">Kontaktirajte nas</a></p>
                        </div>
                    </div>
                </div>
        </section>


        <section class="page_section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <h5 style="text-transform: uppercase;"><b>KONTAKTIRAJTE NAS</b></h5>
                            <div class="red-line1"></div>
                            
                            <div class="row">
                                <div class="form-group col-12 col-md-6 form_section text-right">
                                    <form action="#" method="POST">
                                        <input class="form-control" type="text" name="name" placeholder="Ime i prezime">
                                        <input class="form-control" type="text" name="email" placeholder="Email adresa">
                                        <input class="form-control" type="number" name="fon" placeholder="Kontakt telefon (opciono)">
                                        <textarea class="form-control" name="message" cols="30" rows="6" placeholder="Tekst poruke"></textarea>
                                        <button>POŠALJITE</button>
                                    </form>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="contact_info">
                                                <img class="img-fluid" src="{{ asset('images/web/blue-pin.png') }}">
                                            </div>
                                            <div class="contact_info" style="padding-left: 7px;">
                                                <p>Cara Dušana 62-64, 11000 Beograd</p>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin-top: 10px;">
                                            <div class="contact_info">
                                                <img class="img-fluid" src="{{ asset('images/web/blue-fon.png') }}">
                                            </div>
                                            <div class="contact_info" style="padding-left: 7px;">
                                                <p><b>Centrala:</b> 011 2180-271</p>
                                                <p><b>Studentska služba:</b> 011 2180-143</p>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin-top: 10px;">
                                            <div class="contact_info">
                                                <img class="img-fluid" src="{{ asset('images/web/blue-mail.png') }}">
                                            </div>
                                            <div class="contact_info" style="padding-left: 7px;">
                                                <p>info@unionnikolatesla.edu.rs</p>
                                            </div>
                                        </div>
                                        <div class="col-12" style="margin-top: 10px;">
                                            <div class="contact_info">
                                                <img class="img-fluid" src="{{ asset('images/web/blue-pib.png') }}">
                                            </div>
                                            <div class="contact_info" style="padding-left: 7px;">
                                                <p><b>PIB:</b> 107306115</p>
                                                <p><b>Matični broj:</b> 17807633</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="row" style="margin-top: 50px;">
                                <div class="col-12 col-md-6">
                                    <h5><b>GDE SE NALAZIMO</b></h5>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px; margin-bottom: 20px;">
                                <div class="col-12 col-md-12">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.0043047338218!2d20.461226123275853!3d44.82147694358469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7ab507ee8b1d%3A0xecfd0fb54aaf998f!2sCara%20Du%C5%A1ana%2062%2C%20Beograd%2011000!5e0!3m2!1sen!2srs!4v1576676107440!5m2!1sen!2srs" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div>


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