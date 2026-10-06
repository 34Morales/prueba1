<x-app-layout>
    <x-slot name="header"><div><span class="ui-eyebrow">Your account</span><h1>Account settings</h1><p>Manage your personal details, security and account preferences.</p></div><a class="ui-button ui-button-secondary" href="{{ route('dashboard') }}">Back to overview</a></x-slot>
    <div class="profile-section" id="personal-details">
        <div class="profile-section-intro"><span class="action-icon"><x-icon name="user" /></span><h2>Personal information</h2><p>Your name and email address. Keep these details up to date so we can reach you.</p></div>
        <div class="ui-card profile-panel">@include('profile.partials.update-profile-information-form')</div>
    </div>
    <div class="profile-section" id="security">
        <div class="profile-section-intro"><span class="action-icon"><x-icon name="lock" /></span><h2>Password &amp; security</h2><p>Choose a unique password you do not use elsewhere.</p></div>
        <div class="ui-card profile-panel">@include('profile.partials.update-password-form')</div>
    </div>
    <div class="profile-section" id="delete-account">
        <div class="profile-section-intro"><h2>Delete account</h2><p>Permanently remove your account. This action cannot be undone.</p></div>
        <div class="ui-card profile-panel profile-panel-danger">@include('profile.partials.delete-user-form')</div>
    </div>
</x-app-layout>
