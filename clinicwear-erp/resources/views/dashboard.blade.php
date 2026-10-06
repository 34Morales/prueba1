<x-app-layout>
    <x-slot name="header">
        <div><span class="ui-eyebrow">Your workspace</span><h1>Overview</h1><p>Your account, essentials and next steps. All in one place.</p></div>
        <a class="ui-button ui-button-secondary" href="{{ route('store.home') }}"><x-icon name="bag" />Visit store</a>
    </x-slot>
    <section class="dashboard-welcome" aria-labelledby="welcome-title">
        <div><span class="ui-eyebrow">Welcome to ClinicWear</span><h2 id="welcome-title">Good to see you, {{ auth()->user()->name }}.</h2><p>Make room for comfort. Explore essentials designed to move with you, from your first appointment to your last.</p></div>
        <a class="ui-button" href="{{ route('store.scrubs') }}">Explore scrubs<x-icon name="arrow" /></a>
    </section>
    <section class="dashboard-facts" aria-label="Account at a glance">
        <div class="ui-card dashboard-fact"><div class="dashboard-fact-head"><span class="ui-eyebrow">Member since</span><x-icon name="clock" /></div><strong>{{ auth()->user()->created_at?->format('M Y') ?? 'Not available' }}</strong><p>Your ClinicWear journey</p></div>
        <div class="ui-card dashboard-fact"><div class="dashboard-fact-head"><span class="ui-eyebrow">Email status</span><x-icon name="shield" /></div><strong>{{ auth()->user()->email_verified_at ? 'Verified' : 'Not verified' }}</strong><p>{{ auth()->user()->email_verified_at ? 'Your email has been confirmed' : 'Review your email in account settings' }}</p></div>
        <div class="ui-card dashboard-fact"><div class="dashboard-fact-head"><span class="ui-eyebrow">Your workspace</span><x-icon name="user" /></div><strong>Personal account</strong><p>Manage your details and password</p></div>
    </section>
    <div class="dashboard-columns">
        <section aria-labelledby="quick-actions-title">
            <div class="section-title"><h2 id="quick-actions-title">Make it yours</h2><span>Quick actions</span></div>
            <a class="ui-card quick-action" href="{{ route('profile.edit') }}"><span class="action-icon"><x-icon name="user" /></span><div><h3>Update your details</h3><p>Keep your name and email up to date.</p></div><x-icon name="arrow" /></a>
            <a class="ui-card quick-action" href="{{ route('profile.edit') }}#security"><span class="action-icon"><x-icon name="lock" /></span><div><h3>Review account security</h3><p>Manage your password in one place.</p></div><x-icon name="arrow" /></a>
            <a class="ui-card quick-action" href="{{ route('store.contact') }}"><span class="action-icon"><x-icon name="help" /></span><div><h3>Talk to our team</h3><p>Questions about sizing, products or your account?</p></div><x-icon name="arrow" /></a>
        </section>
        <section aria-labelledby="account-summary-title">
            <div class="section-title"><h2 id="account-summary-title">Account details</h2><span class="ui-badge">Personal</span></div>
            <div class="ui-card account-summary"><dl><div><dt>Full name</dt><dd>{{ auth()->user()->name }}</dd></div><div><dt>Email address</dt><dd>{{ auth()->user()->email }}</dd></div><div><dt>Account created</dt><dd>{{ auth()->user()->created_at?->format('M j, Y') ?? 'Not available' }}</dd></div></dl><a class="ui-button ui-button-secondary" href="{{ route('profile.edit') }}">Manage account<x-icon name="arrow" /></a></div>
        </section>
    </div>
</x-app-layout>
