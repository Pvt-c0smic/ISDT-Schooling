@extends('main-layout')
@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <a href="{{ URL::route('author.create') }}" class="btn btn-dark">Add New Author</a>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Middle</th>
                        <th scope="col">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($authors as $author)
                        <tr>
                            <th scope="row"> {{$author->id}}</th>
                            <td>{{$author->first_name}}</td>
                            <td>{{$author->last_name}}</td>
                            <td>{{$author->middle_name}}</td>
                            <td>
                                <a
                                    type="button"
                                    href="{{ URL::route('author.show', $author->id) }}"
                                    class="btn btn-primary">
                                    Update
                                </a>
                                <a
                                    type="button"
                                    href="{{ URL::route('author.delete', $author->id) }}"
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
