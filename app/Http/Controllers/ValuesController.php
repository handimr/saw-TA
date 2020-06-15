<?php

namespace App\Http\Controllers;

use App\Value;
use Illuminate\Http\Request;

class ValuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $values = value::all();
        return view('values.index', compact('values'));
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
     * @param  \App\Value  $value
     * @return \Illuminate\Http\Response
     */
    public function show(Value $value)
    {
        return view('values.show', compact('value'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Value  $value
     * @return \Illuminate\Http\Response
     */
    public function edit(Value $value)
    {
        return view('values.edit',compact('value'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Value  $value
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Value $value)
    {
            $request->validate([
                'name' => 'required',
                'keterangan' => 'required',
                'valuebobot' => 'required'
            ]);
        Value::where('id', $value->id)
                    ->update([
                        'name' =>$request->name,
                        'keterangan' =>$request->keterangan,
                        'valuebobot' =>$request->valuebobot,
                    ]);
        return redirect('/values')->with('status','Data bobot berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Value  $value
     * @return \Illuminate\Http\Response
     */
    public function destroy(Value $value)
    {
        //
    }
}
