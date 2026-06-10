<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrubs Collection | ClinicWear</title>
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
        <input type="text" placeholder="Search scrubs...">
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
    <a href="{{ route('store.scrubs') }}" class="active">Scrubs</a>
    <a href="{{ route('store.lab-coats') }}">Lab Coats</a>
    <a href="{{ route('store.accessories') }}">Accessories</a>
    <a href="{{ route('store.offers') }}">Offers</a>
    <a href="{{ route('store.contact') }}">Contact</a>
</nav>

<section class="collection-hero">
    <div class="collection-content">

        <span>Premium Collection</span>

        <h1>
            Professional
            <strong>Medical Scrubs</strong>
        </h1>

        <p>
            Explore our complete catalog of premium scrubs
            engineered for comfort, flexibility and durability.
        </p>

        <button class="primary-btn">
            Browse Collection
        </button>

    </div>

    <div class="collection-image">
        <img src="{{ asset('images/scrubs-banner.png') }}" alt="">
    </div>
</section>

<section class="filter-bar">

    <div>
        <strong>Scrub Type</strong>
    </div>

    <div>
        <select>
            <option>All Collections</option>
            <option>Premium</option>
            <option>Stretch</option>
            <option>Performance</option>
            <option>Essential</option>
        </select>
    </div>

    <div>
        <select>
            <option>All Colors</option>
            <option>Black</option>
            <option>Navy</option>
            <option>Grey</option>
            <option>Wine</option>
            <option>Royal Blue</option>
        </select>
    </div>

</section>

<section class="products-grid">

    <div class="product-card">
        <span class="badge">Premium</span>
        <img src="{{ asset('images/scrub1.png') }}">
        <h3>Premium Scrub Set</h3>
        <p>Top + Pants</p>
        <div class="price">$79.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Best Seller</span>
        <img src="{{ asset('images/scrub2.png') }}">
        <h3>Flex Stretch Collection</h3>
        <p>Ultra Comfort</p>
        <div class="price">$84.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">New</span>
        <img src="{{ asset('images/scrub3.png') }}">
        <h3>Performance Scrub</h3>
        <p>Professional Fit</p>
        <div class="price">$89.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Exclusive</span>
        <img src="{{ asset('images/scrub4.png') }}">
        <h3>Elite Medical Collection</h3>
        <p>Limited Edition</p>
        <div class="price">$99.99</div>
        <button>Add To Cart</button>
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