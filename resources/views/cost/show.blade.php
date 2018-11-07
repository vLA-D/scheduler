@extends('layouts.master')

@section('content')
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="card">
                      <div class="card-header">
                        Title: {{ $cost->title }}
                      </div>
                      <div class="card-body">
                        <blockquote class="blockquote mb-3">
                            <p><small>Description: </small>{{ $cost->description}}</p>
                            <p><small>Amount: </small> {{ $cost->amount }} </p>
                            <footer class="blockquote-footer"><cite title="Source Title">At {{ $cost->seller->name}},
                           {{ $cost->date }} </cite></footer>
                        </blockquote>
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
                    </div>
                </div>
            </div>

            @include('includes.delete-cost-modal')

        </div>

@endsection
