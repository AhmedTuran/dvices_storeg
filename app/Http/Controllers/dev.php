<?php

namespace App\Http\Controllers;

use App\Models\devices;
use CreateDevicesTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Nullable;

class dev extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = devices::get();
        return view('show',compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dev = new devices();
        return view ('inseart',compact('dev'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'device_no' => 'required',
            'type_of_device' => 'required',
            'device_counter' => 'required',
            'divice_style' => 'required',
            'divice_category' => 'required',
            'SN' => 'required',
            'oner' => 'required',
            'main_oner' => 'required',
            'maintenancy_doc' => 'required',
            'maintenancy_price' => 'required',
            'maintenancy_date' => 'required',
        ]);

        devices::create([
            'device_no'=>$request->device_no,
            'type_of_device'=>$request->type_of_device,
            'device_counter'=>$request->device_counter,
            'divice_style'=>$request->divice_style,
            'divice_category'=>$request->divice_category,
            'SN'=>$request->SN,
            'oner'=>$request->oner,
            'main_oner'=>$request->main_oner,
            'maintenancy_doc'=>$request->maintenancy_doc,
            'maintenancy_price'=>$request->maintenancy_price,
            'maintenancy_date'=>$request->maintenancy_date,
        ]);
        $devices = devices::get();
        return view('show',compact('devices'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {/* 
        $devices =  new devices();
        $devices=devices::findOrFail($id)->wher('id' , 'search');
        return view('show',compact('devices')); */
    }
    public function search (Request $request){
$request = $request['search'];
/* ['','','','','','','','','','',''] */
        $devices = devices::where('maintenancy_date', 'LIKE', "%$request%")
            ->orWhere('device_no', 'LIKE', "%$request%")
            ->orWhere('type_of_device', 'LIKE', "%$request%")
            ->orWhere('device_counter', 'LIKE', "%$request%")
            ->orWhere('divice_style', 'LIKE', "%$request%")
            ->orWhere('maintenancy_price', 'LIKE', "%$request%")
            ->orWhere('divice_category', 'LIKE', "%$request%")
            ->orWhere('SN', 'LIKE', "%$request%")
            ->orWhere('oner', 'LIKE', "%$request%")
            ->orWhere('main_oner', 'LIKE', "%$request%")
            ->orWhere('maintenancy_doc', 'LIKE', "%$request%")
            ->get();
return view('show',compact('devices'));

        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dev = devices::findOrFail($id);
       return view ('upDate',compact('dev'));
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
        $request->validate([
            'device_no' => 'required',
            'type_of_device' => 'required',
            'device_counter' => 'required',
            'divice_style' => 'required',
            'divice_category' => 'required',
            'SN' => 'required',
            'oner' => 'required',
            'main_oner' => 'required',
            'maintenancy_doc' => 'required',
            'maintenancy_price' => 'required',
            'maintenancy_date' => 'required',
        ]);
        devices::findOrFail($id)->update([
            'device_no'=>$request->device_no,
            'type_of_device'=>$request->type_of_device,
            'device_counter'=>$request->device_counter,
            'divice_style'=>$request->divice_style,
            'divice_category'=>$request->divice_category,
            'SN'=>$request->SN,
            'oner'=>$request->oner,
            'main_oner'=>$request->main_oner,
            'maintenancy_doc'=>$request->maintenancy_doc,
            'maintenancy_price'=>$request->maintenancy_price,
            'maintenancy_date'=>$request->maintenancy_date,
        ]);
        $devices = devices::get();
        return view('show',compact('devices'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        devices::destroy($id);
        return redirect()->route('dev.index');
    }
}
