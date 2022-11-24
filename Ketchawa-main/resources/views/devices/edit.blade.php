@extends('layouts.main')


@section('page')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <h1>Modify Devices</h1>


                @if ($errors->any())

                    <div class="alert alert-danger">

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                    </div>

                @endif

                <form method="post" action="{{ route('devices.update', $device->id) }}" >
                    @method('PATCH')
                    @csrf


                    <div class="form-group mb-3">

                        <label for="name">Device name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Device name" name="name" value="{{ $device->name }}">

                    </div>

                    <div class="form-group mb-3">

                        <label for="type">Type:</label>
                        <input type="text" class="form-control" id="type" placeholder="Device Type" name="type" value="{{ $device->type }}">

                    </div>

                    <div class="form-group mb-3">

                        <label for="sn">S/N:</label>
                        <input type="text" class="form-control" id="sn" placeholder="Entrer S/N" name="sn" value="{{ $device->sn }}">

                    </div>

                    <div class="form-group mb-3">

                        <label for="location">Location ($):</label>
                        <input type="location" class="form-control" id="location" placeholder="Location" name="location" value="{{ $device->location }}">

                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
            </div>
        </div>
    </div>
</div>

 @endsection
