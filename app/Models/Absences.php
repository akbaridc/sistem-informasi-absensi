<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ILLuminate\Database\Eloquent\SoftDeletes;

class Absences extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'seperior_id',
        'deskripsi',
        'status'
    ];
}
