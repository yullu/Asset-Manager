<?php

namespace App\Http\Controllers;

use App\Models\Erecord;
use Illuminate\Http\Request;


class ReportsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index()
    {
        //
        $statusus = Erecord::get();
        return view('reports', compact('statusus'));

    }
    public function store(Request $request)
    {
        $status = $request->status;
        $reco = Erecord::where('status', $status)->get();

        return view('display', compact('reco'));
    }
}
