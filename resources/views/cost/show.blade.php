@extends('layouts.master')

@section('content')

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-6 offset-4 alert alert-heading">
                <h2><strong>Title:</strong> {{ $cost->title }}</h2>
                <p><strong>Amount:</strong> {{ $cost->amount }}</p>
                <p><strong>Seller:</strong> {{ $cost->seller->name }}</p>
                <p><strong>Description: </strong>{{ $cost->description }}</p>
                <a class="btn btn-outline-success" href="{{ route('costs.index') }}" role="button">Back &raquo;</a>
                <a class="btn btn-outline-secondary" href="{{ route('costs.edit', $cost->id) }}" role="button">Edit &raquo;</a>

                <form id="delete-cost" class="custom-control-inline" action="{{ route('costs.destroy', $cost->id) }}"
                      method="POST">
                    @method('DELETE')
                    @csrf

                    <button type="button"
                            class="btn btn-outline-danger" data-toggle="modal"
                            data-target="#deleteModal">Delete &raquo;
                    </button>

                </form>

            </div>
            @include('includes.delete-cost-modal')
        <hr>

    </div>

@endsection