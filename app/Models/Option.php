<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public function Products(){
        return $this->belongsToMany(Product::class)->whithPivote('value')->whithTimeSpamts();
    }
}
