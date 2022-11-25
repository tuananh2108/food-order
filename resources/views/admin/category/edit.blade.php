@extends('admin.layouts.master')
@section('title', 'Category manager')
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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Category</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" class="step-form-horizontal">
                        @csrf
                        <section>
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="category-title">Category name<span style="color:#f33a58;">*</span></label>
                                        <input type="text" name="title" id="category-title" value="{{$category->title}}" class="form-control" required>
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="category-status">Status</label>
                                        <div>
                                            <input @if($category->status == "active") checked @endif type="radio" name="status" value="active" required><span>Active</span>
                                            <input @if($category->status == "end") checked @endif type="radio" name="status" value="end" required><span>End</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <input type="submit" name="submit" value="Update" class="btn btn-primary mb-2" style="margin-top: 30px;">
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection