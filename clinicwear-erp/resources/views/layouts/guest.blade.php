<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php
        [$heading, $description] = match (request()->route()->getName()) {
            'register' => ['Create your account', 'A few details to make ClinicWear your own.'],
            'password.request' => ['Reset your password', 'Enter your email and we will send you a reset link.'],
            'password.reset' => ['Choose a new password', 'Use a strong password to protect your account.'],
            'password.confirm' => ['Confirm it is you', 'Enter your password to continue securely.'],
            'verification.notice' => ['Verify your email', 'One last step to complete your account.'],
            default => ['Welcome back', 'Sign in to your ClinicWear account.'],
        };
    @endphp
    <title>{{ $heading }} | ClinicWear</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/design-system.css') }}">
    <script src="{{ asset('js/ui.js') }}" defer></script>
</head>
<body class="antialiased">
<div class="auth-page">
    <aside class="auth-story">
        <a class="account-brand" href="{{ route('store.home') }}"><x-application-logo /><span>ClinicWear<small>MEDICAL APPAREL</small></span></a>
        <div class="auth-story-content"><span class="ui-eyebrow">Designed for professionals</span><h2>For every shift.<br>For every <em>you.</em></h2><p>Thoughtful medical apparel for the people who care. Comfort, confidence and a little more you.</p><div class="auth-story-detail"><x-icon name="shield" /><span>Your account. Your details. In your control.</span></div></div>
        <span class="auth-story-footer">Thoughtful essentials. Exceptional everyday care.</span>
    </aside>
    <main class="auth-main">
        <a class="auth-back" href="{{ route('store.home') }}"><x-icon name="bag" />Back to the store</a>
        <div class="auth-card">
            <header class="auth-heading"><span class="ui-eyebrow">ClinicWear account</span><h1>{{ $heading }}</h1><p>{{ $description }}</p></header>
            {{ $slot }}
            @if(request()->routeIs('login'))<p class="auth-switch">New to ClinicWear?<a href="{{ route('register') }}">Create an account</a></p>@endif
        </div>
        <footer class="auth-footer">&copy; {{ date('Y') }} ClinicWear &middot; <a href="{{ route('store.contact') }}">Need help?</a></footer>
    </main>
</div>
</body>
</html>
