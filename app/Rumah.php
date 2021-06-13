<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Gallery;

class Rumah extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function gallery()
    {
        // return $this->hasMany(Gallery::class, 'rumah_id', 'id');
        return $this->hasMany(Gallery::class, 'rumah_id');
    }
}
