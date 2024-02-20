<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = ['Swimming', 'Competitive nerd', 'Driving'];
    
        return view('skills', compact('skills'));
    }
}
