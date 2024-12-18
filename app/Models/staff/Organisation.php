<?php

namespace App\Models\staff;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $table = 'organisation_master';
    use HasFactory;

    protected $fillable = ['orgnisation_name', 'orgnisation_short_name',];
}
