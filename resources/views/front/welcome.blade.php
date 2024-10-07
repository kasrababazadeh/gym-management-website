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
    <title>باشگاه بدنسازی</title>
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
    <a class="navbar-brand d-lg-none" href="#">باشگاه بدنسازی</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">خانه</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" data-toggle="modal" data-target="#darkModalForm">ثبت نام</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" data-toggle="modal" data-target="#loginForm">ورود</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" data-toggle="modal" data-target="#adminLoginForm">پنل مدیریتی</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact-us">ارتباط با ما</a>
            </li>
        </ul>
    </div>
</nav>
<section>
    <form action="{{route('register')}}" method="post">
        @csrf
    <div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="false">
        <div class="modal-dialog form-dark" role="document">
            <div class="modal-content card card-image" style="background-image: url('{{url("/front/images/3.jpg")}}');">
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>لطفا فرم را پر کنید</strong></h3>
                        <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-name md-form mb-3">
                            <input class="form-control validate white-text @error('name') is-invalid @enderror" type="text" name="name" placeholder="نام و نام خانوادگی" value="{{old('name')}}">
                            <span class="underline-animation"></span>
                        </div>
                        <div class="input-name md-form mb-3">
                            <input class="form-control @error('code-melli') is-invalid @enderror" name="code-melli" type="text" placeholder="کد ملی" value="{{old('code-melli')}}">
                            <span class="underline-animation"></span>
                        </div>
                        <div class="input-name md-form mb-3">
                            <input class="form-control validate white-text @error('phone-number') is-invalid @enderror" type="text" name="phone-number" placeholder="شماره تلفن : 0000 000 0900" value="{{old('phone-number')}}">
                            <span class="underline-animation"></span>
                        </div>
                        <div class="form-row mb-3">
                            <label class="col-form-label col">جنسیت : </label>
                            <div class="form-check form-check-inline col">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="اقا" @if(old('gender') == 'اقا') checked @endif>
                                <label class="form-check-label" for="inlineRadio1">مذکر</label>
                            </div>
                            <div class="form-check form-check-inline col">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="خانم" @if(old('gender') == 'خانم') checked @endif>
                                <label class="form-check-label" for="inlineRadio2">مونث</label>
                            </div>
                        </div>
                        <div class="input-name md-form mb-3">
                            <input class="form-control validate white-text @error('password') is-invalid @enderror" name="password" type="password" placeholder="رمز عبور">
                            <span class="underline-animation"></span>
                        </div>
                        <div class="input-name md-form mb-3">
                            <input class="form-control validate white-text @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password" placeholder="تکرار رمز عبور">
                            <span class="underline-animation"></span>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button type="submit" class="btn btn-danger btn-block btn-rounded z-depth-1">ثبت نام</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="font-small white-text d-flex justify-content-first">قبلا ثبت نام کرده اید؟ <a href="#" class="text-danger ml-1 font-weight-bold" data-dismiss="modal" data-toggle="modal" data-target="#loginForm">وارد شوید</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</section>
<section>
    <form action="{{route('login')}}" method="post">
        @csrf
    <div class="modal fade" id="loginForm" tabindex="-1" role="dialog" aria-labelledby="loginLabel"
         aria-hidden="true">
        <div class="modal-dialog form-dark" role="document">
            <div class="modal-content card card-image" style="background-image: url('{{url("/front/images/3.jpg")}}');">
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 white-text font-weight-bold" id="loginLabel"><strong>وارد شوید</strong></h3>
                        <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-name md-form mb-3">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input class="form-control @error('code-melli') is-invalid @enderror" name="code-melli" type="text" placeholder="کد ملی" value="{{old('code-melli')}}">
                            <span class="underline-animation"></span>
                        </div>
                        <div class="input-name md-form mb-5">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input class="form-control validate white-text @error('password') is-invalid @enderror" name="password" type="password" placeholder="رمز عبور">
                            <span class="underline-animation"></span>
                        </div>
                        <div class="input-name md-form mb-5">
                            <input class="checkbox" name="remember" type="checkbox">
                            <strong>  مرا بخاطر بسپار  </strong>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button type="submit" class="btn btn-danger btn-block btn-rounded z-depth-1">ورود</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</section>
<section>
    <form action="{{route('adminLogin')}}" method="post">
        @csrf
    <div class="modal fade" id="adminLoginForm" tabindex="-1" role="dialog" aria-labelledby="adminLoginLabel"
         aria-hidden="true">
        <div class="modal-dialog form-dark" role="document">
            <div class="modal-content card card-image" style="background-image: url('{{url("/front/images/3.jpg")}}');">
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 white-text font-weight-bold" id="adminLoginLabel"><strong>لطفا ابتدا وارد شوید</strong></h3>
                        <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-name md-form mb-3">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input class="form-control @error('username') is-invalid @enderror" name="username" type="text" placeholder="نام کاربری" value="{{old('username')}}">
                            <span class="underline-animation"></span>
                        </div>
                        <div class="input-name md-form mb-5">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input class="form-control validate white-text @error('password') is-invalid @enderror" name="password" type="password" placeholder="رمز عبور">
                            <span class="underline-animation"></span>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="text-center mb-3 col-md-12">
                                <button type="submit" class="btn btn-danger btn-block btn-rounded z-depth-1">ورود</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</section>
<section class="section1 container-fluid">
    <div class="d-none d-xl-block d-lg-block">
        <nav class="row navbar navbar-expand-lg navbar-dark col-lg-12">
            <div class="col-lg-11">
                <ul class="navbar-nav">
                    <li id="active" class="nav-item"><a class="nav-link" href="#">صفحه اصلی</a></li>
                    <li class="nav-item"><a class="nav-link underline-hover" href="#" data-toggle="modal" data-target="#darkModalForm">ثبت نام</a></li>
                    <li class="nav-item"><a class="nav-link underline-hover" href="#" data-toggle="modal" data-target="#loginForm">ورود</a></li>
                    <li class="nav-item"><a class="nav-link underline-hover" href="" data-toggle="modal" data-target="#adminLoginForm">پنل مدیریتی</a></li>
                    <li class="nav-item"><a class="nav-link underline-hover" href="#contact-us">ارتباط با ما</a></li>
                </ul>
            </div>
            <div class="text-center col-lg-1">
                <a id="brand" href="#"><b>FIT</b>NESS</a>
            </div>
        </nav>
    </div>
    <div id="start" class="container text-center">
        <b>بدن سازی را از امروز شروع کنید</b><br><br>
        <button class="btn join-us" type="button" data-toggle="modal" data-target="#darkModalForm">همین الان ثبت نام کنید</button>
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
                        <a href="#" class="btn btn-primary mt-4">خرید</a>
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
                        <a href="#" class="btn btn-primary mt-4">خرید</a>
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
                        <a href="#" class="btn btn-primary mt-4">خرید</a>
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
                        <a href="#" class="btn btn-primary mt-4">خرید</a>
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
                        <a href="#" class="btn btn-primary mt-4">خرید</a>
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
                        <a href="#" class="btn btn-primary mt-4">خرید</a>
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
