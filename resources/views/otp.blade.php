@extends('theme')
@section('login','borde')
@section('style',
            'background-image: url(/storage/images/snowpark-skis-headerbg2.jpg);
            background-attachment: fixed;
            background-position: center;
            background-size: cover;')
@section('contents')

<div>
  <h1 class="text-white" style="text-align:center;padding-top:100px">New USer</h1>
  <div class="container" style="padding:10px 20%">
    <form class="form" action="/login/password" method="post">

    <!-- <span style="color:red;font-size:15px"><sup>{{$errors->first('loginid')}}</sup></span> -->

        <input type="email" placeholder="Email Id" id="box" name="loginid"><br><br>
        <input type="text" placeholder="OTP" id="box" name="otp"><br><br>



        <!-- <span class="forgot-password"><a href="#">Forgot Password ?</a></span><br> -->
        <button class="btn1 butt">Submit OTP</button>
        @csrf
    </form>
    <br><br><br>
    
    
  </div>

</div>



@endsection