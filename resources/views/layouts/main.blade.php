<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="{{ $description ?? ''}}">

        <title>{{ $title ?? '3Gimmo'}}</title>
        <!-- Get BOOTSTRAP v4.5.2 -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
            crossorigin="anonymous"
        >
        <style>
            body
            {
                padding-top: 56px;
            }
            h1.title{
                font-size: 1.25rem;
            }
        </style>
    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <h1 class="title"><a class="navbar-brand" href="{{ url('/')}}">{{ config('app.name') }}</a></h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Accueil</a>
                        </li>
                        <!-- options du menu si aucun utilisateur n'est connecté -->
                        <!-- si le helper 'guest' renvoie true vous n'est qu'un invité et donc non connecté -->
                        <!-- alors le menu connexion ou register vous est proposé -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Inscription</a>
                            </li>
                        @endguest
                        <!-- sinon ici le helper 'auth' renvoie true et donc le menu logout est proposé -->
                        @auth
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('articles.create') }}">Ajouter un article</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('logout') }}">Déconnexion</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">

            @yield('content');

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Formation Laravel 2022</p>
            </div>
            <!-- /.container -->
        </footer>

    </body>
</html>
