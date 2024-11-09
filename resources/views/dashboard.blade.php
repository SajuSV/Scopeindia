@extends('theme')
@section('style',
            'background-image: url(storage/images/snowpark-skis-headerbg2.jpg);
            background-attachment: fixed;
            background-position: center;
            background-size: cover;')

@section('contents')
<div style="background-image: linear-gradient(180deg,rgb(0, 38, 100, 0.8) , rgb(0, 23, 59, 0.8) );">

    <div>
        <div>

<!-- ------------------------------------------------------------------PROFILE CARD------------------------------------------------------------------ -->
            <div class="text-white " style="padding:100px 0%">
                <div class="row">
                    <div class="col-1 col-lg-3">
                        
                    </div>
                    <div class="carddash col-10 col-lg-6 p-4">
                        <div class="row">
                            <h2 class="col-7 col-lg-6">Profile</h2>
                            <div class="col-5 col-lg-3 pb-2 d-flex justify-content-end">
                                <a href="/changepassword/{{$profile->id}}"><button class="button">Change Password</button></a>
                            </div> 
                            <div class="col-12 col-lg-3 d-flex justify-content-end">
                                <a href="/registrationedit/{{$profile->id}}"><button class="button">Edit</button></a>
                            </div>
                        </div>
                        <hr>
                        <br>
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div>
                                    <img src="storage/{{$profile->image}}" alt="" style="height:100%; width:100%; padding-bottom:20px;">
                                    <h4><b>
                                        {{$profile->firstname}}  {{$profile->secondname}}</b>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <p><b>Email:</b> {{$profile->email}}</p>
                                <p><b>Phone:</b> {{$profile->mobilenumber}}</p>
                                <p><b>D.O.B:</b> {{$profile->dateofbirth}}</p>
                                <p><b>Address:</b> {{$profile->address}} <br>
                                {{$profile->city}}, {{$profile->state}}, {{$profile->country}}
                                </p><br>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-1 col-lg-3">

                    </div>
                </div>
            </div>
<!-- ------------------------------------------------------------------SELECTED COURSES------------------------------------------------------------------ -->

            <h1 style="text-align:center; background-color:white; color:rgb(1, 39, 100)"><b>SELECTED COURSE</b></h1><br>
            <table class="table">
                <thead>
                    <tr class="container">
                            <th scope="col">SL. No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Fee</th>
                            <th scope="col">Remove</th>
                    </tr>
                </thead>
                <tbody>
                            <!-- {{$sn=1}} -->
                        
                @foreach ($signupcourse as $signup)
                    <tr>
                            <th scope="row">{{$sn}}</th>
                            <td>{{$allcourse[$signup->course_id-1]->Name}}</td>
                            <td>{{$allcourse[$signup->course_id-1]->Duration}}</td>
                            <td>{{$allcourse[$signup->course_id-1]->fee_details}}</td>
                            <td>

                                <a href="/remove/{{$signup->id}}"><button class="btn btn-danger">Remove</button></a> 
                            </td>
                            
                    </tr>
                        <!-- {{$sn++}} -->
                @endforeach
                        
                        
                </tbody>
            </table>

            <br><br><br>

<!-- ------------------------------------------------------------------SIGNUP FOR A COURSE------------------------------------------------------------------ -->

            <h1 style="text-align:center; background-color:white; color:rgb(1, 39, 100)"><b>SIGNUP A COURSE</b></h1><br>
            <table class="table">
                <thead>
                    <tr class="container">
                            <th scope="col">SL. No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Fee</th>
                            <th scope="col">Sign Up</th>
                    </tr>
                </thead>
                <tbody>
                            <!-- {{$sn=1}} -->
                        
                @foreach ($allcourse as $course)
                    <tr>
                            <th scope="row">{{$sn}}</th>
                            <td>{{$course->Name}}</td>
                            <td>{{$course->Duration}}</td>
                            <td>{{$course->fee_details}}</td>
                            <td>
                                <a href="/signup/{{$profile->id}}/{{$course->id}}"><button class="btn btn-primary">Sign Up</button></a> 
                            </td>
                    </tr>
                        <!-- {{$sn++}} -->
                @endforeach
                        
                        
                </tbody>
            </table>
        </div> 
    </div>
</div>
@endsection