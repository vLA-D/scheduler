@extends('layouts.master')
@section('content')
    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Welcome to Scheduler 1.0</h1>
                <p>The Scheduler application is developed for those who need precise tracking of spendings, so as scheduling costs and future tasks. Welcome aboard, feel free to explore our application!</p>
                <p><a class="btn btn-outline-success btn-lg" href="{{ route('costs.index') }}" role="button">Get started &raquo;</a></p>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Track your costs</h2>
                    <p>
                        Take care of your finances by tracking your costs in your dashboard, with help of our user-friendly application.
                        You will have all your history listed, with options of filtering your costs since your day one. Enjoy!
                    </p>
                    <p><a class="btn btn-secondary" href="{{ route('costs.index') }}" role="button">View costs &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Schedule your tasks</h2>
                    <p>
                        Schedule your upcoming tasks and be reminded about them all the time with our fresh new sidebar reminder feature.
                        You may also schedule your future costs, and easily transfer them to costs history once they are resolved.
                    </p>
                    <p><a class="btn btn-secondary" href="{{ route('schedule') }}" role="button">View schedule &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Suggest a feature</h2>
                    <p>
                        Our beloved Scheduller app users are the ones to be heard, so we are all ears when it comes to trying out new suggestions
                        about new features, squashing bugs and overall application improvements.
                    </p>
                    <p><a class="btn btn-secondary" href="{{ route('contact') }}" role="button">Suggest &raquo;</a></p>
                </div>
            </div>

            <hr>

        </div> <!-- /container -->

    </main>
@endsection
