<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClinicWear Scrubs</title>
    <link rel="stylesheet" href="{{ asset('css/store.css') }}">
</head>
<body>

<header class="top-header">
    <div class="brand">
        <img src="{{ asset('images/logo.png') }}" alt="ClinicWear Logo">
        <div>
            <h1>ClinicWear</h1>
            <h2>Scrubs</h2>
        </div>
    </div>

    <div class="search-box">
        <input type="text" placeholder="Search products...">
        <button>⌕</button>
    </div>

    <div class="header-actions">
        <button class="theme-toggle" onclick="toggleTheme()">🌙</button>
        <span>My Account</span>
        <span>Cart <b>0</b></span>
    </div>
</header>

<nav class="navbar">
    <a href="{{ route('store.home') }}" class="{{ request()->routeIs('store.home') ? 'active' : '' }}">Home</a>
    <a href="{{ route('store.women') }}" class="{{ request()->routeIs('store.women') ? 'active' : '' }}">Women</a>
    <a href="{{ route('store.men') }}" class="{{ request()->routeIs('store.men') ? 'active' : '' }}">Men</a>
    <a href="{{ route('store.scrubs') }}" class="{{ request()->routeIs('store.scrubs') ? 'active' : '' }}">Scrubs</a>
    <a href="{{ route('store.lab-coats') }}" class="{{ request()->routeIs('store.lab-coats') ? 'active' : '' }}">Lab Coats</a>
    <a href="{{ route('store.accessories') }}" class="{{ request()->routeIs('store.accessories') ? 'active' : '' }}">Accessories</a>
    <a href="{{ route('store.offers') }}" class="{{ request()->routeIs('store.offers') ? 'active' : '' }}">Offers</a>
    <a href="{{ route('store.contact') }}" class="{{ request()->routeIs('store.contact') ? 'active' : '' }}">Contact</a>
</nav>

<main class="container">

    <section class="hero">
        <div class="hero-content">
            <span>Designed for professionals</span>
            <h1>Comfort that stays with you <strong>always</strong></h1>
            <p>High-quality, elegant and functional scrubs designed for medical professionals who need comfort, style and durability.</p>

            <div class="hero-buttons">
                <button class="primary-btn">Shop Now →</button>
                <button class="secondary-btn">View Collection</button>
            </div>

            <div class="hero-features">
                <div><b>Premium Fabric</b><small>Soft, durable and breathable</small></div>
                <div><b>Modern Design</b><small>Professional style</small></div>
                <div><b>Easy Care</b><small>No shrinking, no fading</small></div>
            </div>
        </div>

        <div class="hero-image">
            <div class="glow"></div>
            <img src="{{ asset('images/scrubs-hero.png') }}" alt="Scrubs">
        </div>
    </section>

    <section class="benefits">
        <div><b>Fast Shipping</b><span>Reliable delivery service</span></div>
        <div><b>Secure Purchase</b><span>Your data is protected</span></div>
        <div><b>Easy Returns</b><span>Simple return process</span></div>
        <div><b>Guaranteed Quality</b><span>Premium medical apparel</span></div>
    </section>

    <section class="categories">
        <div class="category-info">
            <span>Collections</span>
            <h3>Shop by Category</h3>
            <p>Explore our professional medical apparel collections.</p>
            <button>View All →</button>
        </div>

        <div class="category-card">
            <img src="{{ asset('images/women.png') }}">
            <h4>Women</h4>
            <a href="#">View products →</a>
        </div>

        <div class="category-card">
            <img src="{{ asset('images/men.png') }}">
            <h4>Men</h4>
            <a href="#">View products →</a>
        </div>

        <div class="category-card">
            <img src="{{ asset('images/scrubs.png') }}">
            <h4>Scrubs</h4>
            <a href="#">View products →</a>
        </div>

        <div class="category-card">
            <img src="{{ asset('images/lab-coats.png') }}">
            <h4>Lab Coats</h4>
            <a href="#">View products →</a>
        </div>

        <div class="category-card">
            <img src="{{ asset('images/accessories.png') }}">
            <h4>Accessories</h4>
            <a href="#">View products →</a>
        </div>
    </section>

</main>

<script>
    function toggleTheme() {
        const html = document.documentElement;
        html.dataset.theme = html.dataset.theme === 'dark' ? 'light' : 'dark';
    }
</script>

</body>
</html>