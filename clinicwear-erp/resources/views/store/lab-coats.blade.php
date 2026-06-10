<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Coats | ClinicWear</title>
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
        <input type="text" placeholder="Search lab coats...">
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
    <a href="{{ route('store.lab-coats') }}" class="active">Lab Coats</a>
    <a href="{{ route('store.accessories') }}">Accessories</a>
    <a href="{{ route('store.offers') }}">Offers</a>
    <a href="{{ route('store.contact') }}">Contact</a>
</nav>

<section class="collection-hero">
    <div class="collection-content">
        <span>Professional Lab Coats</span>

        <h1>
            Confidence In
            <strong>Every Detail</strong>
        </h1>

        <p>
            Premium lab coats designed for doctors, students, laboratories
            and healthcare professionals who need comfort and presence.
        </p>

        <button class="primary-btn">Shop Lab Coats</button>
    </div>

    <div class="collection-image">
        <img src="{{ asset('images/lab-coats-banner.png') }}" alt="Lab Coats">
    </div>
</section>

<section class="filter-bar">
    <div><strong>Lab Coat Type</strong></div>

    <div>
        <select>
            <option>All Lengths</option>
            <option>Short Coat</option>
            <option>Mid Length</option>
            <option>Long Coat</option>
        </select>
    </div>

    <div>
        <select>
            <option>All Sizes</option>
            <option>XS</option>
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
        </select>
    </div>
</section>

<section class="products-grid">
    <div class="product-card">
        <span class="badge">Classic</span>
        <img src="{{ asset('images/labcoat1.png') }}" alt="Classic Lab Coat">
        <h3>Classic Lab Coat</h3>
        <p>White</p>
        <div class="price">$69.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Premium</span>
        <img src="{{ asset('images/labcoat2.png') }}" alt="Premium Lab Coat">
        <h3>Premium Lab Coat</h3>
        <p>White Slim Fit</p>
        <div class="price">$84.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Student</span>
        <img src="{{ asset('images/labcoat3.png') }}" alt="Student Lab Coat">
        <h3>Student Lab Coat</h3>
        <p>Short Coat</p>
        <div class="price">$49.99</div>
        <button>Add To Cart</button>
    </div>

    <div class="product-card">
        <span class="badge">Executive</span>
        <img src="{{ asset('images/labcoat4.png') }}" alt="Executive Lab Coat">
        <h3>Executive Lab Coat</h3>
        <p>Premium Long Fit</p>
        <div class="price">$99.99</div>
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