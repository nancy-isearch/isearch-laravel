<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services=
            Service::latest()
            ->paginate(20);

        return view(
            'admin.services.index',
            compact('services')
        );
    }

    public function store(
        Request $request
    )
    {
        Service::create(

            $request->validate([

                'name'=>'required',

                'slug'=>'required'

            ])

        );

        return back();
    }

    public function update(
        Request $request,
        Service $service
    )
    {
        $service->update(

            $request->validate([

                'name'=>'required',

                'slug'=>'required'

            ])

        );

        return back();
    }

    public function destroy(
        Service $service
    )
    {
        $service->delete();

        return back();
    }
}