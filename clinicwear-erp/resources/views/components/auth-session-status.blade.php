@props(['status'])
@if ($status)<div {{ $attributes->merge(['class' => 'ui-alert', 'role' => 'status']) }}>{{ $status }}</div>@endif
