<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UpsBrand extends Model
{
    //
    protected $table = 'ups_brands';
    protected $fillable = ['name', 'image', 'slug', 'description', 'file_upload'];
    // set attribute name to slug
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

}