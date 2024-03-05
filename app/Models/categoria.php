<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    public $timestamps = false; //! nos evita traer la fecha de creacion y de actualizacion
    protected $fillable=['id', 'cat_nom'];//? Nos trae los campos que necesitamos
}
