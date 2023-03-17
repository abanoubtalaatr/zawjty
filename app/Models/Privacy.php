<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'updated_at' => 'datetime:Y-m-d'
    ];
}
