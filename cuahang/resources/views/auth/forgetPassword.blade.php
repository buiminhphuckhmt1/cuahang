<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-../assets/admin/layout2/../assets-path="../assets/admin/layout2/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>FAQFORUM</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="shortcut icon"  type="image/x-icon" href="{{ asset('template/images/favicon_forum.jpg')}}">

    <!-- Favicon -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- <link rel="stylesheet" href="../assets/admin/layout2/assets/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="{{ asset('admin/assets/admin/layout1/css/font-awesome.min.css') }}">
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin/assets/admin/layout2/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/admin/layout2/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/admin/layout2/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/admin/layout2/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/admin/layout2/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/assets/admin/layout2/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->
    
    <link rel="stylesheet" href="{{ asset('admin/assets/admin/layout2/assets/vendor/css/pages/page-auth.css') }}" />
    <!-- Helpers -->
    <script src="{{ asset('admin/assets/admin/layout2/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('admin/assets/admin/layout2/assets/js/config.js') }}"></script>
             <script type="text/javascript" src="{{ asset('admin/assets/ckeditor/ckeditor.js') }}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="{{url('backend/home')}}" class="app-brand-link gap-2">
                  <span class="app-brand-text demo text-body fw-bolder">FQAFOROM</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Quên mạt khẩu ? 🔒</h4>
              <p class="mb-4">Nhập địa chỉ email chúng tôi sẽ hướng dẫn bạn lấy lại mật khẩu.</p>
              @if (Session::has('message'))
                <div class="alert alert-primary" role="alert">{{ Session::get('message') }}</div>
              @endif
              <form id="formAuthentication" class="mb-3" action="{{ route('forget.password.post') }}" method="POST">
              @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="nhập email của bạn" required autofocus>
                  @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>
                <button class="btn btn-primary d-grid w-100">Gửi yêu cầu</button>
              </form>
              <div class="text-center">
                <a href="{{ url('backend/login') }}" class="d-flex align-items-center justify-content-center">
                  <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                  Trở lại đăng nhập
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- / Content -->

   <!-- Core JS -->
    <!-- build:js assets/admin/layout2/assets/vendor/js/core.js -->
    <script src="{{ asset('admin/assets/admin/layout2/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/assets/admin/layout2/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('admin/assets/admin/layout2/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/assets/admin/layout2/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('admin/assets/admin/layout2/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('admin/assets/admin/layout2/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('admin/assets/admin/layout2/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('admin/assets/admin/layout2/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('admin/assets/admin/layout2/assets/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>

