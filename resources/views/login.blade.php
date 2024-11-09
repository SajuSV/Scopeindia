@extends('theme')
@section('login','borde')
@section('style',
            'background-image: linear-gradient(180deg,rgb(0, 23, 59) , rgb(0, 38, 100));
            background-attachment: fixed;
            background-position: center;
            background-size: cover;')
@section('contents')

<div>
  <h1 class="text-white" style="text-align:center;padding-top:100px">LOGIN</h1>
  @if(Session::has('loginerror'))
        <center><h6 style="color:white;">{{Session::get('loginerror')}}</h6></center>
  @endif

  <div class="container" style="padding:10px 20%">
    <form class="form" action="/success" method="post">
    <span style="color:red;font-size:15px"><sup>{{$errors->first('loginid')}}</sup></span>
        <input type="email" placeholder="Email Id" id="box" name="loginid"><br><br>
        <span style="color:red;font-size:15px"><sup>{{$errors->first('password')}}</sup></span>
        <input type="password" placeholder="Enter Password" id="box" name="password"><br><br>
        Remember Me <input type="checkbox" name="cookie" id=""><br>
        <br>
        <button class="btn1 butt">Login</button>
        <center><a href="/login/newuser">Forget Password</a></center>
        @csrf
    </form>
    <br><br><br>
    >
    
  </div>

</div>



@endsection