@extends('adminlte::page')

@section('title', 'Répondre au QCM')

@section('content')
    <div class="container">
        <br>
        <h1>Répondre au QCM</h1> <br>

        <div class="card border-info mb-3">
            <div class="card-header bg-info text-white">
                <h3 class="card-title">QCM Laravel</h3>
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    @csrf

                    <!-- Question 1 -->
                    <div class="form-group">
                        <label for="question1">Question 1: Quelle est la dernière version de Laravel ?</label><br>
                        <!-- Options -->
                        <div class="form-check">
                            <input type="radio" id="answer1_1" name="question1" value="1" class="form-check-input" style="background-color: #5bc0de;">
                            <label for="answer1_1" class="form-check-label text-dark">Laravel 8</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="answer1_2" name="question1" value="2" class="form-check-input" style="background-color: #5bc0de;">
                            <label for="answer1_2" class="form-check-label text-dark">Laravel 7</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="answer1_3" name="question1" value="3" class="form-check-input" style="background-color: #5bc0de;">
                            <label for="answer1_3" class="form-check-label text-dark">Laravel 9</label>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="form-group">
                        <label for="question2">Question 2: Quel est le but de l'ORM Eloquent ?</label><br>
                        <!-- Options -->
                        <div class="form-check">
                            <input type="radio" id="answer2_1" name="question2" value="1" class="form-check-input" style="background-color: #5bc0de;">
                            <label for="answer2_1" class="form-check-label text-dark">Gérer les relations entre les entités</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="answer2_2" name="question2" value="2" class="form-check-input" style="background-color: #5bc0de;">
                            <label for="answer2_2" class="form-check-label text-dark">Afficher les vues de l'application</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="answer2_3" name="question2" value="3" class="form-check-input" style="background-color: #5bc0de;">
                            <label for="answer2_3" class="form-check-label text-dark">Manipuler les fichiers statiques</label>
                        </div>
                    </div>

                    <!-- Bouton pour soumettre les réponses -->
                    <button type="submit" class="btn btn-success btn-lg mt-3">Soumettre les réponses</button>
                </form>
            </div>
        </div>
    </div>
@endsection
