<?php

namespace App;

use App\Rumah;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = [];


    public function rumah()
    {
        return $this->belongsTo(Rumah::class, 'rumah_id', 'id');
    }

    public function getImageAttribute($value)
    {
        return url('storage/' . $value);
    }
}
