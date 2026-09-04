<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    protected $fillable = [
        'name',
        'email',
        'professional_title',
        'short_introduction',
        'phone_number',
        'address',
    ];
}
