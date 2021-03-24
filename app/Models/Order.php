<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Order extends Model
{
    use HasTranslations;
    
    protected $guarded = [];

    public $translatable = ['order_name','order_text'];
}
