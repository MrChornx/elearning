@extends('layouts.admin')

@section('title', 'საგნის დამატება')

@section('content')
    <link href="{{url('/')."/css/multi-select.css"}}" rel="stylesheet" type="text/css">
    <style>
        .ms-container{
            width:550px;
        }
    </style>
    <div style="padding: 30px">
        <form class="form" method="post" action="{{url('/admin/add-subject')}}">
            <div class="card">
                <div class="card-head style-primary">
                    <header>საგნის დამატება</header>
                </div>
                <div class="card-body floating-label">
                    <div class="message-styled" style="width: 500px; margin: 0 auto; margin-top:10px; font-size: 20px; color: red">
                        {{Session::get('msg')}}
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control autocomplete-off" id="subjName" name="name" value=" ">
                        <label for="subjName">საგნის დასახელება</label>
                    </div>
                    <div class="form-group">
                        <div style="margin-top: 20px;">
                            <select multiple="multiple" id="my-select" name="courses[]">
                                @foreach($courses as $course)
                                <option value='{{$course->id}}'>{{$course->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <label for="my-select"><h4>ფაკულტეტი</h4></label>
                    </div>

                    <div class="form-group">
                        <div style="margin-top: 20px;">
                            <select multiple="multiple" id="my-select-2" name="lecturers[]">
                                @foreach($users as $lecturer)
                                    <option value='{{$lecturer->id}}'>{{$lecturer->firstname." ".$lecturer->lastname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="my-select"><h4>ლექტორები</h4></label>
                    </div>

                    <div class="form-group">
                        <div class="checkbox checkbox-inline checkbox-styled">
                            <label>
                                <input type="checkbox" id="checkbox"> <span>საგნის ჩაკეტვა</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="passwordCont" style="display: none">
                        <label for="subject-password">პაროლი</label>
                        <div style="margin-top:10px"></div>
                        <input type="text" value="" name="password" id="subject-password">
                    </div>
                </div>


                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="card-actionbar">
                    <div class="card-actionbar-row">
                        <button type="submit" class="btn btn-flat btn-primary ink-reaction">დამატება</button>
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

            $("#checkbox").change(function(){
                $("#passwordCont").fadeToggle();
                $("#subject-password").val('');
            })
        });
    </script>
@stop


