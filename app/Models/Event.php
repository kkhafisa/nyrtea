<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public static function data(){
        $data = Event::select('*')
                    ->orderBy('name', 'ASC');

        return $data;
    }

     public static function detail($event){
        $data = Event::select('events.*')
                    ->where('events.id', $event);

        return $data;
    }
}
