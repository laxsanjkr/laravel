<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestionnaire de tache</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <!-- Création du div 'id = app' comme définie dans le fichier 'app.js'  -->
        <div id="app">
            <!-- NAVBAR importer depuis bootstrap -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Gestionnaire de tâche</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <!-- Syntaxe HTML remplacé par la syntaxe 'vue-router' -->
                            <router-link to="/" class="nav-link"> Accueil </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/tasks" class="nav-link"> Liste des tâches </router-link>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <!-- Emplacement ou vont apparaitre les differentes TAB sans rechargement du navigateur -->
            <div class="container pt-2">
               <router-view></router-view>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
