<?php

namespace App\Http\Controllers;

use App\Models\Erecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;


class ErecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $erecords = Erecord::orderBy('id','desc')->paginate(5);
        //$erecords = Erecord::orderBy('id','desc')->get();

        return view('list', compact('erecords'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $statuses = [
            [
                'label'=>'Working',
                'value'=>'Working',
            ],
            [
                'label'=>'Damaged',
                'value'=>'Damaged',
            ]
        ];

        return view('create', compact('statuses'));
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
        $request->validate([
            'asset_name'=>'required'
        ]);

        $erecord = new Erecord();
        $erecord->asset_name= $request->asset_name;
        $erecord->brand= $request->brand;
        $erecord->serial_no= $request->serial_no;
        $erecord->description= $request->description;
        $erecord->status= $request->status;
        $erecord->save();

        return redirect()->route('erecords.index')->withSuccess('Record Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $statuses = [
            [
                'label'=>'Working',
                'value'=>'Working',
            ],
            [
                'label'=>'Damaged',
                'value'=>'Damaged',
            ]
        ];
        $ereco = Erecord::findorFail($id);
        return view('edit', compact('ereco','statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $erecord= Erecord::findOrFail($id);
        $request->validate([
            'asset_name'=>'required'
        ]);

        $erecord->asset_name= $request->asset_name;
        $erecord->brand= $request->brand;
        $erecord->serial_no= $request->serial_no;
        $erecord->description= $request->description;
        $erecord->status= $request->status;
        $erecord->save();

        return redirect()->route('erecords.index')->withSuccess('Record updated Successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $erecords= Erecord::findOrFail($id);
        $erecords->delete();
        return redirect()->route('erecords.index')->withSuccess('Record Deleted Successfully');;
    }
}
