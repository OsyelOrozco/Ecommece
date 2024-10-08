<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature_variant extends Model
{
    use HasFactory;

    protected $fillable=[
        'variants_id',
        'features_id'

    ];
}
