<!doctype html>
<html lang="en">
<head dir="rtl">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url("/front/css/bootstrap-rtl.min.css")}}">
    <link rel="stylesheet" href="{{url("/front/css/persian-datepicker.css")}}">
    <link rel="stylesheet" href="{{url("/front/css/fontawesome.min.css")}}">
    <link rel="stylesheet" href="{{url("/front/css/solid.min.css")}}">
    <link rel="stylesheet" href="{{url("/front/css/style.css")}}">
    <title>{{$pagetitle}}</title>
    <script src="{{url("/front/js/jquery.min.js")}}"></script>
    <script src="{{url("/front/js/persian-date.min.js")}}"></script>
    <script src="{{url("/front/js/persian-datepicker.js")}}"></script>
    <script src="{{url("/front/js/fontawesome.js")}}"></script>
    <script src="{{url("/front/js/fontawesome.min.js")}}"></script>
    <script src="{{url("/front/js/solid.min.js")}}"></script>
    <script src="{{url("/front/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{url("/front/js/scripts.js")}}"></script>
</head>
<body dir="rtl">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-lg-none">
    <a class="navbar-brand d-lg-none" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">خانه</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#buy">خرید اشتراک</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    مشاهده برنامه ورزشی
                </a>
                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown1">
                    <a class="dropdown-item" href="{{route('saturdayProgram')}}">شنبه</a>
                    <a class="dropdown-item" href="{{route('sundayProgram')}}">یکشنبه</a>
                    <a class="dropdown-item" href="{{route('mondayProgram')}}">دوشنبه</a>
                    <a class="dropdown-item" href="{{route('tuesdayProgram')}}">سه شنبه</a>
                    <a class="dropdown-item" href="{{route('wednesdayProgram')}}">چهارشنبه</a>
                    <a class="dropdown-item" href="{{route('thursdayProgram')}}">پنج شنبه</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact-us">ارتباط با ما</a>
            </li>
        </ul>
    </div>
</nav>
@include('layouts.messages')
<section class="section1 container-fluid">
    <div class="d-none d-xl-block d-lg-block">
        <nav class="row navbar navbar-expand-lg navbar-dark col-lg-12">
            <div class="col-lg-11">
                <ul class="navbar-nav">
                    <li id="active" class="nav-item"><a class="nav-link" href="#">صفحه اصلی</a></li>
                    <li class="nav-item"><a class="nav-link underline-hover" href="#buy">خرید اشتراک</a></li>
                    <li class="nav-item dropdown underline-hover">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            مشاهده برنامه ورزشی
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('saturdayProgram')}}">شنبه</a>
                            <a class="dropdown-item" href="{{route('sundayProgram')}}">یکشنبه</a>
                            <a class="dropdown-item" href="{{route('mondayProgram')}}">دوشنبه</a>
                            <a class="dropdown-item" href="{{route('tuesdayProgram')}}">سه شنبه</a>
                            <a class="dropdown-item" href="{{route('wednesdayProgram')}}">چهارشنبه</a>
                            <a class="dropdown-item" href="{{route('thursdayProgram')}}">پنج شنبه</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link underline-hover" href="#contact-us">ارتباط با ما</a></li>
                    <li class="nav-item"><form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link underline-hover" style="background: none;border: none;">خروج</button>
                        </form></li>
                </ul>
            </div>
            <div class="text-center col-lg-1">
                <a id="brand" href="#"><b>FIT</b>NESS</a>
            </div>
        </nav>
    </div>
    <div id="start" class="container text-center">
        <b><strong>خوش آمدید</strong></b>
    </div>
</section>
<section class="container-fluid text-center">
    <div class="row">
        <div class="col-lg-4 advises">
            <span><i class="fas fa-tint"></i></span>
            <h2 class="h2">نوشیدن آب</h2><br>
            <p>کم‌آبیِ خفیفِ ناشی از ورزش، می‌تواند بر عملکرد فیزیکی و ذهنی تاثیراتی منفی بگذارد</p>
        </div>
        <div class="col-lg-4 advises">
            <span><i class="fas fa-dumbbell"></i></span>
            <h2 class="h2">تمرین</h2><br>
            <p>تمرین کردن باعث افزایش آمادگی جسمانی شما میشود</p>
        </div>
        <div class="col-lg-4 advises">
            <span><i class="fas fa-heartbeat"></i></span>
            <h2 class="h2">سلامتی</h2><br>
            <p>با برنامه غذایی و ورزشی سالم، سلامتی خود را تضمین کنید</p>
        </div>
    </div>
</section>
<section id="buy">
    <div class="container-fluid" style="background-color: #242424;">
        <div class="row pt-5">
            <div class="col-1"></div>
            <div class="col-2"></div>
            <div class="col-lg-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title h4">اشتراک ماهانه</h5>
                        <h5 class="card-title h3 text-danger">200,000</h5>
                        <h5 class="h5 text-danger">تومان</h5>
                        <div class="container"><hr></div>
                        <p class="card-text"><i class="fas fa-check"></i> تردمیل </p>
                        <p class="card-text"><i class="fas fa-check"></i> دوچرخه </p>
                        <p class="card-text"><i class="fas fa-check"></i> برنامه ورزشی </p>
                        <a href="{{route('buy', ['month' => 1, 'status' => 1])}}" onclick="return confirm('از خرید خود مطمئن هستید؟');" class="btn btn-primary mt-4">خرید</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title h4">اشتراک دو ماهه</h5>
                        <h5 class="card-title h3 text-danger">350,000</h5>
                        <h5 class="h5 text-danger">تومان</h5>
                        <div class="container"><hr></div>
                        <p class="card-text"><i class="fas fa-check"></i> تردمیل </p>
                        <p class="card-text"><i class="fas fa-check"></i> دوچرخه </p>
                        <p class="card-text"><i class="fas fa-check"></i> برنامه ورزشی </p>
                        <a href="{{route('buy', ['month' => 2, 'status' => 1])}}" onclick="return confirm('از خرید خود مطمئن هستید؟');" class="btn btn-primary mt-4">خرید</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title h4">اشتراک سه ماهه</h5>
                        <h5 class="card-title h3 text-danger">500,000</h5>
                        <h5 class="h5 text-danger">تومان</h5>
                        <div class="container"><hr></div>
                        <p class="card-text"><i class="fas fa-check"></i> تردمیل </p>
                        <p class="card-text"><i class="fas fa-check"></i> دوچرخه </p>
                        <p class="card-text"><i class="fas fa-check"></i> برنامه ورزشی </p>
                        <a href="{{route('buy', ['month' => 3, 'status' => 1])}}" onclick="return confirm('از خرید خود مطمئن هستید؟');" class="btn btn-primary mt-4">خرید</a>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row pb-5 pt-5">
            <div class="col-1"></div>
            <div class="col-2"></div>
            <div class="col-lg-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title h4">اشتراک ماهانه</h5>
                        <h5 class="card-title h3 text-danger">150,000</h5>
                        <h5 class="h5 text-danger">تومان</h5>
                        <div class="container"><hr></div>
                        <p class="card-text"><i class="fas fa-times"></i> تردمیل </p>
                        <p class="card-text"><i class="fas fa-times"></i> دوچرخه </p>
                        <p class="card-text"><i class="fas fa-check"></i> برنامه ورزشی </p>
                        <a href="{{route('buy', ['month' => 1, 'status' => 0])}}" onclick="return confirm('از خرید خود مطمئن هستید؟');" class="btn btn-primary mt-4">خرید</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title h4">اشتراک دو ماهه</h5>
                        <h5 class="card-title h3 text-danger">250,000</h5>
                        <h5 class="h5 text-danger">تومان</h5>
                        <div class="container"><hr></div>
                        <p class="card-text"><i class="fas fa-times"></i> تردمیل </p>
                        <p class="card-text"><i class="fas fa-times"></i> دوچرخه </p>
                        <p class="card-text"><i class="fas fa-check"></i> برنامه ورزشی </p>
                        <a href="{{route('buy', ['month' => 2, 'status' => 0])}}" onclick="return confirm('از خرید خود مطمئن هستید؟');" class="btn btn-primary mt-4">خرید</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title h4">اشتراک سه ماهه</h5>
                        <h5 class="card-title h3 text-danger">400,000</h5>
                        <h5 class="h5 text-danger">تومان</h5>
                        <div class="container"><hr></div>
                        <p class="card-text"><i class="fas fa-times"></i> تردمیل </p>
                        <p class="card-text"><i class="fas fa-times"></i> دوچرخه </p>
                        <p class="card-text"><i class="fas fa-check"></i> برنامه ورزشی </p>
                        <a href="{{route('buy', ['month' => 3, 'status' => 0])}}" onclick="return confirm('از خرید خود مطمئن هستید؟');" class="btn btn-primary mt-4">خرید</a>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</section>
<footer id="contact-us" class="text-lg-start">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-right">
                <h2 class="text-uppercase h2">ارتباط با ما</h2>
                <p><i class="fab fa-instagram mr-3 icon pt-5"></i>instagram id</p>
                <p><i class="fab fa-telegram-plane mr-3 icon"></i>telegram id</p>
                <p><i class="fas fa-phone mr-3 icon"></i>3222222 044</p>
                <p><i class="fas fa-map-marker-alt mr-3 icon"></i>ارومیه - اول جاده بند - دانشگاه صنعتی ارومیه</p>
            </div>
            <div class="col-lg-6 col-md-12 text-center mb-4 mb-md-0">
                <div id="map-container-google-9" class="z-depth-1-half map-container-5">
                    <iframe src="https://maps.google.com/maps?q=Madryt&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            style="border:0;height: 300px;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center text-light p-3" style="background-color: #242424;font-family: Calibri;">
        <pre class="text-light text-center">© 2020 Copyright : kasra babazadeh</pre>
    </div>
</footer>
</body>
</html>
