@extends('layouts.main')


@section('page')

    <h1>Devices Management</h1>


    <table class="table table-bordered">

        <tr>
            <th>Device name:</th>
            <td>{{ $device->name }}</td>
        </tr>

        <tr>

            <th>Type:</th>
            <td>{{ $device->type }}</td>

        </tr>

        <tr>

            <th>S/N:</th>
            <td>{{ $device->sn }}</td>

        </tr>

        <tr>

            <th>Location:</th>
            <td>{{ $device->location }}</td>

        </tr>

    </table>

@endsection
