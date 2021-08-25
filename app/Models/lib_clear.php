<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lib_clear extends Model
{
    use HasFactory;
    public $table = "library";
    public $timestamps = false;
}
