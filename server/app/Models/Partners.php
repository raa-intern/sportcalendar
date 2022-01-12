<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    //use HasFactory;
    public function getPartners() 
    {
        // return DB::table('users')
        //     ->select(
        //         "name", 
        //         "surname", 
        //         "email",
        //         "email_verified_at",
        //         "user_status",
        //         "group_id",
        //         "deleted_at",
        //         "last_visit",
        //         "created_at",
        //         "updated_at"
        //     )
        //     ->get();
    }
}
