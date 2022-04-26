<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Region;

class RegionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::join('countries', 'countries.id', '=', 'regions.country_id')
            ->where('countries.is_active', 1)
            ->orderBy('countries.name', 'asc')
            ->orderBy('regions.name', 'asc')
            ->paginate(15, [
                'regions.id', 'regions.name', 'regions.is_active', 'regions.country_id'
            ]);

        return view('region.index', [
            'regions' => $regions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('region.create', [
            'countries' => $this->getCountries()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $this->validateData($request);

        $region = new Region();
        $region->name = $validData['name'];
        $region->country_id = $validData['country_id'];
        $region->save();
        return redirect(route('regions'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $region = Region::findOrFail($id);
        $countries = $this->getCountries();
        return view('region.create', [
            'region' => $region,
            'countries' => $countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validData = $this->validateData($request);

        $region = Region::findOrFail($id);
        $region->name = $validData['name'];
        $region->country_id = $validData['country_id'];
        $region->save();
        return redirect(route('regions'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $region = Region::findOrFail($id);
        $region->delete();
        return redirect(route('regions'));
    }

    public function changeStatus($id)
    {
        $region = Region::findOrFail($id);
        $region->is_active = $region->is_active == 1 ? 0 : 1;
        $region->save();
        return redirect(route('regions'));
    }

    public function validateData($request)
    {
        return $request->validate([
            'name' => 'required|min:3',
            'country_id' => 'required',
        ]);
    }

    public function getCountries()
    {
        return Country::status(1)
            ->orderBy('name', 'asc')
            ->get(['id', 'name']);
    }
}
