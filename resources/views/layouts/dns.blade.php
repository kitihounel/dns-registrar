<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    <header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
        <div class="flex-1 flex justify-between items-center">
            <a href="https://dnsforum.bj/" target="_blank">
                <img src="img/full_logo_benindns.png" height="80" width="80" alt="Logo BJ DNS Forum">
            </a>
        </div>

        <label for="menu-toggle" class="pointer-cursor md:hidden block">
            <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
            <nav>
                <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                    <li><a class="md:p-4 py-3 px-0 block" href="active">Acceuil</a></li>
                    <li><a class="md:p-4 py-3 px-0 block" href="demande">A propos</a></li>
                    <li><a class="md:p-4 py-3 px-0 block" href="domaine">Domaines</a></li>
                    <li><a class="md:p-2 py-3 px-0 block md:mb-0 mb-2 bg-blue-600  rounded-md animate-pulse text-white text-lg"
                            href="demande">Faire une demande</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section>
        @yield('demande')
        @yield('domaine')
        @yield('active')
    </section>
</body>

</html>