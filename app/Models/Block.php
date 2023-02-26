<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function blockingPerson()
    {
        return $this->belongsTo(User::class, 'blocking_person');
    }

    public function bannedPerson()
    {
        return $this->belongsTo(User::class, 'banned_person');
    }
}
