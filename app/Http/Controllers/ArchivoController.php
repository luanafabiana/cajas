<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Http\Requests\StoreArchivoRequest;
use App\Http\Requests\UpdateArchivoRequest;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return true;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return true;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArchivoRequest $request)
    {
        return true;
    }

    /**
     * Display the specified resource.
     */
    public function show(Archivo $archivo)
    {
        return true;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Archivo $archivo)
    {
        return true;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArchivoRequest $request, Archivo $archivo)
    {
        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Archivo $archivo)
    {
        return true;
    }
}
