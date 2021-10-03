<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>A place to eat and drink</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="{{asset('client/fonts/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('client/fonts/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/style.css')}}">
</head>

<body>
    <!-- <aside class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-warning" href="#">Đồ ăn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="#">Đồ uống</a>
            </li>
        </ul>
    </aside> -->
    <div class="container">
        <div class="container-fuild">
            <div class="content">
                <header class="sticky-top bg-white">
                    <nav class="h-100 border-bottom">
                        <ul class="nav justify-content-center align-content-center align-items-center h-100">
                            <li class="nav-item">
                              <a class="nav-link fs-c18 active" href="{{asset('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-c18" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-c18" href="#feature">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link logo fs-c18" href="{{asset('/')}}">LOGO</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link fs-c18" href="#product">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-c18 cart" href="./cart-detail.html">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span class="cart-qty">4</span>
                                </a>
                            </li>
                            @if(!\Illuminate\Support\Facades\Auth::check())
                                <li class="nav-item">
                                    <a class="nav-link fs-c18" href="{{asset('logout')}}">Login</a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link fs-c18 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Order history</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{asset('user/check-logout')}}">Logout</a>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </header>

                <div>
                    @yield('content') 
                </div>

            </div>
            <footer class="d-flex justify-content-center my-4">
                <p class="text-white p-0">&copy;Footer</p>
            </footer>
        </div>
    </div>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>

    <!-- Custom -->
    <script src="{{asset('client/js/index.js')}}"></script>
    
    <!-- Bootstrap -->
    <script src="{{asset('client/fonts/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>