@section('data')

@extends('admin/layouts/mas')

@section('style')

    <style>

        .category{
            width: 100%;
            background-color: #dedede;
            margin-top: 5px;
            list-style-type: none;
            padding: 10px 15px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .category i{
            margin-right: 10px;
        }
    
    </style>

@endsection

@section('data')


    <div class="row">
        <div class="col-12 col-md-4">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h4>Sortiraj kategorije</h4>
                    <div style="border-bottom: 1px solid #c5c5c5; margin-bottom: 30px;"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12">

                    <ul id="sort_box" style="padding-left: 0px;">

                        @if(count($categories) > 0)

                            @foreach($categories as $category)

                                <li class="category" id="{{ $category->id }}"><i class="fas fa-arrows-alt"></i> {{ $category->category_name }}</li>

                            @endforeach

                        @endif

                    </ul>

                </div>
            </div>

        </div>
    </div>


    <script>    

        $(document).ready(function(){
            $('#sort_box').sortable({
                
                placeholder : "ui-state-highlight",
                update  : function(event, ui)
                {
                var page_id_array = new Array();
                $('#sort_box li').each(function(){
                    page_id_array.push($(this).attr("id"));
                });
                $.ajax({
                    url:"/admin/sortiraj-kategorije",
                    method:"POST",
                    data:{
                        _token: "{{ csrf_token() }}",
                        page_id_array:page_id_array
                        },
                    success:function(data)
                    {
                    console.log(data);
                    }
                });
                }

            });

        });
        

    </script>
    

@endsection