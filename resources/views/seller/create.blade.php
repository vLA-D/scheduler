@extends('layouts.master')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-4 mt-5">
                <h2>Add new seller</h2>
                <form action="{{ route('sellers.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="amount">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name...">
                    </div>


                    <div class="row">
                        <div class="col-2 offset-2">
                            <button type="submit" class="btn btn-outline-success">Save</button>
                        </div>
                        <div class="col-2 offset-3">
                            <a href="{{ url()->previous() }}" class="btn btn-outline-danger ml-2">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mt-5 offset-4">
                @if ($errors->any())
                    <div class="container">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="list-group-item list-group-item-danger mb-1">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

    </div>

@endsection
