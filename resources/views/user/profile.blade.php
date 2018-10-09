@extends('layouts.master')

@section('content')

    <div class="container mt-5 mb-5">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>Username</td>
                <td> {{ $user->name }} </td>
                <td>
                    <a href="" class="btn btn-outline-dark btn-sm btn-block">Edit</a>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td> {{ $user->email }} </td>
            </tr>
            <tr>
                <td>Total costs</td>
                <td>{{ $user->costs()->count() }}</td>
            </tr>
            <tr>
                <td>Total spent</td>
                <td>{{ $user->costs()->sum('amount') }}</td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection