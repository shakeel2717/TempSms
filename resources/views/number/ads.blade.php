@extends('layouts.app')
@section('content')
    <section class="my-4">
        <div class="container">
            <div class="card card-body shadow-lg border-0">
                <h2>Click Continue to Go To Inbox</h2>'
                <a href="{{ route('number.show',['number' => $number]) }}" class="btn btn-primary btn-lg">Continue to Inbox</a>
            </div>
        </div>
    </section>
@endsection
