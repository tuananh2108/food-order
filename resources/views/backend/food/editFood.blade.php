@extends('backend.master.master')
@section('title', 'Thêm món ăn')
@section('content')

    <div class="main-content">
        <div class="wrapper">
            <h1>Update Food</h1>
            <br><br>

            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <table class="tbl-30">
                    <tr>
                        <td>Title:</td>
                        <td>
                            <input type="text" name="title" value="{{$food->title}}">
                        </td>
                    </tr>

                    <tr>
                        <td>Description:</td>
                        <td>
                            <textarea name="description" cols="30" rows="5">{{$food->description}}</textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>Price:</td>
                        <td>
                            <input type="number" name="price" value="{{$food->price}}">
                        </td>
                    </tr>

                    <tr>
                        <td>Current Image:</td>
                        <td>
                            <img src="" width="150px">
                        </td>
                    </tr>

                    <tr>
                        <td>Select New Image:</td>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>

                    <tr>
                        <td>Category:</td>
                        <td>
                            <select name="category">
                                @foreach($categories as $category)
                                    <option value="$category->id" @if($category->id==$food->category_id) selected @endif>{{$category->title}}</option>;
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Featured:</td>
                        <td>
                            <input @if($food->featured == "Yes") checked @endif type="radio" name="featured" value="Yes"> Yes
                            <input @if($food->featured == "No") checked @endif type="radio" name="featured" value="No"> No
                        </td>
                    </tr>

                    <tr>
                        <td>Active:</td>
                        <td>
                            <input @if($food->active == "Yes") checked @endif type="radio" name="active" value="Yes"> Yes
                            <input @if($food->active == "No") checked @endif type="radio" name="active" value="No"> No
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" name="submit" value="Update Food" class="btn-secondary">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

@endsection