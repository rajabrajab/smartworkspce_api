<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomTimeSlot extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'room_id',
        'start_time',
        'end_time',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
