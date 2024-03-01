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
                @php
                    $today = Carbon\Carbon::today()->format('Y-m-d');

                @endphp
                <a href="{{ route("screening_candidates" )}}"><i data-feather="user-plus"
                        class=" align-self-center menu-icon "></i><span>Screening Interview </span> <span class="text-danger"> ({{ $auth_user->interview_date()->where('status',0)->where('interview_date',$today)->count() }})</span></a>
                
            </li>

            <li>
                <a href="#"> <i data-feather="users"
                        class="align-self-center menu-icon"></i><span>Candidate category</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ route('category_candidates','TOM') }}"><i
                                class="ti-control-record"></i>TOM</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('category_candidates','PATTY') }}"><i
                                class="ti-control-record"></i>PATTY</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('category_candidates','INES') }}"><i
                                class="ti-control-record"></i>INES</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('category_candidates','BARON') }}"><i
                                class="ti-control-record"></i>BARON</a></li>
                </ul>
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
