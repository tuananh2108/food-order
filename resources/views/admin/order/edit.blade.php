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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Order</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" class="step-form-horizontal">
                        @csrf
                        <section>
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Code order</label>
                                        <div>{{ $order->id }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Total</label>
                                        <div>{{ number_format($order->total) }} VND</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Order date</label>
                                        <div>{{ $order->order_date }} VND</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label" for="order-status">Status<span style="color:#f33a58;">*</span></label>
                                        <select name="status" id="order-status" class="form-control">
                                            @php $STATUS = ['active', 'pending', 'delivering', 'delivered', 'cancel', 'end']; @endphp
                                            @foreach($STATUS as $status)
                                                <option value="{{ $status }}" @if($status == $order->status) selected @endif>{{ $status }}</option>
                                            @endforeach
                                        </select>
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Customer name</label>
                                        <div>{{ $order->customer_name }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Phone number</label>
                                        <div>{{ $order->customer_contact }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Email</label>
                                        <div>{{ $order->customer_email }}</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label class="text-label">Address</label>
                                        <div>{{ $order->customer_address }}</div>
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

        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" width="100%">
                            <thead>
                                <th>No.</th>
                                <th>Food</th>
                                <th>Price</th>
                                <th>Quantity</th>
                            </thead>
                            <tbody>
                                @php $sn=1; @endphp
                                @foreach($foods as $food)
                                <tr class="col-sm-4">
                                    <td>{{ $sn++ }}.</td>
                                    <td>{{ $food->title }}</td>
                                    <td>{{ number_format($food->price) }} VND</td>
                                    <td>{{ $food->quantity }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection