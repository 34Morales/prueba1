<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers | ClinicWear</title>
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
        <input type="text" placeholder="Search offers...">
        <button>⌕</button>
    </div>

    <div class="header-actions">
        <button class="theme-toggle" onclick="toggleTheme()">🌙</button>
        <span>My Account</span>
        <span>Cart <b>0</b></span>
    </div>
</header>

<nav class="navbar">
    <a href="{{ route('store.home') }}">Home</a>
    <a href="{{ route('store.women') }}">Women</a>
    <a href="{{ route('store.men') }}">Men</a>
    <a href="{{ route('store.scrubs') }}">Scrubs</a>
    <a href="{{ route('store.lab-coats') }}">Lab Coats</a>
    <a href="{{ route('store.accessories') }}">Accessories</a>
    <a href="{{ route('store.offers') }}" class="active">Offers</a>
    <a href="{{ route('store.contact') }}">Contact</a>
</nav>

<section class="collection-hero">

    <div class="collection-content">

        <span>Limited Time Deals</span>

        <h1>
            Save Up To
            <strong>40% Off</strong>
        </h1>

        <p>
            Discover exclusive promotions, seasonal discounts
            and special offers available for a limited time.
        </p>

        <button class="primary-btn">
            Shop Deals
        </button>

    </div>

    <div class="collection-image">
        <img src="{{ asset('images/offers-banner.png') }}" alt="">
    </div>

</section>

<section class="products-grid">

    <div class="product-card">

        <span class="badge">40% OFF</span>

        <img src="{{ asset('images/offer1.png') }}">

        <h3>Premium Women's Scrub</h3>

        <p>
            <del>$89.99</del>
        </p>

        <div class="price">
            $53.99
        </div>

        <button>Add To Cart</button>

    </div>

    <div class="product-card">

        <span class="badge">30% OFF</span>

        <img src="{{ asset('images/offer2.png') }}">

        <h3>Men's Performance Scrub</h3>

        <p>
            <del>$79.99</del>
        </p>

        <div class="price">
            $55.99
        </div>

        <button>Add To Cart</button>

    </div>

    <div class="product-card">

        <span class="badge">25% OFF</span>

        <img src="{{ asset('images/offer3.png') }}">

        <h3>Premium Lab Coat</h3>

        <p>
            <del>$99.99</del>
        </p>

        <div class="price">
            $74.99
        </div>

        <button>Add To Cart</button>

    </div>

    <div class="product-card">

        <span class="badge">Bundle</span>

        <img src="{{ asset('images/offer4.png') }}">

        <h3>Scrub Set + Cap</h3>

        <p>
            <del>$109.99</del>
        </p>

        <div class="price">
            $79.99
        </div>

        <button>Add To Cart</button>

    </div>

</section>

<section class="benefits">

    <div>
        <b>Weekly Promotions</b>
        <span>New discounts every week</span>
    </div>

    <div>
        <b>Bundle Savings</b>
        <span>Buy more and save more</span>
    </div>

    <div>
        <b>Member Deals</b>
        <span>Exclusive customer pricing</span>
    </div>

    <div>
        <b>Seasonal Campaigns</b>
        <span>Special holiday promotions</span>
    </div>

</section>

<script>
function toggleTheme() {
    const html = document.documentElement;
    html.dataset.theme =
        html.dataset.theme === 'dark'
        ? 'light'
        : 'dark';
}
</script>

</body>
</html>