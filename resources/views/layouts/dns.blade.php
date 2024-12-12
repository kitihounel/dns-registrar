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

    <link rel="stylesheet" href="css/index.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    
    <!-- <header class="flex flex-wrap items-center px-4 py-4 bg-white shadow-md lg:px-16">
        <div class="flex items-center justify-between flex-1">
            <a href="https://dnsforum.bj/" target="_blank">
                <img src="img/full_logo_benindns.png" height="80" width="80" alt="Logo BJ DNS Forum">
            </a>
        </div>

        <label for="menu-toggle" class="block pointer-cursor md:hidden">
            <svg class="text-gray-900 fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
            <nav>
                <ul class="items-center justify-between pt-4 text-base text-gray-700 md:flex md:pt-0">
                    <li><a class="block px-0 py-3 md:p-4" href="demande">Demande encours</a></li>
                    <li><a class="block px-0 py-3 md:p-4" href="domaine">Domaines diponible</a></li>
                    <li><a class="block px-0 py-3 md:p-4" href="active">Domaines actifs</a></li>
            
                </ul>
            </nav>
        </div>
    </header> -->

    <nav class="nav">
        <a href="https://dnsforum.bj/" target="_blank">
            <img src="img/full_logo_benindns.png" height="80" width="80" alt="Logo BJ DNS Forum">
        </a>
        <div class="nav-links">
            <a href="index.html">Accueil</a>
            <a href="userdash.html">Mon Compte</a>
            <a href="admin.html">Administration</a>
            <a href="#">Support</a>
        </div>
    </nav>
    <section>
        @yield('demande')
        @yield('domaine')
        @yield('active')
    </section>
    <script src="js/index.js"></script>
</body>

</html>