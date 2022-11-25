@extends('admin.layouts.master')
<!-- @section('title', 'Thêm món ăn') -->
@section('content')
    <div class="row">
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" class="step-form-horizontal">
                        @csrf
                        <section>
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="food-title">Title<span style="color:#f33a58;">*</span></label>
                                        <input type="text" name="title" value="{{ $food->title }}" id="food-title" class="form-control" required>
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="food-price">Price<span style="color:#f33a58;">*</span></label>
                                        <input type="number" name="price" value="{{ $food->price }}" id="food-price" class="form-control" required>
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="food-description">Description</label>
                                        <textarea name="description" id="food-description" cols="40" rows="5" class="form-control" required>{{ $food->description }}</textarea>
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="food-image">Image</label>
                                        <input type="file" name="image" value="{{ $food->image }}" id="food-image" class="form-control">
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="food-category">Category<span style="color:#f33a58;">*</span></label>
                                        <select name="category" id="food-category" class="form-control">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" @if($category->id==$food->category_id) selected @endif>{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="food-status">Status</label>
                                        <div>
                                            <input @if($food->status == "active") checked @endif type="radio" name="status" value="active" required><span>Active</span>
                                            <input @if($food->status == "end") checked @endif type="radio" name="status" value="end" required><span>End</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" name="submit" value="Update" class="btn btn-primary mb-2">
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
