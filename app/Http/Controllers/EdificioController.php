<?php

namespace App\Http\Controllers;

use App\Models\edificio;
use App\Http\Requests\StoreedificioRequest;
use App\Http\Requests\UpdateedificioRequest;

class EdificioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $edificios=Edificio::all();
        return view('edificios.edificio-index',compact('edificios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreedificioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(edificio $edificio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(edificio $edificio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateedificioRequest $request, edificio $edificio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(edificio $edificio)
    {
        //
    }
}
