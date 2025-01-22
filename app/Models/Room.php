<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'category_id',
        'price_per_hour',
        'status',
        'capacity',
        'location',
        'slot_duration',
        'service_start_time',
        'service_end_time',
        'cleaning_duration'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'room_feature');
    }

    public function timeSlots()
    {
        return $this->hasMany(RoomTimeSlot::class);
    }
}
