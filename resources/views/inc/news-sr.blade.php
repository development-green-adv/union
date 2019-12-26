@if(count($novosti) > 0)

    <section class="news_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5><b>NOVOSTI NA UNIVERZITETU</b></h5>
                    <div class="red-line1"></div>
                </div>
            </div>
            <div class="row" style="padding-top: 15px;">
                
                @foreach($novosti as $novost)

                    <div class="col-12 col-md-3">
                        <div class="news_item" style="min-height: 380px; position: relative;">
                                <div style="height: 150px; overflow: hidden;">
                                    <img class="img-fluid" src="/public/images_gallery/{{ $novost->main_image }}">
                                </diV>
                                
                                
                                <div style="padding: 10px;">
                                <p style="margin-bottom: 7px; ">{{ $novost->created_at }}</p>
                                
                                {!! substr($novost->page_text, 0, 100).".."; !!}
                                
                                <br>
                                <br>
                                <a style="position: absolute; left: 10px; bottom: 10px;" class="news_link" href="/sr/novost/{{ $novost->alias }}/{{ $novost->id }}">DETALJNIJE</a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
@endif