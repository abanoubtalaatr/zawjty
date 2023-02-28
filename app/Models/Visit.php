<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function pageOwner()
    {
        return $this->belongsTo(User::class, 'page_owner_id');
    }

    public function visitor()
    {
        return $this->belongsTo(User::class, 'visitor_id');
    }
}
