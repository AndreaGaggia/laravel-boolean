<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
            }

            header {
                background-color: slategray;
                color: white;
                padding: 2rem 0;
            }

            .centered {
                text-align: center;
            }

            nav {
                padding: 2rem 0;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 2rem;
            }
            nav a {
                text-decoration: none;
                color: inherit;
                text-transform: uppercase;
                border-bottom: 3px solid transparent;
            }
            nav a.active {
                border-bottom: 3px solid black;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <header class="centered">
            <h1>Blog</h1>
        </header>
        <nav>
            <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ Route::currentRouteName() === 'about' ? 'active' : '' }}">About</a>
            <a href="{{ route('posts') }}" class="{{ Route::currentRouteName() === 'posts' ? 'active' : '' }}">Posts</a>
        </nav>
        <section class="centered">
            <h2>about page</h2>
        </section>
    </body>
</html>
