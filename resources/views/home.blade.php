<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SEO</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap-select.less') }}"> -->
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/scss/socials.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/lib/chosen/chosen.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    
</head>
<body>
    
    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('style/assets/js/main.js') }}"></script>
    <script src="{{ asset('style/assets/js/lib/chosen/chosen.jquery.min.js')}}"></script>
    @yield('footer')

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href=""><img src="{{ asset('style/images/LogoNusa.png') }}"><div>Dashboard</div></a>
                <a class="navbar-brand hidden" href="">DS</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/statistic"> <i class="menu-icon fa fa-bar-chart active"></i>Statistics</a>
                    </li>
                    <li>
                        <a href="/article"> <i class="menu-icon fa fa-puzzle-piece active"></i>Articles</a>
                    </li>
                    <li>
                        <a href="/comments"> <i class="menu-icon fa fa-commenting active"></i>Comments</a>
                    </li>
                    <li>
                        <a class="/" href="/socmed"> <i class="menu-icon fa fa-share active"></i>Social Media</a>
                    </li>
                    <li>
                        <hr color="#708090" />
                    </li>
                    <li>
                        <a href="/user"> <i class="menu-icon fa fa-user-circle-o active"></i>Profile</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>
                
                <div class="col-sm-5">
                    <div class="dropdown user-dropdown float-right">
                        <a href="#" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user" style="font-size: 19pt"> {{ Auth::user()->name }}</i><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/user"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </div>
                </div>
        </header><!-- /header -->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>@yield('judul')</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        @yield('main')
        
    </div>    

</body>
</html>