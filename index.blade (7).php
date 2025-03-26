<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{ setting('site_name') }} - {{ setting('currency_name') }} Cloud Mining</title>
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keywords" content="{{ setting('meta_keywords') }}">
    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ theme_asset('assets/css/theme.css') }}" rel="stylesheet" />
    @if(setting('cookie_consent_status') === 'yes')
        <!--Cookie Consent-->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    @endif
    @livewireStyles
    {!! setting('header_codes') !!}
</head>
<body>
<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-4 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="{{ route('index') }}"><img src="{{ theme_asset('assets/img/gallery/logo.png') }}" height="24" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="#home">Home</a></li>
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#how">How it Works</a></li>
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#faqs">F.A.Q.s</a></li>
                    @if(setting('frontend_statistics') === '1')
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#statistics">Statistics</a></li>
                    @endif
                </ul>
                @guest
                    <a class="btn btn-light order-1 order-lg-0" href="#!" data-bs-toggle="modal" data-bs-target="#loginModal">Start
                        <svg class="bi bi-person-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                        </svg></a>
                @else
                    <a class="btn btn-light order-1 order-lg-0" href="{{ route('account') }}">Account
                        <svg class="bi bi-speedometer" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/><path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
                        </svg></a>
                @endguest
            </div>
        </div>
    </nav>
    <section id="home">
        <div class="bg-holder" style="background-image:url('{{ theme_asset('assets/img/gallery/hero.png') }}');background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row align-items-center min-vh-50 min-vh-sm-75">
                <div class="col-md-5 col-lg-6 order-0 order-md-1"><img class="w-100" src="{{ theme_asset('assets/img/illustrations/hero-header.png') }}" alt="..." /></div>
                <div class="col-md-7 col-lg-6 text-md-start text-center">
                    <h1 class="text-light fs-md-5 fs-lg-6">Mine {{ setting('currency_name') }} with ease</h1>
                    @guest
                        <p class="text-light">Professional Cloud Mining Service </p><a class="btn btn-primary" href="#!" data-bs-toggle="modal" data-bs-target="#loginModal">Get Started</a>
                    @else
                        <p class="text-light">Professional Cloud Mining Service </p><a class="btn btn-primary" href="{{ route('account') }}">Account</a>
                    @endguest
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-8" id="how">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xxl-5 text-center mx-auto">
                    <h2>3 Simple Steps</h2>
                    <p class="mb-4">See how fast and easy it is to earn passive income with our cloud mining service</p>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-lg-4 pe-lg-4 pe-xl-7">
                    <div class="d-flex align-items-start"><img class="me-4" src="{{ theme_asset('assets/img/icons/give-a-care.png') }}" alt="" width="30" />
                        <div class="flex-1">
                            <h5>REGISTER </h5>
                            <p>Sign up with your {{ setting('currency_name') }} address. No passwords. No email.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pe-lg-4 pe-xl-7">
                    <div class="d-flex align-items-start"><img class="me-4" src="{{ theme_asset('assets/img/icons/tweak-as-you.png') }}" alt="" width="30" />
                        <div class="flex-1">
                            <h5>MINE</h5>
                            <p>Mine with ease with our cloud mining system</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pe-lg-4 pe-xl-7">
                    <div class="d-flex align-items-start"><img class="me-4" src="{{ theme_asset('assets/img/icons/security.png') }}" width="30" alt="" />
                        <div class="flex-1">
                            <h5>WITHDRAW</h5>
                            <p>Get Your Withdrawal Fast As Possible</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->
    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-8 bg-soft-primary" id="faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xxl-5 text-center mx-auto mb-5">
                    <h2>Frequently Asked Questions</h2>
                    <p class="mb-5">Here are some of the questions you might have asked</p>
                </div>
            </div>
            <div class="row h-100">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="accordion" id="faqs">
                        @foreach ($faqs as $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="question{{ $faq->id }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#answer{{ $faq->id }}" aria-expanded="@if($loop->first)true @else false @endif" aria-controls="answer{{ $faq->id }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="answer{{ $faq->id }}" class="accordion-collapse collapse @if($loop->first)show @endif" aria-labelledby="question{{ $faq->id }}" data-bs-parent="#faqs">
                                    <div class="accordion-body">
                                        {!! $faq->answer !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->
    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

@if(setting('frontend_statistics') === '1')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-6" id="statistics">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xxl-5 text-center mx-auto mb-5">
                    <h2>Statistics</h2>
                    <p class="mb-5">See the results our service has generated so far. </p>
                </div>
            </div>
            <div class="row h-100">
                <div class="col-sm-6 col-xl-3 mb-3">
                    <div class="card card-span shadow py-4 h-100 border-top border-4 border-primary">
                        <div class="card-body">
                            <div class="text-center"><img src="{{ theme_asset('assets/img/icons/users.png') }}" alt="..." />
                                <h5 class="my-3">TOTAL USERS</h5>
                                <ul class="list-unstyled">
                                    <li>Registered users so far</li>
                                </ul>
                                <h3 class="mt-5 fw-normal">{{ $statistics->total_users }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 mb-3">
                    <div class="card card-span shadow py-4 h-100 border-top border-4 border-primary">
                        <div class="card-body">
                            <div class="text-center"><img src="{{ theme_asset('assets/img/icons/vault.png') }}" alt="..." />
                                <h5 class="my-3">TOTAL DEPOSIT</h5>
                                <ul class="list-unstyled">
                                    <li>Total invested by users</li>
                                </ul>
                                <h3 class="mt-5 fw-normal">{{ crypto_currency($statistics->total_deposits, 3) }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 mb-3">
                    <div class="card card-span shadow py-4 h-100 border-top border-4 border-primary">
                        <div class="card-body">
                            <div class="text-center"><img src="{{ theme_asset('assets/img/icons/wallet.png') }}" alt="..." />
                                <h5 class="my-3">TOTAL PAID</h5>
                                <ul class="list-unstyled">
                                    <li>Total withdrawn by users</li>
                                </ul>
                                <h3 class="mt-5 fw-normal">{{ crypto_currency($statistics->total_withdrawals, 3) }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 mb-3">
                    <div class="card card-span shadow py-4 h-100 border-top border-4 border-primary">
                        <div class="card-body">
                            <div class="text-center"><img src="{{ theme_asset('assets/img/icons/calendar.png') }}" alt="..." />
                                <h5 class="my-3">ONLINE DAYS</h5>
                                <ul class="list-unstyled">
                                    <li>From opening day</li>
                                </ul>
                                <h3 class="mt-5 fw-normal">{{ $statistics->working_days }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->
    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
@endif
@if(setting('frontend_latest_transactions') === '1')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xxl-5 text-center mx-auto">
                    <h2>Latest Transactions</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="deposits-tab" data-bs-toggle="tab" data-bs-target="#deposits" type="button" role="tab" aria-controls="deposits" aria-selected="true">Latest Deposits</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="withdrawals-tab" data-bs-toggle="tab" data-bs-target="#withdrawals" type="button" role="tab" aria-controls="withdrawals" aria-selected="false">Latest Withdrawals</button>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content mt-2">
                        <div class="tab-pane active" id="deposits" role="tabpanel" aria-labelledby="deposits-tab">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Wallet</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        @if(setting('frontend_latest_transactions_txid') === '1')
                                            <th>TX</th>
                                        @endif
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($latest_deposits as $deps)
                                        <tr>
                                            <td>{{ substr($deps->user->wallet, 0, -8) }}<strong class="text-danger">XXX</strong></td>
                                            <td>{{ crypto_currency($deps->amount) }}</td>
                                            <td>{{ $deps->created_at->diffForHumans() }}</td>
                                            @if(setting('frontend_latest_transactions_txid') === '1')
                                                <td><a href="{{ setting('blockchain_url').$deps->tx_id }}" target="_blank">{{ $deps->tx_id }}</a></td>
                                            @endif
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="{{ setting('frontend_latest_transactions_txid') === '1' ? '4' : '3' }}" class="text-center">No deposits yet</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="withdrawals" role="tabpanel" aria-labelledby="withdrawals-tab">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Wallet</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        @if(setting('frontend_latest_transactions_txid') === '1')
                                            <th>TX</th>
                                        @endif
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($latest_withdrawals as $withdrawal)
                                        <tr>
                                            <td>{{ substr($withdrawal->user->wallet, 0, -8) }}<strong class="text-danger">XXX</strong></td>
                                            <td>{{ crypto_currency($withdrawal->amount) }}</td>
                                            <td>{{ $withdrawal->created_at->diffForHumans() }}</td>
                                            @if(setting('frontend_latest_transactions_txid') === '1')
                                                <td><a href="{{ setting('blockchain_url').$withdrawal->tx_id }}" target="_blank">{{ $withdrawal->tx_id }}</a></td>
                                            @endif
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="{{ setting('frontend_latest_transactions_txid') === '1' ? '4' : '3' }}" class="text-center">No withdrawals yet</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->
    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
@endif

    <section class="py-0 py-xxl-6" id="help">
        <div class="bg-holder" style="background-image:url('{{ theme_asset('assets/img/gallery/footer-bg.png') }}');background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    @include('themes.frontend.default.partials.social')
                </div>
            </div>
            <hr />
            <div class="row flex-center pb-3">
                <div class="col-md-6 order-0">
                    <p class="text-200 text-center text-md-start">&copy; {{ setting('site_name') }},
                        {{ date('Y') }}. All rights Reserved </p>
                </div>
                <div class="col-md-6 order-1">
                    <div class="text-end">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="text-200 text-decoration-none" href="#!" data-bs-toggle="modal" data-bs-target="#tosModal">Terms of Service</a></li>
                            <li class="list-inline-item"><a class="text-200 text-decoration-none" href="#!" data-bs-toggle="modal" data-bs-target="#privacyModal">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->

<!-- ===============================================-->
<!--    Login Modal -->
<!-- ===============================================-->

<!-- Modal -->
@livewire('login')
@include('themes.frontend.default.partials.tos-modal')
@include('themes.frontend.default.partials.privacy-modal')

<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="{{ theme_asset('vendors/@popperjs/popper.min.js') }}"></script>
<script src="{{ theme_asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ theme_asset('vendors/is/is.min.js') }}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="{{ theme_asset('vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ theme_asset('assets/js/theme.js') }}"></script>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap" rel="stylesheet">
{{--<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>--}}
@livewireScripts
@if(setting('cookie_consent_status') === 'yes')
    <!--Cookie Consent-->
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <script>
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "{{ setting('cookie_consent_popup_background') }}",
                    "text": "{{ setting('cookie_consent_popup_text_color') }}"
                },
                "button": {
                    @if(setting('cookie_consent_layout') === 'wire')
                    "background": "transparent",
                    "border": "{{ setting('cookie_consent_button_border_color') }}",
                    @else
                    "background": "{{ setting('cookie_consent_button_background') }}",
                    @endif
                    "text": "{{ setting('cookie_consent_button_text_color') }}"
                }
            },
            "position": "{{ setting('cookie_consent_position') }}",
            @if(setting('cookie_consent_position') === 'top-static')
            "static": true,
            @else
            "static": false,
            @endif
                    @if(setting('cookie_consent_layout') !== 'wire')
            "theme": "{{ setting('cookie_consent_layout') }}"
            @endif
        });
    </script>
@endif

{!! setting('footer_codes') !!}
</body>
</html>