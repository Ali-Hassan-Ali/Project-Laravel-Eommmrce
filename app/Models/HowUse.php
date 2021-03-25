<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class HowUse extends Model
{
    use HasTranslations;
    
    protected $guarded = [];

    public $translatable = ['Name_Class'];
}
