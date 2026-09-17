<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'dial_code',
        'mobile',
        'url',
        'service',
        'requirement',
        'ip_address',
        'user_agent',
        'status',
        'remarks',
    ];
}
