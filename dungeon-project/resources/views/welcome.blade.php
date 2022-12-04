<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<title>Laravel</title>

<!-- Fonts -->
<link href="https://fonts.cdnfonts.com/css/viking" rel="stylesheet">
<link href="https://fonts.cdnfonts.com/css/hari-primiantoro" rel="stylesheet">
                

                

<!-- Styles -->

<style>
    *{box-sizing: border-box;
        /* font-family: 'Viking-Normal', sans-serif; */
        font-family: 'Hari Primiantoro', sans-serif;
                                                
    margin: 0;}
.presentation{display: flex;
flex-direction: column;
user-select: none;}
a{text-decoration: none;
color: black;
font-size: xx-large;}
a:hover{
    font-weight: 600;
   
}
h1{text-align: center;
font-size: xxx-large;
}
.authentif{
    text-decoration: none;
    text-align: end;
}
img{
    height: 100vh;
    width: 100%;
}
nav{
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin-bottom: 50px;
}
footer{
    text-align: center;
    background-color: #e5e7eb;
    margin-top: 50px;
    
}
    body {
        
        background-color: #e5e7eb;
                                                
    }
</style>
  
        <div class="presentation">
            @if (Route::has('login'))
                <div class="authentif">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Profil</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Se connecter / </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">S'inscrire</a>
                        @endif
                    @endauth
                </div>
            @endif
<nav>
    <a href="/personnage/create">Personnages</a>
    <a href="/equipe/create">Equipes</a>
    <a href="/2">Invitations</a>
    <a href="/">Accueil</a>
</nav>
            <h1>Dungeon Project</h1>
            <img src="https://e0.pxfuel.com/wallpapers/487/441/desktop-wallpaper-fantasy-mountains-friendship-lock-girl-dragon-elf.jpg" alt="">
            <footer>
        Dungeon &copy;Hilel 2022
        </footer>