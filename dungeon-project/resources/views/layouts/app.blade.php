<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        


        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.cdnfonts.com/css/hari-primiantoro" rel="stylesheet">
                

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            *{ font-family: 'Hari Primiantoro', sans-serif;
            margin: 0;}
            
            nav{
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin-bottom: 50px;
}
a{font-size: xx-large;}
a:hover{font-weight: 600;}
form{
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    padding: 50px;
    margin: 25px;
}
#button{
    font-size: xx-large;
    margin-top: 25px;
}
#button:hover{font-weight: 600;
scale: 1.5;}
body{height: 100vh;
    background-color: #e5e7eb;}
footer{text-align: center;
            margin-top: 50px;}
</style>
    </head>
    <nav>
    <a href="/personnage/create">Personnages</a>
    <a href="">Equipes</a>
    <a href="">Jeu</a>
    <a href="http://127.0.0.1:8000/">Accueil</a>
</nav>
    <body class="font-sans antialiased">



        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                        {{ $slot }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                
                @yield('principale')
                
            </main>
    <footer>
        Dungeon &copy;Hilel 2022
    </footer>
        </div>
        
    </body>
</html>
