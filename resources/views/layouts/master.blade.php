<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title or 'cop'}}</title>

    <link href="{{asset('css/style.default.css')}}" rel="stylesheet">
    <link href="{{asset('css/soja.css')}}" rel="stylesheet">

    @yield('css')

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="stickyheader">
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-cog fa-spin"></i></div>
</div>

<section>

    <div class="leftpanel sticky-leftpanel">

        <div class="logopanel">
            <h1><img class="logo" src="{{ asset('/img/ecp.png') }}"><span> ECP Admin</span></h1>
        </div><!-- logopanel -->

        <div class="leftpanelinner">

            <!-- This is only visible to small devices -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media userlogged">
                    <img alt="" src="{{asset('img/photos/loggeduser.png')}}" class="media-object">
                    <div class="media-body">
                        <h4>{{$user_name or 'John Doe'}}</h4>
                        <span>"Life is so..."</span>
                    </div>
                </div>

                <h5 class="sidebartitle actitle">Account</h5>
                <ul class="nav nav-pills nav-stacked nav-bracket mb30">
                    <li><a href="#"><i class="fa fa-cog"></i> <span>profile</span></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
                    <li><a href="#"><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <h5 class="sidebartitle">Navigation</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket">

            {{-- sidebar --}}
                @include('layouts.sidebar')
            {{-- /sidebar --}}

            </ul>

        </div><!-- leftpanelinner -->
    </div><!-- leftpanel -->

    <div class="mainpanel">

        <div class="headerbar">

            <a class="menutoggle"><i class="fa fa-bars"></i></a>

            <form class="searchform" action="#" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form>

            <div class="header-right">
                <ul class="headermenu">
                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <img src="{{asset('img/photos/loggeduser.png')}}" alt="" />
                                {{ isset(auth()->user()->userName)? auth()->user()->userName:'John Doe' }}
                                <span class="caret"></span>
                            </button>

                            <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                               {{--profile here--}}
                                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                                <li><a href="#"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                                <form id="logout-form" action="" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div><!-- header-right -->

        </div><!-- headerbar -->

        <!-- load page common header bar -->
        @include('layouts.headerbar')

        <div class="contentpanel">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>

    </div><!-- mainpanel -->

</section>


<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui-1.10.3.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('js/toggles.min.js')}}"></script>
<script src="{{asset('js/jquery.cookies.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>


@yield('js')

<script>
    jQuery(document).ready(function() {

        "use strict";

        $('#loader').hide();

    });
</script>

<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
</body>
</html>
