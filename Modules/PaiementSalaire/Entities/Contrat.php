<?php

namespace Modules\PaiementSalaire\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contrat extends Model
{
    use HasFactory;

    
    protected $table = "typecontrat";
    protected $fillable = [
        'name',
        'description',
        'duration',
        'cnssRate',
        'forprolosRate',
];
    protected static function newFactory()
    {
        return \Modules\PaiementSalaire\Database\factories\ContratFactory::new();
    }
}
