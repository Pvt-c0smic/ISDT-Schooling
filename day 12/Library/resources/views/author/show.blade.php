@extends('main-layout')
@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ URL::route('author.update', $author->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Firstname</label>
                        <input type="text"
                               name="first_name"
                               value="{{$author->first_name}}"
                               class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Lastname</label>
                        <input type="text"
                               name="last_name"
                               value="{{$author->last_name}}"
                               class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Middlename</label>
                        <input type="text"
                               name="middle_name"
                               value="{{$author->middle_name}}"
                               class="form-control" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
