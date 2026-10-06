@props(['active' => false])
<a {{ $attributes->class(['ui-nav-link', 'is-active' => $active]) }} @if($active) aria-current="page" @endif>{{ $slot }}</a>
