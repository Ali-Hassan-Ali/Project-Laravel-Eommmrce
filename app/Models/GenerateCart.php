<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class GenerateCart extends Model
{
    use HasTranslations;
    
    protected $guarded = [];

    public $translatable = ['cart_name','cart_text'];
}
