@extends('layouts.app')

@section('content')
<body>
    <div id="app">
            <main class="py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ ('Bonjour , ').$userInfo['name'] }}</div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <b>{{('Identifiant : ')}} </b> {{$userInfo['name']}}</br>
                                    <b>{{('Email : ')}} </b> {{$userInfo['email']}}</br>
                                    <b>{{('Tâche crée : ')}} </b> </br>
                                    <b>{{('Tâche términée : ')}} </b> </br>
                                    <b>{{('Tâche en cours : ')}} </b> </br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
@endsection
