<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelApiEmple extends Model
{
    protected $table = 'empleados'; 
    protected $primaryKey = 'id'; 
    public $timestamps = false; 
    
    protected $fillable = [
        'nombres',
        'apellidos',
        'fechanac',
        'correo',
        'foto',
    ];

}
