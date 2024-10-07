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
    <script src="{{url("/front/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{url("/front/js/persian-date.min.js")}}"></script>
    <script src="{{url("/front/js/persian-datepicker.js")}}"></script>
    <script src="{{url("/front/js/fontawesome.js")}}"></script>
    <script src="{{url("/front/js/fontawesome.min.js")}}"></script>
    <script src="{{url("/front/js/solid.min.js")}}"></script>
    <script src="{{url("/front/js/scripts.js")}}"></script>
</head>
<body dir="rtl" style="background-image: url('{{url("/front/images/3.jpg")}}'); background-repeat: no-repeat; background-size: cover;">
<form action="{{route('register')}}" method="post">
    @csrf
    <div class="modal" style="display: block;">
        <div class="modal-dialog form-dark">
            <div class="modal-content card card-image" style="background-image: url('{{url("/front/images/3.jpg")}}');">
                <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                    <div class="modal-header text-center pb-4">
                        <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>لطفا فرم را پر کنید</strong></h3>
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
</body>
</html>
