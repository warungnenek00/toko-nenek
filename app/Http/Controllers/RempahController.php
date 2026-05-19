<?php

namespace App\Http\Controllers;

use App\Models\Rempah;

class RempahController extends Controller
{
    public function index()
    {
        $rempahs = Rempah::all();

        return view('welcome', [
            'rempahs' => $rempahs
        ]);
    }
}