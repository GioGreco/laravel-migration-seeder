@extends('layouts.app')

@section('main')

<div class="container">

    {{-- <a href="{{ route('today') }}" class="btn btn-success mb-4 ms-5">Leaving Today</a> --}}

    <div class="row gy-3">
        @forelse($trains as $train)
            <div class="train-card col-12 col-md-6 col-lg-4">
                <div class="card-inner p-3 position-relative">
                    <span class="text-secondary">Trip ID : {{ $train->id }}</span>
                    <h5>FROM : <span>{{$train->departure_station}}</span> - <span>{{$train->departure_hour}}</span></h5>
                    <h5>TO : <span>{{$train->arrival_station}}</span> - <span>{{$train->arrival_hour}}</span></h5>
                    <div class="status">
                        <span>STATUS : </span>
                        @if($train->delayed && !($train->canceled))
                        <span class="yellow">DELAYED</span>
                        @elseif($train->canceled)
                        <span class="red">CANCELED</span>
                        @else
                        <span class="green">IN TIME</span>
                        @endif
                    </div>
                    <span class="company text-white">{{$train->company}}</span>
                    <div class="divider"></div>
                    <div class="more-info d-flex justify-content-between align-items-center">
                        <span>wagons # : {{$train->wagonsNumber}}</span><span>train - {{$train->designatedTrain}}</span>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">All trains have been lost</div>
        @endforelse
    </div>
</div>

@endsection
