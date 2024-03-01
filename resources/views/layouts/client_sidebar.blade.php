<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="/" class="logo">
            <span>
                <img src="{{ URL::asset('assets/images/brand-logo/logo.jpg') }}" alt="logo-small" class="logo-sm" style="height: 80px">
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
                <a href="javascript: void(0);"><i data-feather="briefcase"
                        class="align-self-center menu-icon"></i><span>Jobs</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                   
                    <li class="nav-item"><a class="nav-link" href="{{ route('jobs') }}"><i
                                class="ti-control-record"></i>Show All Jobs</a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="{{ route('question') }}"><i
                                class="ti-control-record"></i>Questions</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('department') }}"><i
                                class="ti-control-record"></i>Department</a></li>
                   
                </ul>
            </li>

           
            <li>
                <a href="{{ route("candidates" )}}"><i data-feather="user-plus"
                        class=" align-self-center menu-icon "></i><span>Candidates</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                
            </li>
            <li>
                <a href="{{ route('sub_user') }}"><i data-feather="users"
                        class="align-self-center menu-icon "></i><span>Interviewers</span></a>
                
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
