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

    <title>Quản lý bán hàng của hàng Thân Nguyệt</title>

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
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="javascrip:;" class="app-brand-link gap-2">
                  <span class="app-brand-text demo text-body fw-bolder" style="text-transform:uppercase;">Quản lý của hàng</span>
                </a>
              </div>
              <!-- /Logo -->
              <!-- <h4 class="mb-2">Welcome 👋</h4> -->
              <!-- <p class="mb-4">Vui lòng đăng nhập vào tài khoản của bạn và bắt đầu thảo luận</p> -->
              @if(Request::get("notify") == "invalid")
				<div class="alert alert-danger">Hãy kiểm tra lại tài khoản và mật khẩu!</div>
				@endif

              <form id="formAuthentication" class="mb-3" action="" method="POST" autocomplete="off">
              	@csrf
                <div class="mb-3">
                  <label for="username" class="form-label">Tài khoản</label>
                  <input type="text" name="username" required class="form-control">
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label for="Password" class="form-label">Mật khẩu</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" name="remember" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Ghi nhớ tôi </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Đăng nhập</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /Register -->
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

