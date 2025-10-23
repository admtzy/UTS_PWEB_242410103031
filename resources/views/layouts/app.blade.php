<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PanenKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @php 
        $username = session('username'); 
    @endphp

    @include('components.navbar')

    <main class="container mt-4 mb-5" id="main-content">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="{{ asset('js/main.js') }}"></script>
</body>
