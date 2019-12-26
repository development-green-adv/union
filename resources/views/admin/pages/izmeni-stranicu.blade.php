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
            <h4>Izmeni stranicu</h4>
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


            <form action="/admin/izmeni-stranicu" method="POST">
                @csrf

                <input type="hidden" name="id" value="{{ $page->id }}">

                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Izaberite jezik</label>
                        <select class="form-control" name="lang">
                            <option @if($page->page_lang == "sr") selected @endif value="sr">Srpski</option>
                            <option @if($page->page_lang == "en") selected @endif value="en">Engleski</option>
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

                                                <option  @if($page->page_category == $subcategory->id) selected @endif class="category_langg" lang="{{ $category->lang }}" value="{{ $subcategory->id }}">** {{ $subcategory->category_name }}</option>

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
                            <option @if($page->page_type == "text") selected @endif value="text">Tekst</option>
                            <option @if($page->page_type == "novost") selected @endif value="novost">Novost</option>
                            <option @if($page->page_type == "galeija") selected @endif value="galerija">Galerija</option>

                        </select>

                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Naziv stranice</label>
                        <input class="form-control" type="text" name="page_title" value="{{ $page->page_title }}">
                    </div>
                </div>
        
                <div class="row">
                    <div class="form-group col-12 col-md-12">

                        <label>Unesite tekst</label>
                        <textarea class="form-control textarea" name="page_text" placeholder="Unesite tekst ovde" rows="20">{{ $page->page_text }}</textarea>

                    </div>
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


                <?php 
                    
                    if(!empty($page->link_1)){
                        $link1 = explode("^", $page->link_1);
                        $link_op1 = $link1[0];
                        $link_li1 = $link1[1];
                    }else{
                        $link_op1 = "";
                        $link_li1 = "";
                    }

                    if(!empty($page->link_2)){
                        $link2 = explode("^", $page->link_2);
                        $link_op2 = $link2[0];
                        $link_li2 = $link2[1];
                    }else{
                        $link_op2 = "";
                        $link_li2 = "";
                    }

                    if(!empty($page->link_3)){
                        $link3 = explode("^", $page->link_3);
                        $link_op3 = $link3[0];
                        $link_li3 = $link3[1];
                    }else{
                        $link_op3 = "";
                        $link_li3 = "";
                    }

                    if(!empty($page->link_4)){
                        $link4 = explode("^", $page->link_4);
                        $link_op4 = $link4[0];
                        $link_li4 = $link4[1];
                    }else{
                        $link_op4 = "";
                        $link_li4 = "";
                    }

                ?>
                 


                <div class="row">

                    <div class="form-group col-12 col-md-6">

                        <label for="">Tekst link-a 1</label>
                        <input class="form-control" type="text" name="opis_link1" value="{{ $link_op1 }}">

                    </div>
                    <div class="form-group col-12 col-md-6">

                        <label>Link 1</label>
                        <input class="form-control" type="text" name="link1" value="{{ $link_li1 }}">
                    
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-12 col-md-6">

                        <label for="">Tekst link-a 2</label>
                        <input class="form-control" type="text" name="opis_link2" value="{{ $link_op2 }}">

                    </div>
                    <div class="form-group col-12 col-md-6">

                        <label>Link 2</label>
                        <input class="form-control" type="text" name="link2" value="{{ $link_li2 }}">
                    
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-12 col-md-6">

                        <label for="">Tekst link-a 3</label>
                        <input class="form-control" type="text" name="opis_link3" value="{{ $link_op3 }}">

                    </div>
                    <div class="form-group col-12 col-md-6">

                        <label>Link 3</label>
                        <input class="form-control" type="text" name="link3" value="{{ $link_li3 }}">
                    
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-12 col-md-6">

                        <label for="">Tekst link-a 4</label>
                        <input class="form-control" type="text" name="opis_link4" value="{{ $link_op4 }}">

                    </div>
                    <div class="form-group col-12 col-md-6">

                        <label>Link 4</label>
                        <input class="form-control" type="text" name="link4" value="{{ $link_li4 }}">
                    
                    </div>

                </div>


                <div class="row">

                    <div class="col-12 col-md-12">

                        <label for="">Status dogadjaja</label>
                        <select class="form-control" name="status">

                            <option @if($page->status == 1) selected @endif value="1">Aktivan</option>
                            <option @if($page->status == 0) selected @endif value="0">Neaktivan</option>
                            
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