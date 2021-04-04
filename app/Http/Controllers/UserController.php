<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\AudioPost;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($username) {
        
        $user = User::where('username', $username)->first();
        $userAudioPosts =  $user->AudioPosts;

        if($user == null) {
            abort(404);
        }
         
        return view('user.profile', [
            'user' => $user,
            'audioposts' => $userAudioPosts,
        ]);
    }
}
