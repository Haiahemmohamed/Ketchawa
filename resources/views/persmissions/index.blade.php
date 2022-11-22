@extends('layouts.main')

@section('page')
    <div class="container-fluid">
        <div class="row">
            {{-- Ad;inistrqtive Info --}}
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">


                        {{-- <h2>Device Management </h2>

                        <div>
                            <a class="btn btn-success btn-rounded float-right" href="{{ route('devices.create') }}">Ajouter</a>
                        </div> --}}

                        <div class="row mb-3">
                            <div class="col-lg-6">
                            <h2>Administrative Info</h2>
                        </div>
                            <div class="col-lg-6">
                                <a class="btn btn-success btn-rounded float-right" href="{{ route('devices.create') }}"><i class="fas fas fa-plus-circle"></i></a>
                        </div>
                        </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif



                            <table class="table table-bordered">

                                <tr class="text-center">

                                    {{-- <th>No</th> --}}
                                    <th>Service</th>
                                    <th>office</th>
                                    <th>Device name</th>
                                    <th>type</th>
                                    <th>S/N</th>
                                    <th>Actions</th>

                                </tr>

                                @foreach ($devices as $index => $device)
                                    <tr class="text-center">
                                        {{-- <td>{{ $index + 1 }}</td> --}}
                                        <td>{{ $device->service }}</td>
                                        <td>{{ $device->office }}</td>
                                        <td>{{ $device->name }}</td>
                                        <td>{{ $device->type }}</td>
                                        <td>{{ $device->sn }}</td>
                                        <td>    
                                            <form action="{{ route('devices.destroy', $device->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <a class="btn btn-info" href="{{ route('devices.show', $device->id) }}"><i class="fas fas fa-eye"></i></a>
                                                <a class="btn btn-primary"
                                                    href="{{ route('devices.edit', $device->id) }}"><i class="fas fas fa-edit"></i></a>

                                                <button type="submit" class="btn btn-danger"><i class="fas fas fa-trash"></i></button>

                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </table>

                        </div>
                </div>
            </div>
        
            {{-- Hardwre Info --}}
            {{-- <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-6">
                            <h2>Hardware Info</h2>
                        </div>
                        <div class="col-lg-6">
                            <a class="btn btn-success btn-rounded float-right" href="{{ route('devices.create') }}"><i class="fas fas fa-plus-circle"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div> --}}

                

             {{-- Hardwre Info --}}
             {{-- <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-6">
                            <h2>System Info</h2>
                        </div>
                        <div class="col-lg-6">
                            <a class="btn btn-success btn-rounded float-right" href="{{ route('devices.create') }}"><i class="fas fas fa-plus-circle"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>


        </div>
    </div>
@endsection
