<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Cliant extends Model
{
    use HasTranslations;
    
    protected $guarded = [];

    public $translatable = ['Name_Class'];
}
