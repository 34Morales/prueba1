@props(['name', 'size' => 20])
@php
    $available = ['grid', 'user', 'bag', 'arrow', 'chevron', 'search', 'menu', 'close', 'logout', 'shield', 'mail', 'clock', 'moon', 'check', 'help', 'lock'];
    $icon = in_array($name, $available, true) ? $name : 'grid';
@endphp
<svg {{ $attributes->class(['ui-icon']) }} width="{{ $size }}" height="{{ $size }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    @include('components.icons.'.$icon)
</svg>
