<?php

namespace App\Http\Controllers;

use App\Models\Ultg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LayoutController extends Controller
{
    public function index()
    {
        $data = Ultg::all();
        return view('layouts.layout', $data);
    }

    public function show($gardu_id)
    {

        $data = DB::table('bays')->where('gardu_id', $gardu_id)->get();

        return response()->json(['data' => $data]);
    }
}
