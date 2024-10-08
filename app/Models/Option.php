<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'type'
    ];



    public function products(){
        return $this->belongsToMany(Product::class)->whithPivote('value')->whithTimeSpamts();
    }

    public function features(){
        return $this->hasMany(Feature::class);
    }
}
