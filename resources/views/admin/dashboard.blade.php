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
    {{--<div style="padding: 30px; padding-bottom: 0;">--}}
        {{--<div class="card">--}}
            {{--<div class="card-head style-primary">--}}
                {{--<header>ჩემი საგნები</header>--}}
            {{--</div>--}}
            {{--<div class="card-body floating-label">--}}
                {{--<table cellpadding="20" border="black">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th>დასახელება</th>--}}
                        {{--<th>ფაკულტეტი</th>--}}
                        {{--<th>ლექტორები</th>--}}
                        {{--<th></th>--}}
                        {{--<th></th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--@foreach($subjects as $subject)--}}
                        {{--<tr>--}}
                            {{--<td>{{$subject->name}}</td>--}}
                            {{--<td>--}}
                                {{--@foreach($subject->courses as $course)--}}
                                    {{--● {{$course->name}}<br>--}}
                                {{--@endforeach--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--@foreach($subject->users as $lecturer)--}}
                                    {{--● {{$lecturer->firstname." ".$lecturer->lastname}}<br>--}}
                                {{--@endforeach--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="{{url('admin/edit-subject/'.$subject->id)}}">რედაქტირება</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="{{url('admin/add-theory/'.$subject->id)}}">მასალის დამატება</a>--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                    {{--@endforeach--}}
                    {{--</tbody>--}}
                {{--</table>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div style="padding: 30px">--}}
        {{--<form class="form" method="post" action="{{url('/admin/add-subject')}}">--}}
            {{--<div class="card">--}}
                {{--<div class="card-head style-primary">--}}
                    {{--<header>საგნის დამატება</header>--}}
                {{--</div>--}}
                {{--<div class="card-body floating-label">--}}
                    {{--<div class="message-styled" style="width: 500px; margin: 0 auto; margin-top:10px; font-size: 20px; color: red">--}}
                        {{--{{Session::get('msg')}}--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<input type="text" class="form-control autocomplete-off" id="subjName" name="name" value=" ">--}}
                        {{--<label for="subjName">საგნის დასახელება</label>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<div style="margin-top: 20px;">--}}
                            {{--<select multiple="multiple" id="my-select" name="courses[]">--}}
                                {{--@foreach($courses as $course)--}}
                                    {{--<option value='{{$course->id}}'>{{$course->name}}</option>--}}
                                {{--@endforeach--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<label for="my-select"><h4>ფაკულტეტი</h4></label>--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<div style="margin-top: 20px;">--}}
                            {{--<select multiple="multiple" id="my-select-2" name="lecturers[]">--}}
                                {{--@foreach($users as $lecturer)--}}
                                    {{--<option value='{{$lecturer->id}}'>{{$lecturer->firstname." ".$lecturer->lastname}}</option>--}}
                                {{--@endforeach--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<label for="my-select"><h4>ლექტორები</h4></label>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

                {{--<div class="card-actionbar">--}}
                    {{--<div class="card-actionbar-row">--}}
                        {{--<button type="submit" class="btn btn-flat btn-primary ink-reaction">დამატება</button>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</form>--}}
    {{--</div>--}}

    <script>
        $(document).ready(function() {
            setTimeout(function(){
                $('.autocomplete-off').val('');
            }, 15);

            $('#my-select').multiSelect();
            $('#my-select-2').multiSelect();
        });
    </script>
@stop


