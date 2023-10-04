<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use DB;
class EventImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public static function data(){
        $data = EventImage::select('event_images.*','events.name as event_name')
                    ->leftjoin('events', 'events.id', '=', 'event_images.event_id');

        return $data;
    }

}
