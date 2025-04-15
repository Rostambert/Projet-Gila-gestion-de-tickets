<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use utils\SessionHelpers;

class utilisateurs extends Model
{
    use HasFactory;
    public function login($username, $password): bool
    {
        /*
         * TODO DANS LA VRAI VIE
         * ICI NOUS APPELLERIONS LA BDD AFIN DE VÉRIFIER LE COMPTE
         */

        SessionHelpers::login((object)array("username" => "Utilisateur démo", "email" => $username));
        return true;
    }
}
