@extends('frontend.master')
@section('content')

<!-- CAtegories Section Starts Here -->
<section class="categories">
    <div class="container">
        <h2 class="text-center">Explore Foods</h2>
            @foreach($categories as $category)
            <a href="{{asset('category/food/'.$category->id)}}">
                <div class="box-3 float-container">
                    <img src="{{asset('backend/img/category/'.$category->image)}}" alt="Pizza" class="img-responsive img-curve">

                    <h3 class="float-text text-white">{{$category->title}}</h3>
                </div>
            </a>
        @endforeach

        <div class="clearfix"></div>
    </div>
</section>
<!-- Categories Section Ends Here -->


@endsection
