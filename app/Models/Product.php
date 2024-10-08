<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'sku',
        'name',
        'description',
        'image_path',
        'price',
        'subcategory_id'
    ];



    public function subcategories(){
        return $this->belongsTo((Subcategory::class));

    }

    public function variants(){
        return $this->hasMany(variant::class);
    }

    public function options(){
        return $this->belongsToMany(Option::class)->whithPivot('value')->whithTimeStamps();
    }
}
