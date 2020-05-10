<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @yield('styles')
</head>
<body class="bg-dark antialiased">
<div id="app">
    <main class="mx-auto max-w-screen-xl px-4 sm:px-6">
        <div class="flex mt-20">
            <div class="w-1/4 pr-16">
                @include('cms.layouts.navigation')
            </div>

            <div class="bg-light rounded p-6 w-3/4 text-white">
                @yield('content')
            </div>
        </div>
    </main>
</div>

<script src="{{ mix('js/app.js') }}" defer></script>

@yield('scripts')

</body>
</html>
