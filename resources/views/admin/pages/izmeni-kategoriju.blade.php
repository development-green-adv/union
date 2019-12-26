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
            <h4>Izmeni kategoriju</h4>
            <div style="border-bottom: 1px solid #c5c5c5; margin-bottom: 30px;"></div>
        </div>
        <div class="col-12 col-md-4"></div>
        <div class="col-12 col-md-4">
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


            <form action="/admin/izmeni-kategoriju" method="POST">
                @csrf

                <input type="hidden" name="id" value="{{ $data->id }}">

                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Izaberite jezik</label>
                        <select class="form-control" name="lang">
                            <option @if($data->lang == "sr") selected @endif value="sr">Srpski</option>
                            <option @if($data->lang == "en") selected @endif value="en">Engleski</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Ime kategorije</label>
                        <input class="form-control" type="text" name="category_name" value="{{ $data->category_name }}">
                    </div>
                </div>
        
                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Meta keywords -- reči i rečenice odvojite <span style="color: red;">zarezom</span></label>
                        <input class="form-control" type="text" name="category_keywords" value="{{ $data->category_keywords }}">
                    </div>
                </div>
        
                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Meta description</label>
                        <textarea class="form-control" name="category_description" cols="30" rows="5">{{ $data->category_description }}</textarea>
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label>Status kategorije</label>
                        <select class="form-control" name="status">
                            <option value="1" @if($data->status == 1) checked @endif>Aktivna</option>
                            <option value="0" @if($data->status == 0) checked @endif>Neaktivna</option>
                        </select>
                    </div>
                </div>

                <button class="btn btn-primary">Sačuvaj</button>
            </form>
        </div>

    </div>

    

@endsection