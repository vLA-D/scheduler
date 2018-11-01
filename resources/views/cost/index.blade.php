@extends('layouts.master')

@section('content')

    <div class="container mt-5 mb-5">
        <h3 class="text-muted mb-3">Information about your costs</h3>
        <table class="table stickyTable">
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
                        <form id="delete-cost" action="{{ route('costs.destroy', ['id' => $cost->id]) }}" method="POST">
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
        <div class="row">
            <div class="col-2 offset-5">
                {{ $costs->links() }}
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModal">Delete cost</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete cost?
                    </div>
                    <div class="modal-footer">
                        <button onclick="deleteCost()" type="button" class="btn btn-primary">Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-2 offset-5">
                <a href="{{ route('costs.create') }}" class="btn btn-primary btn-lg">Add new</a>
            </div>
        </div>
        <hr>
    </div>

@endsection
@section('scripts')
    <script>
        function deleteCost() {
            document.getElementById('delete-cost').submit();
        }
    </script>
@endsection