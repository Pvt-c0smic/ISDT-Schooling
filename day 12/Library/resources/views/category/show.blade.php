@extends('main-layout')
@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form class="p-3" method="POST" action="{{ URL::route('category.update', $category->id) }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                value="{{$category->name}}"
                                required
                            >
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
