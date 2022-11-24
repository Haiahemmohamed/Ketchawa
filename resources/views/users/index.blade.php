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

                        <h4 class="card-title mb-3">Users Management</h4>

                        {{-- <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
                            <li class="nav-item active">
                                <a href="#home-b2" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Users</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#profile-b2" data-toggle="tab" aria-expanded="false"
                                    class="nav-link">
                                    <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Rolles</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#settings-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Permissions</span>
                                </a>
                            </li>
                        </ul> --}}

                        <div class="tab-content">
                            <div class="tab-pane show active" id="home-b2">
                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        {{-- <h2>Users Management </h2> --}}
                                    </div>
                                    <div class="col-lg-6">
                                        <a class="btn btn-success btn-rounded float-right" href="{{ route('users.create') }}"><i class="fas fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
        
        
        
                                    <table class="table table-bordered">
        
                                        <tr class="text-center">
        
                                            {{-- <th>No</th> --}}
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Job Title</th>
                                            <th>Department</th>
                                            <th>Profil</th>
                                            <th>Office</th>
                                            <th>Actions</th>
        
                                        </tr>
        
                                        @foreach ($users as $index => $user)
                                            <tr class="text-center">
                                                {{-- <td>{{ $index + 1 }}</td> --}}
                                                <td>{{ $user->first_name }}</td>
                                                <td>{{ $user->last_name }}</td>
                                                <td>{{ $user->job }}</td>
                                                <td>{{ $user->department }}</td>
                                                <td>{{ $user->profil }}</td>
                                                <td>{{ $user->office }}</td>
                                                <td>
        
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
        
                                                        <a class="btn btn-info" href="{{ route('users.show', $user->id) }}"><i class="fas fas fa-eye"></i></a>
                                                        <a class="btn btn-primary"
                                                            href="{{ route('users.edit', $user->id) }}"><i class="fas fas fa-edit"></i></a>
        
                                                        <button type="submit" class="btn btn-danger"><i class="fas fas fa-trash"></i></button>
        
                                                    </form>
                                                </td>
        
                                            </tr>
                                        @endforeach
                                    </table>
                            </div>
                            <div class="tab-pane " id="profile-b2">
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                    justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis
                                    eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum
                                    semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                                    eu, consequat vitae, eleifend ac, enim.</p>
                                <p class="mb-0">Leggings occaecat dolor sit amet, consectetuer adipiscing elit.
                                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus
                                    et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                    ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                    quis enim.</p>
                            </div>
                            <div class="tab-pane" id="settings-b2">
                                <p>Food truck quinoa dolor sit amet, consectetuer adipiscing elit. Aenean
                                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                    ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                    quis enim.</p>
                                <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                    arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                    dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                    elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                    porttitor eu, consequat vitae, eleifend ac, enim.</p>
                            </div>
                        </div>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->


        </div>
    </div>
@endsection
