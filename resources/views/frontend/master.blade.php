<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NuceFood|Nơi thỏa sức ăn uống</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fonts/fontawesome-free-5.15.3-web/css/all.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="{{asset('/')}}" title="Logo">
                    <img src="{{asset('frontend/img/12.png')}}" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="{{asset('/')}}">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{asset('category/')}}">Đồ ăn</a>
                    </li>
                    <li>
                        <a href="{{asset('food/')}}">Món ăn</a>
                    </li>
                    <li>
                        <a href="#">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="#" class="header__cart-wrap">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="header__cart-notice">0</span>
                            <div class="header__cart-list">
                                <ul class="header__cart-list-item">
                                    <li class="header__cart-item">
                                        <img src="" alt="" class="header__cart-img">
                                        <div class="header__cart-item-info">
                                            <div class="header__cart-item-head">
                                                <h5 class="header__cart-item-name"></h5>
                                                <div class="header__cart-item-price-wrap">
                                                    <span class="header__cart-item-price"></span>
                                                    <span class="header__cart-item-multiply"></span>
                                                    <span class="header__cart-item-qnt"></span>
                                                </div>
                                            </div>
                                            <div class="header__cart-item-body">
                                                <span class="header__cart-item-description">
                                                </span>
                                                <span class="header__cart-item-remove"></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </a>
                    </li>
                    <li>
                        <a href="#" class="user_logout">
                            <i class="user bi bi-person-circle"></i>
                            <i class="bi bi-caret-down-fill"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->
    
    <div class="container">
        @yield('content') 
    </div>

     <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Hoang Tuan Anh</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>