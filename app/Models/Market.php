<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Market extends Model
{
    use HasTranslations;
    
    protected $guarded = [];

    public $translatable = ['name'];

   public function user() {

    return $this->belongsTo('App\Models\User');
    
   }
}
