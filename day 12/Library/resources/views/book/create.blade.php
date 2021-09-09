@extends('main-layout')
@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ URL::route('book.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text"
                               name="title"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text"
                               name="description"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file"
                               name="image"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Author</label>
                        <select class="form-control"
                                name="author_id"
                                aria-label="Default select example">
                            @foreach($authors as $author)
                                <option value="{{$author->id}}">
                                    {{$author->first_name}}
                                    {{$author->middle_name}}
                                    {{$author->last_name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control"
                                name="category_id"
                                aria-label="Default select example">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
