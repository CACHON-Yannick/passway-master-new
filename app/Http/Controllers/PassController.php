<?php

namespace App\Http\Controllers;

use App\Models\Pass;
use App\Http\Requests\StorePassRequest;
use App\Http\Requests\UpdatePassRequest;

class PassController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePassRequest $request)
    {
        Pass::create($request->all());
        return redirect()->back()->with('success', 'Pass creer !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pass  $pass
     * @return \Illuminate\Http\Response
     */
    public function edit(Pass $pass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePassRequest  $request
     * @param  \App\Models\Pass  $pass
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePassRequest $request, Pass $pass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pass  $pass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pass $pass)
    {
        Pass::destroy($pass);
        return redirect()->route('event.edit')->with('success', 'Pass supprimer !');
    }
}
