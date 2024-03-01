<div class="topbar">
    <!-- LOGO -->
    <div class="brand">
        <a href="index" class="logo">
            <span>
                <img src="{{ URL::asset('assets/images/brand-logo/logo.jpg') }}" alt="logo-small" class="logo-sm">
            </span>
            <span>
                <img src="{{ URL::asset('assets/images/brand-logo/logo.jpg') }}" alt="logo-large" class="logo-lg logo-light">
                <img src="{{ URL::asset('assets/images/brand-logo/logo.jpg') }}" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end logo-->
    <!-- Navbar -->
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-end mb-0">
            <li class="creat-btn">
                <div class="nav-link">
                    <a class=" btn btn-sm btn-soft-primary" href="#" role="button"><i class="fas fa-plus me-2"></i>New Task</a>
                </div>
            </li>
            <li class="dropdown hide-phone">
                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i data-feather="search" class="topbar-icon"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-end dropdown-lg p-0">
                    <!-- Top Search Bar -->
                    <div class="app-search-topbar">
                        <form action="#" method="get">
                            <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text...">
                            <button type="submit"><i class="ti-search"></i></button>
                        </form>
                    </div>
                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i data-feather="bell" class="align-self-center topbar-icon"></i>
                    <span class="badge bg-danger rounded-pill noti-icon-badge">2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                    <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                        Notifications <span class="badge bg-primary rounded-pill">2</span>
                    </h6>
                    <div class="notification-menu" data-simplebar>
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                </div>
                                <!--end media-body-->
                            </div>
                            <!--end media-->
                        </a>
                        <!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">10 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div>
                                <!--end media-body-->
                            </div>
                            <!--end media-->
                        </a>
                        <!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">40 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i data-feather="users" class="align-self-center icon-xs"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div>
                                <!--end media-body-->
                            </div>
                            <!--end media-->
                        </a>
                        <!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">1 hr ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div>
                                <!--end media-body-->
                            </div>
                            <!--end media-->
                        </a>
                        <!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i data-feather="check-circle" class="align-self-center icon-xs"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div>
                                <!--end media-body-->
                            </div>
                            <!--end media-->
                        </a>
                        <!--end-item-->
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="ms-1 nav-user-name hidden-sm">Nick</span>
                    <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="profile-user" class="rounded-circle thumb-sm" />
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="/pages-profile"><i data-feather="user" class="align-self-center icon-xs icon-dual me-1"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i data-feather="settings" class="align-self-center icon-xs icon-dual me-1"></i> Settings</a>
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> <span key="t-logout">Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>

            <li class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle nav-link" id="mobileToggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a><!-- End mobile menu toggle-->
            </li>
            <!--end menu item-->
        </ul>
        <!--end topbar-nav-->

        <div class="navbar-custom-menu">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="#">
                            <span><i data-feather="home" class="align-self-center hori-menu-icon"></i>Dashboard</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="horizontal-index"><i class="ti ti-minus"></i>Analytics</a></li>
                            <li><a href="sales-index"><i class="ti ti-minus"></i>Sales</a></li>
                        </ul>
                        <!--end submenu-->
                    </li>
                    <!--end has-submenu-->

                    <li class="has-submenu">
                        <a href="#">
                            <span><i data-feather="grid" class="align-self-center hori-menu-icon"></i>Apps</span>
                        </a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#"><i class="ti ti-minus"></i>Email</a>
                                <ul class="submenu">
                                    <li><a href="apps-email-inbox"><i class="ti ti-minus"></i>Inbox</a></li>
                                    <li><a href="apps-email-read"><i class="ti ti-minus"></i>Read Email</a></li>
                                </ul>
                            </li>
                            <!--end has-submenu-->
                            <li><a href="apps-chat"><i class="ti ti-minus"></i>Chat</a></li>
                            <li><a href="apps-contact-list"><i class="ti ti-minus"></i>Contact List</a></li>
                            <li><a href="apps-calendar"><i class="ti ti-minus"></i>Calendar</a></li>
                            <li><a href="apps-files"><i class="ti ti-minus"></i>File Manager</a></li>
                            <li><a href="apps-invoice"><i class="ti ti-minus"></i>Invoice</a></li>
                            <li><a href="apps-tasks"><i class="ti ti-minus"></i>Tasks</a></li>
                            <li class="has-submenu">
                                <a href="#"><i class="ti ti-minus"></i>Projects </a>
                                <ul class="submenu">
                                    <li><a href="apps-project-overview"><i class="ti ti-minus"></i>Overview</a></li>
                                    <li><a href="apps-project-projects"><i class="ti ti-minus"></i>Projects</a></li>
                                    <li><a href="apps-project-board"><i class="ti ti-minus"></i>Board</a></li>
                                    <li><a href="apps-project-teams"><i class="ti ti-minus"></i>Teams</a></li>
                                    <li><a href="apps-project-files"><i class="ti ti-minus"></i>Files</a></li>
                                    <li><a href="apps-new-project"><i class="ti ti-minus"></i>New Project</a></li>
                                </ul>
                            </li>
                            <!--end has-submenu-->
                            <li class="has-submenu">
                                <a href="#"><i class="ti ti-minus"></i>Ecommerce </a>
                                <ul class="submenu">
                                    <li><a href="apps-ecommerce-products"><i class="ti ti-minus"></i>Products</a></li>
                                    <li><a href="apps-ecommerce-product-list"><i class="ti ti-minus"></i>Product List</a></li>
                                    <li><a href="apps-ecommerce-product-detail"><i class="ti ti-minus"></i>Product Detail</a></li>
                                    <li><a href="apps-ecommerce-cart"><i class="ti ti-minus"></i>Cart</a></li>
                                    <li><a href="apps-ecommerce-checkout"><i class="ti ti-minus"></i>Checkout</a></li>
                                </ul>
                            </li>
                            <!--end has-submenu-->
                        </ul>
                        <!--end submenu-->
                    </li>
                    <!--end has-submenu-->

                    <li class="has-submenu">
                        <a href="#">
                            <span><i data-feather="box" class="align-self-center hori-menu-icon"></i>UI Kit</span>
                        </a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#"><i class="ti ti-minus"></i>UI Elements</a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="ui-alerts"><i class="ti ti-minus"></i>Alerts</a></li>
                                            <li><a href="ui-avatar"><i class="ti ti-minus"></i>Avatar</a></li>
                                            <li><a href="ui-buttons"><i class="ti ti-minus"></i>Buttons</a></li>
                                            <li><a href="ui-badges"><i class="ti ti-minus"></i>Badges</a></li>
                                            <li><a href="ui-cards"><i class="ti ti-minus"></i>Cards</a></li>
                                            <li><a href="ui-carousels"><i class="ti ti-minus"></i>Carousels</a></li>
                                            <li><a href="ui-check-radio"><i class="ti ti-minus"></i>Check & Radio</a></li>
                                            <li><a href="ui-dropdowns"><i class="ti ti-minus"></i>Dropdowns</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="ui-grids"><i class="ti ti-minus"></i>Grids</a></li>
                                            <li><a href="ui-images"><i class="ti ti-minus"></i>Images</a></li>
                                            <li><a href="ui-list"><i class="ti ti-minus"></i>List</a></li>
                                            <li><a href="ui-modals"><i class="ti ti-minus"></i>Modals</a></li>
                                            <li><a href="ui-navs"><i class="ti ti-minus"></i>Navs</a></li>
                                            <li><a href="ui-navbar"><i class="ti ti-minus"></i>Navbar</a></li>
                                            <li><a href="ui-paginations"><i class="ti ti-minus"></i>Paginations</a></li>
                                            <li><a href="ui-offcanvas"><i class="ti ti-minus"></i>Offcanvas</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>

                                            <li><a href="ui-popover-tooltips"><i class="ti ti-minus"></i>Popover & Tooltips</a></li>
                                            <li><a href="ui-progress"><i class="ti ti-minus"></i>Progress</a></li>
                                            <li><a href="ui-spinners"><i class="ti ti-minus"></i>Spinners</a></li>
                                            <li><a href="ui-tabs-accordions"><i class="ti ti-minus"></i>Tabs & Accordions</a></li>
                                            <li><a href="ui-toasts"><i class="ti ti-minus"></i>Toasts</a></li>
                                            <li><a href="ui-typography"><i class="ti ti-minus"></i>Typography</a></li>
                                            <li><a href="ui-videos"><i class="ti ti-minus"></i>Videos</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!--end has-submenu-->
                            <li class="has-submenu">
                                <a href="#"><i class="ti ti-minus"></i>Advanced UI</a>
                                <ul class="submenu">
                                    <li><a href="advanced-animation"><i class="ti ti-minus"></i>Animation</a></li>
                                    <li><a href="advanced-clipboard"><i class="ti ti-minus"></i>Clip Board</a></li>
                                    <li><a href="advanced-highlight"><i class="ti ti-minus"></i>Highlight</a></li>
                                    <li><a href="advanced-idle-timer"><i class="ti ti-minus"></i>Idle Timer</a></li>
                                    <li><a href="advanced-kanban"><i class="ti ti-minus"></i>Kanban</a></li>
                                    <li><a href="advanced-lightbox"><i class="ti ti-minus"></i>Lightbox</a></li>
                                    <li><a href="advanced-nestable"><i class="ti ti-minus"></i>Nestable List</a></li>
                                    <li><a href="advanced-rangeslider"><i class="ti ti-minus"></i>Range Slider</a></li>
                                    <li><a href="advanced-ratings"><i class="ti ti-minus"></i>Ratings</a></li>
                                    <li><a href="advanced-ribbons"><i class="ti ti-minus"></i>Ribbons</a></li>
                                    <li><a href="advanced-session"><i class="ti ti-minus"></i>Session Timeout</a></li>
                                    <li><a href="advanced-sweetalerts"><i class="ti ti-minus"></i>Sweet Alerts</a></li>
                                </ul>
                            </li>
                            <!--end has-submenu-->
                            <li class="has-submenu">
                                <a href="#"><i class="ti ti-minus"></i>Forms</a>
                                <ul class="submenu">
                                    <li><a href="forms-advanced"><i class="ti ti-minus"></i>Advance Elements</a></li>
                                    <li><a href="forms-elements"><i class="ti ti-minus"></i>Basic Elements</a></li>
                                    <li><a href="forms-editors"><i class="ti ti-minus"></i>Editors</a></li>
                                    <li><a href="forms-uploads"><i class="ti ti-minus"></i>File Upload</a></li>
                                    <li><a href="forms-repeater"><i class="ti ti-minus"></i>Repeater</a></li>
                                    <li><a href="forms-validation"><i class="ti ti-minus"></i>Validation</a></li>
                                    <li><a href="forms-wizard"><i class="ti ti-minus"></i>Wizard</a></li>
                                    <li><a href="forms-x-editable"><i class="ti ti-minus"></i>X Editable</a></li>
                                </ul>
                            </li>
                            <!--end has-submenu-->
                            <li class="has-submenu">
                                <a href="#"><i class="ti ti-minus"></i>Charts</a>
                                <ul class="submenu">
                                    <li><a href="charts-apex"><i class="ti ti-minus"></i>Apex</a></li>
                                    <li><a href="charts-chartjs"><i class="ti ti-minus"></i>Chartjs</a></li>
                                    <li><a href="charts-flot"><i class="ti ti-minus"></i>Flot</a></li>
                                    <li><a href="charts-morris"><i class="ti ti-minus"></i>Morris</a></li>
                                </ul>
                            </li>
                            <!--end has-submenu-->
                            <li class="has-submenu">
                                <a href="#"><i class="ti ti-minus"></i>Tables </a>
                                <ul class="submenu">
                                    <li><a href="tables-basic"><i class="ti ti-minus"></i>Basic</a></li>
                                    <li><a href="tables-datatable"><i class="ti ti-minus"></i>Datatables</a></li>
                                    <li><a href="tables-editable"><i class="ti ti-minus"></i>Editable</a></li>
                                    <li><a href="tables-responsive"><i class="ti ti-minus"></i>Responsive</a></li>
                                </ul>
                            </li>
                            <!--end has-submenu-->
                            <li class="has-submenu">
                                <a href="#"><i class="ti ti-minus"></i>Icons</a>
                                <ul class="submenu">
                                    <li><a href="icons-dripicons"><i class="ti ti-minus"></i>Dripicons</a></li>
                                    <li><a href="icons-feather"><i class="ti ti-minus"></i>Feather</a></li>
                                    <li><a href="icons-fontawesome"><i class="ti ti-minus"></i>Font awesome</a></li>
                                    <li><a href="icons-materialdesign"><i class="ti ti-minus"></i>Material Design</a></li>
                                    <li><a href="icons-themify"><i class="ti ti-minus"></i>Themify</a></li>
                                    <li><a href="icons-typicons"><i class="ti ti-minus"></i>Typicons</a></li>
                                </ul>
                            </li>
                            <!--end has-submenu-->
                            <li class="has-submenu">
                                <a href="#"><i class="ti ti-minus"></i>Maps</a>
                                <ul class="submenu">
                                    <li><a href="maps-google"><i class="ti ti-minus"></i>Google Maps</a></li>
                                    <li><a href="maps-leaflet"><i class="ti ti-minus"></i>Leaflet Maps</a></li>
                                    <li><a href="maps-vector"><i class="ti ti-minus"></i>Vector Maps</a></li>
                                </ul>
                            </li>
                            <!--end has-submenu-->
                            <li class="has-submenu">
                                <a href="#"><i class="ti ti-minus"></i>Email Template</a>
                                <ul class="submenu">
                                    <li><a href="email-templates-alert"><i class="ti ti-minus"></i>Alert Email</a></li>
                                    <li><a href="email-templates-basic"><i class="ti ti-minus"></i>Basic Action Email</a></li>
                                    <li><a href="email-templates-billing"><i class="ti ti-minus"></i>Billing Email</a></li>
                                </ul>
                            </li>
                            <!--end has-submenu-->
                        </ul>
                        <!--end submenu-->
                    </li>
                    <!--end has-submenu-->

                    <li class="has-submenu">
                        <a href="#">
                            <span><i data-feather="file-plus" class="align-self-center hori-menu-icon"></i>Pages</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="pages-blogs"><i class="ti ti-minus"></i>Blogs</a></li>
                            <li><a href="pages-faqs"><i class="ti ti-minus"></i>FAQs</a></li>
                            <li><a href="pages-pricing"><i class="ti ti-minus"></i>Pricing</a></li>
                            <li><a href="pages-profile"><i class="ti ti-minus"></i>Profile</a></li>
                            <li><a href="horizontal-starter"><i class="ti ti-minus"></i>Starter Page</a></li>
                            <li><a href="pages-timeline"><i class="ti ti-minus"></i>Timeline</a></li>
                            <li><a href="pages-treeview"><i class="ti ti-minus"></i>Treeview</a></li>
                        </ul>
                    </li>
                    <!--end has-submenu-->

                    <li class="has-submenu">
                        <a href="#">
                            <span><i data-feather="lock" class="align-self-center hori-menu-icon"></i>Authentication</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="auth-login"><i class="ti ti-minus"></i>Log in</a></li>
                            <li><a href="auth-register"><i class="ti ti-minus"></i>Register</a></li>
                            <li><a href="auth-recover-pw"><i class="ti ti-minus"></i>Recover Password</a></li>
                            <li><a href="auth-lock-screen"><i class="ti ti-minus"></i>Lock Screen</a></li>
                            <li><a href="auth-404"><i class="ti ti-minus"></i>Error 404</a></li>
                            <li><a href="auth-500"><i class="ti ti-minus"></i>Error 500</a></li>
                        </ul>
                        <!--end submenu-->
                    </li>
                    <!--end has-submenu-->
                    <li class="has-submenu">
                        <a href="widgets">
                            <span><i data-feather="layers" class="align-self-center hori-menu-icon"></i>Widgets</span>
                        </a>
                    </li>
                    <!--end has-submenu-->
                </ul><!-- End navigation menu -->
            </div> <!-- end navigation -->
        </div>
        <!-- Navbar -->
    </nav>
    <!-- end navbar-->
</div>