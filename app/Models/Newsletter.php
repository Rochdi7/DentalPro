<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Table name
    |--------------------------------------------------------------------------
    | Laravel va deviner automatiquement "newsletters", donc inutile de préciser
    | sauf si ta table porte un autre nom.
    */
    // protected $table = 'newsletters';

    /*
    |--------------------------------------------------------------------------
    | Mass Assignment
    |--------------------------------------------------------------------------
    | Liste des colonnes autorisées pour l’insertion via create() ou fill().
    */
    protected $fillable = [
        'email',
    ];

    /*
    |--------------------------------------------------------------------------
    | Timestamps
    |--------------------------------------------------------------------------
    | Laravel gère automatiquement created_at et updated_at
    */
    public $timestamps = true;
}
