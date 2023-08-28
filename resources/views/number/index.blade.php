@extends('layouts.app')
@section('content')
    <section class="my-4">
        <div class="container">
            <div class="card card-body shadow-lg border-0">
                <h2 class="card-title text-primary">All Free SMS Numbers</h2>
                <div class="content-area my-4">
                    <div class="row g-4">
                        @foreach ($numbers as $number)
                            <div class="col-md-4">
                                <a href="{{ route('country.show', ['country' => $number->country->id]) }}"
                                    class="text-decoration-none">
                                    <div class="card border-0 border-top border-primary border-5 bg-light text-center">
                                        <div class="flag-area pt-4 mb-3">
                                            <img src="{{ $number->country->flag }}" srcset="{{ $number->country->flag }} 2x" width="100"
                                                alt="Ukraine">
                                        </div>
                                        <div class="country-name text-center">
                                            <h4 class="text-dark">{{ $number->country->name }}</h4>
                                            <h5>+{{ $number->number }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
