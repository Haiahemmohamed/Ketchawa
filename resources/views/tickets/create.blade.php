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

        <form action="{{ route('tickets.store') }}" method="POST">
            @csrf
            <div class="row">
                {{-- Administrative Info --}}
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <h4 class="card-title">Requester Info</h4>
                                </div>

                                <div class="col-lg-6">
                                    <label for="requester">Username:</label>
                                    <input type="text" class="form-control" id="requester" placeholder="requester"
                                        name="requester">
                                </div>

                                <div class="col-lg-6">
                                    <label for="job">Job:</label>
                                    <input type="text" class="form-control" id="job" placeholder="job"
                                        name="job">
                                </div>

                                <div class="col-lg-6">
                                    <label for="department">Department:</label>
                                    <input type="text" class="form-control" id="department" placeholder="department"
                                        name="department">
                                </div>

                                <div class="col-lg-6">
                                    <label for="office">Office:</label>
                                    <input type="text" class="form-control" id="office" placeholder="office"
                                        name="office">
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
                                    <h4 class="card-title">Device Info</h1>
                                </div>

                                <div class="col-lg-6">
                                    <label for="device">Device:</label>
                                    <input type="text" class="form-control" id="device" placeholder="device"
                                        name="device">
                                </div>

                                <div class="col-lg-6">
                                    <label for="ticket_category">Type:</label>
                                    <select class="custom-select mr-sm-2" id="ticket_category">
                                        <option selected>Choose...</option>
                                        <option value="1">Server</option>
                                        <option value="2">Laptop</option>
                                        <option value="3">Desktop</option>
                                        <option value="4">Smartphone</option>
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <label for="os">Operating System:</label>
                                    <input type="text" class="form-control" id="os" placeholder="os"
                                        name="os">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ticket Info</h1>
                                <div class="form-row">
                                    <div class="col-lg-6">
                                        <label for="title">Title:</label>
                                        <input type="text" class="form-control" id="title" placeholder="title" name="title">
                                    </div>

                                    <div class="col">
                                        <label for="open_date">Open date:</label>
                                        <input type="date" class="form-control" id="open_date" placeholder="Date" name="open_date">
                                    </div>

                                    <div class="col">
                                        <label for="ticket_category">Ticket Category:</label>
                                        <select class="custom-select mr-sm-2" id="ticket_category"  name="ticket_category">
                                            <option selected>Choose...</option>
                                            <option value="System">System</option>
                                            <option value="Software">Software</option>
                                            <option value="Hardware">Hardware</option>
                                            <option value="Networking">Networking</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="ticket_status">Ticket Status:</label>
                                        <select class="custom-select mr-sm-2" id="ticket_status"  name="ticket_status">
                                            <option selected>Choose...</option>
                                            <option value="Open">Open</option>
                                            <option value="In Progress">In Progress</option>
                                            <option value="Resolved">Resolved</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="priority">Priority:</label>
                                        <select class="custom-select mr-sm-2" id="priority" name="priority" >
                                            <option selected>Choose...</option>
                                            <option value="low">low</option>
                                            <option value="High">High</option>
                                            <option value="Normal">Normal</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Description</h4>
                                                    <div class="form-group">
                                                        <textarea class="form-control" for="description" id="description" name="description" rows="10"
                                                            placeholder="Text Here..."></textarea>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
