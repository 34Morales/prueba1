<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ request()->routeIs('profile.*') ? 'Account settings' : 'Overview' }} | ClinicWear</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/design-system.css') }}">
    <script src="{{ asset('js/ui.js') }}" defer></script>
</head>
<body class="antialiased">
<a class="skip-link" href="#account-content">Skip to content</a>
<div class="account-shell" x-data="{ sidebarOpen: false, isMobile: window.innerWidth <= 760 }" @resize.window="isMobile = window.innerWidth <= 760; if(!isMobile) sidebarOpen = false" @keydown.escape.window="if(sidebarOpen) { sidebarOpen = false; $nextTick(() => $refs.sidebarToggle.focus()) }">
    @include('layouts.navigation')
    <div class="account-workspace" :inert="isMobile && sidebarOpen">
        <header class="account-topbar">
            <div class="account-topbar-left">
                <button type="button" x-ref="sidebarToggle" class="ui-button ui-button-ghost mobile-sidebar-toggle" @click="sidebarOpen = !sidebarOpen; if(sidebarOpen) $nextTick(() => $refs.sidebarFirst.focus())" :aria-expanded="sidebarOpen" aria-controls="account-sidebar" aria-label="Toggle account navigation"><x-icon name="menu" /></button>
                <nav class="account-breadcrumb" aria-label="Breadcrumb"><a href="{{ route('dashboard') }}">Workspace</a><x-icon name="chevron" /><strong>{{ request()->routeIs('profile.*') ? 'Account settings' : 'Overview' }}</strong></nav>
            </div>
            <x-dropdown align="right" width="48" contentClasses="ui-dropdown-panel">
                <x-slot name="trigger">
                    <button type="button" class="account-user-trigger" :aria-expanded="open" aria-controls="account-user-menu">
                        <span class="account-avatar">{{ mb_strtoupper(mb_substr(Auth::user()->name, 0, 1)) }}</span>
                        <span><span class="account-user-name">{{ Auth::user()->name }}</span><small>Personal account</small></span><x-icon name="chevron" />
                    </button>
                </x-slot>
                <x-slot name="content">
                    <div id="account-user-menu">
                        <a class="ui-dropdown-item" href="{{ route('profile.edit') }}"><x-icon name="user" />Account settings</a>
                        <a class="ui-dropdown-item" href="{{ route('store.home') }}"><x-icon name="bag" />Visit store</a>
                        <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" class="ui-dropdown-item"><x-icon name="logout" />Log out</button></form>
                    </div>
                </x-slot>
            </x-dropdown>
        </header>
        <main class="account-page" id="account-content">
            @isset($header)<div class="account-page-header">{{ $header }}</div>@endisset
            <div class="account-content">{{ $slot }}</div>
            <footer class="account-footer"><span>&copy; {{ date('Y') }} ClinicWear</span><span>Medical apparel. Everyday confidence.</span></footer>
        </main>
    </div>
</div>
</body>
</html>
