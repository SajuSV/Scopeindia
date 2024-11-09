<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope India</title>
    <!-- ------------------------------------------------------------------Stylesheet------------------------------------------------------------------ -->
    <link rel="stylesheet" href="/css/style.css">    
    <style>
        @font-face {
            font-family: myFont;
            src: url(/storage/images/Jura-Regular.ttf);
        }

        body{
            font-family: myFont!important;
            @yield('style')
        }
    </style>
<!-- ------------------------------------------------------------------jQuery------------------------------------------------------------------ -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<!-- ------------------------------------------------------------------fontawesome------------------------------------------------------------------ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- ------------------------------------------------------------------Bootstap------------------------------------------------------------------ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</head>
<body>

<!-- ------------------------------------------------------------------Navbar PC------------------------------------------------------------------ -->

    <header class="fixed-top" style="background-color: rgb(0, 31, 97, 0.5);">
        <div class="container text-light pt-2 mobile">
            <nav class="row p-2">
                <div class="col-5 d-flex justify-content-start ">
                    <ul class="list-inline ">
                        <li class="list-inline-item"><a class="text-white text-decoration-none @yield('home')" href="/"><i class="fa-solid fa-house"></i>&nbsp; Home</a></li>&nbsp;&nbsp;&nbsp;
                        <li class="list-inline-item"><a class="text-white text-decoration-none @yield('about')" href="/about"><i class="fa-solid fa-circle-info"></i> &nbsp; About Us</a></li>&nbsp;&nbsp; &nbsp;
                        <li class="list-inline-item"><a class="text-white text-decoration-none @yield('contact')" href="/contact"><i class="fa-solid fa-address-book"></i>&nbsp; Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-2 d-flex justify-content-center ">
                    <a href="/"><img src="/storage/images/scope-india-logo-bird.png" style="height: 30px; width: 30px;" alt=""></a>
                </div>
                
                <div class="col-5 d-flex justify-content-end " >
                    <ul class="list-inline">
                        @if(Session::has('UserId'))
                            <li class="list-inline-item"><a class="text-white text-decoration-none" href="/dashboard"><button class="button"><i class="fa-regular fa-id-card"></i>&nbsp; Dashboard</button></a></li>
                            <li class="list-inline-item"><a class="text-white text-decoration-none" href="/logout"><i class="fa-solid fa-right-from-bracket"></i>&nbsp; Logout</a></li>
                        @else
                            <li class="list-inline-item"><a class="text-white text-decoration-none" href="/registration"><button class="button"><i class="fa-solid fa-user"></i>&nbsp; Register Now</button></a></li>&nbsp;&nbsp;
                            <li class="list-inline-item"><a class="text-white text-decoration-none @yield('login')" href="/login"><i class="fa-solid fa-lock"></i>&nbsp; Login</a></li>
                        @endif 
                    </ul>
                </div>
            </nav>
        </div>

 <!-- ------------------------------------------------------------------Navbar Mobile------------------------------------------------------------------ -->


        <div class="container text-light pt-2 px-5 select">
            <nav class="row p-2">
                <div class="col-6 d-flex justify-content-start ">
                    <img src="/storage/images/scope-india-logo-bird.png" style="height: 30px; width: 30px;" alt="">
                </div>
                <div class="col-6 d-flex justify-content-end ">
                        <a class="menu text-light"><i class="fa-solid fa-bars"></i></a>
                    <script>
                        $('.menu').click(function(){
                            $(".listtab").toggle();
                        })
                    </script>
                </div>
                <div class="col-12">
                    <ul class="listtab list-inline " style="display:none">
                                <hr>
                                <li ><a class="text-white text-decoration-none" href="/" >Home</a></li><hr>
                                <li ><a class="text-white text-decoration-none" href="/about">About Us</a></li><hr>
                                <li ><a class="text-white text-decoration-none" href="/contact">Contact Us</a></li><hr>
                                @if(Session::has('UserId'))
                                <li ><a class="text-white text-decoration-none" href="/dashboard">Dashboard</a></li><hr>
                                <li ><a class="text-white text-decoration-none" href="/logout">Logout</a></li><hr>
                                @else
                                <li ><a class="text-white text-decoration-none" href="/registration">Register Now</a></li><hr>
                                <li ><a class="text-white text-decoration-none" href="/login">Login</a></li><hr>
                                @endif 
                                
                                
                    </ul>
                </div>
            </nav>
        </div>
    </header>

<!-- ------------------------------------------------------------------All Page Contents------------------------------------------------------------------ -->

        <div>
        @yield('contents')
        </div>


<!-- ------------------------------------------------------------------Footer------------------------------------------------------------------ -->

    <footer style="background-image: linear-gradient(180deg,rgb(0, 23, 59) , rgb(0, 38, 100)); padding: 50px 50px;">
        <div class="text-light" >
            <div class="row">
                <div class="col-12 col-lg-4 d-flex justify-content-lg-center" style="font-size: 10px; line-height: 15px; padding-bottom:20px;">
                    <div>
                        <img src="/storage/images/scope-india-logo-web.png" width="300" height="100" alt=""> <br>
                        <div class="text-light" style="padding-bottom:20px;">
                            Kerala: Technopark TVM | Thampanoor TVM | Kaloor Kochi <br> Tamil Nadu: Distillery Road | Palace Road Nagercoil
                        </div>
                        <img src="/storage/images/iso_iaflogo.png" width="220" height="75" alt="" >
                    </div>
                </div>

                <div class="col-12 col-lg-4 pt-4 col-sm-4 d-flex justify-content-lg-center">
                    <ul class="list-inline" style="font-size: 15px;font-weight: bold; line-height: 30px;">
                        <li ><a class="text-white " href=""><h3>Quick Link</h3></a></li>
                        <li ><a class="text-white text-decoration-none" href="">Home</a></li>
                        <li ><a class="text-white text-decoration-none" href="">About Us</a></li>
                        <li ><a class="text-white text-decoration-none" href="">Contact Us</a></li>
                        <li ><a class="text-white text-decoration-none" href="">Register Now</a></li>
                        <li ><a class="text-white text-decoration-none" href="">Login</a></li>

                    </ul>
                </div>

                <div class="col-12 col-lg-4 pt-4 d-flex justify-content-lg-center">
                    <ul class="list-inline" style="font-size: 15px;font-weight: bold; line-height: 30px;">
                        <li><a class="text-white " href=""><h3>Contact</h3></a></li>
                        <li><a class="text-white text-decoration-none" href="">+91 9745936073 (TPK)</a></li>
                        <li><a class="text-white text-decoration-none" href="">+91 9745936073 (TVM)</a></li>
                        <li><a class="text-white text-decoration-none" href="">+91 7592939481 (EKM)</a></li>
                        <li><a class="text-white text-decoration-none" href="">+91 8075536185 (NGL)</a></li>
                        <li><a class="text-white text-decoration-none" href="">info@scopeindia.org</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </footer>
    <div style="padding:10px 0px;background-color: rgb(0, 31, 97, 0.5);color:white">
        <center>
            <p style="margin-bottom:0px;font-size:10px;">Copyright © 2024, Saju Dev. All Rights Reserved.</p>
        </center>
    </div>
    
</body>
</html>