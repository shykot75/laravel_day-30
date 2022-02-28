@extends('master')


@section('title')
    Manage Student Page
@endsection

@section('body')

    <section class="py-5 bg-success">
        <div class="container">
            <div class="row bg-dark">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-primary font-weight-bold">All Student</div>
                        <div class="card-body bg-secondary">
                            <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Sl NO</th>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product Description</th>
                                    <th>Product Brand</th>
                                    <th>Product Category</th>
                                    <th>Product Image</th>
                                    <th colspan="2">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->product_price}}</td>
                                        <td>{{$product->product_description}}</td>
                                        <td>{{$product->product_brand}}</td>
                                        <td>{{$product->product_category}}</td>

                                        <td><img src="{{asset('/'.$product->product_image)}}" alt="" height="60"></td>
                                        <td>
                                            <a href="{{route('edit-product', ['id' => $product->id])}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="" class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
