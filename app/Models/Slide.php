<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
   use HasFactory, SoftDeletes;

   protected $guarded = [];

   public static function data(){
        $data = Slide::select('*')
                    ->orderBy('name', 'ASC');

        return $data;
    } 
}
