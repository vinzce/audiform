<?php

namespace App\Http\Controllers;

use App\Models\AudioPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $audioposts = AudioPost::all();
        
        return view('home', [
            'audioposts' => $audioposts,
        ]);
    }
}
