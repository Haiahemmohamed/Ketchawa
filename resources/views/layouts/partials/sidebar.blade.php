        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('homes.index') }}"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Modules</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i class="fas fa-warehouse"></i><span
                                class="hide-menu">Inventory
                            </span></a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item"><a href="{{ route('devices.index') }}" class="sidebar-link"><span class="hide-menu"> Computers </span></a></li>

                                <li class="sidebar-item"><a href="index.html" class="sidebar-link"><span class="hide-menu"> Network Devices  </span></a></li>

                                <li class="sidebar-item"><a href="index.html" class="sidebar-link"><span class="hide-menu"> Servers & Storage </span></a></li>

                                <li class="sidebar-item"><a href="index.html" class="sidebar-link"><span class="hide-menu"> Software & Licenses </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i class="fas fa-users"></i><span
                                class="hide-menu">Users
                            </span></a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item"><a href="{{ route('users.index') }}" class="sidebar-link"><span
                                            class="hide-menu"> Account </span></a></li>

                                <li class="sidebar-item"><a href="icon-simple-lineicon.html" class="sidebar-link"><span
                                            class="hide-menu"> Rolles </span></a></li>

                                <li class="sidebar-item"><a href="icon-simple-lineicon.html" class="sidebar-link"><span
                                            class="hide-menu"> Persmissions </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i class="fas fa-handshake"></i><span
                                class="hide-menu">Helpdesk
                            </span></a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item"><a href="{{ route('tickets.index') }}" class="sidebar-link"><span
                                            class="hide-menu"> Tickets </span></a></li>

                                <li class="sidebar-item"><a href="icon-simple-lineicon.html" class="sidebar-link"><span
                                            class="hide-menu"> Open Ticket </span></a></li>

                                <li class="sidebar-item"><a href="icon-simple-lineicon.html" class="sidebar-link"><span
                                            class="hide-menu"> Dashboard </span></a></li>
                            </ul>
                        </li>

                        {{-- <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('devices.index') }}">
                            <i class="fas fa-laptop"></i><span
                                class="hide-menu">Devices
                            </span></a>      
                        </li> --}}

                        {{-- <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('users.index') }}">
                            <i class="fas fa-user"></i><span
                                class="hide-menu">Users
                            </span></a>
                        </li> --}}

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Parameters</span></li>

                        <li class="sidebar-item"> <a href="icon-simple-lineicon.html" class="sidebar-link">
                            <i class="fas fa-laptop"></i><span
                                class="hide-menu">Devices
                            </span></a>      
                        </li>

                        <li class="sidebar-item"> <a href="icon-simple-lineicon.html" class="sidebar-link">
                            <i class="fas fa-user"></i><span
                                class="hide-menu">Users
                            </span></a>
                        </li>


                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../../docs/docs.html"
                                aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span
                                    class="hide-menu">Documentation</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.html"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
