<div>
    @if ($showInbox)
        <div class="card card-body shadow-lg border-0">
            <div class="text-center">
                <img src="{{ $number->country->flag }}" alt="{{ $number->country->name }}" width="120">
                <h4 class="card-title text-center my-3">{{ $number->country->name }} Phone Number</h4>
                <h2 class="card-title text-primary text-center my-3">{{ $number->number }}</h2>
                @include('inc.ads.sky')
                <button wire:click="startInboxTimer" class="btn btn-outline-primary">Refresh This Page</button>
            </div>
            <div class="row" wire:loading>
                <div class="col-md-12 text-center mt-4">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
            @if ($inboxTimerSection)
                <div class="text-center mt-4">
                    <h2>Please wait <span id="inboxTimer" wire:poll='inboxTimerMethod'>{{ $inboxTimer }}</span>
                        Seconds
                    </h2>
                </div>
            @else
                <div class="content-area my-4">
                    <div class="row g-4">
                        @forelse ($messages as $message)
                            <div class="col-md-12">
                                <div class="card border-0 border-start border-primary border-5 bg-light ps-2 shadow">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="text-primary mb-0">From: {{ $message->from }}</h5>
                                            <p class="mb-0">{{ now()->parse($message->received_at)->diffForHumans() }}
                                            </p>
                                        </div>
                                        <hr>
                                        <p class="mb-0">{{ $message->message }}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-12">
                                <div class="card border-0 border-start border-primary border-5 bg-light ps-2 shadow">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="text-primary mb-0">No Message Received yet!</h5>
                                        </div>
                                        <hr>
                                        <p class="mb-0">New Message will be show here...</p>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                        <div class="d-flex justify-content-center mt-4">
                            {{-- {{ $number->messages()->paginate(10)->links() }} --}}
                        </div>
                    </div>
                </div>
            @endif
        </div>
</div>
@elseif ($showContinueButton)
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
            @include('inc.ads.sky')
            <div class="col-md-12 text-center mb-4">
                <button wire:click="showTimerPage" class="btn btn-primary btn-lg">Continue to Inbox</button>
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
@elseif ($showTimer)
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
        @if (!$showTimerButton)
            <div class="row">
                <div class="col-md-12 text-center mb-4">
                    <h2>Please wait <span id="timer" wire:poll='timerMethod'>{{ $timer }}</span>
                        Seconds
                    </h2>
                </div>
            </div>
        @endif
        @if ($showTimerButton)
            <div class="row" id="timer-area">
                <div class="col-md-12 text-center mb-4">
                    <button wire:click="showInboxPage" class="btn btn-primary btn-lg">Continue to Inbox</button>
                </div>
                @include('inc.ads.sky')
            </div>
        @endif
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
@endif
</div>
