@extends('admin.layouts.master')
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
                    {{-- <div class="show-toast"></div> --}}
                @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $sn=1; @endphp
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $sn++ }}.</td>
                                        <td>{{ $category->title }}</td>
                                        <td>{{ $category->status }}</td>
                                        <td>
                                            <span>
                                                <a href="{{ asset('admin/category/edit/'.$category->id) }}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="fa fa-pencil color-muted"></i>
                                                </a>
                                                <a href="#" class="btn-delete" data-url="{{ asset('admin/category/delete/'.$category->id) }}" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    <i class="fa fa-close color-danger"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Active</th>
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