@props(['active' => false])

<a href="#" {{ $active ? 'aria-current="page"' : '' }}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium">
    {{ $slot }}
</a>
