<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    public function index() {
        $user = user::all();
        return response()->json(['data' => $user]);
    }
}
