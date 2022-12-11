@props(['href', 'isActive' => false, 'icon' => null])

<a href="{{ $href }}" {{ $isActive ? 'aria-current="page"' : '' }}
    class="{{ $isActive ? 'bg-red-50 border-red-600 text-red-600' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} group border-l-4 py-2 px-3 flex items-center text-base font-medium">
    @if ($icon)
        {!! $icon !!}
    @endif
    {{ $slot }}
</a>
