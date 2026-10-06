@extends('layouts.store')
@section('title', 'Contact | ClinicWear')
@section('content')
<header class="contact-header">
    <span class="ui-eyebrow">Customer support</span>
    <h1>A little help.<br><span>A lot of care.</span></h1>
    <p>From finding your fit to managing your account, let us help you take the next step with confidence.</p>
</header>
<div class="contact-section">
    <aside class="contact-info-card">
        <span class="ui-eyebrow">Let's talk</span>
        <h2>Here for you</h2>
        <p>Questions about products, sizing or business purchases? Prepare a message for our support team.</p>
        <div class="contact-list">
            <div><x-icon name="mail" /><section><b>Email our team</b><a href="mailto:support@clinicwear.com">support@clinicwear.com</a></section></div>
            <div><x-icon name="clock" /><section><b>Business hours</b><span>Monday–Friday<br>9:00 AM–6:00 PM</span></section></div>
            <div><x-icon name="bag" /><section><b>Product &amp; order questions</b><span>Include the product name or order reference in your message.</span></section></div>
            <div><x-icon name="help" /><section><b>Phone &amp; WhatsApp</b><span>Contact details are not configured yet. Please use email.</span></section></div>
        </div>
    </aside>
    <form class="contact-form" id="contact-form">
        <div class="contact-form-heading"><h2>How can we help?</h2><p>Fill in your details to prepare an email.</p></div>
        <div class="form-row">
            <div class="contact-form-field"><label for="first-name">First name</label><input id="first-name" name="first-name" autocomplete="given-name" required type="text" placeholder="First name"></div>
            <div class="contact-form-field"><label for="last-name">Last name</label><input id="last-name" name="last-name" autocomplete="family-name" required type="text" placeholder="Last name"></div>
        </div>
        <div class="contact-form-field"><label for="email">Email address</label><input id="email" name="email" autocomplete="email" required type="email" placeholder="you@example.com"></div>
        <div class="contact-form-field"><label for="subject">Subject</label><input id="subject" name="subject" required type="text" placeholder="Sizing, products, your account..."></div>
        <div class="contact-form-field"><label for="message">Your message</label><textarea id="message" name="message" required placeholder="Tell us a little more about what you need."></textarea></div>
        <div class="contact-form-actions"><p>This opens your email app. Review and send your message there.</p><button type="submit">Prepare email<x-icon name="arrow" /></button></div>
        <p class="contact-feedback ui-alert" role="status" hidden></p>
    </form>
</div>
<section class="contact-faq" aria-labelledby="faq-title">
    <span class="ui-eyebrow">A good place to start</span><h2 id="faq-title">Common questions</h2>
    <details><summary>How do I choose the right size?</summary><p>Select your preferred size on the product card. If you need help with measurements or fit, include the product name in your message so our team can advise you.</p></details>
    <details><summary>Can I order for my team?</summary><p>For business and bulk purchase inquiries, send us the items, quantities and sizes you are considering. Our support team can help with next steps.</p></details>
    <details><summary>How do I update my account?</summary><p><a href="{{ auth()->check() ? route('profile.edit') : route('login') }}">Sign in to your account</a> to update your name, email and password in account settings.</p></details>
</section>
@endsection
