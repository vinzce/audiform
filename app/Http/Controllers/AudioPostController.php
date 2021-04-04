<?php

namespace App\Http\Controllers;

use App\Models\AudioPost;
use Illuminate\Http\Request;

class AudioPostController extends Controller
{
    public function index(AudioPost $audiopost) {

        $username = $audiopost->user->username;
       
        $suggestedAudios = AudioPost::all();

        return view('audiopost.show', [
            'audiopost' => $audiopost,
            'username' => $username,
            'suggestedaudios' => $suggestedAudios,
        ]); 
    }
}
