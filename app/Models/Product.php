<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Comando 2: php artisan make:model
    use HasFactory;

    protected $fillable=[
        'name',
        'price',
        'description'
    ];
}
