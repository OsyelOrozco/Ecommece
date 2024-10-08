<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function subcategories(){
        return $this->belongsTo((Subcategory::class));

    }

    public function variant(){
        return $this->hasMany(variant::class);
    }

    public function opetions(){
        return $this->belongsToMany(option::class)->whithPivot('value')->whithTimeStamps();
    }
}
