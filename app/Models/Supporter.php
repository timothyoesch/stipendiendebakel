<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supporter extends Model
{
    use HasFactory;

    public $table = 'supporters';

    public $fillable = [
        'fname',
        'lname',
        'email',
        'school',
        'email_verified',
        'email_verification_token',
    ];

    public $casts = [
        'email_verified' => 'boolean',
    ];

    public $dates = [
        'created_at',
        'updated_at',
    ];
}
