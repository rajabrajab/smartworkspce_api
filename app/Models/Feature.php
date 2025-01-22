<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feature extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'description'];

     public function rooms()
    {
        return $this->belongsToMany(Room::class, 'room_feature');
    }
}
