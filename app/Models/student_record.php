<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_record extends Model
{
    use HasFactory;
    public $table = "student_data";
    public $timestamps = false;
}
