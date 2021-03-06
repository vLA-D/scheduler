@extends('layouts.master')

@section('content')

    <div class="container mt-5 mb-5">
<!--         <h3 class="text-muted mb-3">Information about your costs</h3>
<div class="table-responsive stickyTable">
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
                <td> {{ $cost->date }} </td>
                <td> {{ $cost->seller->name }} </td>
                <td> {{ $cost->title }} </a></td>
                <td> {{ $cost->amount }} </td>
                <td>
                    <a class="btn btn-outline-secondary btn-sm btn-block"
                       href="{{ route('costs.show', $cost->id) }}">View more »</a>
                </td>
<td>
                    <a class="btn btn-outline-dark btn-sm btn-block"
                       href="{{ route('costs.edit', ['id' => $cost->id]) }}">Edit</a>
                </td>
                <td>
                    <form id="delete-cost" action="{{ route('costs.destroy', ['id' => $cost->id]) }}"
                          method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="button"
                                class="btn btn-outline-danger btn-sm btn-block" data-toggle="modal"
                                data-target="#deleteModal">Remove
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div> -->

        <div class="row">
            @foreach($costs as $cost)

                <div class="col-lg-4 d-flex align-items-stretch">

                    <div class="card card-body d-flex flex-column">
                        <span class="small text-primary">{{ $cost->date }}</span>
                        <h4 class="card-title">{{ $cost->title }}</h4>
                        <p class="card-text">{{ $cost->description }}</p>
                        <p>Amount: {{ $cost->amount }}</p>
                        <p>Seller: {{ $cost->seller->name }}</p>
                        <a href="{{ route('costs.show', $cost->id) }}" class="btn btn-outline-secondary btn-sm mt-auto">View more »</a>

                    </div>

                </div>

            @endforeach
        </div>

        <div class="row mt-5 justify-content-center">
                {{ $costs->links() }}
        </div>

        @include('includes.delete-cost-modal')

        <hr>
        <div class="row">
            <div class="col-2 offset-5">
                <a href="{{ route('costs.create') }}" class="btn btn-primary btn-lg">Add new</a>
            </div>
        </div>
        <hr>
    </div>

@endsection
