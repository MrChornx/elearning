@extends('layouts.admin')

@section('title', 'საგნის დამატება')

@section('content')
    <link href="{{url('/')."/css/multi-select.css"}}" rel="stylesheet" type="text/css">
    <style>
        .ms-container{
            width:550px;
        }
        td,th{
            padding: 20px;
        }
        td a{
            color: darkseagreen;
        }
        td a:hover{
            text-decoration: none;
            color: green;
            font-weight: bold;
        }
    </style>
    <div style="padding: 30px; padding-bottom: 0;">
        <form class="form" method="post" action="{{url('/admin/add-theory')}}" enctype="multipart/form-data">
            <div class="card">
                <div class="card-head style-primary">
                    <header>მასალის დამატება</header>
                </div>
                <div class="card-body floating-label">
                    <div class="message-styled" style="width: 500px; margin: 0 auto; margin-top:10px; font-size: 20px; color: red">
                        {{Session::get('msg')}}
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control autocomplete-off" id="heading" name="heading" value=" ">
                        <label for="heading">სათაური</label>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control autocomplete-off" id="text" name="text" value=" ">
                        <label for="text">აღწერა</label>
                    </div>

                    <div class="form-group" id="fileForm">
                        <label for="file">ფაილის ატვირთვა</label>
                        <div style="margin-top:10px"></div>
                        <input id="file" type="file" class="file" name="file[]">
                    </div>
                    <button id="addFile" style="margin-top:10px" class="btn btn-flat btn-primary ink-reaction">ფაილის დამატება</button>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subject" value="{{$id}}">


                    <div class="card-actionbar">
                        <div class="card-actionbar-row">
                            <button type="submit" class="btn btn-flat btn-primary ink-reaction">დამატება</button>
                        </div>
                    </div>
                </div>


            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            setTimeout(function(){
                $('.autocomplete-off').val('');
            }, 15);

            $('#my-select').multiSelect();
            $('#my-select-2').multiSelect();

            $("#addFile").click(function(e){
                e.preventDefault();
                $("#fileForm").append('<input id="file" type="file" class="file" name="file[]">');
            });
        });
    </script>
@stop


