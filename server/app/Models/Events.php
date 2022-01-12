<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class Events extends Model
{
    // use HasFactory;
     public function getEvents()
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
            ->latest()
            ->paginate(2);

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

    public function addEvent($id)
    {
        $affected = DB::table('events')
			->where(['id' => $id])
            ->update(['options->enabled' => true]);
    }

    public function deleteEvent($id)
    {
        $affected = DB::table('events')
            ->where(['id' => $id])
            ->delete();
    }

    public function createEvent($request)
    {

        $data = $request->all();

        $filename_image_intro = md5(microtime() . rand(0, 9999)) . '.' . $data['image_intro']->getClientOriginalExtension();
        $filename_image_full = md5(microtime() . rand(0, 9999)) . '.' . $data['image_intro']->getClientOriginalExtension();

        $data['image_intro']->move(Storage::path('public\image\\').'origin\\' , $filename_image_intro);
        $data['image_full']->move(Storage::path('public\image\\').'origin\\',$filename_image_full);

        $response = DB::table('events')
            ->insert([
                "event_name"            => $data['event_name'],
                "event_type"            => $data['event_type'],
                "event_description"     => $data['event_description'],
                "category_id"           => $data['category_id'],
                "city"                  => $data['city'],
                "street"                => $data['street'],
                "build_number"          => $data['build_number'],
                "geo_point"             => $data['geo_point'],
                "registration_date"     => $data['registration_date'],
                "start_date"            => $data['start_date'],
                "finish_date"           => $data['finish_date'],
                "event_link"            => $data['event_link'],
                "event_status"          => $data['event_status'],
                "image_intro"           => $filename_image_intro,
                "image_full"            => $filename_image_full,
                "alt_intro"             => $data['alt_intro'],
                "alt_full"              => $data['alt_full'],
                "meta_title"            => $data['meta_title'],
                "meta_desc"             => $data['meta_desc'],
                "rating"                => $data['rating'],
                "url"                   => $data['url'],
                "event_source"          => $data['event_source'],
                "created_at"            => $data['created_at'],
                "updated_at"            => $data['updated_at'],
            ]);
    }

    public function saveEvent($request, $id)
    {
        $data = $request->all();

        $filename_image_intro = md5(microtime() . rand(0, 9999)) . '.' . $data['image_intro']->getClientOriginalExtension();
        $filename_image_full = md5(microtime() . rand(0, 9999)) . '.' . $data['image_intro']->getClientOriginalExtension();

        $data['image_intro']->move(Storage::path('public\image\\').'origin\\' , $filename_image_intro);
        $data['image_full']->move(Storage::path('public\image\\').'origin\\',$filename_image_full);

        $affected = DB::table('events')
            ->where('id', $id)
            ->update([
                "event_name"            => $data['event_name'],
                "event_type"            => $data['event_type'],
                "event_description"     => $data['event_description'],
                "category_id"           => $data['category_id'],
                "city"                  => $data['city'],
                "street"                => $data['street'],
                "build_number"          => $data['build_number'],
                "geo_point"             => $data['geo_point'],
                "registration_date"     => $data['registration_date'],
                "start_date"            => $data['start_date'],
                "finish_date"           => $data['finish_date'],
                "event_link"            => $data['event_link'],
                "event_status"          => $data['event_status'],
                "image_intro"           => $filename_image_intro,
                "image_full"            => $filename_image_full,
                "alt_intro"             => $data['alt_intro'],
                "alt_full"              => $data['alt_full'],
                "meta_title"            => $data['meta_title'],
                "meta_desc"             => $data['meta_desc'],
                "rating"                => $data['rating'],
                "url"                   => $data['url'],
                "event_source"          => $data['event_source'],
                "created_at"            => $data['created_at'],
                "updated_at"            => $data['updated_at'],
            ]);
    }

}
