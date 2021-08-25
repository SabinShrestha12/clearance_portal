<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_status extends Model
{
    use HasFactory;
    public $table = "std_status";
    public $timestamps = false;
}
