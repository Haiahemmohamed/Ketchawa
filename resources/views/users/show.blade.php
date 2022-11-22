@extends('layouts.main')


@section('page')

    
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <h1>Users Management</h1>


                <table class="table table-bordered">

                    <tr>
                        <th>First Name:</th>
                        <td>{{ $user->first_name }}</td>
                    </tr>

                    <tr>

                        <th>Last Name:</th>
                        <td>{{ $user->last_name }}</td>

                    </tr>

                    <tr>

                        <th>Job Title:</th>
                        <td>{{ $user->job }}</td>

                    </tr>

                    <tr>

                        <th>Department:</th>
                        <td>{{ $user->department }}</td>

                    </tr>

                    <tr>

                        <th>Profil:</th>
                        <td>{{ $user->profil }}</td>

                    </tr>

                    <tr>

                        <th>Office:</th>
                        <td>{{ $user->office }}</td>

                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>

            @endsection
