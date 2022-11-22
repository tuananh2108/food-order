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
                                <div class="form-checkout">
                                    <form method="post" class="mb-4">
                                        <div class="form-group">
                                            <h5 class="form-title">DELIVERY TO:</h5>
                                            <div class="input-group">
                                                <label for="home-number" class="label">Home Number</label>
                                                <input type="text" id="home-number">
                                            </div>
                                            <div class="input-group no-writer">
                                                <label for="">Street*</label>
                                                <input type="text">
                                            </div>
                                            <div class="input-group">
                                                <label for="">Ward*</label>
                                                <input type="text">
                                            </div>
                                            <div class="input-group">
                                                <label for="">District*</label>
                                                <input type="text">
                                            </div>
                                            <div class="input-group">
                                                <label for="">City*</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="form-title">ADD YOUR DETAILS:</h5>
                                            <div class="input-group">
                                                <label for="">First Name*</label>
                                                <input type="text">
                                            </div>
                                            <div class="input-group">
                                                <label for="">Last Name*</label>
                                                <input type="text">
                                            </div>
                                            <div class="input-group">
                                                <label for="">Phone Number*</label>
                                                <input type="text">
                                            </div>
                                            <div class="input-group">
                                                <label for="">Email Address*</label>
                                                <input type="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="form-title">PAYMENT METHOD:</h5>
                                            <div class="mt-3">
                                                <div class="input-payment-method">
                                                    <label for="" class="pay-cash">Pay by Cash</label>
                                                    <input type="radio" id="pay-cash">
                                                </div>
                                                <div class="input-payment-method">
                                                    <label for="">Pay by ATM and Visa/Master Card</label>
                                                    <input type="radio" id="pay-card">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center w-100">
                                            <input type="submit" value="Place Order" class="btn btn-custom btn-place-order">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card position-sticky" style="top: 118px">
                                    <div class="card-body">
                                        <h5 class="text-uppercase fw-bold">ORDER SUMMARY:</h5>
                                        <div class="d-flex justify-content-between align-items-center fw-semibold mt-3">
                                            <div class="d-flex align-items-center">
                                                <p class="item-qty">1</p><span>x</span><p class="ps-1 m-0">Bánh mì</p>
                                            </div>
                                            <span>20000đ</span>
                                        </div>
                                        <hr>
                                        <div class="mt-3">
                                            <div class="d-flex justify-content-between">
                                                Subtotal
                                                <span>20000đ</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                Delivery Charge
                                                <span>10000đ</span>
                                            </div>
                                            <div class="d-flex justify-content-between fw-semibold">
                                                Total
                                                <span>30000đ</span>
                                            </div>
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
