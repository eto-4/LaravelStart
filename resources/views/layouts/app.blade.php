<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Tasks App')</title>
</head>
<body>
    <nav>
        @yield('navLinks', '')
    </nav>

    <main>
        @yield('content')
    </main>

</body>
</html>