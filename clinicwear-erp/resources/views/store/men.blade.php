<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Scrubs | ClinicWear</title>
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
    <a href="{{ route('store.home') }}">Home</a>
    <a href="{{ route('store.women') }}">Women</a>
    <a href="{{ route('store.men') }}" class="active">Men</a>
    <a href="{{ route('store.scrubs') }}">Scrubs</a>
    <a href="{{ route('store.lab-coats') }}">Lab Coats</a>
    <a href="{{ route('store.accessories') }}">Accessories</a>
    <a href="{{ route('store.offers') }}">Offers</a>
    <a href="{{ route('store.contact') }}">Contact</a>
</nav>

<section class="collection-hero">
    <div class="collection-content">
        <span>Men's Collection</span>

        <h1>
            Professional Scrubs
            <strong>Built For Comfort</strong>
        </h1>

        <p>
            Durable, modern and comfortable medical apparel designed for long shifts,
            daily movement and professional performance.
        </p>

        <button class="primary-btn">Shop Collection</button>
    </div>

    <div class="collection-image">
        <img src="{{ asset('images/men-banner.png') }}" alt="Men's Scrubs">
    </div>
</section>

<section class="filter-bar">
    <div><strong>Categories</strong></div>

    <div>
        <select>
            <option>All Colors</option>
            <option>Navy</option>
            <option>Black</option>
            <option>Grey</option>
            <option>Royal Blue</option>
        </select>
    </div>

    <div>
        <select>
            <option>All Sizes</option>
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
            <option>XXL</option>
        </select>
    </div>
</section>

<section class="products-grid">
    <div class="product-card">
        <span class="badge">Best Seller</span>
        <img src="{{ asset('images/men-product1.png') }}" alt="Men's Premium Scrub">
        <h3>Men's Premium Scrub</h3>
        <p>Navy Blue</p>
        <div class="price">$59.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">New</span>
        <img src="{{ asset('images/men-product2.png') }}" alt="Men's Stretch Scrub">
        <h3>Men's Stretch Scrub</h3>
        <p>Black</p>
        <div class="price">$62.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Popular</span>
        <img src="{{ asset('images/men-product3.png') }}" alt="Men's Clinical Pants">
        <h3>Men's Clinical Pants</h3>
        <p>Charcoal Grey</p>
        <div class="price">$54.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Premium</span>
        <img src="{{ asset('images/men-product4.png') }}" alt="Men's Performance Set">
        <h3>Men's Performance Set</h3>
        <p>Royal Blue</p>
        <div class="price">$74.99</div>
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