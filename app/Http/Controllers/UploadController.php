<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\AudioPost;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAudioPostRequest;
use App\Http\Requests\UpdateAudioPostRequest;

class UploadController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audioposts = AudioPost::where('user_id', Auth::id())->get(); 

        return view('upload.index', [
            'audioposts' => $audioposts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAudioPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAudioPostRequest $request)
    {
        $audiopost = AudioPost::create([
            'title' => $request->title,
            'thumb_file_path' => $request->file('thumb')->store('public/thumbs'),
            'audio_file_path' => $request->file('audio')->store('public/audio'),
            'description' => $request->description,
            'user_id' => Auth::id(),
        ]);

        return ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AudioPost $audiopost)
    {
        return view('upload.edit', [
            'audiopost' => $audiopost,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\StoreAudioPostRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAudioPostRequest $request, AudioPost $audiopost)
    {
        $update = AudioPost::where('id', $audiopost->id)->first();
        
        if($request->thumb != null) {
            $update->update([
                'thumb_file_path' => $request->file('thumb')->store('public/thumbs'),
            ]);
        }
        
        $update->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back()->with(['msg' => 'succesfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
