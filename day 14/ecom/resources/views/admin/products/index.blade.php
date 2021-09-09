@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Products</a>
                </li>
                <li class="breadcrumb-item active">List</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Data Table Example
                    <a href="{{ URL::route('admin.products.create') }}"
                       class="btn btn-success  pull-right">
                        Create Product
                    </a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td class="text-center">
                                        <img
                                            src="{{ URL::asset('storage/'.$product->image) }}"
                                            width="120px">
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <a type="button"
                                           href="{{ URL::route('admin.products.show', $product->id) }}"
                                           class="btn btn-sm btn-primary">Update</a>
                                        <a type="button"
                                           href="{{ URL::route('admin.products.delete', $product->id) }}"
                                           class="btn btn-sm btn-danger"
                                        >Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /tables-->
        </div>
        <!-- /container-fluid-->
    </div>
@endsection
