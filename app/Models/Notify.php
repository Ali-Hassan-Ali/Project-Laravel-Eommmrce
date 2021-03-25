<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Notify extends Model
{
    use HasTranslations;
    
    protected $guarded = [];

    public $translatable = ['Name_Class'];
}
