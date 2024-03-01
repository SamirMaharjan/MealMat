    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="index" class="logo">
                <span>
                    <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="{{ URL::asset('assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                    <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="logo-large"
                        class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <ul class="metismenu left-sidenav-menu">
                <li class="menu-label mt-0">Main</li>
                <li>
                    <a href="javascript: void(0);"> <i data-feather="home"
                            class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="index"><i
                                    class="ti-control-record"></i>Analytics</a></li>
                        <li class="nav-item"><a class="nav-link" href="sales-index"><i
                                    class="ti-control-record"></i>Sales</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="grid"
                            class="align-self-center menu-icon"></i><span>Apps</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Email <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="apps-email-inbox">Inbox</a></li>
                                <li><a href="apps-email-read">Read Email</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="apps-chat"><i
                                    class="ti-control-record"></i>Chat</a></li>
                        <li class="nav-item"><a class="nav-link" href="apps-contact-list"><i
                                    class="ti-control-record"></i>Contact List</a></li>
                        <li class="nav-item"><a class="nav-link" href="apps-calendar"><i
                                    class="ti-control-record"></i>Calendar</a></li>
                        <li class="nav-item"><a class="nav-link" href="apps-files"><i class="ti-control-record"></i>File
                                Manager</a></li>
                        <li class="nav-item"><a class="nav-link" href="apps-invoice"><i
                                    class="ti-control-record"></i>Invoice</a></li>
                        <li class="nav-item"><a class="nav-link" href="apps-tasks"><i
                                    class="ti-control-record"></i>Tasks</a></li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Projects <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="apps-project-overview">Overview</a></li>
                                <li><a href="apps-project-projects">Projects</a></li>
                                <li><a href="apps-project-board">Board</a></li>
                                <li><a href="apps-project-teams">Teams</a></li>
                                <li><a href="apps-project-files">Files</a></li>
                                <li><a href="apps-new-project">New Project</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Ecommerce <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="apps-ecommerce-products">Products</a></li>
                                <li><a href="apps-ecommerce-product-list">Product List</a></li>
                                <li><a href="apps-ecommerce-product-detail">Product Detail</a></li>
                                <li><a href="apps-ecommerce-cart">Cart</a></li>
                                <li><a href="apps-ecommerce-checkout">Checkout</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="lock"
                            class="align-self-center menu-icon"></i><span>Authentication</span><span
                            class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="auth-login"><i
                                    class="ti-control-record"></i>Log in</a></li>
                        <li class="nav-item"><a class="nav-link" href="auth-register"><i
                                    class="ti-control-record"></i>Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="auth-recover-pw"><i
                                    class="ti-control-record"></i>Recover Password</a></li>
                        <li class="nav-item"><a class="nav-link" href="auth-lock-screen"><i
                                    class="ti-control-record"></i>Lock Screen</a></li>
                        <li class="nav-item"><a class="nav-link" href="auth-404"><i
                                    class="ti-control-record"></i>Error 404</a></li>
                        <li class="nav-item"><a class="nav-link" href="auth-500"><i
                                    class="ti-control-record"></i>Error 500</a></li>
                    </ul>
                </li>

                <hr class="hr-dashed hr-menu">
                <li class="menu-label my-2">Components & Extra</li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="box"
                            class="align-self-center menu-icon"></i><span>UI Kit</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>UI Elements <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="ui-alerts">Alerts</a></li>
                                <li><a href="ui-avatar">Avatar</a></li>
                                <li><a href="ui-buttons">Buttons</a></li>
                                <li><a href="ui-badges">Badges</a></li>
                                <li><a href="ui-cards">Cards</a></li>
                                <li><a href="ui-carousels">Carousels</a></li>
                                <li><a href="ui-check-radio"><span>Check & Radio</span></a></li>
                                <li><a href="ui-dropdowns">Dropdowns</a></li>
                                <li><a href="ui-grids">Grids</a></li>
                                <li><a href="ui-images">Images</a></li>
                                <li><a href="ui-list">List</a></li>
                                <li><a href="ui-modals">Modals</a></li>
                                <li><a href="ui-navs">Navs</a></li>
                                <li><a href="ui-navbar">Navbar</a></li>
                                <li><a href="ui-offcanvas">Offcanvas <span
                                            class="badge badge-soft-success ms-auto">New</span></a></li>
                                <li><a href="ui-paginations">Paginations</a></li>
                                <li><a href="ui-popover-tooltips">Popover & Tooltips</a></li>
                                <li><a href="ui-progress">Progress</a></li>
                                <li><a href="ui-spinners">Spinners</a></li>
                                <li><a href="ui-tabs-accordions">Tabs & Accordions</a></li>
                                <li><a href="ui-toasts">Toasts</a></li>
                                <li><a href="ui-typography">Typography</a></li>
                                <li><a href="ui-videos">Videos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Advanced UI <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="advanced-animation">Animation</a></li>
                                <li><a href="advanced-clipboard">Clip Board</a></li>
                                <li><a href="advanced-highlight">Highlight</a></li>
                                <li><a href="advanced-idle-timer">Idle Timer</a></li>
                                <li><a href="advanced-kanban">Kanban</a></li>
                                <li><a href="advanced-lightbox">Lightbox</a></li>
                                <li><a href="advanced-nestable">Nestable List</a></li>
                                <li><a href="advanced-rangeslider">Range Slider</a></li>
                                <li><a href="advanced-ratings">Ratings</a></li>
                                <li><a href="advanced-ribbons">Ribbons</a></li>
                                <li><a href="advanced-session">Session Timeout</a></li>
                                <li><a href="advanced-sweetalerts">Sweet Alerts</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Forms <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="forms-advanced">Advance Elements</a></li>
                                <li><a href="forms-elements">Basic Elements</a></li>
                                <li><a href="forms-editors">Editors</a></li>
                                <li><a href="forms-uploads">File Upload</a></li>
                                <li><a href="forms-repeater">Repeater</a></li>
                                <li><a href="forms-validation">Validation</a></li>
                                <li><a href="forms-wizard">Wizard</a></li>
                                <li><a href="forms-x-editable">X Editable</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Charts <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="charts-apex">Apex</a></li>
                                <li><a href="charts-chartjs">Chartjs</a></li>
                                <li><a href="charts-flot">Flot</a></li>
                                <li><a href="charts-morris">Morris</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Tables <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="tables-basic">Basic</a></li>
                                <li><a href="tables-datatable">Datatables</a></li>
                                <li><a href="tables-editable">Editable</a></li>
                                <li><a href="tables-responsive">Responsive</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Icons <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">

                                <li><a href="icons-dripicons">Dripicons</a></li>
                                <li><a href="icons-feather">Feather</a></li>
                                <li><a href="icons-fontawesome">Font awesome</a></li>
                                <li><a href="icons-materialdesign">Material Design</a></li>
                                <li><a href="icons-themify">Themify</a></li>
                                <li><a href="icons-typicons">Typicons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Maps <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="maps-google">Google Maps</a></li>
                                <li><a href="maps-leaflet">Leaflet Maps</a></li>
                                <li><a href="maps-vector">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);"><i class="ti-control-record"></i>Email Template <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="email-templates-alert">Alert Email</a></li>
                                <li><a href="email-templates-basic">Basic Action Email</a></li>
                                <li><a href="email-templates-billing">Billing Email</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="widgets"><i data-feather="layers"
                            class="align-self-center menu-icon"></i><span>Widgets</span><span
                            class="badge badge-soft-success menu-arrow">New</span></a>
                </li>

                <li>
                    <a href="javascript: void(0);"><i data-feather="file-plus"
                            class="align-self-center menu-icon"></i><span>Pages</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="pages-blogs"><i
                                    class="ti-control-record"></i>Blogs</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-faqs"><i
                                    class="ti-control-record"></i>FAQs</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-pricing"><i
                                    class="ti-control-record"></i>Pricing</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-profile"><i
                                    class="ti-control-record"></i>Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-starter"><i
                                    class="ti-control-record"></i>Starter Page</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-timeline"><i
                                    class="ti-control-record"></i>Timeline</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-treeview"><i
                                    class="ti-control-record"></i>Treeview</a></li>
                    </ul>
                </li>
            </ul>

            <div class="update-msg text-center">
                <a href="javascript:void(0);" class="float-end close-btn text-black" data-dismiss="update-msg"
                    aria-label="Close" aria-hidden="true">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="mt-3">Mannat Themes</h5>
                <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
            </div>
        </div>
    </div>
