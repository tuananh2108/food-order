<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('backend/css/main.css')}}">
</head>
<body>
    <!-- Menu Section Start -->
    <div class="menu text-center">
        <div class="wrapper">
        <ul>
                <li><a href="{{asset('admin/home')}}">Trang chủ</a></li>
                <li><a href="#">Admin</a></li>
                <li><a href="#">Nhân viên</a></li>
                <li><a href="{{asset('admin/category')}}">Loại đồ ăn</a></li>
                <li><a href="{{asset('admin/food')}}">Món ăn</a></li>
                <li><a href="#">Hóa đơn</a></li>
                <li><a href="{{asset('/')}}">Trang bán hàng</a></li>
                <li><a href="{{asset('logout')}}">Đăng xuất</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        @yield('content') 
    </div>

        <!-- Footer Section Start -->
    <div class="footer">
        <div class="wrapper">
            <p class="text-center">2021 All rights reserved, Food House. Developer By - <a href="https://www.facebook.com/hta2108/"> Hoang Tuan Anh</a></p>
        </div>
    </div>
    <!-- Footer Section End -->
</body>
</html>