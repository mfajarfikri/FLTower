<?php

namespace App\Http\Controllers;

use App\Models\Karawang;
use Illuminate\Http\Request;

class KarawangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.karawang');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Karawang $karawang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karawang $karawang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karawang $karawang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karawang $karawang)
    {
        //
    }
}
