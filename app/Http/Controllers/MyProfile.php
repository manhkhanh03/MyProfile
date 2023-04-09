<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MyProfile extends Controller
{
    public function api(Request $request) {
        $user = new User();
        $user -> Name = $request -> input('name');
        $user -> Address = $request -> input('address');
        $user -> Phone = $request -> input('phone');
        $user -> save();
        return response()->json(['message' => 'User created successfully'], 201);
    }

    public function get() {
        return DB::select('select * from MyProfile');
    }

    // public function post(Request $request) {
    //     DB::insert('insert into MyProfile (Name, Address, Phone) values (?, ?, ?)', [$request -> input('name'), $request -> input('address'), $request -> input('phone')]);
    // }
}
