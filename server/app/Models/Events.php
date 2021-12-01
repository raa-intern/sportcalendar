<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Events extends Model
{
    // use HasFactory;

    public function getEvents() 
    {
        return DB::table('events')
            ->select(
                "event_name", 
                "event_type", 
                "event_description",
                "category_id",
                "city",
                "street",
                "build_number",
                "geo_point",
                "registration_date",
                "start_date",
                "finish_date",
                "event_link",
                "event_status",
                "image_intro",
                "image_full",
                "meta_title",
                "meta_desc",
                "rating",
                "url",
                "event_source",
                "created_at",
                "updated_at"
            )
            ->get();
    }

    public function getEventByID($id)
    {
        return DB::table('events')
            ->select(
                "event_name", 
                "event_type", 
                "event_description",
                "category_id",
                "city",
                "street",
                "build_number",
                "geo_point",
                "registration_date",
                "start_date",
                "finish_date",
                "event_link",
                "event_status",
                "image_intro",
                "image_full",
                "meta_title",
                "meta_desc",
                "rating",
                "url",
                "event_source",
                "created_at",
                "updated_at"
            )
            ->where(['events.id' => $id])
            ->first();
            
    }

    public function addEvent($id)
    {
        $affected = DB::table('events')
			->where(['id' => $id])
            ->update(['options->enabled' => true]);

    }


}
