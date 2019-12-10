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
        <div class="col-12 col-md-4">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h4>Dodaj kategoriju</h4>
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


            <form action="/admin/dodaj-kategorije" method="POST">
                @csrf

                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Tip kategorije</label>
                        <select class="form-control" name="category_type">
                            <option value="" selected disabled>Izaberite tip kategorije</option>
                            <option value="blog">Blog</option>
                            <option value="model">Model</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Ime kategorije</label>
                        <input class="form-control" type="text" name="category_name">
                    </div>
                </div>
        
                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Meta keywords -- reči i rečenice odvojite <span style="color: red;">zarezom</span></label>
                        <input class="form-control" type="text" name="category_keywords">
                    </div>
                </div>
        
                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Meta description</label>
                        <textarea class="form-control" name="category_description" cols="30" rows="5"></textarea>
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Status kategorije</label>
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
                    <h4>Aktivne kategorije</h4>
                    <div style="border-bottom: 1px solid #c5c5c5; margin-bottom: 30px;"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12">

                    @if(count($activeCategory) > 0)
                        @foreach($activeCategory as $active)
                            <li class="li">{{ $active->category_type }} / {{ $active->category_name }} <a style="margin-left: 15px;" href="/admin/izmeni-kategoriju/{{ $active->id }}"><b>Izmeni</b></a></li>
                        @endforeach
                    @else
                        <p><b>Trenutno nema aktivnih kategorija</b></p>
                    @endif

                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h4>Neaktivne kategorije</h4>
                    <div style="border-bottom: 1px solid #c5c5c5; margin-bottom: 30px;"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12">

                    @if(count($inactiveCategory) > 0)
                        @foreach($inactiveCategory as $inactive)
                            <li class="li">{{ $inactive->category_type }} / {{ $inactive->category_name }} <a style="margin-left: 15px;" href="/admin/izmeni-kategoriju/{{ $inactive->id }}"><b>Izmeni</b></a></li>
                        @endforeach
                    @else
                        <p><b>Trenutno nema neaktivnih kategorija</b></p>
                    @endif

                </div>
            </div>
        </div>


    </div>

    

@endsection