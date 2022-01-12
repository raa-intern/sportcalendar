<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Front extends Model
{
    public function getSportEventsList()
    {
        return DB::table('events')
                ->select(
                    "id",
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
    // use HasFactory;
    // protected $fillable = [
    // "event_name",
    // "event_type",
    // "event_description",
    // "category_id",
    // "city",
    // "street",
    // "build_number",
    // "geo_point",
    // "registration_date",
    // 'start_date',
    // "finish_date",
    // "event_link",
    // "event_status",
    // "image_intro",
    // "image_full",
    // "meta_title",
    // "meta_desc",
    // "rating",
    // "url",
    // "event_source",
    // "created_at",
    // "updated_at"
    // ];
    public function getSportEventByID($id)
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
                    "alt_intro",
                    "alt_full",
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
}
