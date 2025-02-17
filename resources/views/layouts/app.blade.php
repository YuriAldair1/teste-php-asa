<!doctype html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-agent" content="{{ @Auth::user()->token }}">
    <meta name="access-token" content="">

    <!-- mapa -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}?id={{ now()->timestamp }}">

    @yield('css')
    @stack('css')

    @livewireStyles

    <title>@yield('title')</title>
</head>

<body>
    <div id="root"></div>

    <div class="parents  d-flex">
        <!-- Menu Vertical -->
        <x-sidebar-menu />
        <main class="" style="width: 100%">
            <!-- Header com Menu Superior Dinâmico -->
            <header class="bg-white shadow-sm" style="position: sticky; top: 0; z-index: 9;">
                <div class="px-4 py-6 d-flex" style="min-height: 6vh">
                    <div class="align-self-center">
                        @yield('header-menu')
                    </div>
                </div>
            </header>
            <div class="p-4 overflow-scroll" style="height: 95vh">
                <!-- Conteúdo da Página -->
                @yield('content')
            </div>
        </main>
    </div>
    <div style="bottom: 0 ">
        @include('partials.footer')
    </div>

    @livewireScripts
</body>

@stack('js')
<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>

</html>
