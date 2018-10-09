@extends('layouts.master')

@section('content')

    <div class="container mt-5 mb-5">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>Username</td>
                <td> {{ $user->name }} </td>
                <td>
                    <button type="button" class="btn btn-outline-dark btn-sm btn-block">Edit</button>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td> {{ $user->email }} </td>
                <td>
                    <button type="button" class="btn btn-outline-dark btn-sm btn-block">Edit</button>
                </td>
            </tr>
            <tr>
                <td>Total costs</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Total spent</td>
                <td>0</td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection