<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;
use App\Models\Device;
use Illuminate\Support\Facades\Redirect;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $devices = Device::all();
        return view('devices.index', compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('devices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDeviceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeviceRequest $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'type'=> 'required',
            'sn' => 'required',
            'location' => 'required'
        ]);

        $device = new device([
            'name' => $request->get('name'),
            'type' => $request->get('type'),
            'sn' => $request->get('sn'),
            'location' => $request->get('location')
        ]);
        $device->save();

        return Redirect::route('devices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $device = device::findOrFail($id);
        return view('devices.show', compact('device'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $device = device::findOrFail($id);
        return view('devices.edit', compact('device'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeviceRequest  $request
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeviceRequest $request, $id)
    {
        //
        $request->validate([
            'name'=>'required',
            'type'=> 'required',
            'sn' => 'required',
            'location' => 'required'
        ]);

        $device = device::findOrFail($id);
        $device->name = $request->get('name');
        $device->type = $request->get('type');
        $device->sn = $request->get('sn');
        $device->location = $request->get('location');
        $device->update();

        return Redirect::route('devices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $device = device::findOrFail($id);
        $device->delete();

        return Redirect::route('devices.index');
    }
}
