<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;



class SupportCart extends Model
{
   
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['cart_type','name_cart','details_cart'];


}
