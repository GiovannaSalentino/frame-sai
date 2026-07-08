<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'FrameSAI: a design framework for responsible and symbiotic artificial intelligence.')">

    <title>@yield('title', 'FrameSAI')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 min-h-screen bg-white text-[#252525] antialiased">
    <div class="min-h-screen lg:flex">
        @include('components.sidebar', ['active' => $activeSection ?? null])

        <main class="@yield('main_class', 'min-w-0 flex-1 bg-[#f3f3f3]') lg:ml-[132px]">
            @yield('content')
        </main>
    </div>

    @stack('scripts')
</body>
</html>
