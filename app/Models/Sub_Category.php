<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class sub_category extends Model
{
    use HasTranslations;
    
    protected $guarded = [];

    public $translatable = ['name'];

    public function parent_category()
    {
    return $this->belongsTo('App\Models\Parent_Category');
    }

    public function user()
    {
    return $this->belongsTo('App\Models\User');
    }

    public function getImagePathAttribute()
    {
        return asset('uploads/categories/' . $this->image);

    }//end of get image path

}
