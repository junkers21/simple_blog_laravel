<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Simple Blog') }}</title>

        @vite('resources/js/app.js')
    </head>
    <body>

        <header>
            <!-- START Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('') }}">Blog Test</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ url('') }}">Home</a>
                        <a class="nav-link {{ (request()->is('posts/create')) ? 'active' : '' }}" href="{{ route('posts.create') }}">Post Something</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- END Navigation -->
        </header>

        @include('layouts.includes._alerts')

        @yield('content')

        @include('layouts.includes._confirmation_modal')
    </body>
</html>