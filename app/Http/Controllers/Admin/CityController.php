<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\City;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities=
            City::latest()
            ->paginate(20);

        return view(
            'admin.cities.index',
            compact('cities')
        );
    }

    public function store(
        Request $request
    )
    {
        City::create(

            $request->validate([

                'name'=>'required',

                'slug'=>'required'

            ])

        );

        return back();
    }

    public function update(
        Request $request,
        City $city
    )
    {
        $city->update(

            $request->validate([

                'name'=>'required',

                'slug'=>'required'

            ])

        );

        return back();
    }

    public function destroy(
        City $city
    )
    {
        $city->delete();

        return back();
    }
}