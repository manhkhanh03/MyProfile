<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class QueryDatabaseProject extends BaseController {
    public function showHome() {
        return view('home');
    }

    public function showHomeChild($child) {
        return view($child);
    }

    public function showHomeChildProfile($child, ...$profile) {
        return view($child, ['profile' => $profile]);
    }
}