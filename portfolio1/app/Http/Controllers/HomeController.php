<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{

    public function home()
    {
        // $projects = json_decode(file_get_contents(storage_path('data/projects.json')));
        $projects = File::json(storage_path('data/projects.json'));

        $developer = json_decode(file_get_contents(storage_path('data/experiances.json')));
        return view('home', compact('projects', 'developer'));
     
    }
}
