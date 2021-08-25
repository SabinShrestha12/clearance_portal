<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RM extends Model
{
    use HasFactory;
    public $table = "route_model";
    public $timestamps = false;
}
