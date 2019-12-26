@extends('admin/layouts/mas')

@section('style')

    <style>
        
        .table > tbody > tr > td {
            vertical-align: middle;
        }
    
    </style>

@endsection

@section('data')

    <div class="row">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h4>Lista administratora</h4>
                    <div style="border-bottom: 1px solid #c5c5c5; margin-bottom: 30px;"></div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 20px;">
            </div>

            <div class="row activee">
                <div class="col-12 col-md-12">

                    @if(session()->has('success'))
                        <div class="alert alert-success text-center">
                            {{ session()->get('success') }}
                        </div>
                    @endif
    
                    @if(session()->has('messageError'))
                        <div class="alert alert-danger text-center">
                            {{ session()->get('messageError') }}
                        </div>
                    @endif
                    

                    <table class="table table-striped" id="myTable">
                        <thead class="thead-dark">
                            <tr>
                                <th>Akcija</th>
                                <th>Naziv kategorija</th>
                                <th>Datum kreiranja</th>
                                <th>Jezik</th>
                            </tr>
                        </thead>
                        <tbody id="els">

                            @if(count($datas) > 0)

                                @foreach($datas as $data)

                                    <tr>
                                        <td>
                                            <a class="btn btn-primary" href="/admin/izmeni-kategoriju/{{ $data->id }}"><i class="fas fa-edit"></i> Izmeni</a>
                                            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#exampleModal{{ $data->id }}"><i class="fas fa-trash-alt"></i> Obriši</a>
                                        </td>
                                        <td>@if($data->parent_cat != 0) ** {{ $data->category_name }} @else {{ $data->category_name }} @endif</td>
                                        <td>{{ $data->created_at }}</td>
                                        <td>{{ $data->lang }}</td>
                                    </tr>

                                    <div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h4><b>Da li ste sigurni ?</b></h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Ne</button>
                                                <a href="/admin/obrisi-kategoriju/{{ $data->id }}" class="btn btn-success">Da</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                                

                            @else

                                <tr>
                                    <td>Trenutno nema administratora</td>
                                </tr> 

                            @endif

                           

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>





    <script>

        $('#myTable').DataTable({
            "columnDefs": [{
                "searchable": false,
                "targets": [0]
            },{
                "orderable": false,
                "targets": [0]
            }]

        });
    
    </script>

    

@endsection