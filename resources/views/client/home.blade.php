@extends('client.master')
@section('content')

    <!-- <section id="banner" class="p-5">
        <form action="" class="py-5 px-3">
            <div class="w-75 d-flex justify-content-center m-auto">
                <input type="search" name="" id="" class="form-control w-75">
                <input type="submit" value="Tìm kiếm" class="btn btn-primary ml-3">
            </div>
        </form>
    </section> -->

    <section id="feature">
        <div class="row pt-5">
            <div class="feature-header col-md-8 col-md-offset-2 m-auto text-center">
                <h2 class="heading">
                    Featured Dishes
                </h2>
                <p class="px-sm-4 px-md-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="feature-row">
                <div class="feature-card-1 col-lg-6 col-sm-12">
                    <div class="feature-card-row d-flex">
                        <div class="feature-card-img w-50">
                            <img src="./img/products/banhcuon.jpg" alt="...">
                        </div>
                        <div class="feature-card-content w-50">
                            <h2>Fresh Mushrooms</h2>
                            <span class="pricing">$7.50</span>
                            <p>
                                Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind
                                texts.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="feature-card col-lg-6 col-sm-12">
                    <div class="feature-card-row d-flex">
                        <div class="feature-card-img w-50">
                            <img src="./img/products/banhmi.jpg" alt="...">
                        </div>
                        <div class="feature-card-content w-50">
                            <h2>Grilled Chiken Salad</h2>
                            <span class="pricing">$12.00</span>
                            <p>
                                Far far away, behind the word mountains.
                            </p>
                        </div>
                    </div>
                    <div class="feature-card-row feature-card-reversed d-flex">
                        <div class="feature-card-img w-50">
                            <img src="./img/products/comtam.jpg" alt="...">
                        </div>
                        <div class="feature-card-content w-50">
                            <h2>Grilled Chiken Salad</h2>
                            <span class="pricing">$12.00</span>
                            <p>
                                Far far away, behind the word mountains.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="product">
        <div class="row pt-5">
            <div class="product-header col-md-8 col-md-offset-2 m-auto text-center">
                <h2 class="heading">
                    Food Menu
                </h2>
                <p class="px-sm-4 px-md-0">Far far away, behind the word mountains, far from the countries Vietnam, there live the blind texts.</p>
            </div>
        </div>
        <div class="row justify-content-center px-4">
            <h2 class="regions">The North</h2>
            <div class="col-md-6">
                <div class="product-menu">
                    <a class="product-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="product-desc">
                            <figure>
                                <img src="img/products/banhmi.jpg" class="img-fluid" alt="" />
                            </figure>
                            <div>
                                <h3>Pineapple Juice</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                        </div>
                        <div class="product-pricing">$17.50</div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-menu">
                    <a class="product-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="product-desc">
                            <figure>
                                <img src="img/products/banhmi.jpg" class="img-fluid" alt="" />
                            </figure>
                            <div>
                                <h3>Pineapple Juice</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                        </div>
                        <div class="product-pricing">$17.50</div>
                    </a>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-4 offset-md-4 text-center">
                    <p>
                        <a href="#" class="btn-view-all">More Food<i class="fas fa-angle-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center px-4 pt-2">
            <h2 class="regions">The Central</h2>
            <div class="col-md-6">
                <div class="product-menu">
                    <a class="product-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="product-desc">
                            <figure>
                                <img src="img/products/banhmi.jpg" class="img-fluid" alt="" />
                            </figure>
                            <div>
                                <h3>Pineapple Juice</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                        </div>
                        <div class="product-pricing">$17.50</div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-menu">
                    <a class="product-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="product-desc">
                            <figure>
                                <img src="img/products/banhmi.jpg" class="img-fluid" alt="" />
                            </figure>
                            <div>
                                <h3>Pineapple Juice</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                        </div>
                        <div class="product-pricing">$17.50</div>
                    </a>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-4 offset-md-4 text-center">
                    <p>
                        <a href="#" class="btn-view-all">More Food<i class="fas fa-angle-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center px-4 pt-2">
            <h2 class="regions">The South</h2>
            <div class="col-md-6">
                <div class="product-menu">
                    <a class="product-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="product-desc">
                            <figure>
                                <img src="img/products/banhmi.jpg" class="img-fluid" alt="" />
                            </figure>
                            <div>
                                <h3>Pineapple Juice</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                        </div>
                        <div class="product-pricing">$17.50</div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-menu">
                    <a class="product-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="product-desc">
                            <figure>
                                <img src="img/products/banhmi.jpg" class="img-fluid" alt="" />
                            </figure>
                            <div>
                                <h3>Pineapple Juice</h3>
                                <p>Far far away, behind the word mountains.</p>
                            </div>
                        </div>
                        <div class="product-pricing">$17.50</div>
                    </a>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-md-4 offset-md-4 text-center">
                    <p>
                        <a href="#" class="btn-view-all">More Food<i class="fas fa-angle-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="row">
            <div id="myMap" class="col-lg-6 pe-lg-0">
                <div class="h-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7335944849997!2d105.84113201488293!3d21.003313486012154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac773026b415%3A0x499b8b613889f78a!2sHanoi%20University%20of%20Civil%20Engineering!5e0!3m2!1sen!2s!4v1668097165958!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div id="about-content" class="col-lg-6 ps-lg-0">
                <div>
                    <h2 class="heading text-center text-white">About Us</h2>
                    <p>
                        <span class="firstcharacter">F</span>ar far away, behind the word
                        mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at
                        the coast of the Semantics, a large language ocean. Far far away,
                        behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts. A small river named Duden
                        flows by their place and supplies it with the necessary regelialia.
                        It is a paradisematic country, in which roasted parts of sentences
                        fly into your mouth. Even the all-powerful Pointing has no control
                        about the blind texts it is an almost unorthographic life.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
