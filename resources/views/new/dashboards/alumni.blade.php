@extends('layouts.new-app')

@section('title', 'Dashboard Alumni')

@section('content')
<div class="container">
    <h1>Dashboard Alumni</h1>
    
    <!-- TODO: Ajouter les statistiques -->
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5>Mes Offres</h5>
                    <p class="display-4">0</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5>CVs Consultés</h5>
                    <p class="display-4">0</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5>Messages</h5>
                    <p class="display-4">0</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- TODO: Ajouter la liste des offres récentes -->
    <!-- TODO: Ajouter les CVs consultés récemment -->
</div>
@endsection
