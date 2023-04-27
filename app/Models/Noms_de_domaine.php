<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Noms_de_domaine extends Model
{
    use HasFactory;

    /*
     * Récupérer le client d'un nom de domaine
     */

    public function client(): BelongsTo {
        return $this->belongsTo(Clients::class);
    }

}
