<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fonts/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="container-fuild">
        <div class="content">
            <header class="sticky-top bg-white">
                <nav class="h-100 border-bottom">
                    <div class="navbar justify-content-center align-content-center align-items-center">
                        <div class="container-fluid">
                            <div class="logo">
                                <a class="nav-link logo fs-c18" href="#">LOGO</a>
                            </div>
                            <button type="button" id="navbar-toggler" class="btn">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                    <ul class="nav align-content-center align-items-center">
                        <li class="nav-item">
                            <a class="nav-link fs-c18 active" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link logo fs-c18" href="#">LOGO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-c18 cart" href="./cart-detail.html">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="cart-qty"></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fs-c18 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                User
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Lịch sử đơn hàng</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </header>

            <section id="cart-detail">
                <div class="container py-4">
                    <h2 class="text-uppercase pb-3">MY BUCKET</h2>

                    <div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="cart-group">
                                    <div class="card">
                                        <div class="row g-0">
                                            <div class="col-sm-4 col-xs-12">
                                                <img src="./img/products/banhmi.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class="col-sm-8 col-xs-12 d-grid align-items-end">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text text-overflow">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                </div>
                                                <div class="card-footer d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <a href="#" class="cart-item-delete">Delete</a>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="cart-item-qty number-input-up-down">
                                                            <a class="btn-minus disabled"><i class="fas fa-minus"></i></a>
                                                            <input type="number" class="food-qty" readonly value="1" />
                                                            <a class="btn-plus"><i class="fas fa-plus"></i></a>
                                                        </div>
                                                        <div class="cart-item-price">
                                                            <span>20.000đ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="row g-0">
                                            <div class="col-sm-4 col-xs-12">
                                                <img src="./img/products/banhmi.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class="col-sm-8 col-xs-12 d-grid align-items-end">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text text-overflow">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                </div>
                                                <div class="card-footer d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <a href="#" class="cart-item-delete">Delete</a>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="cart-item-qty number-input-up-down">
                                                            <a class="btn-minus disabled"><i class="fas fa-minus"></i></a>
                                                            <input type="number" class="food-qty" readonly value="1" />
                                                            <a class="btn-plus"><i class="fas fa-plus"></i></a>
                                                        </div>
                                                        <div class="cart-item-price">
                                                            <span>20.000đ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="row g-0">
                                            <div class="col-sm-4 col-xs-12">
                                                <img src="./img/products/banhmi.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class="col-sm-8 col-xs-12 d-grid align-items-end">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text text-overflow">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                </div>
                                                <div class="card-footer d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <a href="#" class="cart-item-delete">Delete</a>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="cart-item-qty number-input-up-down">
                                                            <a class="btn-minus disabled"><i class="fas fa-minus"></i></a>
                                                            <input type="number" class="food-qty" readonly value="1" />
                                                            <a class="btn-plus"><i class="fas fa-plus"></i></a>
                                                        </div>
                                                        <div class="cart-item-price">
                                                            <span>20.000đ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="row g-0">
                                            <div class="col-sm-4 col-xs-12">
                                                <img src="./img/products/banhmi.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class="col-sm-8 col-xs-12 d-grid align-items-end">
                                                <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text text-overflow">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                </div>
                                                <div class="card-footer d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <a href="#" class="cart-item-delete">Delete</a>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="cart-item-qty number-input-up-down">
                                                            <a class="btn-minus disabled"><i class="fas fa-minus"></i></a>
                                                            <input type="number" class="food-qty" readonly value="1" />
                                                            <a class="btn-plus"><i class="fas fa-plus"></i></a>
                                                        </div>
                                                        <div class="cart-item-price">
                                                            <span>20.000đ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card position-sticky" style="top: 118px">
                                    <div class="card-body">
                                        <h5 class="text-uppercase"><span>1</span> item</h5>
                                        <hr>
                                        <div>
                                            <div class="d-flex justify-content-between">
                                                Subtotal
                                                <span>20000đ</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                Delivery Charge
                                                <span>10000đ</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                Total
                                                <span>30000đ</span>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <a href="checkout.html" class="btn btn-danger w-100">
                                                <div class="d-flex justify-content-between">
                                                    <span>Checkout</span>
                                                    <span>30000đ</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="d-flex justify-content-center my-4">
            <p class="text-white p-0">&copy;Footer</p>
        </footer>
    </div>
</div>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>

<!-- Custom -->
<script src="index.js"></script>

<!-- Bootstrap -->
<script src="./fonts/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
