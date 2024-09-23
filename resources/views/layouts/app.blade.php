<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
        {{-- qui ci andrà la nav bar --}}
        @include('admin/partials/header')

        {{-- qui la side bar --}}
        @include('admin.partials.sidebar')
        {{-- qui il contenuto che cambierà a seconda della sezione visualizzata --}}

        @yield('content')

    </div>
</body>

</html>
