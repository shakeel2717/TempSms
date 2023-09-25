@extends('layouts.app')
@section('content')
    <div class="card card-body shadow-lg border-0">
        <h2>Click Continue to Go To Inbox</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <h2 class="card-title mb-0 text-uppercase text-center">{{ $number->number }}
                            ({{ $number->country->name }})</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3 text-center">
                    @include('inc.ads.sky')
                </div>
            </div>
        </div>
        <div class="text">
            <p>Our website is designed with a primary goal in mind: to empower users with a secure and
                convenient means of online verification. We understand that sharing one's real mobile number
                can be risky, especially on websites and platforms that may not have the best intentions.
                That's why we provide a comprehensive solution that offers users access to disposable mobile
                numbers, completely free of charge.</p>
            <p>With our platform, users can seamlessly generate temporary mobile numbers that they can use
                for various online verification needs, such as signing up for new accounts, accessing online
                services, or confirming their identity on websites. These disposable numbers act as a
                shield, ensuring that users do not have to expose their actual phone numbers, thereby
                safeguarding their privacy and security.</p>
            <p>The advantages of our service are multifaceted. Firstly, it helps users steer clear of
                potential scams and fraudulent activities that often target personal phone numbers. By
                offering disposable numbers, we mitigate the risks associated with sharing sensitive
                information online.</p>
            <div class="row">
                <div class="col-md-12 text-center mb-4">
                    <h2>Please wait <span id="timer">5</span> Seconds</h2>
                </div>
            </div>
            <div class="row d-none" id="timer-area">
                @include('inc.ads.sky')
                <div class="col-md-12 text-center mb-4">
                    <a href="{{ route('number.show', ['number' => $number->number]) }}"
                        class="btn btn-primary btn-lg">Continue to Inbox</a>
                </div>
            </div>
            <p>Moreover, our platform is incredibly user-friendly, making it accessible to individuals with
                varying degrees of technical expertise. Users can easily request a disposable number and
                receive it instantly, simplifying the verification process while maintaining their
                anonymity. We also provide a wide range of country codes and options, giving users the
                flexibility to choose the most suitable number for their specific needs.</p>
            <p>In conclusion, our website is a testament to our dedication to enhancing online security and
                privacy. By offering free disposable mobile numbers for online verification, we empower
                users to take control of their digital identities while safeguarding their personal
                information from potential threats. In an age where online scams and privacy breaches are
                all too common, our platform stands as a beacon of trust, providing a valuable service that
                users can rely on with confidence.</p>
        </div>
    </div>
@section('scripts')
    <script>
        // Function to start the countdown timer
        function startTimer(duration) {
            let timer = duration;
            const timerDisplay = document.getElementById('timer');
            const timerArea = document.getElementById('timer-area');

            const countdown = setInterval(function() {
                timerDisplay.textContent = timer;
                if (--timer < 0) {
                    clearInterval(countdown);
                    timerArea.classList.remove('d-none'); // Show the timer area
                    timerDisplay.style.display = 'none'; // Hide the countdown timer
                }
            }, 1000);
        }

        // Start the countdown timer when the page loads
        window.onload = function() {
            const countdownDuration = 5; // 5 seconds
            startTimer(countdownDuration);
        };
    </script>
@endsection
@endsection
