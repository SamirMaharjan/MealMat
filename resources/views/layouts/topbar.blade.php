<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-end mb-0">
            <li class="dropdown hide-phone">
                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i data-feather="search" class="topbar-icon"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-end dropdown-lg p-0">
                    <!-- Top Search Bar -->
                    <div class="app-search-topbar">
                        <form action="#" method="get">
                            <input type="search" name="search" class="from-control top-search mb-0"
                                placeholder="Type text...">
                            <button type="submit"><i class="ti-search"></i></button>
                        </form>
                    </div>
                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i data-feather="bell" class="align-self-center topbar-icon"></i>
                    <span class="badge bg-danger rounded-pill noti-icon-badge">{{ count($unread_notification) }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                    <h6
                        class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                        Notifications 
                        @if ( count($unread_notification)>0)
                        <span class="badge bg-primary rounded-pill">{{ count($unread_notification) }}</span>
                        @endif
                        

                    </h6>
                    <div class="notification-menu" data-simplebar>
                       @foreach ($unread_notification as $notification)
                            <!-- item-->
                        <a href="{{ $notification->data['url']? $notification->data['url']:'#' }}" data-id="{{ $notification->id }}" class="dropdown-item py-3 notification_link">
                            {{-- <small class="float-end text-muted ps-2">40 min ago</small> --}}
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i data-feather="users" class="align-self-center icon-xs"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-wrap">
                                    <h6 class="my-0 fw-normal text-dark"> {{ $notification->data['title'] }}</h6>
                                    <small class="text-muted mb-0">{{ $notification->data['body'] }}</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                       @endforeach
                       
                        
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown"
                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="ms-1 nav-user-name hidden-sm">
                        {{ $auth_user->first_name?$auth_user->first_name.' '.$auth_user->last_name:$auth_user->org_name }}</span>
                    <img src="{{ isset(Auth::user()->avatar) && Auth::user()->avatar != '' ? asset(Auth::user()->avatar) : asset('/assets/images/users/user-1.jpg') }}"
                        alt="profile-user" class="rounded-circle thumb-xs" />
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="/pages-profile"><i data-feather="user"
                            class="align-self-center icon-xs icon-dual me-1"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i data-feather="settings"
                            class="align-self-center icon-xs icon-dual me-1"></i> Settings</a>
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item" href="javascript:void();"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> <span
                            key="t-logout">Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul><!--end topbar-nav-->

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="nav-link button-menu-mobile">
                    <i data-feather="menu" class="align-self-center topbar-icon"></i>
                </button>
            </li>
            @yield('create_button')
            
          
              
            

        </ul>
    </nav>
    <!-- end navbar-->
</div>
