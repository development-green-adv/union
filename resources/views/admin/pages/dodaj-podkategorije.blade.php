@extends('admin/layouts/mas')

@section('style')

    <style>
        
        li{
            list-style-type: none;
        }
    
    </style>

@endsection

@section('data')



    <div class="row">
        <div class="col-12 col-md-4">

            <div class="row">
                <div class="col-12 col-md-12">
                    <h4>Dodaj podkategoriju</h4>
                    <div style="border-bottom: 1px solid #c5c5c5; margin-bottom: 30px;"></div>
                </div>
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

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            @if(session()->has('messageError'))
                <div class="alert alert-danger">
                    {{ session()->get('messageError') }}
                </div>
            @endif 

            <form action="/admin/dodaj-podkategorije" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Izaberite glavnu kategoriju</label>
                        <select class="form-control" name="category_id">
                            <option selected disabled>Izaberite kategoriju</option>

                            @if(count($categories) > 0)
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            @else

                            @endif

                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Ime podkategorije</label>
                        <input class="form-control" type="text" name="subcategory_name">
                    </div>
                </div>
        
                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Meta keywords -- reči i rečenice odvojite <span style="color: red;">zarezom</span></label>
                        <input class="form-control" type="text" name="subcategory_keywords">
                    </div>
                </div>
        
                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Meta description</label>
                        <textarea class="form-control" name="subcategory_description" cols="30" rows="5"></textarea>
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Status podkategorije</label>
                        <select class="form-control" name="status">
                            <option value="1">Aktivna</option>
                            <option value="0">Neaktivna</option>
                        </select>
                    </div>
                </div>
        
                <button class="btn btn-primary">Sačuvaj</button>
            </form>

        </div>

        <div class="col-12 col-md-4">

            <div class="row">
                <div class="col-12 col-md-12">
                    <h4>Aktivne podkategorije</h4>
                    <div style="border-bottom: 1px solid #c5c5c5; margin-bottom: 30px;"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12">

                    @if(count($categories) > 0)

                        @foreach($categories as $category)

                            <li style="margin-bottom: 7px; margin-top: 7px;"><b>{{ $category->category_name }}</b></li>

                            @foreach($subcat as $subcategory)

                                @if($category->id == $subcategory->category_id)

                                    <li style="margin-left: 15px;">{{ $subcategory->subcategory_name }} <a style="margin-left: 10px;" href="izmeni-podkategorije/{{ $subcategory->id }}">Izmeni</a></li>

                                @endif

                            @endforeach

                        @endforeach

                    @endif

                </div>
            </div>
        </div>


        <div class="col-12 col-md-4">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h4>neaktivne podkategorije</h4>
                    <div style="border-bottom: 1px solid #c5c5c5; margin-bottom: 30px;"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12">

                    @if(count($inactiveSubcat) > 0)

                        @foreach($inactiveSubcat as $inactive)

                            <li>{{ $inactive->subcategory_name }} <a style="margin-left: 10px;" href="izmeni-podkategorije/{{ $inactive->id }}">Izmeni</a></li>

                        @endforeach

                    @else

                        <p>Trenutno nema neaktivnih podkategorija</p>

                    @endif

                </div>
            </div>
        </div>


    </div>

    

    

@endsection