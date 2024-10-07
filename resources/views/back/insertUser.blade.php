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
        <form action="{{route('store')}}" method="post">
            @csrf
            <div class="col-lg-10 float-left text-center">
                <div class="form-group row">
                    <label class="col-lg-1 col-form-label text-light">مشخصات اسمی:</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="نام و نام خانوادگی را در این قسمت وارد کنید">
                    </div>
                    <label class="col-lg-1 col-form-label text-light">کد ملی :</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control @error('code-melli') is-invalid @enderror" name="code-melli" placeholder="کد ملی را در این قسمت وارد کنید">
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="form-group row">
                    <label class="col-lg-1 col-form-label text-light">شماره تلفن :</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control @error('phone-number') is-invalid @enderror" name="phone-number" placeholder="شماره تلفن را در این قسمت وارد نمایید">
                    </div>
                    <label class="col-lg-1 col-form-label text-light">جنسیت :</label>
                    <div class="col-lg-5">
                        <div class="form-row mb-3">
                            <div class="form-check form-check-inline col">
                                <label class="form-check-label text-light" for="inlineRadio1">مذکر</label>
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="اقا">
                            </div>
                            <div class="form-check form-check-inline col">
                                <label class="form-check-label text-light" for="inlineRadio2">مونث</label>
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="خانم">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="form-group row">
                    <label class="col-lg-1 col-form-label text-light">رمز عبور :</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="رمز عبور را در این قسمت وارد نمایید">
                    </div>
                    <label class="col-lg-1 col-form-label text-light">کد تلگرام :</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="telegram-code" placeholder="کد تلگرام را در این قسما وارد نمایید">
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="form-group row">
                    <label class="col-lg-1 col-form-label text-light">مدت زمان اشتراک :</label>
                    <div class="col-lg-3">
                        <select class="form-select form-control" name="membership-period" aria-label="Default select">
                            <option value="" selected>بدون اشتراک</option>
                            <option value="1">یک ماهه</option>
                            <option value="2">دو ماهه</option>
                            <option value="3">سه ماهه</option>
                        </select>
                    </div>
                    <label class="col-lg-1 col-form-label text-light">وضعیت اشتراک :</label>
                    <div class="col-lg-3">
                        <select class="form-select form-control" name="status" aria-label="Default select">
                            <option value="1">همراه با تردمیل و دوچرخه</option>
                            <option value="0">بدون تردمیل و دوچرخه</option>
                        </select>
                    </div>
                    <label class="col-lg-1 col-form-label text-light">تاریخ شروع اشتراک :</label>
                    <div class="col-lg-3">
                        <input class="form-control" type="date" name="membership-date" placeholder="لطفا تاریخ را انتخاب نمایید">
                        <!--<input type="text" class="form-control" name="membership-date" placeholder="لطفا تاریخ را به صورت مقابل وارد نمایید : 1400/06/06">-->
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
