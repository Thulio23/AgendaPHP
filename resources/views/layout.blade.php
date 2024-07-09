<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    @component('navbar')
    @endcomponent
    <main role="main" class="flex-shrink-0">
        <div class="container">
            @hasSection('content')
                @yield('content')
            @endif
        </div>
    </main>

    <footer class="footer mt-auto py-3 navbar-fixed-bottom">
        <div class="container">
            <p class="text-center"><span class="text-muted">Todos os direitos reservados a &copy;Copyright</span></p>
        </div>
    </footer>
    @hasSection('javascript')
        @yield('javascript')
    @endif
</body>
</html>