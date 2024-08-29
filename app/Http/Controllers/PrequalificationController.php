<?php

namespace App\Http\Controllers;

use App\Models\Prequalification;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrequalificationRequest;
use App\Http\Requests\UpdatePrequalificationRequest;

class PrequalificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('prequalification');
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
    public function store(StorePrequalificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Prequalification $prequalification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prequalification $prequalification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrequalificationRequest $request, Prequalification $prequalification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prequalification $prequalification)
    {
        //
    }
}
