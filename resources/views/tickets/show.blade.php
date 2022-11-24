@extends('layouts.main')


@section('page')

    
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <h1>Ticket Management</h1>


                <table class="table table-hover">
                    
                    <tr>
                        <th>Username:</th>
                        <td>{{ $ticket->requester }}</td>
                    </tr>

                    <tr>

                        <th>Job:</th>
                        <td>{{ $ticket->job }}</td>

                    </tr>

                    <tr>

                        <th>Department:</th>
                        <td>{{ $ticket->department }}</td>

                    </tr>

                    <tr>

                        <th>Device:</th>
                        <td>{{ $ticket->device }}</td>

                    </tr>

                    <tr>
                        <th>Type:</th>
                        <td>{{ $ticket->device }}</td>
                    </tr>

                    <tr>

                        <th>Operating System:</th>
                        <td>{{ $ticket->os }}</td>

                    </tr>

                    <tr>

                        <th>Open date:</th>
                        <td>{{ $ticket->open_date }}</td>

                    </tr>

                    <tr>

                        <th>Title:</th>
                        <td>{{ $ticket->title}}</td>

                    </tr>

                    <tr>
                        <th>Ticket Category:</th>
                        <td>{{ $ticket->ticket_category }}</td>
                    </tr>

                    <tr>

                        <th>Ticket Status:</th>
                        <td>{{ $ticket->ticket_status }}</td>

                    </tr>

                    <tr>

                        <th>Priority:</th>
                        <td>
                            @if($ticket->priority=='Low')
                            <span class="badge badge-pill badge-primary"> {{ $ticket->priority }}</span>   
                            @endif

                            @if($ticket->priority=='Normal')
                            <span class="badge badge-pill badge-warning"> {{ $ticket->priority }}</span>   
                            @endif
                            
                            @if($ticket->priority=='High')
                            <span class="badge badge-pill badge-danger"> {{ $ticket->priority }}</span>   
                            @endif 
                        </td>

                    </tr>

                    <tr>

                        <th>Description:</th>
                        <td>{{ $ticket->description }}</td>

                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

            @endsection
