<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Vacancy extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'text'
    ];
}
