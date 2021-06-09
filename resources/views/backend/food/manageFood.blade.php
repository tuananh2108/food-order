@extends('backend.master.master')
@section('title', 'Món ăn')
@section('content')
<div class="main-content">
    <div class="wrapper">
    <h1>Manage Food</h1>

    <br/><br/>
    <!-- Button to Add Admin -->
    <a href="{{asset('admin/food/add')}}" class="btn-primary">Add Food</a>
    <br><br>

    <table class="tbl-full">
        <tr>
            <th>S.N.</th>
            <th>Title</th>
            <th>Price</th>
            <th>Image</th>
            <th>Featured</th>
            <th>Active</th>
            <th>Actions</th>
        </tr>

        @foreach($foods as $food)
            <tr>
                <td>{{$food->id}}</td>
                <td>{{$food->title}}</td>
                <td>{{number_format($food->price,0,',','.')}} VND</td>
                <td><img src="{{asset('backend/img/food/'.$food->image)}}" alt="None" width="150px"></td>
                <td>{{$food->featured}}</td>
                <td>{{$food->active}}</td>
                <td>
                    <a href="{{asset('admin/food/edit/'.$food->id)}}">Update</a>
                    <a href="{{asset('admin/food/delete/'.$food->id)}}">Delete</a>
                </td>
            </tr>
        @endforeach

    </table>
    </div>
</div>
@endsection