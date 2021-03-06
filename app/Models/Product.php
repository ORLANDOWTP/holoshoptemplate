<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    public $incrementing = false;
    public function category(){
       return $this->belongsTo(Category::class);
    }
}
