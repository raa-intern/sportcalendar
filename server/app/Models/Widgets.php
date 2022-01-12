<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Widgets extends Model
{
   // use HasFactory;
   public function getWidgets()
   {
        return DB::table('events')
                ->select(
                    'event_name',
                    'event_type',
                    'image_intro',
                    'image_full',
                    'event_description'
                )
                ->get();
   }
}
