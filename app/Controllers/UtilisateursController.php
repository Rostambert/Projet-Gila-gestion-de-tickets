<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\utilisateurs;
use Illuminate\Support\Facades\Session;

class UtilisateursController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'mail' => 'required|email',
            'passw' => 'required',
        ]);

        $utilisateur = utilisateurs::where('mail', $request->mail)->first();

        if ($utilisateur && password_verify($request->passw, $utilisateur->passhash)) {
            Session::put('utilisateurs', $utilisateur);

            switch ($utilisateur->role) {
                // case 'admin':
                    // return redirect()->route('admin');
                case 'agent':
                    return redirect()->route('agent.get');
                case 'utilisateur':
                    return redirect()->route('utilisateur.get');
                default:
                    return redirect()->route('/')->withErrors('Rôle inconnu');
            }
        }

        return redirect()->back()->withErrors('Email ou mot de passe incorrect.');
    }
}
