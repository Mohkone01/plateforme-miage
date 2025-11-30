<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPosting;

class JobPostingController extends Controller
{
    public function index()
    {
        // TODO: Récupérer et afficher toutes les offres
        // - Filtrer par statut actif
        // - Paginer les résultats
        // - Trier par date de création
        
        return view('new.jobs.index');
    }

    public function create()
    {
        // TODO: Afficher le formulaire de création
        // - Vérifier que l'utilisateur est un alumni
        
        return view('new.jobs.create');
    }

    public function store(Request $request)
    {
        // TODO: Valider et enregistrer l'offre
        // - Valider tous les champs requis
        // - Créer l'offre avec l'ID de l'alumni
        // - Rediriger avec message de succès
    }

    public function show($id)
    {
        // TODO: Afficher les détails d'une offre
        // - Récupérer l'offre avec les relations
        // - Incrémenter le compteur de vues
        // - Afficher la vue détaillée
    }

    public function edit($id)
    {
        // TODO: Afficher le formulaire de modification
        // - Vérifier que l'utilisateur est le propriétaire
        // - Charger l'offre
    }

    public function update(Request $request, $id)
    {
        // TODO: Valider et mettre à jour l'offre
        // - Vérifier les permissions
        // - Valider les données
        // - Mettre à jour
    }

    public function destroy($id)
    {
        // TODO: Supprimer l'offre
        // - Vérifier les permissions
        // - Supprimer l'offre
        // - Rediriger avec message
    }
}
