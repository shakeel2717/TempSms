@extends('layouts.app')
@section('content')
    <div class="card card-body shadow-lg border-0">
        <h2 class="card-title text-primary">Temporary phone numbers of all countries</h2>
        @include('inc.ads.sky')
        <div class="content-area my-4">
            <div class="row g-4">
                @foreach ($country->numbers as $number)
                    @if ($loop->iteration % 7 == 0)
                        <div class="col-md-12">
                            <div class="text-center my-3">
                                @include('inc.ads.sky')
                            </div>
                        </div>
                    @else
                        <div class="col-md-4">
                            <a href="{{ route('number.show', ['number' => $number->number]) }}" class="text-decoration-none">
                                <div class="card border-0 border-top border-primary border-5 bg-light text-center">
                                    <div class="flag-area pt-4 mb-3">
                                        <img src="{{ $country->flag }}" srcset="{{ $country->flag }} 2x" width="100"
                                            alt="Ukraine">
                                    </div>
                                    <div class="country-name text-center">
                                        <h4 class="text-dark">{{ $country->name }}</h4>
                                        <h5>{{ $number->number }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 my-4">
                    @include('inc.ads.sky')
                    <h4 class="text-primary mt-4">
                        About {{ $country->name }}
                    </h4>
                    <p class="">
                        {!! $country->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
