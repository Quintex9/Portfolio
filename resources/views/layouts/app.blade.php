<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Portfólio</title>
    @vite('resources/css/app.css')
</head>


<body class="bg-gray-100 text-gray-800">
    @include('components.navbar')

    <main class="p-6">
        @yield('content')
    </main>

    @include('components.footer')
</body>

</html>
