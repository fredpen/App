<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <title> @yield('title') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <script src="{{ asset('js/all.js') }}" defer></script>
</head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                <div class="slimscroll-menu" id="left-side-menu-container">
                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav">
                        <li class="side-nav-title side-nav-item">Menus</li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span class="badge badge-success float-right">@yield('num_users') </span>
                                <span> Users </span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{ route('users.index') }}">All Users</a>
                                </li>
                                <li>
                                    <a href="{{ route('users.create') }}">Create Users</a>
                                </li>
                                <li>
                                    <a href="dashboard-crm.html">CRM</a>
                                </li>
                                <li>
                                    <a href="dashboard-projects.html">Projects</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-view-apps"></i>
                                <span> Posts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="apps-calendar.html">Calendar</a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Projects
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="apps-projects-list.html">List</a>
                                        </li>
                                        <li>
                                            <a href="apps-projects-details.html">Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="apps-tasks.html">Tasks</a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Categories
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="apps-ecommerce-products.html">Products</a>
                                        </li>
                                        <li>
                                            <a href="apps-ecommerce-products-details.html">Products Details</a>
                                        </li>
                                        <li>
                                            <a href="apps-ecommerce-orders.html">Orders</a>
                                        </li>
                                        <li>
                                            <a href="apps-ecommerce-orders-details.html">Order Details</a>
                                        </li>
                                        <li>
                                            <a href="apps-ecommerce-customers.html">Customers</a>
                                        </li>
                                        <li>
                                            <a href="apps-ecommerce-shopping-cart.html">Shopping Cart</a>
                                        </li>
                                        <li>
                                            <a href="apps-ecommerce-checkout.html">Checkout</a>
                                        </li>
                                        <li>
                                            <a href="apps-ecommerce-sellers.html">Sellers</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-copy"></i>
                                <span> Pages </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="pages-starter.html">Starter Page</a>
                                </li>
                                <li>
                                    <a href="pages-profile.html">Profile</a>
                                </li>
                                <li>
                                    <a href="pages-invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="pages-faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="pages-pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="pages-maintenance.html">Maintenance</a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Authentication
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="pages-login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="pages-login-2.html">Login 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="pages-register-2.html">Register 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-logout.html">Logout</a>
                                        </li>
                                        <li>
                                            <a href="pages-logout-2.html">Logout 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-recoverpw.html">Recover Password</a>
                                        </li>
                                        <li>
                                            <a href="pages-recoverpw-2.html">Recover Password 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-lock-screen.html">Lock Screen</a>
                                        </li>
                                        <li>
                                            <a href="pages-lock-screen-2.html">Lock Screen 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-confirm-mail.html">Confirm Mail</a>
                                        </li>
                                        <li>
                                            <a href="pages-confirm-mail-2.html">Confirm Mail 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Error
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="pages-404.html">Error 404</a>
                                        </li>
                                        <li>
                                            <a href="pages-404-alt.html">Error 404-alt</a>
                                        </li>
                                        <li>
                                            <a href="pages-500.html">Error 500</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-browser"></i>
                                <span> Layouts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="layouts-horizontal.html">Horizontal</a>
                                </li>
                                <li>
                                    <a href="layouts-light-sidenav.html">Light Sidenav</a>
                                </li>
                                <li>
                                    <a href="layouts-collapsed.html">Collapsed Sidenav</a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="right-bar-toggle">Right Sidebar</a>
                                </li>
                                <li>
                                    <a href="layouts-boxed-vertical.html">Boxed Vertical</a>
                                </li>
                                <li>
                                    <a href="layouts-boxed-horizontal.html">Boxed Horizontal</a>
                                </li>
                                <li>
                                    <a href="layouts-scrollable-sidenav.html">Scrollable Sidenav</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->

            </div>

            <div class="content-page">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>

        @yield('footer')
    </body>
</html>
