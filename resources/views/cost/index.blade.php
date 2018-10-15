@extends('layouts.master')

@section('content')

    <div class="container mt-5 mb-5">
        <h3 class="text-muted mb-3">List of all your costs</h3>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Time</th>
                <th scope="col">Seller</th>
                <th scope="col">Title</th>
                <th scope="col">Amount</th>
                <th scope="col">Description</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($costs as $cost)
                <tr>
                    <td> {{ $cost->created_at->format('d-m-Y') }} </td>
                    <td> {{ $cost->seller->name }} </td>
                    <td> {{ $cost->title }} </td>
                    <td> {{ $cost->amount }} </td>
                    <td> {{ $cost->description }} </td>
                    <td>
                        <a class="btn btn-outline-dark btn-sm btn-block"
                           href="{{ route('costs.edit', ['id' => $cost->id]) }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('costs.destroy', ['id' => $cost->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm btn-block">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>
        <div class="row">
            <div class="col-2 offset-5 align-self-center">
                <a href="{{ route('costs.create') }}" class="btn btn-primary btn-lg">Add new</a>
            </div>
        </div>
        <hr>
    </div>

@endsection