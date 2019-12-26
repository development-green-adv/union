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
            <h4>Dodaj dokument</h4>
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


            <form action="/admin/dodaj-document" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label>Tekst dokumenta</label>
                        <input class="form-control" type="text" name="document_text">
                    </div>
                    <div class="col-12 col-md-6">
                        <label>Izaberite dokument</label>
                        <input class="form-control" type="file" name="document_file">
                    </div>
                </div>

                <button class="btn btn-primary">Sačuvaj</button>
            </form>
        </div>

    </div>

    
@endsection