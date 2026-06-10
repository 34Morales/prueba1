<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories | ClinicWear</title>
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
        <input type="text" placeholder="Search accessories...">
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
    <a href="{{ route('store.accessories') }}" class="active">Accessories</a>
    <a href="{{ route('store.offers') }}">Offers</a>
    <a href="{{ route('store.contact') }}">Contact</a>
</nav>

<section class="collection-hero">
    <div class="collection-content">
        <span>Medical Accessories</span>

        <h1>
            Essential Tools For
            <strong>Every Shift</strong>
        </h1>

        <p>
            Complete your professional look with practical, durable and elegant
            accessories designed for healthcare workers.
        </p>

        <button class="primary-btn">Shop Accessories</button>
    </div>

    <div class="collection-image">
        <img src="{{ asset('images/accessories-banner.png') }}" alt="Medical Accessories">
    </div>
</section>

<section class="filter-bar">
    <div><strong>Accessory Type</strong></div>

    <div>
        <select>
            <option>All Accessories</option>
            <option>Caps</option>
            <option>Compression Socks</option>
            <option>Badges</option>
            <option>Bags</option>
        </select>
    </div>

    <div>
        <select>
            <option>Sort By</option>
            <option>Newest</option>
            <option>Best Seller</option>
            <option>Lowest Price</option>
            <option>Highest Price</option>
        </select>
    </div>
</section>

<section class="products-grid">
    <div class="product-card">
        <span class="badge">Best Seller</span>
        <img src="{{ asset('images/accessory1.png') }}" alt="Medical Cap">
        <h3>Medical Cap</h3>
        <p>Breathable Fabric</p>
        <div class="price">$19.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Comfort</span>
        <img src="{{ asset('images/accessory2.png') }}" alt="Compression Socks">
        <h3>Compression Socks</h3>
        <p>Long Shift Support</p>
        <div class="price">$24.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">New</span>
        <img src="{{ asset('images/accessory3.png') }}" alt="Badge Holder">
        <h3>Badge Holder</h3>
        <p>Professional ID Holder</p>
        <div class="price">$14.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Premium</span>
        <img src="{{ asset('images/accessory4.png') }}" alt="Medical Work Bag">
        <h3>Medical Work Bag</h3>
        <p>Daily Essentials</p>
        <div class="price">$49.99</div>
        <button>Add To Cart</button>
    </div>
</section>

<script>
function toggleTheme() {
    const html = document.documentElement;
    html.dataset.theme = html.dataset.theme === 'dark' ? 'light' : 'dark';
}
</script>

</body>
</html>