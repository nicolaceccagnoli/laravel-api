<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Project;


class ProjectController extends Controller
{
    //Dobbiamo recuperare i dati del DB ed esporli pubblicamente
    public function index() {


        // Recupero tutti i project
        $projects = Project::with('type', 'technologies') // Tramite Eager Loading gli dico di portarsi dietro le relazioni durante la serializzazione dei project
                    ->paginate(3);                        // Imposot la paginazione per mostrare 3 risultati in ogni pagina

        return response()->json([  
            'code' => 200,                                // Restituisco la lista di tutti i projects nel mio DB
            'message' => 'success',
            'results' => $projects
        ]);
    }
}
