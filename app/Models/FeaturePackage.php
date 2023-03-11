<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturePackage extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['feature'];

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
