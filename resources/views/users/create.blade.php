@extends('layouts.main')


@section('page')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ajouter un Utilisateur</h1>

                            @if ($errors->any())
                                <div class="alert alert-danger">

                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach

                                    </ul>

                                </div>
                            @endif

                            <form action="{{ route('users.store') }}" method="POST">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" class="form-control" id="first_name" placeholder="first_name"
                                        name="first_name">
                                </div>

                                <div class="form-group mb-3">

                                    <label for="last_name">Last Name:</label>
                                    <input type="text" class="form-control" id="last_name" placeholder="last_name"
                                        name="last_name">

                                </div>

                                <div class="form-group mb-3">
                                    <label for="job">Job Title:</label>
                                    <input type="text" class="form-control" id="job" placeholder="Job"
                                        name="job">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="department">Department:</label>
                                    <input type="text" class="form-control" id="department" placeholder="department"
                                        name="department">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="profil">Profil:</label>
                                    <input type="text" class="form-control" id="profil" placeholder="profil"
                                        name="profil">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="office">Office:</label>
                                    <input type="text" class="form-control" id="office" placeholder="location"
                                        name="office">
                                </div>

                                <button type="submit" class="btn btn-primary">Save</button>

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
