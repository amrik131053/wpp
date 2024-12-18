<?php

namespace App\Models\staff;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department_master';
    use HasFactory;

    protected $fillable = ['department_name', 'department_short_name',];
}
