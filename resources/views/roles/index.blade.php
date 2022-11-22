@extends('layouts.main')

@section('page')
    <div class="container-fluid">
        <div class="row">
            {{-- Ad;inistrqtive Info --}}
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">


                        {{-- <h2>Device Management </h2>

                        <div>
                            <a class="btn btn-success btn-rounded float-right" href="{{ route('devices.create') }}">Ajouter</a>
                        </div> --}}

                        <div class="row mb-3">
                            <div class="col-lg-6">
                            <h2>Administrative Info</h2>
                        </div>
                            <div class="col-lg-6">
                                <a class="btn btn-success btn-rounded float-right" href="{{ route('devices.create') }}"><i class="fas fas fa-plus-circle"></i></a>
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
                                    <th>Service</th>
                                    <th>office</th>
                                    <th>Device name</th>
                                    <th>type</th>
                                    <th>S/N</th>
                                    <th>Actions</th>

                                </tr>

                                @foreach ($devices as $index => $device)
                                    <tr class="text-center">
                                        {{-- <td>{{ $index + 1 }}</td> --}}
                                        <td>{{ $device->service }}</td>
                                        <td>{{ $device->office }}</td>
                                        <td>{{ $device->name }}</td>
                                        <td>{{ $device->type }}</td>
                                        <td>{{ $device->sn }}</td>
                                        <td>    
                                            <form action="{{ route('devices.destroy', $device->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <a class="btn btn-info" href="{{ route('devices.show', $device->id) }}"><i class="fas fas fa-eye"></i></a>
                                                <a class="btn btn-primary"
                                                    href="{{ route('devices.edit', $device->id) }}"><i class="fas fas fa-edit"></i></a>

                                                <button type="submit" class="btn btn-danger"><i class="fas fas fa-trash"></i></button>

                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </table>

                        </div>
                </div>
            </div>
        
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-3">Tabs Bordered Justified</h4>

                        <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
                            <li class="nav-item">
                                <a href="#home-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#profile-b2" data-toggle="tab" aria-expanded="true"
                                    class="nav-link active">
                                    <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#settings-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Settings</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane" id="home-b2">
                                <p>Leggings occaecat dolor sit amet, consectetuer adipiscing elit. Aenean
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
                            <div class="tab-pane show active" id="profile-b2">
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


        </div>
    </div>
@endsection
