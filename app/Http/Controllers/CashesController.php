<?php

namespace App\Http\Controllers;

use App\Cash;
use Illuminate\Http\Request;

class CashesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cashes = Cash::all();
        return view('criterias.cashes.index',compact('cashes'));
        //return Cash::all();
        return view ('/homeee');
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
     * @param  \App\Cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function show(Cash $cash)
    {
        return view('criterias.cashes.show',compact('cash'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function edit(Cash $cash)
    {
        return view('criterias.cashes.edit',compact('cash'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cash $cash)
    {
        $request->validate([
            'name' => 'required',
            'bobot_cash' => 'required'
        ]);

        Cash::where('id',$cash->id)
                    ->update([
                        'name' =>$request->name,
                        'bobot_cash' =>$request->bobot_cash
                    ]);
        return redirect('/cashes')->with('status','Data cash berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cash  $cash
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cash $cash)
    {
        //
    }
}
