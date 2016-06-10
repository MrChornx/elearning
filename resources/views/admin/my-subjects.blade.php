@extends('layouts.admin')

@section('title', 'საგნის დამატება')

@section('content')
    <link href="{{url('/')."/css/multi-select.css"}}" rel="stylesheet" type="text/css">
    <style>
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
    <div style="padding: 30px">
        <div class="card">
            <div class="card-head style-primary">
                <header>ჩემი საგნები</header>
            </div>
            <div class="message-styled" style="width: 500px; margin: 0 auto; margin-top:10px; font-size: 20px; color: green">
                {{Session::get('msg-success')}}
            </div>
            <div class="card-body floating-label">
                <table cellpadding="20" border="black">
                    <thead>
                    <tr>
                        <th>დასახელება</th>
                        <th>ფაკულტეტი</th>
                        <th>ლექტორები</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($subjects as $subject)
                            <tr>
                                <td>{{$subject->name}}</td>
                                <td>
                                    @foreach($subject->courses as $course)
                                        ● {{$course->name}}<br>
                                        @endforeach
                                </td>
                                <td>
                                    @foreach($subject->users as $lecturer)
                                        ● {{$lecturer->firstname." ".$lecturer->lastname}}<br>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{url('admin/edit-subject/'.$subject->id)}}">რედაქტირება</a>
                                </td>
                                <td>
                                    <a href="{{url('admin/add-theory/'.$subject->id)}}">მასალის დამატება</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            setTimeout(function(){
                $('.autocomplete-off').val('');
            }, 15);

            $('#my-select').multiSelect();
            $('#my-select-2').multiSelect();
            //$('table').stacktable();
        });
    </script>
@stop


