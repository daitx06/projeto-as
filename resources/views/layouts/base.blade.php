<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AS')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Opcional para adicionar estilos -->
</head>
<style>
    a{
        text-decoration: none;
        color: black;
    }
</style>
<body>
    <div class="container">
        <header>
            <h1>Projeto AS</h1>
            <nav>
                <a href="{{ route('guests.index') }}">Guests</a> 
                <a href="{{ route('reservations.index') }}">Reservations</a>
                <a href="{{ route('rooms.index') }}">Rooms</a>
            </nav>
            <hr>
        </header>

        <!-- Conteúdo Principal -->
        <main>
            @yield('conteudo')
        </main>

        <!-- footer -->
        <footer>
            <hr>
            <p>&copy; {{ date('Y') }} - Todos os direitos reservados.</p>
        </footer>
    </div>
</body>
</html>