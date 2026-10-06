@extends('layouts.store')
@section('title', 'ClinicWear Scrubs')
@section('content')
<div class="container">

    <section class="hero">
        <div class="hero-content">
            <span>Designed for professionals</span>
            <h1>Comfort that stays with you <strong>always</strong></h1>
            <p>High-quality, elegant and functional scrubs designed for medical professionals who need comfort, style and durability.</p>

            <div class="hero-buttons">
                <a class="primary-btn" href="{{ route('store.scrubs') }}">Shop Now â†’</a>
                <a class="secondary-btn" href="#collections">View collection</a>
            </div>

            <div class="hero-features">
                <div><x-icon name="shield" /><b>Premium Fabric</b><small>Soft, durable and breathable</small></div>
                <div><x-icon name="user" /><b>Modern Design</b><small>Professional style</small></div>
                <div><x-icon name="check" /><b>Easy Care</b><small>No shrinking, no fading</small></div>
            </div>
        </div>

        <div class="hero-image">
            <div class="glow"></div>
            <img src="{{ asset('images/apparel.svg') }}" alt="Scrubs">
        </div>
    </section>

    <section class="benefits">
        <div><b>Fast Shipping</b><span>Reliable delivery service</span></div>
        <div><b>Secure Purchase</b><span>Your data is protected</span></div>
        <div><b>Easy Returns</b><span>Simple return process</span></div>
        <div><b>Guaranteed Quality</b><span>Premium medical apparel</span></div>
    </section>

    <section class="categories" id="collections" aria-label="Collections">
        <div class="category-info">
            <span>Collections</span>
            <h3>Shop by Category</h3>
            <p>Explore our professional medical apparel collections.</p>
            <a class="primary-btn" href="{{ route('store.scrubs') }}">Explore all</a>
        </div>

        <div class="category-card">
            <img src="{{ asset('images/apparel.svg') }}" alt="Medical apparel illustration">
            <h4>Women</h4>
            <a href="{{ route('store.women') }}">View products â†’</a>
        </div>

        <div class="category-card">
            <img src="{{ asset('images/apparel.svg') }}" alt="Medical apparel illustration">
            <h4>Men</h4>
            <a href="{{ route('store.men') }}">View products â†’</a>
        </div>

        <div class="category-card">
            <img src="{{ asset('images/apparel.svg') }}" alt="Medical apparel illustration">
            <h4>Scrubs</h4>
            <a href="{{ route('store.scrubs') }}">View products â†’</a>
        </div>

        <div class="category-card">
            <img src="{{ asset('images/apparel.svg') }}" alt="Medical apparel illustration">
            <h4>Lab Coats</h4>
            <a href="{{ route('store.lab-coats') }}">View products â†’</a>
        </div>

        <div class="category-card">
            <img src="{{ asset('images/apparel.svg') }}" alt="Medical apparel illustration">
            <h4>Accessories</h4>
            <a href="{{ route('store.accessories') }}">View products â†’</a>
        </div>
    </section>

</div>
@endsection
