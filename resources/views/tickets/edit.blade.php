@extends('layouts.main')


@section('page')

    <div class="container-fluid">
        <form method="post" action="{{ route('tickets.update', $ticket->id) }}">
            @method('PATCH')
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <h1>Modify Ticket</h1>


                    @if ($errors->any())
                        <div class="alert alert-danger">

                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>
                    @endif


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
                                            <input type="text" class="form-control" id="requester"
                                                placeholder="requester" name="requester" value="{{ $ticket->requester }}">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="job">Job:</label>
                                            <input type="text" class="form-control" id="job" placeholder="job"
                                                name="job" value="{{ $ticket->job }}">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="department">Department:</label>
                                            <input type="text" class="form-control" id="department"
                                                placeholder="department" name="department"
                                                value="{{ $ticket->department }}">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="office">Office:</label>
                                            <input type="text" class="form-control" id="office" placeholder="office"
                                                name="office" value="{{ $ticket->office }}">
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
                                                name="device" value="{{ $ticket->device }}">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="device">Type:</label>
                                            <select class="custom-select mr-sm-2" id="device">
                                                <option value="Server" {{ $ticket->device == 'Server' ? 'selected' : '' }}>
                                                    Server
                                                </option>
                                                <option vvalue="Laptop" {{ $ticket->device == 'Laptop' ? 'selected' : '' }}>
                                                    Laptop
                                                </option>
                                                <option value="Desktop"
                                                    {{ $ticket->device == 'Desktop' ? 'selected' : '' }}>Desktop
                                                </option>
                                                <option value="Smartphone"
                                                    {{ $ticket->device == 'Smartphone' ? 'selected' : '' }}>
                                                    Smartphone</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="os">Operating System:</label>
                                            <input type="text" class="form-control" id="os" placeholder="os"
                                                name="os" value="{{ $ticket->os }}">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ticket Info</h1>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="open_date">Open date:</label>
                                        <input type="date" class="form-control" id="open_date" placeholder="Date"
                                            name="open_date" value="{{ $ticket->open_date }}">
                                    </div>

                                    <div class="col">
                                        <label for="title">Title:</label>
                                        <input type="text" class="form-control" id="title" placeholder="title"
                                            name="title" value="{{ $ticket->title }}">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="ticket_category">Ticket Category:</label>
                                        <select class="custom-select mr-sm-2" id="ticket_category"
                                            name="ticket_category">
                                            <option>Choose...</option>
                                            <option value="Software"
                                                {{ $ticket->ticket_category == 'Software' ? 'selected' : '' }}>Software
                                            </option>
                                            <option value="Hardware"
                                                {{ $ticket->ticket_category == 'Hardware' ? 'selected' : '' }}>Hardware
                                            </option>
                                            <option value="Networking"
                                                {{ $ticket->ticket_category == 'Networking' ? 'selected' : '' }}>Networking
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="ticket_status">Ticket Status:</label>
                                        <select class="custom-select mr-sm-2" id="ticket_status" name="ticket_status">
                                            <option>Choose...</option>
                                            <option value="Open"
                                                {{ $ticket->ticket_status == 'Open' ? 'selected' : '' }}>Open</option>
                                            <option value="In Progress"
                                                {{ $ticket->ticket_status == 'In Progress' ? 'selected' : '' }}>In Progress
                                            </option>
                                            <option value="Resolved"
                                                {{ $ticket->ticket_status == 'Resolved' ? 'selected' : '' }}>Resolved
                                            </option>
                                            <option value="Closed"
                                                {{ $ticket->ticket_status == 'Closed' ? 'selected' : '' }}>Closed</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="priority">Priority:</label>
                                        <select class="custom-select mr-sm-2" id="priority" name="priority">
                                            <option>Choose...</option>
                                            <option value="Low" {{ $ticket->priority == 'Low' ? 'selected' : '' }}>low
                                            </option>
                                            <option value="High" {{ $ticket->priority == 'High' ? 'selected' : '' }}>
                                                High</option>
                                            <option value="Normal" {{ $ticket->priority == 'Normal' ? 'selected' : '' }}>
                                                Normal</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12">
                                                
                                        <label for="description">Description</label>
                                                <div class="form-group">
                                                    <textarea class="form-control" for="description" id="description" name="description" rows="10"
                                                        placeholder="Text Here..." value="{{ $ticket->description }}"></textarea>
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
