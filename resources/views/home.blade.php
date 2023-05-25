@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1 class="mb-5">Trains</h1>
            <div class="row row-cols-1 row-cols-lg-2 g-5">
                @forelse ($trains as $train)
                    <div class="col">
                        <div class="card bg-success shadow p-3">
                            <div class="card h-100">
                                <div class="card-body">

                                    <h2 class="card-title mb-5">{{ $train->agency }}</h2>

                                    <hr>

                                    <div class="travel d-flex justify-content-around mb-3">
                                        <div class="departure d-flex justify-content-between gap-3">
                                            <h4 class="card-text">{{ $train->departure_station }}</h4>
                                            <p class="card-text align-self-center">{{ $train->departure_time }}</p>
                                        </div>
                                        <div class="arrival d-flex justify-between gap-3">
                                            <h4 class="card-text">{{ $train->arrival_station }}</h4>
                                            <p class="card-text align-self-center">{{ $train->arrival_time }}</p>
                                        </div>
                                    </div>

                                    <div class="train_info">
                                        <div class="card-text text-uppercase">
                                            <strong>Train Code:</strong>{{ $train->code }}
                                        </div>
                                        <div class="card-text">
                                            <strong>Number of Carriages:</strong> {{ $train->carriages }}
                                        </div>
                                    </div>

                                    <div
                                        class="train_status bg-warning text-white p-4 rounded-4 d-flex justify-content-between mt-4">
                                        @if ($train->in_time === 1)
                                            <div class="d-flex gap-1 text-success">
                                                <h5 class="mb-0">In time</h5>
                                                <i class="fa-solid fa-clock align-self-center"></i>
                                            </div>
                                        @else
                                            <div class="d-flex gap-1">
                                                <h5 class="mb-0">Late</h5>
                                            </div>
                                        @endif
                                        @if ($train->is_deleted === 1)
                                            <div class="d-flex gap-1 text-danger">
                                                <h5 class="mb-0">Trains deleted</h5>
                                                <i class="fa-solid fa-circle-xmark align-self-center"></i>
                                            </div>
                                        @else
                                            <div class="d-flex gap-1">
                                                <h5 class="mb-0">Travelling</h5>
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            </div>
                            <!-- /train card  -->
                        </div>
                    </div>
                    <!-- /col -->
                @empty
                    <h1>Sorry, there isn't Trains</h1>
                @endforelse
            </div>
        </div>
    </section>
@endsection
