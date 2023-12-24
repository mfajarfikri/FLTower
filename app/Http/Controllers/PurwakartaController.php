<?php

namespace App\Http\Controllers;

use App\Models\Ultg;
use App\Models\Gardu_induk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurwakartaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('gardu_induks')->where('ultg_id', 2)->get();
        $ultg = Ultg::all();
        return view('pages.purwakarta', ['data' => $data, 'ultg' => $ultg]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
