@extends('adminlte::page')

@section('title', 'Liste des QCMs')

@section('content')
    <div class="container">
        <h1>Liste des QCMs</h1>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">QCM Disponibles</h3>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Titre :</strong> QCM Laravel <br>
                        <strong>Description :</strong> Un QCM sur les bases de Laravel. <br>
                        <strong>Date de création :</strong> 2025-01-10 <br>
                        <!-- Lien vers la page pour répondre au QCM -->
                        <a href="{{ route('repondre.qcm', ['id' => 1]) }}" class="btn btn-primary btn-sm mt-2">Répondre au QCM</a>
                    </li>
                    <li class="list-group-item">
                        <strong>Titre :</strong> QCM Kotlin <br>
                        <strong>Description :</strong> Un QCM sur le langage Kotlin. <br>
                        <strong>Date de création :</strong> 2025-01-12 <br>
                        <!-- Lien vers la page pour répondre au QCM -->
                        <a href="{{ route('repondre.qcm', ['id' => 2]) }}" class="btn btn-primary btn-sm mt-2">Répondre au QCM</a>
                    </li>
                    <li class="list-group-item">
                        <strong>Titre :</strong> QCM React <br>
                        <strong>Description :</strong> Un QCM sur la bibliothèque React. <br>
                        <strong>Date de création :</strong> 2025-01-13 <br>
                        <!-- Lien vers la page pour répondre au QCM -->
                        <a href="{{ route('repondre.qcm', ['id' => 3]) }}" class="btn btn-primary btn-sm mt-2">Répondre au QCM</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
