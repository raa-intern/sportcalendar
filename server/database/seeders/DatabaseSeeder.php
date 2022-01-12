<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,20) as $index) {
            DB::table('events')->insert([
                'event_name'  => $faker->event_name,
                'event_type'  => $faker->event_type,
                'event_description' => $faker->event_description,
                'category_id' => $faker,
                'city' => $faker,
                'street' => $faker,
                'build_number' => $faker,
                'geo_point' => $faker,
                'registration_date' => $faker->date( $format = 'D-m-Y', $max = '2010', $min = '1980'),
                'start_date' => $faker->date( $format = 'D-m-Y', $max = '2010', $min = '1980'),
                'finish_date' => $faker->date( $format = 'D-m-Y', $max = '2010', $min = '1980'),
                'event_link' => $faker,

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

            ]);
        }
        // \App\Models\User::factory(10)->create();
    }
}
