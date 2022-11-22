@extends('layouts.main')


@section('page')

    
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <h1>Devices Management</h1>


                <table class="table table-hover">
                    
                    <tr>
                        <th>Service:</th>
                        <td>{{ $device->service }}</td>
                    </tr>

                    <tr>

                        <th>Office:</th>
                        <td>{{ $device->office }}</td>

                    </tr>

                    <tr>

                        <th>Device Name:</th>
                        <td>{{ $device->name }}</td>

                    </tr>

                    <tr>

                        <th>type:</th>
                        <td>{{ $device->type }}</td>

                    </tr>

                    <tr>
                        <th>S/N:</th>
                        <td>{{ $device->sn }}</td>
                    </tr>

                    <tr>

                        <th>Model:</th>
                        <td>{{ $device->model }}</td>

                    </tr>

                    <tr>

                        <th>CPU:</th>
                        <td>{{ $device->cpu }}</td>

                    </tr>

                    <tr>

                        <th>threads:</th>
                        <td>{{ $device->threads}}</td>

                    </tr>

                    <tr>
                        <th>RAM:</th>
                        <td>{{ $device->ram }}</td>
                    </tr>

                    <tr>

                        <th>RAM Type:</th>
                        <td>{{ $device->ram }}</td>

                    </tr>

                    <tr>

                        <th>Storage:</th>
                        <td>{{ $device->storage }}</td>

                    </tr>

                    <tr>

                        <th>Storage Type:</th>
                        <td>{{ $device->storage_type }}</td>

                    </tr>

                    <tr>
                        <th>OS:</th>
                        <td>{{ $device->os }}</td>
                    </tr>

                    <tr>

                        <th>OS Version:</th>
                        <td>{{ $device->os_version }}</td>

                    </tr>

                    <tr>

                        <th>os_sn:</th>
                        <td>{{ $device->os_sn }}</td>

                    </tr>

                    <tr>

                        <th>Anti Virus:</th>
                        <td>{{ $device->anti_virus }}</td>

                    </tr>

                    <tr>

                        <th>Anti Virus Activation:</th>
                        <td>{{ $device->av_activation }}</td>

                    </tr>
                    <tr>

                        <th>Anti Virus S/N:</th>
                        <td>{{ $device->av_sn }}</td>

                    </tr>


                </table>
            </div>
        </div>
    </div>
</div>

            @endsection
