<?php

namespace App\Http\Controllers;

use App\City;
use App\Club;
use App\Sport;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\InteractsWithMedia;


class ClubsController extends Controller
{

    public function index()
    {
        $clubs = Club::all();
        return view('Club.index')->with('clubs', $clubs);
    }


    public function create()
    {
        $cities = City::all();
        $sports = Sport::all();
        return view('Club.create')->with('cities', $cities)->with('sports', $sports);
    }


    public function store(Request $request)
    {
        $club = Club::create($request->all());
        if ($request->has('logo')) {
            $club->addMedia($request->file('logo'))->toMediaCollection('logos');
        }
        $club->sports()->sync($request->input('sports', []));

        return redirect()->route('clubs.index');
    }


    public function show(Club $club)
    {
        $club->load('sports');
        $city = City::find($club->city_id);
        return view('Club.show', compact('club'))->with('city', $city);
    }


    public function edit(Club $club)
    {
        $cities = City::all();
        $sports = Sport::all();
        $club->load('sports');
        return view('Club.edit', compact('club'))->with('cities', $cities)->with('sports', $sports);
    }


    public function update(Request $request, Club $club)
    {
        $club->update($request->all());
        if ($request->has('logo')) {
            $club->addMedia($request->file('logo'))->toMediaCollection('logos');
        }
        $club->sports()->sync($request->input('sports', []));
        return redirect()->route('clubs.index');
    }


    public function destroy(Club $club)
    {

        $club->delete();

        return back();
    }
}
