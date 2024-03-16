    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="/" class="logo">
                <span>
                    <img src="{{ URL::asset('assets/images/mealmate.jpeg') }}" alt="logo-small" class="logo-sm" style="height: 80px">
                </span>
                
            </a>
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <ul class="metismenu left-sidenav-menu">
                <li class="menu-label mt-0"></li>
                <li>
                    <a href="/"> <i data-feather="home"
                            class="align-self-center menu-icon"></i><span>Dashboard</span></a>
                    {{-- <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="index"><i
                                    class="ti-control-record"></i>Analytics</a></li>
                        <li class="nav-item"><a class="nav-link" href="sales-index"><i
                                    class="ti-control-record"></i>Sales</a></li>
                    </ul> --}}
                </li>
                <li>
                    <a href="{{route('index-dietician')}}"> <i data-feather="calendar"
                            class="align-self-center menu-icon"></i><span>Dietician</span></a>
                   
                </li>
                <li>
                    <a href="{{route('index-product')}}"> <i data-feather="users"
                            class="align-self-center menu-icon"></i><span>Products</span></a>
                
                </li>
                <li>
                    <a href="javascript: void(0);"><i data-feather="briefcase"
                            class="align-self-center menu-icon"></i><span>Jobs</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                       
                        <li class="nav-item"><a class="nav-link" href="#"><i
                                    class="ti-control-record"></i>Show All Jobs</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i
                                    class="ti-control-record"></i>Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i
                                    class="ti-control-record"></i>Skills Category</a></li>
                        <li class="nav-item"><a class="nav-link" href="{#"><i
                                    class="ti-control-record"></i>Questions</a></li>
                       
                    </ul>
                </li>

               
                <li>
                    <a href="#"><i data-feather="user-plus"
                            class=" align-self-center menu-icon "></i><span>Candidates</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    
                </li>
                <li>
                    <a href="#"><i data-feather="shield-off"
                            class="align-self-center menu-icon "></i><span>HIM SubUser Management</span></a>
                    
                </li>
                <hr class="hr-dashed hr-menu">
                <li class="menu-label my-2">Components & Extra</li>

                {{-- <li>
                    <a href="javascript: void(0);"><i data-feather="settings"
                            class="align-self-center menu-icon"></i><span>Settings</span></a>
                    
                </li> --}}

                
            </ul>

            
        </div>
    </div>
