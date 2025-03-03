@extends('adminlte::page')

@section('title', 'Tableau de bord')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <h1>Bienvenue sur le Dashboard</h1>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- Nombre total d'apprenants -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Nombre total d'apprenants</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="#" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- Nombre total de QCMs -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>25</h3>
                        <p>Nombre total de QCMs</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-list"></i>
                    </div>
                    <a href="#" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- Nombre d'apprenants ayant complété chaque QCM -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>120</h3>
                        <p>Apprenants ayant complété un QCM</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <a href="#" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- Nombre de QCMs créés par chaque formateur -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>5</h3>
                        <p>QCMs créés par formateur</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <a href="#" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- Statistiques de résultats (score moyen) -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>75%</h3>
                        <p>Score moyen</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <a href="#" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
