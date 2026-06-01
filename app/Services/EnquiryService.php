<?php

namespace App\Services;

use App\Models\Enquiry;

class EnquiryService
{
    public function create(array $data)
    {
        return Enquiry::create([
            'name'        => $data['name'],
            'mobile'      => $data['mobile'],
            'dial_code'   => $data['dial_code'] ?? null,
            'email'       => $data['email'],
            'url'         => $data['url'] ?? null,
            'service'     => $data['service'],
            'requirement' => $data['requirement'],
            'ip_address'  => request()->ip(),
            'user_agent'  => request()->userAgent(),
        ]);
    }
}