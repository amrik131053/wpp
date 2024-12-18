<?php

namespace App\Models\staff;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculty_master';
    use HasFactory;

    protected $fillable = ['faculty_name', 'faculty_short_name',];
}
