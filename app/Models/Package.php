<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function features()
    {
        return $this->hasMany(FeaturePackage::class, 'package_id', 'id');
    }
}
