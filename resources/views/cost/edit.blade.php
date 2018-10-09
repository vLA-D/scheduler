@extends('layouts.master')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row mt-5">
            <div class="col-md-4 mt-5 offset-4">
                <h2>Edit your cost</h2>
                <form action="{{ route('costs.update', ['id' => $cost->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="amount">Amount:</label>
                        <input type="text" class="form-control" id="amount" name="amount" value="{{ $cost->amount }}">
                    </div>
                    <div class="form-group">
                        <label for="seller">Seller:</label>
                        <input type="text" class="form-control" id="seller" name="seller" value="{{ $cost->user_id }}">
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
    </div>

@endsection