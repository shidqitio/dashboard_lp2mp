<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {{-- <!-- Data Table -->
	<style>
		div.dataTables_wrapper {
			width: 800px;
			margin: 0 auto;
		}
	</style> --}}
    <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- ------- -->
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- //bootstrap-css -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('sweetalert2.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="{{asset('node_modules/mdbootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/mdbootstrap/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('node_modules/mdbootstrap/css/style.css')}}">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('style/style.css') }}" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('css/font.css') }}" type="text/css" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

    <!-- //font-awesome icons -->
    <script src="{{asset('js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/jquery.cookie.js')}}"></script>
    <script src="{{asset('js/screenfull.js')}}"></script>
    <script>
        $(function() {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }



            $('#toggle').click(function() {
                screenfull.toggle($('#container')[0]);
            });
        });
    </script>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{ asset('sweetalert2.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="{{ asset('node_modules/mdbootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/mdbootstrap/css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/mdbootstrap/css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- charts -->
    <script src="{{ asset('js/raphael-min.js') }}"></script>
    <script src="{{ asset('js/morris.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/morris.css') }}">
    <!-- //charts -->
    <!--skycons-icons-->
    <script src="{{ asset('js/skycons.js') }}"></script>
    <!--//skycons-icons-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    {{-- Select2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


</head>

@yield('container')

<body class="dashboard-page">


    <script>
        var theme = $.cookie('protonTheme') || 'default';
        $('body').removeClass(function(index, css) {
            return (css.match(/\btheme-\S+/g) || []).join(' ');
        });
        if (theme !== 'default') $('body').addClass(theme);
    </script>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="index.html">
                    <i class="fa fa-home nav_icon"></i>
                    <span class="nav-text">
                        Dashboard
                    </span>
                </a>
            </li>
            <!-- <li class="has-subnav">
                <a href="javascript:;">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                    <span class="nav-text">
                        Setting
                    </span>
                    <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </a>
                <ul>
                    <li>
                        <a class="subnav-text" href="/setmasterharga">
                            Master Harga
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-subnav">
                <a href="javascript:;">
                    <i class="fa fa-check-square-o nav_icon"></i>
                    <span class="nav-text">
                        Forms
                    </span>
                    <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </a>
                <ul>
                    <li>
                        <a class="subnav-text" href="inputs.html">Inputs</a>
                    </li>
                    <li>
                        <a class="subnav-text" href="validation.html">Form Validation</a>
                    </li>
                </ul>
            </li>
            <li class="has-subnav">
                <a href="javascript:;">
                    <i class="fa fa-file-text-o nav_icon"></i>
                    <span class="nav-text">Pages</span>
                    <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </a>
                <ul>
                    <li>
                        <a class="subnav-text" href="gallery.html">
                            Image Gallery
                        </a>
                    </li>
                    <li>
                        <a class="subnav-text" href="/jadwal">
                            Jadwal Rapat
                        </a>
                    </li>
                    <li>
                        <a class="subnav-text" href="signup.html">
                            Sign Up Page
                        </a>
                    </li>
                    <li>
                        <a class="subnav-text" href="login.html">
                            Login Page
                        </a>
                    </li>
                </ul>
            </li> -->
            <!-- <li class="has-subnav">
                <a href="javascript:;">
                    <i class="icon-table nav-icon" aria-hidden="true"></i>
                    <span class="nav-text">
                        Table
                    </span>
                    <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </a>
                <ul>
                    <li>
                        <a class="subnav-text" href="/stokitempaket">
                            Stok Item dan Paket
                        </a>
                    </li>

                    <li>
                        <a class="subnav-text" href="/stokitempaket2">
                            Stok Item dan Paket 2
                        </a>
                    </li>

                    <li>
                        <a class="subnav-text" href="/user">
                            User
                        </a>
                    </li>

                    <li>
                        <a class="subnav-text" href="/hargabuku ">
                            Harga Bahan Ajar
                        </a>
                    </li>
                </ul>
            </li> -->

            <li>
                <a href="/kalenderp2m2">
                    <i class="fas fa-calendar-day nav-icon"></i>
                    <span class="nav-text">
                        Kalender Operasional
                    </span>
                </a>
            </li>

        </ul>
        <ul class="logout">
            <li>
                <a href="{{ url('/layouts/layout/logout')}}">
                    <i class="icon-off nav-icon"></i>
                    <span class="nav-text">
                        Logout
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    <section class="wrapper scrollable">
        <nav class="user-menu">
            <a href="javascript:;" class="main-menu-access">
                <i class="icon-proton-logo"></i>
                <i class="icon-reorder"></i>
            </a>
        </nav>
        <section class="title-bar">
            <div class="logo">
                <h1><a href="index.html"><img src="images/logo.png" alt="" />LPPMP</a></h1>
            </div>

            <div class="profile_details">


                <a href="/home" aria-expanded="false">


                    @if (Auth::check())

                    <h1>{{Auth::user()->name}}</h1>

                    @else
                    @php
                    return redirect('/login');
                    @endphp
                    @endif


                    {{-- <h1>{{Auth::user()->name}}</h1> --}}

                </a>

            </div>
            <div class="clearfix"> </div>
            </div>
            </div>
            <div class="clearfix"> </div>
        </section>
        @yield('contain')



    </section>

    @include('users.p2m2.layout.footer')