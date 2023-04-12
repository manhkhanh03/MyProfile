<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Myprofile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Myprofile::all();
        return response()->json($data, 200, ["OK"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Myprofile::create($request->all());
        return response()->json($data, 201, ["Created"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Myprofile::find($id);
        return response()->json($data, 200, ['OK']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $myProfile = Myprofile::find($id);
        $myProfile->update($request->all());
        return response()->json($myProfile, 200, ['OK']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $myProfile = Myprofile::find($id);
        $myProfile->delete();
        return response()->json($myProfile, 200, ['OK']);
    }
}
