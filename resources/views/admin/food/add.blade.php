@extends('admin.layouts.master')
@section('title', 'Thêm món ăn')
@section('content')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <p class="mb-0">Your business dashboard</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Food</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div style="text-align: center;font-size: 1.1rem;">
                    @if(session()->has('success'))
                        <div class="message-success">{{session()->get('success')}}</div>
                    @elseif (session()->has('error'))
                        <div class="message-error">{{session()->get('error')}}</div>
                    @endif
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" class="step-form-horizontal">
                        @csrf
                        <section>
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="food-title">Title<span style="color:#f33a58;">*</span></label>
                                        <input type="text" name="title" id="food-title" class="form-control" required>
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="food-price">Price<span style="color:#f33a58;">*</span></label>
                                        <input type="number" name="price" id="food-price" class="form-control" required>
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="food-description">Description</label>
                                        <textarea name="description" id="food-description" cols="40" rows="5" class="form-control" required></textarea>
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="food-image">Image<span style="color:#f33a58;">*</span></label>
                                        <input type="file" name="image" id="food-image" class="form-control" required>
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="food-category">Category<span style="color:#f33a58;">*</span></label>
                                        <select name="category" id="food-category" class="form-control">
                                            @foreach($catelist as $cate)
                                                <option value="{{ $cate->id }}">{{ $cate->title }}</option>
                                            @endforeach
                                        </select>
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" name="submit" value="Add" class="btn btn-primary mb-2">
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
