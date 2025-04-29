<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use App\Models\materiel;
use App\Models\etat;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $id = auth()->user()->id;
        $role = auth()->user()->role;
        if ($role == 'agent') {
            // Récupérer tous les incidents
            $incidents = Incident::all();
        } else {
            // Récupérer les incidents de l'utilisateur connecté
            $incidents = Incident::where('user_id', $id)->get();
        }
        
        // Passer les incidents à la vue
        return view('Incident.index', compact('incidents'));
            
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $materiels = materiel::all();
        $etats = etat::all();
        return view('Incident.create',compact('materiels', 'etats',));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'salle' => 'required|string|max:255',
            'poste' => 'required|string|max:255',
            'batiment' => 'required|string|max:255',
            'materiel_id' => 'required|exists:materiels,id',
            'priorite' => 'required|integer|between:1,3',
            'user_id' => 'required|exists:users,id',
        ]);

        // Création de l'incident
        $incident = Incident::create($validated);

        // Vérification de la sauvegarde
        if ($incident) {
            return redirect()->route('incident.index')->with('success', 'Incident créé avec succès.');
        } else {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la création de l\'incident.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Incident $incident)
    {
       
        
        return view('Incident.show', compact('incident'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Incident $incident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Incident $incident)
    {
        // mise à jour de l'etat de l'incident
        $incident->etat_id = $request->etat_id;
        $incident->save();
        // Redirection vers la page de l'incident   
        return redirect()->route('incident.show', $incident->id)->with('success', 'Incident mis à jour avec succès.');
        


        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Incident $incident)
    {
        //
    }
}
