<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url("/front/css/bootstrap-rtl.min.css")}}">
    <link rel="stylesheet" href="{{url("/front/css/persian-datepicker.css")}}">
    <link rel="stylesheet" href="{{url("/front/css/fontawesome.min.css")}}">
    <link rel="stylesheet" href="{{url("/front/css/solid.min.css")}}">
    <link rel="stylesheet" href="{{url("/front/css/style.css")}}">
    <link rel="stylesheet" href="{{url("/front/css/exercise-program.css")}}">
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
                    <a class="nav-link" href="#">ثبت نام</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ورود</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="container-fluid">
        <div class="d-none d-xl-block d-lg-block">
            <nav class="row navbar navbar-expand-lg navbar-dark col-lg-12">
                <div class="col-lg-11">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link underline-hover" href="#">صفحه اصلی</a></li>
                        <li class="nav-item"><a class="nav-link underline-hover" href="main-page.html#buy">خرید اشتراک</a></li>
                        <li id="active" class="nav-item"><a class="nav-link underline-hover" href="#">مشاهده برنامه ورزشی</a></li>
                        <li class="nav-item"><a class="nav-link underline-hover" href="#">ارتباط با ما</a></li>
                    </ul>
                </div>
                <div class="text-center col-lg-1">
                    <a id="brand" href="#"><b>FIT</b>NESS</a>
                </div>
            </nav>
        </div>
    </section>
    <section class="container text-center exercise-program mt-5 p-5">
        <h3 class="h3 mb-5">{{$pagetitle}}</h3>
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th colspan="3">حرکت</th>
                <th scope="col">تعداد</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td colspan="3">{{$program->getAttribute('first-exercise')}}</td>
                <td>{{$program->getAttribute('first-exercise-number')}}</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td colspan="3">{{$program->getAttribute('second-exercise')}}</td>
                <td>{{$program->getAttribute('second-exercise-number')}}</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="3">{{$program->getAttribute('third-exercise')}}</td>
                <td>{{$program->getAttribute('third-exercise-number')}}</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td colspan="3">{{$program->getAttribute('forth-exercise')}}</td>
                <td>{{$program->getAttribute('forth-exercise-number')}}</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td colspan="3">{{$program->getAttribute('fifth-exercise')}}</td>
                <td>{{$program->getAttribute('fifth-exercise-number')}}</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td colspan="3">{{$program->getAttribute('sixth-exercise')}}</td>
                <td>{{$program->getAttribute('sixth-exercise-number')}}</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td colspan="3">{{$program->getAttribute('seventh-exercise')}}</td>
                <td>{{$program->getAttribute('seventh-exercise-number')}}</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td colspan="3">{{$program->getAttribute('eighth-exercise')}}</td>
                <td>{{$program->getAttribute('eighth-exercise-number')}}</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td> مدت زمان باقی مانده اعتبار شما {{$diff}} روز میباشد. </td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </section>
    <br><br>
</body>
</html>
