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
                        <input type="text" class="form-control" id="subjName" name="name" value="{{$subject->name}}">
                        <label for="subjName">საგნის დასახელება</label>
                    </div>
                    <div class="form-group">
                        <div style="margin-top: 20px;">
                            <select multiple="multiple" id="my-select" name="courses[]">
                                    <?php
                                foreach($courses as $course){
                                    $check = false;
                                    foreach($subject->courses as $courseCurrent){
                                        if($courseCurrent->id == $course->id){
                                            $check = true;
                                        }
                                    }
                                    if($check){ ?>
                                        <option selected value='{{$course->id}}'>{{$course->name}}</option>
                                        <?php
                                    }else{
                                            ?>
                                        <option value='{{$course->id}}'>{{$course->name}}</option>
                                        <?php
                                        }
                                }
                                    ?>
                            </select>
                        </div>
                        <label for="my-select"><h4>ფაკულტეტი</h4></label>
                    </div>

                    <div class="form-group">
                        <div style="margin-top: 20px;">
                            <select multiple="multiple" id="my-select-2" name="lecturers[]">
                                <?php
                                foreach($users as $lecturer){
                                $check = false;
                                foreach($subject->users as $user){
                                    if($user->id == $lecturer->id){
                                        $check = true;
                                    }
                                }
                                if($check){ ?>
                                <option selected value='{{$lecturer->id}}'>{{$lecturer->firstname." ".$lecturer->lastname}}</option>
                                <?php
                                }else{
                                ?>
                                    <option value='{{$lecturer->id}}'>{{$lecturer->firstname." ".$lecturer->lastname}}</option>
                                <?php
                                }
                                }
                                ?>
                            </select>
                        </div>
                        <label for="my-select"><h4>ლექტორები</h4></label>
                    </div>
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="card-actionbar">
                    <div class="card-actionbar-row">
                        <button type="submit" class="btn btn-flat btn-primary ink-reaction">შენახვა</button>
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
        });
    </script>
@stop


