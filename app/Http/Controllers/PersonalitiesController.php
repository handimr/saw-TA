<?php

namespace App\Http\Controllers;

use App\Personality;
use Illuminate\Http\Request;

class PersonalitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalities = Personality::all();
        return view ('criterias.personalities.index', compact('personalities'));
        
        // return Personality::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personality  $personality
     * @return \Illuminate\Http\Response
     */
    public function show(Personality $personality)
    {
        return view('criterias.personalities.show', compact('personality'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personality  $personality
     * @return \Illuminate\Http\Response
     */
    public function edit(Personality $personality)
    {
        return view('criterias.personalities.edit',compact('personality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personality  $personality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personality $personality)
    {
        $request->validate([
            'name' => 'required',
            'bobot_personality' =>'required'
        ]);

        Personality::where('id',$personality->id)
                    ->update([
                        'name' => $request->name,
                        'bobot_personality' =>$request->bobot_personality
                    ]);
        return redirect('/personalities')->with('status','Data kepribadian berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personality  $personality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personality $personality)
    {
        //
    }
}
