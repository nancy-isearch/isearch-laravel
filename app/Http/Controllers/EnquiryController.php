<?php

namespace App\Http\Controllers;

use Exception;
use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\EnquiryRequest;
use App\Services\EnquiryService;

class EnquiryController extends Controller
{
    protected $service;

    public function __construct(EnquiryService $service)
    {
        $this->service = $service;
    }

    public function store(EnquiryRequest $request)
    {
        try {

            $enquiry = $this->service->create($request->validated());

            return ApiResponse::success(
                'Enquiry submitted successfully.',
                $enquiry,
                201
            );

        } catch (Exception $e) {

            return ApiResponse::error(
                'Failed to submit enquiry.',
                $e->getMessage(),
                500
            );
        }
    }
}