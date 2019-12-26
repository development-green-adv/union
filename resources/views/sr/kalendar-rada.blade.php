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
                                <h1>KALENDAR RADA</h1>
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
                            <h5 style="text-transform: uppercase;"><b>Kalendar rada</b></h5>
                            <div class="red-line1"></div>

                            <p>Stranica je u izradi</p>
                            
                        </div>
                       <div class="col-12 col-md-4">
                            <img class="img-fluid" src="{{ asset('images/web/studije.png') }}"><br><br>
                            <img class="img-fluid" src="{{ asset('images/web/studije.png') }}">
                       </div>
                   </div>
               </div>
           </div>
       </section>
        


        <section class="news_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5><b>NOVOSTI</b></h5>
                        <div class="red-line1"></div>
                    </div>
                </div>
                <div class="row" style="padding-top: 15px;">
                
                    <div class="col-12 col-md-3">
                        <div class="news_item">
                            <img class="img-fluid" src="{{ asset('images/web/news.png') }}">
                                <div style="padding: 10px;">
                                <p style="margin-bottom: 7px; ">28.11.2019</p>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora aperiam, libero fugiat 
                                    minima nostrum quas delectus.
                                </p><br>
                                <a class="news_link" href="#">DETALJNIJE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="news_item">
                            <img class="img-fluid" src="{{ asset('images/web/news.png') }}">
                                <div style="padding: 10px;">
                                <p style="margin-bottom: 7px; ">28.11.2019</p>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora aperiam, libero fugiat 
                                    minima nostrum quas delectus.
                                </p><br>
                                <a class="news_link" href="#">DETALJNIJE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="news_item">
                            <img class="img-fluid" src="{{ asset('images/web/news.png') }}">
                                <div style="padding: 10px;">
                                <p style="margin-bottom: 7px; ">28.11.2019</p>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora aperiam, libero fugiat 
                                    minima nostrum quas delectus.
                                </p><br>
                                <a class="news_link" href="#">DETALJNIJE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="news_item">
                            <img class="img-fluid" src="{{ asset('images/web/news.png') }}">
                                <div style="padding: 10px;">
                                <p style="margin-bottom: 7px; ">28.11.2019</p>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora aperiam, libero fugiat 
                                    minima nostrum quas delectus.
                                </p><br>
                                <a class="news_link" href="#">DETALJNIJE</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



       



    @include("inc/footer")


@endsection