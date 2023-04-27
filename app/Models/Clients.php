<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clients extends Model
{
    use HasFactory;

    /*
     * Récupérer les noms de domaine d'un client
     */

    public function noms_de_domaines(): HasMany {
        return $this->hasMany(Noms_de_domaine::class);
    }

}
