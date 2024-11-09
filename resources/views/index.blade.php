@extends('theme')
@section('home','borde')
@section('contents')

<!-- ------------------------------------------------------------------COVER------------------------------------------------------------------ -->

    <div>
        <div class="d-flex justify-content-center" style="background-image: url(storage/images/slider_bg.jpg) ; padding: 280px 0px;background-position: center; background-size: cover;">
            <img  src="storage/images/scope-india-logo-web.png" style="height:60%; width:60%" alt="" >
        </div>
    </div>
<!-- ------------------------------------------------------------------COUROSEAL WITH ABOUT------------------------------------------------------------------ -->

    <div class="row " style="padding:20px 20px; text-align: justify;">
        <div class="col-12 col-lg-6 p-3">
            <div class="cardimg container">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="storage/images/courses/caro1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="storage/images/courses/caro2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="storage/images/courses/caro3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="storage/images/courses/caro4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="storage/images/courses/caro5.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="storage/images/courses/caro6.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="storage/images/courses/caro7.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="storage/images/courses/caro8.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="storage/images/courses/caro9.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="storage/images/courses/caro10.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="storage/images/courses/caro11.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="storage/images/courses/caro12.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true" ></span>
                        <span class="visually-hidden" >Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 p-4">
            <h1>SCOPE INDIA, your career partner! </h1>
            <h4>One of the best Training Destination for Software, Networking and Cloud Computing courses in India with 17 years of Industrial experience.</h4>
            <p>Software, Networking, and Cloud Professional Education Centre in Kerala and Tamil Nadu from <strong>Suffix E Solutions</strong> 
            with WORKING PROFESSIONALS oriented on-the-job TRAINING model. SCOPE INDIA provides courses for <strong>Software Programming</strong>
            in Python (Data Science | Artificial Intelligence | Machine Learning | Deep Learning, Data Analytics), Java, PHP, .Net,
            MERN, <strong>Software Testing</strong> Manual and Automation, <strong>Cloud Computing</strong> (AWS | Azure), <strong>Server Administration</strong> (MicroSoft MCSE | Linux RHCE),
            Networking (CCNA), <strong>DevOps</strong>, <strong>Mobile App Development</strong> in Flutter, and <strong>Digital Marketing</strong>. Training with a 100% Trusted Job-Based Internship Model.
            SCOPE INDIA has a Strong Placement Cell that provides jobs to thousands of students every year. We assure you, you won't regret it after training
            from SCOPE INDIA!</p>
            <p>This is how SCOPE INDIA can support both newbies and experienced in the industry to upgrade their skills.</p>
        </div>
    </div>

<!-- ------------------------------------------------------------------RECORDS------------------------------------------------------------------ -->

    <div style="background-image: linear-gradient(180deg,rgb(0, 38, 100) , rgb(0, 23, 59) ); padding: 50px 30px;">
        <div class=" text-light" style="text-align: center;letter-spacing: 5px;">
            <div class="row">
                <div class="col-12 col-lg-4  cardhome ">
                    <h1 style="font-size:65px"><b>1000+</b></h1>
                    <h5>STUDENTS ARE
                    <br>TRAINED EVERY YEAR</h5>
                </div>
                <div class="col-12 col-lg-4 cardhome">
                    <h1  style="font-size:80px"><b>30+</b></h1>
                    <h5 >COMPUTER COURSES
                    </h5>
                </div>
                <div class="col-12 col-lg-4  cardhome">
                    <h1 style="font-size:65px"><b>95%</b></h1>
                    <h5 >STUDENTS ARE GETTING
                    <br>PLACED EVERY YEAR</h5>
                </div>
            </div>
        </div>
    </div>

<!-- ------------------------------------------------------------------SUPPORT------------------------------------------------------------------ -->

    <div class="container" style="background-color:white; padding:30px; text-align: justify;">
        
        <div>
            <div class="row d-flex justify-content-center">
                <div class="indcard col-12 col-lg-6">
                    <div class="sec row">
                        <div class="col-4">
                            <img src="storage/images/home-icon1.png" alt="" height="" width="100%">
                        </div >
                        <div class="col-8">
                            <h1>Training</h1>
                            <p>You are trained under Suffix E Solutions working professionals, on-the-job training model.</p>
                        </div>
                    </div>
                </div>
                <div class="indcard col-12 col-lg-6">
                    <div class="sec row">
                        <div class="col-4">
                            <img src="storage/images/home-icon2.png" alt="" height="" width="100%">
                        </div >
                        <div class="col-8">
                            <h1>Internship</h1>
                            <p>After course completion, you will be proceeded to live projects with a 6 months experience certificate.</p></div>
                        </div>
                    </div>    
                <div class="indcard col-12 col-lg-6">
                    <div class="sec row">
                        <div class="col-4">
                            <img src="storage/images/home-icon3.png" alt="" height="" width="100%">
                        </div >
                        <div class="col-8">
                            <h1>Grooming</h1>
                            <p>CV Preparation, Interview Preparation, and Personality Development that shape your path to success.</p></div>
                        </div>
                    </div>
                <div class="indcard col-12 col-lg-6">
                    <div class="sec row">
                        <div class="col-4">
                            <img src="storage/images/home-icon4.png" alt="" height="" width="100%">
                        </div >
                        <div class="col-8">
                            <h1>Placement</h1>
                            <p>Gives 100% FREE placement support to all our fellow techies through SCOPE INDIA's Placement Cell.</p></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    
@endsection