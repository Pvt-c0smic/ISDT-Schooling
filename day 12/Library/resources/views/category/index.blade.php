@extends('main-layout')
@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <a href="{{ URL::route('category.create') }}" class="btn btn-dark">Add New Category</a>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $cat)
                        <tr>
                            <th scope="row">{{ $cat->id }}</th>
                            <td>{{ $cat->name }}</td>
                            <td>
                                <a
                                    type="button"
                                    href="{{ URL::route('category.show', $cat->id) }}"
                                    class="btn btn-primary">
                                    Update
                                </a>
                                <a
                                    type="button"
                                    href="{{ URL::route('category.delete', $cat->id) }}"
                                    class="btn btn-danger">
                                    Delete</a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
