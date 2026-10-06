<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ClinicWear medical apparel. Explore scrubs, lab coats and essentials for your everyday practice.">
    <title>@yield('title', 'ClinicWear')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/design-system.css') }}">
    <link rel="stylesheet" href="{{ asset('css/store.css') }}">
    <script src="{{ asset('js/store.js') }}" defer></script>
    <script src="{{ asset('js/ui.js') }}" defer></script>
</head>
<body>
<a class="skip-link" href="#main-content">Skip to content</a>
<div class="announcement">Made for the way you care. <span>Discover your everyday essentials.</span></div>
<header class="top-header">
    <a class="brand" href="{{ route('store.home') }}" aria-label="ClinicWear home"><span class="brand-mark" aria-hidden="true">CW</span><span>ClinicWear<small>MEDICAL APPAREL</small></span></a>
    <form class="search-box" action="{{ route('store.scrubs') }}" role="search">
        <input type="search" name="q" aria-label="Search products" placeholder="Find your next essential" value="{{ request('q') }}">
        <button type="submit" aria-label="Search"><x-icon name="search" /></button>
    </form>
    <div class="header-actions">
        <button class="theme-toggle" type="button" aria-label="Switch color theme" aria-pressed="false"><x-icon name="moon" /></button>
        <a href="{{ auth()->check() ? route('dashboard') : route('login') }}" aria-label="Your account"><x-icon name="user" /><span>Account</span></a>
        <button class="cart-toggle" type="button" aria-haspopup="dialog" aria-label="Open shopping bag"><x-icon name="bag" /><span>Bag</span><b data-cart-count>0</b></button>
        <button class="store-menu-toggle" type="button" aria-controls="store-navigation" aria-expanded="false" aria-label="Toggle collections menu"><x-icon name="menu" /></button>
    </div>
</header>
<nav class="navbar" id="store-navigation" aria-label="Collections">
    @foreach(['home' => 'Home', 'women' => 'Women', 'men' => 'Men', 'scrubs' => 'Scrubs', 'lab-coats' => 'Lab coats', 'accessories' => 'Accessories', 'offers' => 'Offers', 'contact' => 'Contact'] as $page => $label)
        <a href="{{ route('store.'.$page) }}" @if(request()->routeIs('store.'.$page)) class="active" aria-current="page" @endif>{{ $label }}</a>
    @endforeach
</nav>
<main id="main-content" class="store-main">
    @unless(request()->routeIs('store.home'))
        <nav class="store-breadcrumb" aria-label="Breadcrumb"><a href="{{ route('store.home') }}">Home</a><x-icon name="chevron" /><span>{{ ['store.women' => 'Women', 'store.men' => 'Men', 'store.scrubs' => 'Scrubs', 'store.lab-coats' => 'Lab coats', 'store.accessories' => 'Accessories', 'store.offers' => 'Offers', 'store.contact' => 'Contact'][request()->route()->getName()] ?? 'Collection' }}</span></nav>
    @endunless
    @yield('content')
</main>
<footer class="store-footer"><div><a class="footer-brand" href="{{ route('store.home') }}">ClinicWear</a><p>Thoughtful essentials. Exceptional everyday care.</p></div><div><a href="{{ route('store.scrubs') }}">Explore collections</a><a href="{{ route('store.contact') }}">Get in touch</a><span>&copy; {{ date('Y') }} ClinicWear</span></div></footer>
<dialog class="cart-dialog" aria-labelledby="bag-title"><div class="bag-heading"><div><span class="ui-eyebrow">Your essentials</span><h2 id="bag-title">Shopping bag</h2></div><button type="button" class="ui-button ui-button-ghost" data-close-cart aria-label="Close shopping bag"><x-icon name="close" /></button></div><p class="bag-note ui-alert">Saved on this device. Checkout is not available yet.</p><div data-cart-items></div><p class="bag-total">Subtotal <strong data-cart-total>$0.00</strong></p><button class="ui-button ui-button-secondary bag-continue" type="button" data-close-cart>Continue exploring<x-icon name="arrow" /></button></dialog>
<div class="toast" role="status" aria-live="polite"></div>
</body>
</html>
