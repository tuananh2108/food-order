@extends('frontend.master')
@section('content')

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="{{asset('search/')}}" role="search" method="GET">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            @foreach($foods as $food)
                <div class="food-menu-box">
                    <div class="food-menu-img">
                        <img src="{{asset('backend/img/food/'.$food->image)}}" alt="{{$food->title}}" class="img-responsive img-curve">
                    </div>

                    <div class="food-menu-desc">
                        <h4>{{$food->title}}</h4>
                        <p class="food-price">{{$food->price}} VND</p>
                        <p class="food-detail">{{$food->description}}</p>
                        <br>

                        <a href="" class="btn btn-primary">Thêm vào giỏ</a>
                    </div>
                </div>
            @endforeach
            <div class="clearfix"></div>
        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

@endsection