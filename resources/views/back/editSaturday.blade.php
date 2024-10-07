<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('/back/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{url('/back/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        {{$pagetitle}}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="{{url('/back/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{url('/back/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('/back/css/black-dashboard.css?v=1.0.0')}}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/persian-datepicker@latest/dist/css/persian-datepicker.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/persian-date@latest/dist/persian-date.min.js"></script>
    <script src="https://unpkg.com/persian-datepicker@latest/dist/js/persian-datepicker.min.js"></script>
</head>

<body class=" rtl menu-on-right">
<div class="wrapper ">
    @include('layouts.menu')
    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-absolute bg-info">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle d-inline">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand text-light" href="#">پنل مدیریتی</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav  mr-auto">
                        <li class="nav-link">
                            <a href="{{route('homePage')}}" class="nav-item text-light">Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
        <div class="col-lg-10 float-left text-right">
            @include('layouts.messages')
        </div>
        <form action="{{route('updateSaturday', 6)}}" method="post">
            @csrf
            <div class="col-lg-10 float-left text-center">
                <div class="form-group row">
                    <label class="col-lg-1 col-form-label text-light text-left">حرکت اول:</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$saturday->getAttribute('first-exercise')}}" name="first-exercise" placeholder="حرکت اول را در این قسمت وارد کنید">
                    </div>
                    <label class="col-lg-1 col-form-label text-light text-left">تعداد :</label>
                    <div class="col-lg-3">
                        <input type="text" class="form-control text-right @error('code-melli') is-invalid @enderror" value="{{$saturday->getAttribute('first-exercise-number')}}" name="first-exercise-number" placeholder="تعداد حرکت اول را در این قسمت وارد کنید">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-lg-1 col-form-label text-light text-left">حرکت دوم:</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control @error('second-exercise') is-invalid @enderror" value="{{$saturday->getAttribute('second-exercise')}}" name="second-exercise" placeholder="حرکت دوم را در این قسمت وارد کنید">
                    </div>
                    <label class="col-lg-1 col-form-label text-light text-left">تعداد :</label>
                    <div class="col-lg-3">
                        <input type="text" class="form-control text-right @error('second-exercise-number') is-invalid @enderror" value="{{$saturday->getAttribute('second-exercise-number')}}" name="second-exercise-number" placeholder="تعداد حرکت دوم را در این قسمت وارد کنید">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-lg-1 col-form-label text-light text-left">حرکت سوم:</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control @error('third-exercise') is-invalid @enderror" value="{{$saturday->getAttribute('third-exercise')}}" name="third-exercise" placeholder="حرکت سوم را در این قسمت وارد کنید">
                    </div>
                    <label class="col-lg-1 col-form-label text-light text-left">تعداد :</label>
                    <div class="col-lg-3">
                        <input type="text" class="form-control text-right @error('third-exercise-number') is-invalid @enderror" value="{{$saturday->getAttribute('third-exercise-number')}}" name="third-exercise-number" placeholder="تعداد حرکت سوم را در این قسمت وارد کنید">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-lg-1 col-form-label text-light text-left">حرکت چهارم:</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" value="{{$saturday->getAttribute('forth-exercise')}}" name="forth-exercise" placeholder="حرکت چهارم را در این قسمت وارد کنید">
                    </div>
                    <label class="col-lg-1 col-form-label text-light text-left">تعداد :</label>
                    <div class="col-lg-3">
                        <input type="text" class="form-control text-right" value="{{$saturday->getAttribute('forth-exercise-number')}}" name="forth-exercise-number" placeholder="تعداد حرکت چهارم را در این قسمت وارد کنید">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-lg-1 col-form-label text-light text-left">حرکت پنجم:</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" value="{{$saturday->getAttribute('fifth-exercise')}}" name="fifth-exercise" placeholder="حرکت پنجم را در این قسمت وارد کنید">
                    </div>
                    <label class="col-lg-1 col-form-label text-light text-left">تعداد :</label>
                    <div class="col-lg-3">
                        <input type="text" class="form-control text-right" value="{{$saturday->getAttribute('fifth-exercise-number')}}" name="fifth-exercise-number" placeholder="تعداد حرکت پنجم را در این قسمت وارد کنید">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-lg-1 col-form-label text-light text-left">حرکت ششم:</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" value="{{$saturday->getAttribute('sixth-exercise')}}" name="sixth-exercise" placeholder="حرکت ششم را در این قسمت وارد کنید">
                    </div>
                    <label class="col-lg-1 col-form-label text-light text-left">تعداد :</label>
                    <div class="col-lg-3">
                        <input type="text" class="form-control text-right" value="{{$saturday->getAttribute('sixth-exercise-number')}}" name="sixth-exercise-number" placeholder="تعداد حرکت ششم را در این قسمت وارد کنید">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-lg-1 col-form-label text-light text-left">حرکت هفتم:</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" value="{{$saturday->getAttribute('seventh-exercise')}}" name="seventh-exercise" placeholder="حرکت هفتم را در این قسمت وارد کنید">
                    </div>
                    <label class="col-lg-1 col-form-label text-light text-left">تعداد :</label>
                    <div class="col-lg-3">
                        <input type="text" class="form-control text-right" value="{{$saturday->getAttribute('seventh-exercise-number')}}" name="seventh-exercise-number" placeholder="تعداد حرکت هفتم را در این قسمت وارد کنید">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-lg-1 col-form-label text-light text-left">حرکت هشتم:</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" value="{{$saturday->getAttribute('eighth-exercise')}}" name="eighth-exercise" placeholder="حرکت هشتم را در این قسمت وارد کنید">
                    </div>
                    <label class="col-lg-1 col-form-label text-light text-left">تعداد :</label>
                    <div class="col-lg-3">
                        <input type="text" class="form-control text-right" value="{{$saturday->getAttribute('eighth-exercise-number')}}" name="eighth-exercise-number" placeholder="تعداد حرکت هشتم را در این قسمت وارد کنید">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn w-50">ثبت کردن</button>
            </div>
        </form>
    </div>
</div>
<script src="{{url('/back/js/core/jquery.min.js')}}"></script>
<script src="{{url('/back/js/core/popper.min.js')}}"></script>
<script src="{{url('/back/js/core/bootstrap.min.js')}}"></script>
<script src="{{url('/back/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{url('/back/js/plugins/chartjs.min.js')}}"></script>
<script src="{{url('/back/js/plugins/bootstrap-notify.js')}}"></script>
<script src="{{url('/back/js/black-dashboard.min.js?v=1.0.0')}}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;
            white_color = false;

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



            $('.fixed-plugin a').click(function(event) {
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .background-color span').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($navbar.length != 0) {
                    $navbar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);

                if (sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    sidebar_mini_active = false;
                    blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                } else {
                    $('body').addClass('sidebar-mini');
                    sidebar_mini_active = true;
                    blackDashboard.showSidebarMessage('Sidebar mini activated...');
                }

                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });

            $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);

                if (white_color == true) {

                    $('body').addClass('change-background');
                    setTimeout(function() {
                        $('body').removeClass('change-background');
                        $('body').removeClass('white-content');
                    }, 900);
                    white_color = false;
                } else {

                    $('body').addClass('change-background');
                    setTimeout(function() {
                        $('body').removeClass('change-background');
                        $('body').addClass('white-content');
                    }, 900);

                    white_color = true;
                }


            });

            $('.light-badge').click(function() {
                $('body').addClass('white-content');
            });

            $('.dark-badge').click(function() {
                $('body').removeClass('white-content');
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        demo.initDashboardPageCharts();

    });
</script>
</body>

</html>
