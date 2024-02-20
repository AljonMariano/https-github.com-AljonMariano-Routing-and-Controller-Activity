<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
{
    $data = [
        'name' => 'Aljon Kent Mariano',
        'age' => 21,
        'occupation' => 'Student'
    ];

    return view('about_me', compact('data'));
}
}
