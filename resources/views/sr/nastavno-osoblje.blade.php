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
                                <h1>NASTAVNO OSOBLJE</h1>
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
                            <h5 style="text-transform: uppercase;"><b>Nastavno osoblje</b></h5>
                            <div class="red-line1"></div>
                            <br>
                            @if(count($nastavnoo) > 0)

                                @foreach($nastavnoo as $nastavno)

                                    <div class="row" style="margin-bottom: 15px;">
                                        
                                            @if($nastavno->main_image == "")

                                            @else 
                                            <div class="col-12 col-md-2">
                                                <img class="img-fluid" src="public/images_gallery/{{ $nastavno->main_image }}">
                                            </div>
                                            @endif
                                        
                                        <div class="col-12 col-md-10">
                                            <p><b><a class="pdf_link" href="{{ $nastavno->pdf_link }}" target="_blank">{{ $nastavno->name }}</b></a></p>
                                            <p><b>{{ $nastavno->email }} </b></p>
                                            <p>{!! $nastavno->prof_text !!}</p>        
                                        </div>
                                    </div>

                                @endforeach

                            @else 

                                <p>Trenutno nema raspoloživog nastavnog kadra</p>

                            @endif

                            

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