@extends('adminlte::page')

@section('title', 'Résultat du QCM')

@section('content')
    <div class="container">
        <h1>Résultat du QCM</h1>
        <div class="card border-primary mb-3">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Votre Score</h3>
            </div>
            <div class="card-body">
                <p><strong>Nom du QCM :</strong> QCM Laravel</p>
                <p><strong>Date de passation :</strong> 2025-01-15</p>
                <p><strong>Score :</strong> <span class="text-success">80%</span></p>

                <h5 class="mt-3">Vos Réponses :</h5>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success">
                        <strong>Question 1 :</strong> Quelle est la version actuelle de Laravel ?<br>
                        <strong>Votre Réponse :</strong> Laravel 8 <br>
                        <strong>Réponse Correcte :</strong> Laravel 8 <br>
                        <strong>Status :</strong> <span class="text-success">Correct</span>
                    </li>
                    <li class="list-group-item list-group-item-danger">
                        <strong>Question 2 :</strong> Comment gérer les relations entre les entités dans Laravel ?<br>
                        <strong>Votre Réponse :</strong> Gérer les relations entre les entités <br>
                        <strong>Réponse Correcte :</strong> Utiliser les Eloquent relationships <br>
                        <strong>Status :</strong> <span class="text-danger">Incorrect</span>
                    </li>
                </ul>

                <h5 class="mt-3">Résumé des erreurs :</h5>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-warning">
                        <strong>Question 2 :</strong> La bonne réponse était "Utiliser les Eloquent relationships", mais vous avez répondu : "Gérer les relations entre les entités".
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
