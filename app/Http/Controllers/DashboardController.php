<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function alumniDashboard()
    {
        // TODO: Récupérer les statistiques de l'alumni
        // - Nombre d'offres publiées
        // - Nombre de CVs consultés
        // - Nombre de messages reçus
        
        return view('new.dashboards.alumni');
    }

    public function studentDashboard()
    {
        // TODO: Récupérer les statistiques de l'étudiant
        // - Nombre de CVs uploadés
        // - Nombre de vues de CVs
        // - Nombre de messages reçus
        
        return view('new.dashboards.student');
    }
}
