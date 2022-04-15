<?php

namespace Modules\PaiementSalaire\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    use HasFactory;
    protected $table = "employees";
    protected $fillable = [
            'cin',
            'name',
            'lastName',
            'dateBirth',
            'sex',
            'maritalStatut',
            'city',
            'adress',
            'email',
            'phoneNumber',
            'cnss',
            'function',
            'typeContract',
            'hiringDate',
            'contractEndDate',
    ];
    
    protected static function newFactory()
    {
        return \Modules\PaiementSalaire\Database\factories\EmployeFactory::new();
    }
}
