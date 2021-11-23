<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseModel extends Model
{
    // use HasFactory;
    protected $fillable = ["event_name", "event_type", "event_description"];
}
