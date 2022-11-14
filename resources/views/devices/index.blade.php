@extends('layouts.main')

@section('page')

    <div class="row">

        <div class="col-lg-11">

            <h2>Device Management </h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('devices.create') }}">Ajouter</a>
        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Device Name</th>
            <th>Type</th>
            <th>sn</th>
            <th>location</th>
            <th>Actions</th>

        </tr>

        @foreach ($devices as $index => $device)

            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $device->name }}</td>
                <td>{{ $device->type }}</td>
                <td>{{ $device->sn }}</td>
                <td>{{ $device->location }}</td>
                <td>

                    <form action="{{ route('devices.destroy', $device->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ route('devices.show', $device->id) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ route('devices.edit', $device->id) }}">Modifier</a>

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection
