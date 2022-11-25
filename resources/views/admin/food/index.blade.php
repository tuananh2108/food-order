@extends('admin.layouts.master')
@section('title', 'Món ăn')
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">List</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div style="text-align: center;font-size: 1.1rem;">
                @if(session()->has('success'))
                    <div class="message-success">{{session()->get('success')}}</div>
                @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $sn=1; @endphp
                                @foreach($foods as $food)
                                    <tr>
                                        <td>{{ $sn++ }}.</td>
                                        <td>{{$food->title}}</td>
                                        <td>{{number_format($food->price,0,',','.')}} VND</td>
                                        <td>
                                            <img src="{{asset('admin/img/food/'.$food->image)}}" alt="{{ $food->title }}" style="width:150px">
                                        </td>
                                        <td>{{ $food->status }}</td>
                                        <td>
                                            <span>
                                                <a href="{{ asset('admin/food/edit/'.$food->id) }}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i>
                                                </a>
                                                <a href="#" class="btn-delete" data-url="{{ asset('admin/food/delete/'.$food->id) }}" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="fa fa-close color-danger"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
