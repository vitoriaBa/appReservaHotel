<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartos extends Model
{
    use HasFactory;
    protected $fillable = [
        'numeroquarto',
        'tipo',
        'valordiaria',
    ];
}
