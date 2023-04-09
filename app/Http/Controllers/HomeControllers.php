<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeControllers extends BaseController
{
    public function showwellcome($name) {
        return view('fileTest', ['name' => $name]) ;
    }

    public function logger($param, $param2) {
        return $param . "\t" . $param2;
    }
}
