<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class utilisateurs extends Model
{
    protected $table = 'utilisateurs';
    public $timestamps = false;

    protected $fillable = [
        'nom', 'mail', 'passw', 'passhash', 'role', 'telephone'
    ];
}
