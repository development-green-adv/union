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


            <form action="/admin/dodaj-stranicu" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Izaberite jezik</label>
                        <select class="form-control" name="lang" id="langg">
                            <option value="" selected disabled>Izaberite jezik</option>
                            <option value="sr">Srpski</option>
                            <option value="en">Engleski</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-12">

                        <label>Izaberite kategoriju</label>
                        <select class="form-control" name="category">
                            
                            <option selected disabled>Izaberite kategoriju</option>

                            @if(count($categories) > 0)

                                @foreach($categories as $category)

                                    @if($category->parent_cat == 0)

                                        <option class="category_langg" lang="{{ $category->lang }}" value="{{ $category->id }}">{{ $category->category_name }}</option>

                                        @foreach($categories as $subcategory)

                                            @if($category->id == $subcategory->parent_cat)

                                                <option class="category_langg" lang="{{ $category->lang }}" value="{{ $subcategory->id }}">** {{ $subcategory->category_name }}</option>

                                            @endif

                                        @endforeach

                                    @endif

                                @endforeach

                            @endif

                        </select>   

                    </div>
                </div>



                <div class="row">
                    <div class="form-group col-12 col-md-12">

                        <label>Izaberite tip stranice</label>
                        <select class="form-control" name="page_type">

                            <option selected disavled>Izaberite tip stranice</option>
                            <option value="text">Tekst</option>
                            <option value="novost">Novost</option>
                            <option value="galerija">Galerija</option>

                        </select>

                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Naziv stranice</label>
                        <input class="form-control" type="text" name="page_title">
                    </div>
                </div>
        
                <div class="row">
                    <div class="form-group col-12 col-md-12">

                        <label>Unesite tekst</label>
                        <textarea class="form-control textarea" name="page_text" rows="15" placeholder="Unesite tekst ovde"></textarea>

                    </div>
                </div>


                <div class="row">   
                    <div class="form-group col-12 col-md-12">
                        <label for="">Na pocetnoj</label>
                        <select class="form-control" name="na_pocetnoj">
                            <option value="" selected disabled>Izaberite</option>
                            <option value="1">Da</option>
                            <option value="0">Ne</option>
                            
                        </select>

                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Slika novosti</label><br>
                        <span class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Izaberi</span>
                    </div>
                </div>
                <div id="glavna-slika">

                </div>


                <div class="row">
                    <div class="form-group col-12 col-md-6">
                    
                        <label>Galerija slika</label><br>
                        <span class="btn btn-primary" data-toggle="modal" data-target="#myModal">Izaberi</span>
                        <div id="slike"></div>

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

                <div class="row">

                    <div class="form-group col-12 col-md-6">

                        <label for="">Tekst link-a 1</label>
                        <input class="form-control" type="text" name="opis_link1">

                    </div>
                    <div class="form-group col-12 col-md-6">

                        <label>Link 1</label>
                        <input class="form-control" type="text" name="link1">
                    
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-12 col-md-6">

                        <label for="">Tekst link-a 2</label>
                        <input class="form-control" type="text" name="opis_link2">

                    </div>
                    <div class="form-group col-12 col-md-6">

                        <label>Link 2</label>
                        <input class="form-control" type="text" name="link2">
                    
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-12 col-md-6">

                        <label for="">Tekst link-a 3</label>
                        <input class="form-control" type="text" name="opis_link3">

                    </div>
                    <div class="form-group col-12 col-md-6">

                        <label>Link 3</label>
                        <input class="form-control" type="text" name="link3">
                    
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-12 col-md-6">

                        <label for="">Tekst link-a 4</label>
                        <input class="form-control" type="text" name="opis_link4">

                    </div>
                    <div class="form-group col-12 col-md-6">

                        <label>Link 4</label>
                        <input class="form-control" type="text" name="link4">
                    
                    </div>

                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label>Tekst dokumenta</label>
                        <input class="form-control" type="text" name="document_text">
                    </div>
                    <div class="col-12 col-md-6">
                        <label>Izaberite dokument</label>
                        <input class="form-control" type="file" name="document">
                    </div>
                </div>


                <div class="row">

                    <div class="col-12 col-md-12">

                        <label for="">Status dogadjaja</label>
                        <select class="form-control" name="status">

                            <option value="1">Aktivan</option>
                            <option value="0">Neaktivan</option>
                            
                        </select>

                    </div>

                </div>
                <br>


                <button class="btn btn-primary">Sačuvaj</button>
            </form>
        </div>

    </div>

    


    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Dodajte fotografije u biblioteku</h4>
                </div>
                <div class="modal-body">
                    <div style="border-bottom: 2px solid #c5c5c5; padding-bottom: 10px;">
                        <p><b>Izaberite fotografije sa racunara</b></p>


                        <form action="/admin/dodaj-galeriju-slika" id="upload_form" method="POST" enctype="multipart/form-data">

                            @csrf
                            <input type="file" name="images[]" id="galImg" multiple>
                            <button id="submitGallery" style="margin-top: 10px;" class="btn btn-primary">Sačuvaj</button>
                            <button style="margin-top: 10px;float:right; margin-right: 10px;" class="btn btn-primary galleryImages" onclick="showInDiv()">Sačuvaj galeriju</button>
                        </form>
                        

                    </div>

                    <div class="row" id="gallery-images">
                        @if(count($allImages) > 0)
                            @foreach ($allImages as $image)
                                <div class="col-12 col-md-3" style="margin-top: 30px; height: 120px; width: 120px; overflow: hidden; display: inline-flex;">
                                <img class="img-responsive modal-img" id="{{ $image->id }}" name="{{ $image->image_name }}" onclick="getImageValue({{ $image->id }})" src="../images_gallery/{{ $image->image_name }}">
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                </div>
            </div>
        
        </div>
    </div>


    <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Dodajte fotografije u biblioteku</h4>
                </div>
                <div class="modal-body">
                    <div style="border-bottom: 2px solid #c5c5c5; padding-bottom: 10px;">
                        <p><b>Izaberite fotografije sa racunara</b></p>


                        <form action="/admin/dodaj-galeriju-slika" id="upload_form1" method="POST" enctype="multipart/form-data">

                            @csrf
                            <input type="file" name="images[]" id="galImg1" multiple>
                            <button id="submitGallery" style="margin-top: 10px;" class="btn btn-primary">Sačuvaj</button>
                            <button style="margin-top: 10px; float:right;" class="btn btn-primary mainImage" onclick="showInDivMain()">Sačuvaj glavnu sliku</button>
                        </form>
                        

                    </div>

                    <div class="row" id="gallery-images1">
                        @if(count($allImages) > 0)
                            @foreach ($allImages as $image)
                                <div class="col-12 col-md-3" style="margin-top: 30px; height: 120px; width: 120px; overflow: hidden; display: inline-flex;">
                                <img class="img-responsive modal-img bor" id="1{{ $image->id }}" name="{{ $image->image_name }}" onclick="getImageValue1({{ $image->id }})" src="{{ asset('images_gallery/'.$image->image_name) }}">
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                </div>
            </div>
        
        </div>
    </div>


    <script>    

        $(".category_langg").css("display", "none");
                    
        $("#langg").on("change", function(){

            var lang = $(".category_langg").attr("lang");

            if($(this).val() == lang){

                $(".category_langg").css("display", "block");

            }else{

                $(".category_langg").css("display", "none");

            }

        });
        
    </script>


    
    <script>

        var imageArray = [];
        var imageArray1 = [];

        function getImageValue(id){

            var data = $('#' + id).attr('name');

            if(imageArray.includes(data) == false){

                imageArray.push(data);
                $("#"+id).css("border", "4px solid red");

            }else{
                var index = imageArray.indexOf(data);
                if (index > -1) {
                imageArray.splice(index, 1);
                $("#"+id).css("border", "none");

                }
            }

        }



        function getImageValue1(id){

            var data = $('#' + id).attr('name');
            $(".bor").css("border", "none");

            if(imageArray1.includes(data) == false){
                $("#1"+id).css("border", "none");

                imageArray1 = [];
                imageArray1.push(data);
                $("#1"+id).css("border", "4px solid red");

            }else{

                imageArray1 = [];

                imageArray1.push(data);
                $("#1"+id).css("border", "none");
                
            }


        }


        function showInDiv(){

            var arrayLength = imageArray.length;

            $("#slike").empty();

            for (var i = 0; i < arrayLength; i++) {

                var img = "<img class='img-responsive' src='../images_gallery/"+imageArray[i]+"'/>";
                var input = "<input type='hidden' name='galleryImages[]' value="+imageArray[i]+" />";

                $("#slike").append(img);
                $("#slike").append(input);
            }

        }
        

        function showInDivMain(){

            var arrayLength1 = imageArray1.length;

            $("#glavna-slika").empty();

            for (var i = 0; i < arrayLength1; i++) {

                var img1 = "<img class='img-responsive' src='../images_gallery/"+imageArray1[i]+"'/>";
                var input1 = "<input type='hidden' name='mainImage' value="+imageArray1[i]+" />";

                $("#glavna-slika").append(img1);
                $("#glavna-slika").append(input1);
            }
            
        }
        


    </script>


    <script>
        
        $(document).ready(function(){

            $('#upload_form').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:"/admin/dodaj-galeriju-slika",
                    method:"POST",
                    data:new FormData(this),
                    // dataType:'JSON',
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                    {
                        //console.log(data);
                        $("#gallery-images").fadeOut(200);

                        $("#gallery-images").empty();

                        for(var i = 0; i < data.length; i++){
                            $('#gallery-images').append('<div class="col-12 col-md-3" style="margin-top: 30px; height: 120px; width: 120px; overflow: hidden; display: inline-flex;"><img class="img-responsive modal-img" id="'+ data[i]['id'] +'" name="'+ data[i]['image_name'] +'" onclick="getImageValue('+ data[i]['id'] +')" src="../images_gallery/' + data[i]['image_name'] + '"></div>');   
                        }

                        $("#gallery-images").fadeIn(4000);

                        $("#galImg").val("");
                    }
                })
            });

        });


        $(document).ready(function(){

            $('#upload_form1').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:"/admin/dodaj-galeriju-slika",
                    method:"POST",
                    data:new FormData(this),
                    // dataType:'JSON',
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                    {
                        console.log(data);
                        $("#gallery-images1").fadeOut(200);

                        $("#gallery-images1").empty();

                        for(var i = 0; i < data.length; i++){
                        $('#gallery-images1').append('<div class="col-12 col-md-3" style="margin-top: 30px; height: 120px; width: 120px; overflow: hidden; display: inline-flex;"><img class="img-responsive modal-img" id="'+ data[i]['id'] +'" name="'+ data[i]['image_name'] +'" onclick="getImageValue1('+ data[i]['id'] +')" src="/public/images_gallery/' + data[i]['image_name'] + '"></div>');   
                        }

                        $("#gallery-images1").fadeIn(4000);

                        $("#galImg1").val("");
                    }
                })
            });

        });

    </script>


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