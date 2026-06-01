<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'name',
        'mobile',
        'dial_code',
        'email',
        'url',
        'service',
        'requirement',
        'ip_address',
        'user_agent',
    ];
}
