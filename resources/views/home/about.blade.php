@extends('layouts.master')

@section('content')
<div class="container mt-5 mb-5">
    <h2 class="mb-3 text-info">Scheduler Frequently asked questions...</h2>

    <div id="accordion">

        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button aria-controls="collapseOne" aria-expanded="true" class="btn btn-link" data-target="#collapseOne" data-toggle="collapse">
                        What is Scheduler application?
                    </button>
                </h5>
            </div>

            <div aria-labelledby="headingOne" class="collapse" data-parent="#accordion" id="collapseOne">
                <div class="card-body">
                    Scheduler is open-source web application for precise tracking of costs and scheduled tasks.
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button aria-controls="collapseTwo" aria-expanded="false" class="btn btn-link collapsed" data-target="#collapseTwo" data-toggle="collapse">
                        How can I use it?
                    </button>
                </h5>
            </div>

            <div aria-labelledby="headingTwo" class="collapse" data-parent="#accordion" id="collapseTwo">
                <div class="card-body">
                    Register by clicking <a href="{{ route('register') }}">here</a>, and click on your profile in upper right corner.
                    You may see list of your costs, add new, update or delete existing, and many many more...
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button aria-controls="collapseThree" aria-expanded="false" class="btn btn-link collapsed" data-target="#collapseThree" data-toggle="collapse">
                        May I suggest some feature?
                    </button>
                </h5>
            </div>

            <div aria-labelledby="headingThree" class="collapse" data-parent="#accordion" id="collapseThree">
                <div class="card-body">
                    Ofcouse, we are open for any feedback and/or suggestions as our only goal is to make application better, so our users may get better experience.
                    You can do so by visiting this <a href="{{ route('contact') }}">page</a>.
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
