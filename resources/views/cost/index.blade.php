@extends('layouts.master')

@section('content')

    <div class="container mt-5 mb-5">
        <h3 class="text-muted mb-3">List of all your costs</h3>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Time</th>
                <th scope="col">Seller</th>
                <th scope="col">Amount</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($costs as $cost)
                <tr>
                    <td> {{ $cost->created_at->format('m-d-Y') }} </td>
                    <td> {{ $cost->user_id }} </td>
                    <td> {{ $cost->amount }} </td>
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