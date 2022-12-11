<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ Vite::asset('resources/images/ramageek.svg') }}">

    <title>{{ getTitlePage() }}</title>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body class="h-full">
    <div x-data="{ open: false }" @keydown.window.escape="open = false">
        <x-nav.sidebar.mobile />

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <x-nav.sidebar.desktop />
        </div>

        <!-- Content area -->
        <div class="md:pl-64">
            <div class="max-w-4xl mx-auto flex flex-col md:px-8 xl:px-0">
                <x-topbar />

                <main class="flex-1">
                    <div class="relative max-w-4xl mx-auto md:px-8 xl:px-0">
                        <div class="pt-10 pb-16">
                            <div class="px-4 sm:px-6 md:px-0">
                                <h1 class="text-3xl font-extrabold text-gray-900">Settings</h1>
                            </div>

                            <div class="px-4 sm:px-6 md:px-0">
                                <div class="py-6">
                                    {{ $slot }}
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>
