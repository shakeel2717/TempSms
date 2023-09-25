<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('styles')
    <style>
        .advertisement {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
        }
    </style>
    @livewireStyles()
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}">{{ env('APP_NAME') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @include('inc.nav')
            </div>
        </div>
    </nav>
    <section class="my-4">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-2 d-none d-md-block ">
                    @include('inc.ads.left')
                </div>
                <div class="col-md-8">
                    @yield('content')
                </div>
                <div class="col-md-2">
                    @include('inc.ads.right')
                </div>
            </div>
        </div>
        <div class="advertisement d-none d-md-block">
            @include('inc.ads.footer')
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
    @livewireScripts()
</body>

</html>
