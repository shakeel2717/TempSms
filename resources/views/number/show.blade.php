@extends('layouts.app')
@section('content')
    <section class="my-4">
        <div class="container">
            <div class="card card-body shadow-lg border-0">
                <div class="text-center">
                    <img src="{{ $number->country->flag }}" alt="{{ $number->country->name }}" width="120">
                    <h4 class="card-title text-center my-3">{{ $number->country->name }} Phone Number</h4>
                    <h2 class="card-title text-primary text-center my-3">+{{ $number->number }}</h2>
                    <a href="{{ route('number.show', ['number' => $number->number]) }}"
                        class="btn btn-outline-primary">Refresh This Page</a>
                </div>
                <div class="content-area my-4">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="card border-0 border-start border-primary border-5 bg-light ps-5">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="text-primary mb-0">From: FirstCry</h5>
                                        <p class="mb-0">5 Minute Ago</p>
                                    </div>
                                    <hr>
                                    <p class="mb-0"># 690353 is OTP to access your FirstCry.com account. OTP is valid for
                                        5 min. Do not share your OTP with anyone. eE2Qyn946lP</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
