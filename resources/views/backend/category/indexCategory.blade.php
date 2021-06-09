@extends('backend.master.master')
@section('title','Loại đồ ăn')
@section('content')
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Category</h1>

        <br/><br/>
        
        <!-- Button to Add Admin -->
        <a href="{{asset('admin/category/add')}}" class="btn-primary">Add Category</a>

        <br/><br/><br/>

        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Title</th>
                <th>Image</th>
                <th>Featured</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->title}}</td>
                <td><img src="{{asset('backend/img/category/'.$category->image)}}" alt="None" width="150px"></td>
                <td>{{$category->featured}}</td>
                <td>{{$category->active}}</td>
                <td>
                    <a href="{{asset('admin/category/edit/'.$category->id)}}">Update</a>
                    <a href="{{asset('admin/category/delete/'.$category->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection