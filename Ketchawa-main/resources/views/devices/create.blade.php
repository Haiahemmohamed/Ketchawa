@extends('layouts.main')


@section('page')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ajouter un contact</h1>

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

                                <div class="form-group mb-3">
                                    <label for="name">Device name:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Device Name"
                                        name="name">
                                </div>

                                <div class="form-group mb-3">

                                    <label for="type">Type:</label>
                                    <input type="text" class="form-control" id="type" placeholder="Type"
                                        name="type">

                                </div>

                                <div class="form-group mb-3">
                                    <label for="sn">S/N:</label>
                                    <input type="text" class="form-control" id="sn" placeholder="sn"
                                        name="sn">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="location">Location:</label>
                                    <input type="text" class="form-control" id="location" placeholder="location"
                                        name="location">
                                </div>

                                <button type="submit" class="btn btn-primary">Save</button>

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
