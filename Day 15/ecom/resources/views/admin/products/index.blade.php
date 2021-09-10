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
                    Products List
                    
                    <a href="{{ URL::route('admin.products.create') }}" 
                        class="btn btn-sm btn-success pull-right">
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
                                    <th>Price</th> 
                                    <th></th>
                                </tr>
                            </thead> 
                            <tbody>
                                @foreach($products as $x)
                                    <tr>
                                        <td>
                                            <img src="{{ URL::asset('storage/'.$x->image) }}" width="100px">
                                        </td>
                                        <td>{{ $x->name }}</td> 
                                        <td>{{ $x->category }}</td> 
                                        <td>{{ $x->price }}</td> 
                                        <td>
                                            <a href="{{ URL::route('admin.products.update', $x->id) }}" class="btn btn-sm btn-warning">Update</a>
                                            <a href="{{ URL::route('admin.products.delete', $x->id) }}" class="btn btn-sm btn-danger">Delete</a>
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