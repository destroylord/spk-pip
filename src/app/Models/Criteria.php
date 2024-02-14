<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;
    
    protected $tables = 'criterias';

    protected $fillable = [
        'name', 'score', 'weight'
    ];
}
