@extends('main-layout')
@section('content')
    <div class="container pt-5">
        <div class="mb-3">
            <a href="{{ URL::route('book.create') }}" class="btn btn-dark">Add New Book</a>
        </div>
        <div class="row">

            @foreach($books as $book)
            <div class="col-3 mb-2">
                <div class="card" >
                <img class="card-img-top" src="{{URL::asset('storage/'.$book->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> {{$book->title}}</h5>
                        <p class="card-text">
                            {{$book->description}}
                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
