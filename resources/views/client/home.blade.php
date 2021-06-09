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
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="feature-row">
                <div class="feature-card-1 w-50">
                    <div class="feature-card-row d-flex">
                        <div class="feature-card-img w-50">
                            <img src="{{asset('client/img/products/banhcuon.jpg')}}" alt="...">
                        </div>
                        <div class="feature-card-content w-50">
                            <h2>Food Title</h2>
                            <span class="pricing">$7.50</span>
                            <p>
                                Far far away, behind the word mountains, far from the
                                countries Vietnam, there live the blind
                                texts.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="feature-card w-50">
                    <div class="feature-card-row d-flex">
                        <div class="feature-card-img w-50">
                            <img src="{{asset('client/img/products/banhmi.jpg')}}" alt="...">
                        </div>
                        <div class="feature-card-content w-50">
                            <h2>Food Title</h2>
                            <span class="pricing">$12.00</span>
                            <p>
                                Far far away, behind the word mountains.
                            </p>
                        </div>
                    </div>
                    <div class="feature-card-row feature-card-reversed d-flex">
                        <div class="feature-card-img w-50">
                            <img src="{{asset('client/img/products/comtam.jpg')}}" alt="...">
                        </div>
                        <div class="feature-card-content w-50">
                            <h2>Food Title</h2>
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
                <p>Far far away, behind the word mountains, far from the countries Vietnam, there live the blind texts.</p>
            </div>
        </div>
        <div class="row px-4">
            <h2 class="regions">The North</h2>
            <div class="col-md-6">
                <div class="product-menu">
                    <a class="product-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="product-desc">
                            <figure>
                                <img src="{{asset('client/img/products/banhmi.jpg')}}" class="img-fluid" alt="" />
                            </figure>
                            <div>
                                <h3>Food Title</h3>
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
                                <img src="{{asset('client/img/products/banhmi.jpg')}}" class="img-fluid" alt="" />
                            </figure>
                            <div>
                                <h3>Food Title</h3>
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
        <div class="row px-4 pt-2">
            <h2 class="regions">The Central</h2>
            <div class="col-md-6">
                <div class="product-menu">
                    <a class="product-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="product-desc">
                            <figure>
                                <img src="{{asset('client/img/products/banhmi.jpg')}}" class="img-fluid" alt="" />
                            </figure>
                            <div>
                                <h3>Food Title</h3>
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
                                <img src="{{asset('client/img/products/banhmi.jpg')}}" class="img-fluid" alt="" />
                            </figure>
                            <div>
                                <h3>Food Title</h3>
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
        <div class="row px-4 pt-2">
            <h2 class="regions">The South</h2>
            <div class="col-md-6">
                <div class="product-menu">
                    <a class="product-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="product-desc">
                            <figure>
                                <img src="{{asset('client/img/products/banhmi.jpg')}}" class="img-fluid" alt="" />
                            </figure>
                            <div>
                                <h3>Food Title</h3>
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
                                <img src="{{asset('client/img/products/banhmi.jpg')}}" class="img-fluid" alt="" />
                            </figure>
                            <div>
                                <h3>Food Title</h3>
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

    </section>

@endsection