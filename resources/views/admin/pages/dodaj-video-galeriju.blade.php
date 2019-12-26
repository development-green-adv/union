@extends('admin/layouts/mas')

@section('style')

    <style>
        
        .li{
            list-style-type: none;
        }
    
    </style>

@endsection

@section('data')

    <div class="row">
        <div class="col-12 col-md-12">
            <h4>Dodaj stranicu</h4>
            <div style="border-bottom: 1px solid #c5c5c5; margin-bottom: 30px;"></div>
        </div>
        <div class="col-12 col-md-2"></div>
        <div class="col-12 col-md-8">
            <div class="row">
                
            </div>
        
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            @if(session()->has('messageError'))
                <div class="alert alert-danger">
                    {{ session()->get('messageError') }}
                </div>
            @endif


            <form action="/admin/dodaj-video-galeriju" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Izaberite jezik</label>
                        <select class="form-control" name="lang" id="lang">
                            <option value="" selected disabled>Izaberite jezik</option>
                            <option value="sr">Srpski</option>
                            <option value="en">Engleski</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Naziv video galerije</label>
                        <input class="form-control" type="text" name="gallery_name">
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-md-12">

                        <label>Dodaj video</label><br>
                        <div class="btn btn-success add-video-link"><b>+</b></div>
                        <div class="video-box">

                        </div>

                    </div>
                </div>
                <br>

                <button class="btn btn-primary">Sačuvaj</button>
            </form>
        </div>

    </div>


    <script>

        var rb = 0;
        $(".add-video-link").click(function(){
            rb++;
            var input = "<div class='row' id='"+rb+"'><div class='col-11 col-md-11'> <input id='"+rb+"' style='margin-top: 15px;' class='form-control input' type='text' name='video_link[]' placeholder='Unesite link'></div> <div class='col-1 col-md-1 text-right'><div style='margin-top: 14px;' class='btn btn-danger' onclick='remove(this)' id='"+rb+"'>-</div></div></div>";
            $(".video-box").append(input);
        });

        function remove(el){
            $("div#" + el.id).remove();
        }

    </script>
    

@endsection