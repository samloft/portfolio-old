<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Samuel Loft portfolio</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script src="https://cdn.usefathom.com/script.js" data-site="NTSTFXWC" defer></script>

</head>
<body class="bg-dark antialiased">
<div id="app">
    @include('layouts.header')

    <main class="mx-auto max-w-screen-xl px-4 sm:px-6">
        @yield('content')
    </main>
</div>

@include('layouts.footer')

<script src="{{ mix('js/app.js') }}" defer></script>

</body>
</html>
