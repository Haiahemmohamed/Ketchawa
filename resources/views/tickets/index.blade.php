@extends('layouts.main')

@section('page')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    

                </div>

            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-3">Ticket Management</h4>

                        <div class="tab-content">
                            <div class="tab-pane show active" id="home-b2">
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        {{-- <h2>Users Management </h2> --}}
                                    </div>
                                    <div class="col-lg-6">
                                        <a class="btn btn-success btn-rounded float-right" href="{{ route('tickets.create') }}"><i class="fas fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
        
        
        
                                    <table class="table table-bordered">
        
                                        <tr class="text-center">
        
                                            <th>No</th>
                                            <th>Ticket</th>
                                            <th>Open date</th>
                                            <th>Requester</th>
                                            <th>Department</th>
                                            <th>Category</th>
                                            <th>Priority</th>
                                            <th>Ticket Status</th>
                                            <th>Actions</th>

                                        </tr>
        
                                        @foreach ($tickets as $index => $ticket)
                                            <tr class="text-center">
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $ticket->title }}</td>
                                                <td>{{ $ticket->open_date }}</td>
                                                <td>{{ $ticket->requester }}</td>
                                                <td>{{ $ticket->department }}</td>
                                                <td>{{ $ticket->ticket_category }}</td>
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
                                                <td>
                                                    @if($ticket->ticket_status=='Open')
                                                    <span class="badge badge-pill badge-warning"> {{ $ticket->ticket_status }}</span>   
                                                    @endif

                                                    @if($ticket->ticket_status=='In Progress')
                                                    <span class="badge badge-pill badge-info"> {{ $ticket->ticket_status }}</span>   
                                                    @endif
                                                    
                                                    @if($ticket->ticket_status=='Resolved')
                                                    <span class="badge badge-pill badge-success"> {{ $ticket->ticket_status }}</span>   
                                                    @endif 

                                                    @if($ticket->ticket_status=='Closed')
                                                    <span class="badge badge-pill badge-Secondary"> {{ $ticket->ticket_status }}</span>   
                                                    @endif 
                                                </td>
                                                <td>
        
                                                    <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
        
                                                        <a class="btn btn-info" href="{{ route('tickets.show', $ticket->id) }}"><i class="fas fas fa-eye"></i></a>
                                                        <a class="btn btn-primary"
                                                            href="{{ route('tickets.edit', $ticket->id) }}"><i class="fas fas fa-edit"></i></a>
        
                                                        <button type="submit" class="btn btn-danger"><i class="fas fas fa-trash"></i></button>
        
                                                    </form>
                                                </td>
        
                                            </tr>
                                        @endforeach
                                    </table>
                            </div>
                            
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
    </div>
@endsection
