<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600&display=swap&subset=vietnamese"
          rel="stylesheet">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/all.min.css') }}">
    <!-- Ionicons -->
{{--    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') }}">--}}

<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    @yield('css')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
        <div class="container">
            <div id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto left-side">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto right-side">

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link">
                            Liên hệ: 0248683188
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            elearning@hust@hust.edu.vn
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar-light bg-white shadow-sm header-content">
        <div class="container px-3">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </a>
            <div class="collapse navbar-collapse" id="headerContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-auto header-top">
                    <li class="nav-item">
                        (+)
                    </li>

                    <li class="nav-item">
                        Liên hệ
                    </li>

                    <li class="nav-item">
                        Ngôn ngữ
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto search">
                    <li class="nav-item dropdown">
                        <input type="text" placeholder="Tìm kiếm">
                        <button class="btn btn-search">
                            <i class="fas fa-search"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <nav class="navbar navbar-expand-md navbar-light shadow-sm menu-content">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
                    aria-controls="navbarSupportedContent2" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto menu-side">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Trang chủ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>

                        <div class="sub-menu">
                            <div class="sub-item">
                                <a class="nav-link" href="{{ url('/blog/tong-quan') }}">Tổng quan</a>
                            </div>

{{--                            <div class="sub-item">--}}
{{--                                <a class="nav-link" href="#">Danh sách khoa viện</a>--}}
{{--                            </div>--}}

{{--                            <div class="sub-item">--}}
{{--                                <a class="nav-link" href="#">Danh sách giang viên</a>--}}
{{--                            </div>--}}
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('khoa-hoc') }}">Khóa học</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('tin-tuc-su-kien') }}">Tin tức sự kiện</a>

                        <div class="sub-menu">
                            <div class="sub-item">
                                <a class="nav-link" href="{{ url('tin-tuc-su-kien/tin-tuc') }}">Tin tức</a>
                            </div>

                            <div class="sub-item">
                                <a class="nav-link" href="{{ url('tin-tuc-su-kien/su-kien') }}">Sự kiện</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Sinh viên</a>

                        <div class="sub-menu">
                            <div class="sub-item">
                                <a class="nav-link" href="{{ url('ho-tro-sinh-vien') }}">Hố trợ sinh viên</a>
                            </div>

                            <div class="sub-item">
                                <a class="nav-link" href="{{ url('cong-tac-doan-doi') }}">Công tác đoàn đội</a>
                            </div>
                        </div>
                    </li>

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Sitemap</a>--}}
{{--                    </li>--}}

                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer id="footer" role="contentinfo">
        <div id="wrapper-footer">
            <div id="wapper-title-left">
                <div id="wapper-title-left-left">
                    <div class="bando">
                        <h4>BẢN ĐỒ CHỈ DẪN</h4>
                        <p>Trường Đại học Bách khoa Hà Nội</p>
                        <a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+B%C3%A1ch+khoa+H%C3%A0+N%E1%BB%99i/@21.0070516,105.840707,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ac76ccab6dd7:0x55e92a5b07a97d03!8m2!3d21.0070516!4d105.8428957">
                            <img src="{{ asset('images/bk-hn.png') }}">
                        </a>
                    </div>
                </div>
                <div id="wapper-title-left-right">
                    <div class="mangxahoi"><h4>MẠNG XÃ HỘI</h4>
                        <ul>
                            <li class="icon1">
                                <a href="https://www.facebook.com/dhbkhanoi/?fref=ts">
                                    <img src="{{ asset('images/fb-icon.png') }}" width="30px"></a>
                            </li>
                            <li class="icon1">
                                <a href="https://www.youtube.com/channel/UCILDWZ7oJhUcvWrYrRtLzVg">
                                    <img src="{{ asset('images/ytb-icon.png') }}" width="30px"></a>
                            </li>
                            <li class="icon1">
                                <a href="https://twitter.com/DHBachKhoaHaNoi">
                                    <img src="{{ asset('images/twitter-icon.png') }}" width="30px"></a>
                            </li>
                            <ul></ul>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="wapper-title-right">
                <div id="wapper-title-top">
                    <div class="danhsachkv">
                        <p><a href="#" style="color: #FFF;">&gt; Viện - Khoa đào tạo (A - Z)</a></p>
                        <p><a href="#" style="color: #FFF;">&gt; Viện - Trung tâm nghiên cứu (A - Z)</a></p>
                        <p><a href="#" style="color: #FFF;">&gt; Phòng - Ban - Trung tâm (A - Z)</a></p>
                    </div>
                    <div class="sodoweb">
                        <h4>SƠ ĐỒ WEBSITE</h4>
                        <p><a href="#" style="color: #FFF;">Xem sơ đồ trang ...</a></p>
                    </div>
                    <div id="wapper-title-bottom">
                        <hr>
                        <div id="wapper-title-bottom-content">
                            <b>Bản quyền thuộc về Trường Đại học Bách khoa Hà Nội</b>
                            <p class="address">Địa chỉ: Số 1 Đại Cồ Việt, Hai Bà Trưng, Hà Nội</p>
                            <p class="phone">Điện thoại: 024 3869 4242</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    @yield('script')
</div>
</body>
</html>
