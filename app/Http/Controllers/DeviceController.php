<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;
use App\Models\Device;
use Illuminate\Support\Facades\Redirect;

class DeviceController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
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
            'service'=>'required',
            'office'=> 'required',
            'name' => 'required',
            'type' => 'required',
            'sn'=>'required',
            'model'=> 'required',
            'cpu' => 'required',
            'threads' => 'required',
            'ram'=>'required',
            'ram_type'=> 'required',
            'storage' => 'required',
            'storage_type' => 'required',
            'os'=>'required',
            'os_version'=> 'required',
            'os_activation' => 'required',
            'os_sn' => 'required',
            'anti_virus'=>'required',
            'av_activation'=> 'required',
            'av_sn' => 'required'
        ]);

        $device = new device([
            'service' => $request->get('service'),
            'office' => $request->get('office'),
            'name' => $request->get('name'),
            'type' => $request->get('type'),
            'sn' => $request->get('sn'),
            'model' => $request->get('model'),
            'cpu' => $request->get('cpu'),
            'threads' => $request->get('threads'),
            'ram' => $request->get('ram'),
            'ram_type' => $request->get('ram_type'),
            'storage' => $request->get('storage'),
            'storage_type' => $request->get('storage_type'),
            'os' => $request->get('os'),
            'os_version' => $request->get('os_version'),
            'os_sn' => $request->get('os_sn'),
            'anti_virus' => $request->get('anti_virus'),
            'av_activation' => $request->get('av_activation'),
            'av_sn' => $request->get('av_sn'),
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
            'service'=>'required',
            'office'=> 'required',
            'name' => 'required',
            'type' => 'required',
            'sn'=>'required',
            'model'=> 'required',
            'cpu' => 'required',
            'threads' => 'required',
            'ram'=>'required',
            'ram_type'=> 'required',
            'storage' => 'required',
            'storage_type' => 'required',
            'os'=>'required',
            'os_version'=> 'required',
            'os_activation' => 'required',
            'os_sn' => 'required',
            'anti_virus'=>'required',
            'av_activation'=> 'required',
            'location' => 'required'
        ]);

        $device = device::findOrFail($id);
        $device->service = $request->get('service');
        $device->office = $request->get('office');
        $device->type = $request->get('type');
        $device->sn = $request->get('sn');
        $device->model = $request->get('model');
        $device->cpu = $request->get('cpu');
        $device->threads = $request->get('threads');
        $device->ram = $request->get('ram');
        $device->ram_type = $request->get('ram_type');
        $device->storage = $request->get('storage');
        $device->storage_type = $request->get('storage_type');
        $device->os = $request->get('os');
        $device->os_version = $request->get('os_version');
        $device->os_sn = $request->get('os_sn');
        $device->anti_virus = $request->get('anti_virus');
        $device->av_activation = $request->get('av_activation');
        $device->av_sn = $request->get('av_sn');
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
