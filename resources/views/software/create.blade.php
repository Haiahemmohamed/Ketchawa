@extends('layouts.main')


@section('page')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Software</h1>

                            @if ($errors->any())
                                <div class="alert alert-danger">

                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach

                                    </ul>

                                </div>
                            @endif

                            <form action="{{ route('software.store') }}" method="POST">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="software">Software:</label>
                                    <input type="text" class="form-control" id="software" placeholder="software" name="software">
                                </div>

                                <div class="form-group mb-3">

                                    <label for="type">Type:</label>
                                    <input type="text" class="form-control" id="type" placeholder="type" name="type">

                                </div>

                                <div class="form-group mb-3">
                                    <label for="licence">Licence:</label>
                                    <input type="text" class="form-control" id="licence" placeholder="licence" name="licence">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="d_purchase">Date of purchase:</label>
                                    <input type="date" class="form-control" id="d_purchase" placeholder="d_purchase" name="d_purchase">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="acquisition_d">Acquisition date:</label>
                                    <input type="date" class="form-control" id="acquisition_d" placeholder="acquisition_d" name="acquisition_d">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="activation_d">Activation date:</label>
                                    <input type="date" class="form-control" id="department" placeholder="department"
                                        name="department">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="profil">Expiration date:</label>
                                    <input type="text" class="form-control" id="profil" placeholder="profil"
                                        name="profil">
                                </div>

                                <button type="submit" class="btn btn-primary">Save</button>

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
