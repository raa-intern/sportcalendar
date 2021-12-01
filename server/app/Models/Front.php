<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Front extends Model
{
    // use HasFactory;
    protected $fillable = [
        "event_name", 
        "event_type", 
        "event_description",
        "category_id",
        "city",
        "street",
        "build_number",
        "geo_point",
        "registration_date",
        "state_date",
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
    ];
}
