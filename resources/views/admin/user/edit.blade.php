@extends('admin.layouts.master')
<!-- @section('title', 'Thêm món ăn') -->
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
                <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
            </ol>
        </div>
    </div>
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
                                        <label class="text-label">Name</label>
                                        <div>{{ $user->name }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Phone number</label>
                                        <div>{{ $user->contact }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Email</label>
                                        <div>{{ $user->email }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Address</label>
                                        <div>{{ $user->address }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="user-role">Role<span style="color:#f33a58;">*</span></label>
                                        <select name="role_id" id="user-role" class="form-control">
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}" @if($role->id==$user->role_id) selected @endif>{{$role->uid}}</option>
                                            @endforeach
                                        </select>
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" name="submit" value="Update" id="btnNext" class="btn btn-primary mb-2">
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection