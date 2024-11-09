@extends('theme')
@section('login','borde')
@section('style',
            'background-image: url(/storage/images/snowpark-skis-headerbg2.jpg);
            background-attachment: fixed;
            background-position: center;
            background-size: cover;')
@section('contents')

<div>
  <h1 class="text-white" style="text-align:center;padding-top:100px">Change Password</h1>
  <div class="container" style="padding:10px 20%">
    <form class="form" action="/updatepassword/{{$id->id}}" method="post">

    <!-- <span style="color:red;font-size:15px"><sup>{{$errors->first('loginid')}}</sup></span> -->

        <input type="text" placeholder="New Password" id="box" name="newpassword"><br><br>

        <!-- <input type="text" placeholder="Confirm New Password" id="box" name="newpassword"><br><br> -->

        <!-- <span class="forgot-password"><a href="#">Forgot Password ?</a></span><br> -->
        <button class="btn1 butt">Submit</button>
        @csrf
    </form>
    <br><br><br>
    
    
  </div>

</div>



@endsection