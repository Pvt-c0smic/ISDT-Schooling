@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Products</a>
                </li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <div class="row">
                <div class="col-md-12">
                    <div class="box_general padding_bottom">
                        <div class="header_box version_2">
                            <h2>Update Product</h2>
                        </div>
                        <form action="{{ URL::route('admin.products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control"
                                       type="text"
                                       value="{{$product->name}}"
                                       name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <input
                                    class="form-control"
                                    type="text"
                                    value="{{$product->category}}"
                                    name="category"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input
                                    class="form-control"
                                    type="number"
                                    name="price"
                                    value="{{$product->price}}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea
                                    class="form-control"
                                    type="text"
                                    name="description"
                                    value="{{$product->description}}"
                                    ></textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label> <br>
                                <img
                                    src="{{ URL::asset('storage/'.$product->image) }}"
                                    class="mb-2"
                                    width="120px">
                                <input
                                    class="form-control-file"
                                    type="file"
                                    name="img"
                                    value="{{$product->image}}"
                                    >
                            </div>
                            <div class="form-group">
                                <button class="btn btn-sm btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
