<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Parser extends Model
{
    //use HasFactory;
    public function getParsedData() 
    {
        return DB::table('parsed_data')
            ->select(
                "parse_event_name", 
                "parse_event_type", 
            )
            ->get();
    }
}
