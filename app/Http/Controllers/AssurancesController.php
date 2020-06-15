<?php

namespace App\Http\Controllers;

use App\Assurance;
use Illuminate\Http\Request;

class AssurancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assurances = Assurance::all();
        return view('criterias.assurances.index',compact('assurances'));
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
     * @param  \App\Assurance  $assurance
     * @return \Illuminate\Http\Response
     */
    public function show(Assurance $assurance)
    {
        return view('criterias.assusrances.show',compact('assurance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assurance  $assurance
     * @return \Illuminate\Http\Response
     */
    public function edit(Assurance $assurance)
    {
        return view('criterias.assurances.edit',compact('assurance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assurance  $assurance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assurance $assurance)
    {
        $request->validate([
            'name' => 'required',
            'bobot_assurance' => 'required'
        ]);

        Assurance::where('id',$assurance->id)
                    ->update([
                        'name' =>$request->name,
                        'bobot_assurance' =>$request->bobot_assurance
                    ]);
        return redirect('/assurances')->with('status','Data assurance berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assurance  $assurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assurance $assurance)
    {
        //
    }
}
