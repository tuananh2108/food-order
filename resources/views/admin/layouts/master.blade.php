<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">
</head>

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="{{asset('admin/dashboard')}}" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">Logo</span>
                    <span class="logo-subtitle">Dashboard</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="{{asset('admin/dashboard')}}"><span class="icon home" aria-hidden="true"></span>Trang chủ</a>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon category" aria-hidden="true"></span>Quản lý loại đồ ăn
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="{{asset('admin/category')}}">Danh sách loại đồ ăn</a>
                        </li>
                        <li>
                          <a href="{{asset('admin/category/add')}}">Thêm mới</a>
                        </li>
                    </ul>
                </li>
                <li>
                  <a class="show-cat-btn" href="##">
                      <span class="icon folder" aria-hidden="true"></span>Quản lý món ăn
                      <span class="category__btn transparent-btn" title="Open list">
                          <span class="sr-only">Open list</span>
                          <span class="icon arrow-down" aria-hidden="true"></span>
                      </span>
                  </a>
                  <ul class="cat-sub-menu">
                      <li>
                          <a href="{{asset('admin/food')}}">Danh sách món ăn</a>
                      </li>
                      <li>
                          <a href="{{asset('admin/food/add')}}">Thêm mới</a>
                      </li>
                  </ul>
              </li>
                <li>
                    <a href="{{asset('admin/customer')}}">
                        <span class="icon user-3" aria-hidden="true"></span>Quản lý khách hàng
                    </a>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon user-2" aria-hidden="true"></span>Quản lý nhân viên
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="{{asset('admin/employee')}}">Danh sách nhân viên</a>
                        </li>
                        <li>
                            <a href="{{asset('admin/employee/add')}}">Thêm mới</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{asset('admin/order')}}">
                        <span class="icon document" aria-hidden="true"></span>Đơn đặt hàng
                    </a>
                    <span class="msg-counter">{{$qty_order}}</span>
                </li>
            </ul>
            <span class="system-menu__title">Hệ thống</span>
            <ul class="sidebar-body-menu">
                <li>
                    <a href="{{asset('/')}}"><span class="icon home" aria-hidden="true"></span>Trang bán hàng</a>
                </li>
                <li>
                    <a href="{{asset('admin/user')}}"><span class="icon user-1" aria-hidden="true"></span>Quản lý tài khoản</a>
                </li>
            </ul>
        </div>
    </div>
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="{{asset('admin/img/avatar/avatar-illustrated-02.webp')}}" type="image/webp"><img src="{{asset('admin/img/avatar/avatar-illustrated-02.png')}}" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="##">
              <i data-feather="user" aria-hidden="true"></i>
              <span>Thông tin đăng nhập</span>
            </a></li>
          <li><a href="##">
              <i data-feather="settings" aria-hidden="true"></i>
              <span>Cài đặt tài khoản</span>
            </a></li>
          <li><a class="danger" href="{{asset('logout')}}">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Đăng xuất</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
        <div class="container">
            @yield('content')
        </div>
    </main>
    <!-- ! Footer -->
    <footer class="footer">
        <div class="container footer--flex">
            <div class="footer-start">
                <p>2022 © Dashboard</p>
            </div>
            <ul class="footer-end">
                <li><a href="##">About</a></li>
                <li><a href="##">Support</a></li>
                <li><a href="##">Puchase</a></li>
            </ul>
        </div>
    </footer>
  </div>
</div>
<!-- Chart library -->
<script src="{{asset('admin/plugins/chart.min.js')}}"></script>
<!-- Icons library -->
<script src="{{asset('admin/plugins/feather.min.js')}}"></script>
<!-- Custom scripts -->
<script src="{{asset('admin/js/script.js')}}"></script>
</body>

</html>