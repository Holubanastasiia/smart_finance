<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/build/assets/css/style.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Smart Finance')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    @yield('scripts')
</body>
</html>
