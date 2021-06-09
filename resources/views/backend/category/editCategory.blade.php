@extends('backend.master.master')
@section('title', 'Update Category')
@section('content')

<div class="main-content">
    <div class="wrapper">
        <h1>Update Food</h1>
        <br><br>

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            @include('errors.note')
            <table class="tbl-30">
                <tr>
                    <td>Title:</td>
                    <td>
                        <input type="text" name="title" value="{{$category->title}}">
                    </td>
                </tr>

                <tr>
                    <td>Current Image:</td>
                    <td>
                    </td>
                </tr>

                <tr>
                    <td>New Image:</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Featured:</td>
                    <td>
                        <input @if($category->featured == "Yes") checked @endif type="radio" name="featured" value="Yes"> Yes
                        <input @if($category->featured == "No") checked @endif type="radio" name="featured" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td>Active:</td>
                    <td>
                        <input @if($category->active == "Yes") checked @endif type="radio" name="active" value="Yes"> Yes
                        <input @if($category->active == "No") checked @endif type="radio" name="active" value="No"> No
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="submit" value="Update Category" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection