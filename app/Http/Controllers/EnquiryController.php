<?php

namespace App\Http\Controllers;

use Exception;
use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\EnquiryRequest;
use App\Services\EnquiryService;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Enquiry::select('*')->orderBy('id', 'desc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('full_name', function($row){
                    return $row->name;
                })
                ->addColumn('product_name', function($row){
                    return $row->service;
                })
                ->addColumn('phone', function($row){
                    return ($row->dial_code ? $row->dial_code . ' ' : '') . $row->mobile;
                })
                ->addColumn('url', function($row){
                    return $row->url ?? 'NA';
                })
                ->addColumn('actions', function($row){
                    $viewBtn = '<button data-id="'.$row->id.'" class="enq-btn enq-btn--ghost viewBtn btn-sm me-2"><i class="lni lni-eye"></i> View</button>';
                    
                    $statusSelect = '<select class="form-select form-select-sm statusChange d-inline-block w-auto" data-id="'.$row->id.'">
                        <option value="pending" '.($row->status == 'pending' ? 'selected' : '').'>Pending</option>
                        <option value="in-progress" '.($row->status == 'in-progress' ? 'selected' : '').'>In Progress</option>
                        <option value="completed" '.($row->status == 'completed' ? 'selected' : '').'>Completed</option>
                    </select>';
                    return '<div class="d-flex gap-2">'.$viewBtn . $statusSelect.'</div>';
                })
                ->editColumn('created_at', function($row){
                    return $row->created_at->format('Y-m-d H:i');
                })
                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('admin.modules.Enquiry.list');
    }

    public function show($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        return response()->json([
            'full_name' => $enquiry->name,
            'email' => $enquiry->email,
            'phone' => ($enquiry->dial_code ? $enquiry->dial_code . ' ' : '') . $enquiry->mobile,
            'product' => ['name' => $enquiry->service],
            'url' => $enquiry->url ?? 'NA',
            'message' => $enquiry->requirement,
            'status' => $enquiry->status,
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->status = $request->status;
        $enquiry->save();

        return response()->json(['message' => 'Status updated successfully']);
    }
}