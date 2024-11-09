@extends('theme')
@section('style',
            'background-image: url(/storage/images/snowpark-skis-headerbg2.jpg);
            background-attachment: fixed;
            background-position: center;
            background-size: cover;')


@section('contents')

<div style="background-color: rgb(0, 31, 97, 0.5);">
    <h1 style="color:white;text-align:center;padding-top:100px;">Edit Profile</h1>


    @if(Session::has('success'))
        <center><h6 style="color:white;">{{Session::get('success')}}</h6></center>
    @endif


    <form action="/update/{{$id->id}}" method="post" enctype="multipart/form-data">
        <div class="row">
        <div class="col-12 col-lg-6">

            <h5>FirstName &nbsp;<span style="color:red;font-size:15px"><sup>{{$errors->first('firstname')}}</sup></span></h5>
            <input type="text" placeholder="First Name" id="box" name="firstname" value="{{$id->firstname}}"><br>

            <h5>Second Name &nbsp;<span style="color:red;font-size:15px"><sup>{{$errors->first('secondname')}}</sup></span></h5>
            <input type="text" placeholder="Second Name" id="box" name="secondname" value="{{$id->secondname}}"> <br> 

            <h5 style="padding-top:10px;">Gender &nbsp;<span style="color:red;font-size:15px"><sup>{{$errors->first('gender')}}</sup></span> <br></h5>
            
            <input type="radio" name="gender" value="Male" <?php if ($id->gender=="male"){ echo "checked"; }?>>
            <label >Male</label>&nbsp &nbsp &nbsp
            
            <input type="radio" name="gender" value="Female" <?php if ($id->gender=="female"){ echo "checked"; }?>>
            <label  >Female</label>&nbsp &nbsp &nbsp
            
            <input type="radio" name="gender" value="Other" <?php if ($id->gender=="other"){ echo "checked"; }?>>
            <label  >Other</label> <br><br>


            <h5>Date Of Birth &nbsp;<span style="color:red;font-size:15px"><sup>{{$errors->first('dateofbirth')}}</sup></span> </h5>
            <input type="date" placeholder="Date Of Birth" id="box" name="dateofbirth" value="{{$id->dateofbirth}}"> <br>

            <h5>Email &nbsp;<span style="color:red;font-size:15px"><sup>{{$errors->first('email')}}</sup></span> </h5>
            <input type="email" placeholder="Email" id="box" name="email" value="{{$id->email}}"> <br>
            
            <h5>Mobile Number &nbsp;<span style="color:red;font-size:15px"><sup>{{$errors->first('mobilenumber')}}</sup></span> </h5>
            <input type="number" placeholder="Mobile Number" id="box" name="mobilenumber" value="{{$id->mobilenumber}}">


        </div>

        <div class="col-12 col-lg-6">

            
            
            <h5>Address &nbsp;<span style="color:red;font-size:15px"><sup>{{$errors->first('address')}}</sup></span> </h5>
            <textarea type="" placeholder="Address" id="box" name="address">{{$id->address}}</textarea>

            <h5>Country &nbsp;<span style="color:red;font-size:15px"><sup>{{$errors->first('country')}}</sup></span> </h5>
            <input type="text" placeholder="Country" id="box" name="country" value="{{$id->country}}">

            <h5>State &nbsp;<span style="color:red;font-size:15px"><sup>{{$errors->first('state')}}</sup></span> </h5>
            <input type="text" placeholder="State" id="box" name="state" value="{{$id->state}}">

            <h5>City &nbsp;<span style="color:red;font-size:15px"><sup>{{$errors->first('city')}}</sup></span> </h5>
            <input type="text" placeholder="City" id="box" name="city" value="{{$id->city}}">
            <h5>Hobbies &nbsp;<span style="color:red;font-size:15px"><sup>{{$errors->first('hobbies')}}</sup></span> </h5>
            <input type="text" placeholder="Hobbies" id="box" name="hobbies" value="{{$id->hobbies}}">
            
            <h5>Upload Photo &nbsp;</h5>
            <input type="file" placeholder="Upload Photo" id="box" name="photo" value="{{$id->image}}"><br><br>

            
            
        </div>
        <button class="btn1 butt" style="">Complete Registration</button>
        </div>

        @csrf
    </form>



    

</div>



@endsection