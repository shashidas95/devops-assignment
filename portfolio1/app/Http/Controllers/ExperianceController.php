<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperianceController extends Controller
{

    public function experiances()
    {
        $developer = json_decode(file_get_contents(storage_path('data/experiances.json')));
        // dd($developer);
        return view('experiances', compact('developer'));
    }
}
