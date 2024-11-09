@extends('theme')
@section('contact','borde')
@section('style',
            'background-image: url(storage/images/snowpark-skis-headerbg2.jpg);
            background-attachment: fixed;
            background-position: center;
            background-size: cover;')


@section('contents')



<div style="background-image: linear-gradient(180deg,rgb(0, 38, 100, 0.8) , rgb(0, 23, 59, 0.8) );padding-bottom:50px; border-bottom:3px solid white;">
    
<!-- ------------------------------------------------------------------CONTACT FORM------------------------------------------------------------------ -->

    <h1 style="color:white;text-align:center;padding-top:100px;">Contact Us</h1>

    @if(Session::has('loginerror'))
        <center><h6 style="color:white;">{{Session::get('emailsend')}}</h6></center>
    @endif

    <form action="/sent" method="post" >
        <div class="row">
            <div class="col-12 col-lg-6">
                <img src="storage/images/contact.jpg" alt="" style="height:90%; width:100%; border:3px solid white;border-radius:10px ">
            </div>
            <div class="col-12 col-lg-6">
                <h5>Name</h5> 
                <input type="text" placeholder="Name" id="box" name="mname"> <br>
                <h5>Email</h5> 
                <input type="email" placeholder="Email" id="box" name="memail"> <br>
                <h5>Subject</h5>
                <input type="text" placeholder="Subject" id="box" name="msubject">
                <h5>Message</h5>
                <textarea id="box" name="mmessage"> </textarea>
                <button class="btn1 butt" style="">Send Email</button>
                
                @csrf
            </div>
        </div>
    </form>
</div>
<!-- ------------------------------------------------------------------LOCATIONS------------------------------------------------------------------ -->
<div style="padding-top:50px;">
    <h1 style="text-align:center; background-color:white; color:rgb(1, 39, 100);">Locations</h1>
    <div class="cards">
        <div class="card ">
            <p class="tip">Technopark TVM, Kerala</p>
            <p class="second-text">
                <i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; Phase 1, Main Gate, Diamond Arcade, Near Technopark, Trivandrum, Kerala<br>
                <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="tel:+919745936073"> 9745936073</a><br>
                <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="mailto:technopark@scopeindia.org">technopark@scopeindia.org</a><br>
                <i class="fa-solid fa-link"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="/" title="Visit our website">www.scopeindia.org </a><br>
                <i class="fa-solid fa-map"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="https://maps.app.goo.gl/hbG8wSiDcW2w9kyH9" title="SCOPE INDIA Google Map Location to Technopark, Trivandrum, Kerala" target="_blank">Location Route Map </a>
            </p>
        </div>
        <div class="card ">
        <p class="tip">Thampanoor TVM, Kerala</p>
            <p class="second-text">
                <i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; TC 25/1403/3, Athens Plaza, SS Kovil Road, Thampanoor, Trivandrum, Kerala 695001<br>
                <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="tel:+919745936073"> 9745936073</a><br>
                <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="mailto:info@scopeindia.org">info@scopeindia.org</a><br>
                <i class="fa-solid fa-link"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="/" title="Visit our website">www.scopeindia.org </a><br>
                <i class="fa-solid fa-map"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="https://g.page/r/CXbW6SZGeJPfEAE" title="SCOPE INDIA Google Map Location to Trivandrum, Kerala" target="_blank">Location Route Map </a>
            </p>
        </div>
        <div class="card ">
            <p class="tip">Kochi, Kerala</p>
            <p class="second-text">
                <i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; SCOPE INDIA, Vasanth Nagar Rd, near JLN Metro Station, Kaloor, Kochi, Kerala 682025<br>
                <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="tel:+917592939481"> 7592939481</a><br>
                <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="mailto:kochi@scopeindia.org">kochi@scopeindia.org</a><br>
                <i class="fa-solid fa-link"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="/" title="Visit our website">www.scopeindia.org </a><br>
                <i class="fa-solid fa-map"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="https://g.page/r/CWv07KhFfP7dEAE" title="SCOPE INDIA Google Map Location to Kochi, Kerala" target="_blank">Location Route Map </a>
            </p>
        </div>
        <div class="card ">
            <p class="tip">Nagercoil, Tamil Nadu</p>
            <p class="second-text">
                <i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; SCOPE INDIA, Near WCC College, Palace Rd, Nagercoil, Tamil Nadu 629001<br>
                <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="tel:+918075536185"> 8075536185</a><br>
                <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="mailto:ngl@scopeindia.org">ngl@scopeindia.org</a><br>
                <i class="fa-solid fa-link"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="/" title="Visit our website">www.scopeindia.org </a><br>
                <i class="fa-solid fa-map"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="https://goo.gl/maps/fVjnoN7GzcU1zson7" title="SCOPE INDIA Google Map Location to Nagercoil, Tamil Nadu" target="_blank">Location Route Map </a>
            </p>
        </div>
        <div class="card ">
            <p class="tip">Nagercoil, Tamil Nadu</p>
            <p class="second-text">
                <i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp; SCOPE INDIA, Pharma Street, 5/2 Ward 28, Distillery Road, Putheri Nagercoil (Near WCC Jn)<br>
                <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="tel:+918075536185"> 8075536185</a><br>
                <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="mailto:ngl@scopeindia.org">ngl@scopeindia.org</a><br>
                <i class="fa-solid fa-link"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="/" title="Visit our website">www.scopeindia.org </a><br>
                <i class="fa-solid fa-map"></i>&nbsp;&nbsp;<a class="text-white text-decoration-none" href="https://maps.app.goo.gl/Lsd7LzALy15PpWhX7?g_st=iw" title="SCOPE INDIA Google Map Location to Nagercoil, Tamil Nadu" target="_blank">Location Route Map </a>
            </p>
        </div>
    </div>
</div>


@endsection