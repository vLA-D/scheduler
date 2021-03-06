@extends('layouts.master')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-4 mt-5">
                <h2>Edit your cost</h2>
                <form action="{{ route('costs.update', ['id' => $cost->id]) }}" method="POST">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="seller">Seller:</label>
                        <select class="form-control" name="seller_id">
                            <option value="" disabled selected>Select your option...</option>
                            @foreach ($sellers as $seller)
                                <option class="form-control" value="{{ $seller->id }}">{{ $seller->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="amount">Amount:</label>
                        <input type="text" class="form-control" id="amount" name="amount" value="{{ $cost->amount }}">
                    </div>

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                               value="{{ $cost->title }}">
                    </div>

                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{ $cost->date }}">
                    </div>

                    <div class="form-group">

                        <label for="description">Description:</label>
                        <input type="text" class="form-control" id="description" name="description"
                               placeholder="Description" value="{{ $cost->description }}">
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
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5">
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
