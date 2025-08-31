<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
class Category extends Model
{
    //
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'description',
        'is_active'
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    // set name attribute
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    // products relation
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}