<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | ClinicWear</title>
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
    <a href="{{ route('store.men') }}">Men</a>
    <a href="{{ route('store.scrubs') }}">Scrubs</a>
    <a href="{{ route('store.lab-coats') }}">Lab Coats</a>
    <a href="{{ route('store.accessories') }}">Accessories</a>
    <a href="{{ route('store.offers') }}">Offers</a>
    <a href="{{ route('store.contact') }}" class="active">Contact</a>
</nav>

<section class="collection-hero">
    <div class="collection-content">
        <span>Contact Us</span>

        <h1>
            We Are Here To
            <strong>Help You</strong>
        </h1>

        <p>
            Need assistance with orders, sizing, shipping, returns or business purchases?
            Our team is ready to support you.
        </p>

        <button class="primary-btn">Send Message</button>
    </div>

    <div class="collection-image">
        <img src="{{ asset('images/contact-banner.png') }}" alt="Customer Support">
    </div>
</section>

<section class="contact-section">
    <div class="contact-info-card">
        <span>Customer Support</span>
        <h2>Get In Touch</h2>
        <p>
            Contact our support team for product questions, order updates,
            wholesale inquiries or assistance with your account.
        </p>

        <div class="contact-list">
            <div>
                <b>Email</b>
                <span>support@clinicwear.com</span>
            </div>

            <div>
                <b>Phone</b>
                <span>+1 (000) 000-0000</span>
            </div>

            <div>
                <b>WhatsApp</b>
                <span>Available for customer support</span>
            </div>

            <div>
                <b>Business Hours</b>
                <span>Monday - Friday / 9:00 AM - 6:00 PM</span>
            </div>
        </div>
    </div>

    <form class="contact-form">
        <div class="form-row">
            <div>
                <label>First Name</label>
                <input type="text" placeholder="Enter your first name">
            </div>

            <div>
                <label>Last Name</label>
                <input type="text" placeholder="Enter your last name">
            </div>
        </div>

        <label>Email Address</label>
        <input type="email" placeholder="example@email.com">

        <label>Subject</label>
        <input type="text" placeholder="How can we help?">

        <label>Message</label>
        <textarea placeholder="Write your message here..."></textarea>

        <button type="button">Submit Message →</button>
    </form>
</section>

<section class="benefits">
    <div>
        <b>Order Support</b>
        <span>Track your purchases</span>
    </div>

    <div>
        <b>Wholesale Inquiries</b>
        <span>Business and bulk orders</span>
    </div>

    <div>
        <b>Returns & Exchanges</b>
        <span>Simple return process</span>
    </div>

    <div>
        <b>Global Shipping</b>
        <span>International delivery options</span>
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