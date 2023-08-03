<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CRM') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <link href="{{ asset('css/preview.css') }}" rel="stylesheet">

    <!-- CSS  -->
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- Styles * End -->
</head>
<body>
<div class="navbar-fixed">
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="{{ url('/') }}" class="brand-logo center">{{ config('app.name', 'CRM') }}</a>
            <ul class="left hide-on-med-and-down">
                <li><a href="#" class="dropdown-button lft" data-activates="clients-dropdown" data-beloworigin="true"><i class="fa fa-users"></i> Clients</a>
                </li>
                <li><a href="#" class="dropdown-button lft" data-activates="orders-dropdown" data-beloworigin="true"><i class="fa fa-first-order" aria-hidden="true"></i> Orders</a>
                </li>
                <li><a href="#" class="dropdown-button lft" data-activates="support-dropdown" data-beloworigin="true"><i class="fa fa-life-ring" aria-hidden="true"></i> Support</a>
                </li>
                <li><a href="#" class="dropdown-button lft" data-activates="payments-dropdown" data-beloworigin="true"><i class="fa fa-credit-card" aria-hidden="true"></i> Payments</a>
                </li>
            </ul>

            <!-- Sub Menues -->
            <ul id="clients-dropdown" class="dropdown-content">
                <li><a href="#">Manage Clients</a></li>
                <li><a href="#">Add new clients</a></li>
                <li><a href="#">Client groups</a></li>
                <li><a href="#">Send bulk email</a></li>
            </ul>

            <ul id="orders-dropdown" class="dropdown-content">
                <li><a href="#">All orders</a></li>
                <li><a href="#">Add new order</a></li>
                <li><a href="#">Pending order</a></li>
                <li><a href="#">Active order</a></li>
                <li><a href="#">Fraud order</a></li>
                <li><a href="#">Cancelled order</a></li>
            </ul>

            <ul id="support-dropdown" class="dropdown-content">
                <li><a href="#">Kb Categories</a></li>
                <li><a href="#">Kb Articles</a></li>
                <li><a href="#">All support tickets</a></li>
                <li><a href="#">All active tickets</a></li>
                <li><a href="#">Customer replied tickets</a></li>
                <li><a href="#">Answer ticket</a></li>
                <li><a href="#">Closed ticket</a></li>
                <li><a href="#">Create a new ticket</a></li>
            </ul>

            <ul id="payments-dropdown" class="dropdown-content">
                <li><a href="#">Transitions</a></li>
                <li><a href="#">Invoices</a></li>
                <li><a href="#">Add invoice</a></li>
                <li><a href="#">Recurring invoice</a></li>
            </ul>
            <!-- Sub Menues ** END -->

            <ul class="right hide-on-med-and-down">
                <li><a href="#!" class="dropdown-button rht" data-activates="applications-dropdown"
                       data-beloworigin="true"><i class="fa fa-archive" aria-hidden="true"></i> Apps</a></li>
                <li><a href="#!" class="dropdown-button rht" data-activates="finance-dropdown" data-beloworigin="true"><i class="fa fa-money" aria-hidden="true"></i> Finance</a>
                </li>
                <li><a href="#!" class="dropdown-button rht" data-activates="setup-dropdown" data-beloworigin="true"><i class="fa fa-wrench" aria-hidden="true"></i> Setup</a>
                </li>
                <!--<li><a href="#!" class="dropdown-button rht" data-activates="tools-dropdown" data-beloworigin="true">Tools</a>-->
                <!--</li>-->
                <li class="account avatar dropdown-button rht" data-activates="account-dropdown"
                    data-beloworigin="true">
                    <a href="#!">
                        <div class="account-image"><img class="circle" width="38px" src="https://randomuser.me/api/portraits/thumb/women/19.jpg" alt="">
                        </div>
{{--                        <small>{{ Auth::user()->fname }} {{ Auth::user()->lname }}</small>--}}
                    </a>
                </li>
            </ul>

            <!-- Sub Menues -->
            <ul id="applications-dropdown" class="dropdown-content">
                <li><a href="#!">To Do</a></li>
                <li><a href="#!">Sticky notes</a></li>
                <li><a href="#!">Notice Board</a></li>
                <li><a href="#!">CMS</a></li>
            </ul>

            <ul id="finance-dropdown" class="dropdown-content">
                <li><a href="#!">All accounts</a></li>
                <li><a href="#!">Income entry</a></li>
                <li><a href="#!">Revenue graph</a></li>
                <li><a href="#!">Express entry</a></li>
                <li><a href="#!">Transfers</a></li>
                <li><a href="#!">Transactions</a></li>
                <li><a href="#!">Balance sheet</a></li>
                <li><a href="#!">Coa help</a></li>
            </ul>

            <ul id="setup-dropdown" class="dropdown-content">
                <li><a href="#!">Products and services</a></li>
                <li><a href="#!">Administrators</a></li>
                <li><a href="#!">Administrators role</a></li>
                <li><a href="#!">Payments gatways</a></li>
                <li><a href="#!">Email templates</a></li>
                <li><a href="#!">Support departments</a></li>
                <li><a href="#!">System settings</a></li>
            </ul>

            <ul id="tools-dropdown" class="dropdown-content">
                <li><a href="#!">System logs</a></li>
                <li><a href="#!">Send email logs</a></li>
                <li><a href="#!">System status</a></li>
                <li><a href="#!">Database cleanup</a></li>
                <li><a href="#!">Developer tools</a></li>
            </ul>
            <ul id="account-dropdown" class="dropdown-content">
                <!--<small>Acount Name</small>-->
                <li><a href="#!">Profile</a></li>
                <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </ul>
            <!-- Sub Menues ** END -->


            <ul id="nav-mobile" class="side-nav">
                <li><a href="!#">Clients</a></li>
                <li><a href="!#">Payments</a></li>
                <li><a href="!#">Orders</a></li>
                <li><a href="!#">Finance</a></li>
                <li><a href="!#">Support</a></li>
                <li><a href="!#">Setup</a></li>
                <li><a href="!#">Tools</a></li>
                <li><a href="!#">Modules</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

@yield('content')


<footer class="page-footer orange">

    <div class="footer-copyright">
        <div class="container">
            all rights reserved &copy; <a class="orange-text text-lighten-3" href="#">2021</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="js/app.js"></script>
<!--  Scripts-- * End JS -->
@yield('scripts')


</body>
</html>
