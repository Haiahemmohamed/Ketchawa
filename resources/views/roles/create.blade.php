@extends('layouts.main')


@section('page')

    <div class="container-fluid">
        @if ($errors->any())
        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>
        @endif

        <form action="{{ route('devices.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Addministrative Info</h1>
                            <div class="form-row">
                                <div class="col">
                                    <label for="service">Service:</label>
                                    <input type="text" class="form-control" id="service" placeholder="Service" name="service">
                                </div>

                                <div class="col">
                                    <label for="office">Office:</label>
                                    <input type="text" class="form-control" id="office" placeholder="office" name="office">
                                </div>

                                <div class="col-lg-6">
                                    <label for="name">Device name:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Device Name" name="name">
                                </div>

                                <div class="col-lg-6">

                                    <label for="type">Type:</label>
                                    <input type="text" class="form-control" id="type" placeholder="Type" name="type">

                                </div>

                                <div class="col-lg-6">
                                    <label for="sn">S/N:</label>
                                    <input type="text" class="form-control" id="sn" placeholder="sn" name="sn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                            
            <div class="row">
                {{-- Administrative Info --}}
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <h4 class="card-title">Hardwre Info</h4>
                                </div>

                                <div class="col-lg-6">
                                    <label for="model">Device Model:</label>
                                    <input type="text" class="form-control" id="model" placeholder="Device model" name="model">
                                </div>

                                <div class="col-lg-6">
                                    <label for="cpu">CPU:</label>
                                    <input type="text" class="form-control" id="cpu" placeholder="CPU" name="cpu">
                                </div>

                                <div class="col-lg-6">
                                    <label for="threads">CPU Threads Physical:</label>
                                    <input type="text" class="form-control" id="threads" placeholder="threads" name="threads">
                                </div>

                                <div class="col-lg-6">
                                    <label for="ram">RAM:</label>
                                    <input type="text" class="form-control" id="ram" placeholder="ram" name="ram">
                                </div>

                                <div class="col-lg-6">
                                    <label for="ram_type">RAM Type:</label>
                                    <input type="text" class="form-control" id="ram_type" placeholder="ram_type" name="ram_type">
                                </div>

                                <div class="col-lg-6">
                                    <label for="storage">STORAGE:</label>
                                    <input type="text" class="form-control" id="storage" placeholder="storage" name="storage">
                                </div>

                                <div class="col-lg-6">
                                    <label for="storage_type">STORAGE Type:</label>
                                    <input type="text" class="form-control" id="storage_type" placeholder="storage_type" name="storage_type">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                    

                {{-- Hardwre Info --}}
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <h4 class="card-title">System Info</h1>
                                </div>

                                <div class="col-lg-6">
                                    <label for="os">Operating System:</label>
                                    <input type="text" class="form-control" id="os" placeholder="os" name="os">
                                </div>

                                <div class="col-lg-6">
                                    <label for="os_version">Version:</label>
                                    <input type="text" class="form-control" id="os_version" placeholder="os_version" name="os_version">
                                </div>

                                <div class="col-lg-6">
                                    <label for="os_activation">Activation Status:</label>
                                    <input type="text" class="form-control" id="os_activation" placeholder="os_activation" name="os_activation">
                                </div>

                                <div class="col-lg-6">
                                    <label for="os_sn">OS S/N:</label>
                                    <input type="text" class="form-control" id="os_sn" placeholder="os_sn" name="os_sn">
                                </div>

                                <div class="col-lg-6">
                                    <label for="anti_virus">Anti-Virus:</label>
                                    <input type="text" class="form-control" id="anti_virus" placeholder="anti_virus" name="anti_virus">
                                </div>

                                <div class="col-lg-6">
                                    <label for="av_activation">Activation Status:</label>
                                    <input type="text" class="form-control" id="av_activation" placeholder="av_activation" name="av_activation">
                                </div>

                                <div class="col-lg-6">
                                    <label for="av_sn">Activation S/N:</label>
                                    <input type="text" class="form-control" id="av_sn" placeholder="av_sn" name="av_sn">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <button type="submit" class="btn btn-primary">Save</button>

        </form>
        </div>
    </div>
@endsection
