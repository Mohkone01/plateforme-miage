<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentCv;

class StudentCvController extends Controller
{
    public function index()
    {
        // TODO: Afficher les CVs
        // - Pour les étudiants: leurs propres CVs
        // - Pour les alumni: tous les CVs actifs
        
        return view('new.cvs.index');
    }

    public function create()
    {
        // TODO: Afficher le formulaire d'upload
        // - Vérifier que l'utilisateur est un étudiant
        
        return view('new.cvs.create');
    }

    public function store(Request $request)
    {
        // TODO: Valider et enregistrer le CV
        // - Valider le fichier (type, taille)
        // - Stocker le fichier de manière sécurisée
        // - Créer l'enregistrement en base
    }

    public function show($id)
    {
        // TODO: Afficher les détails du CV
        // - Vérifier les permissions
        // - Incrémenter les vues
    }

    public function download($id)
    {
        // TODO: Télécharger le CV
        // - Vérifier les permissions (alumni uniquement)
        // - Incrémenter le compteur de téléchargements
        // - Retourner le fichier
    }

    public function destroy($id)
    {
        // TODO: Supprimer le CV
        // - Vérifier que l'utilisateur est le propriétaire
        // - Supprimer le fichier physique
        // - Supprimer l'enregistrement
    }
}
