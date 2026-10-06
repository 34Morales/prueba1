<button type="button" x-cloak x-show="sidebarOpen" class="sidebar-scrim" @click="sidebarOpen = false; $nextTick(() => $refs.sidebarToggle.focus())" aria-label="Close account navigation"></button>
<aside class="account-sidebar" id="account-sidebar" :class="{ 'is-open': sidebarOpen }" :inert="!sidebarOpen && isMobile">
    <button type="button" class="sidebar-close ui-button ui-button-ghost" @click="sidebarOpen = false; $nextTick(() => $refs.sidebarToggle.focus())" aria-label="Close sidebar"><x-icon name="close" /></button>
    <a class="account-brand" x-ref="sidebarFirst" href="{{ route('store.home') }}"><x-application-logo /><span>ClinicWear<small>YOUR WORKSPACE</small></span></a>
    <p class="sidebar-label">Account</p>
    <nav class="account-nav" aria-label="Account navigation">
        <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}" @if(request()->routeIs('dashboard')) aria-current="page" @endif><x-icon name="grid" />Overview</a>
        <a href="{{ route('profile.edit') }}" class="{{ request()->routeIs('profile.*') ? 'active' : '' }}" @if(request()->routeIs('profile.*')) aria-current="page" @endif><x-icon name="user" />Account settings</a>
    </nav>
    <p class="sidebar-label">Discover</p>
    <nav class="account-nav" aria-label="Store navigation">
        <a href="{{ route('store.scrubs') }}"><x-icon name="bag" />Collections</a>
        <a href="{{ route('store.contact') }}"><x-icon name="help" />Customer support</a>
    </nav>
    <div class="sidebar-bottom">
        <div class="sidebar-support"><strong>Here to help</strong><p>Questions about fit or your account? Get in touch with our team.</p><a href="{{ route('store.contact') }}">Contact support<x-icon name="arrow" /></a></div>
        <div class="sidebar-footer"><span>ClinicWear</span><span>Account workspace</span></div>
    </div>
</aside>
