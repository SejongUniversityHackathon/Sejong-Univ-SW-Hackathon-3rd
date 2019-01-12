<!DOCTYPE html>
<html lang="en">
 <!-- START Head -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <!-- Enable responsiveness on mobile devices-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">

    <title>
         세종이노베이션센터 빌딩관리시스템
    </title>

    <!--START Loader -->
    <style>
        #initial-loader{display:flex;align-items:center;justify-content:center;flex-wrap:wrap;width:100%;background:#212121;position:fixed;z-index:10000;top:0;left:0;bottom:0;right:0;transition:opacity .2s ease-out}#initial-loader .initial-loader-top{display:flex;align-items:center;justify-content:space-between;width:200px;border-bottom:1px solid #2d2d2d;padding-bottom:5px}#initial-loader .initial-loader-top > *{display:block;flex-shrink:0;flex-grow:0}#initial-loader .initial-loader-bottom{padding-top:10px;color:#5C5C5C;font-family:-apple-system,"Helvetica Neue",Helvetica,"Segoe UI",Arial,sans-serif;font-size:12px}@keyframes spin{100%{transform:rotate(360deg)}}#initial-loader .loader g{transform-origin:50% 50%;animation:spin .5s linear infinite}body.loading {overflow: hidden !important} body.loaded #initial-loader{opacity:0}
    </style>
    <!--END Loader-->
    <style type="text/css">
        body { word-break: keep-all; }
    </style>

    <!-- SCSS Output -->
    <link rel="stylesheet" href="<?=site_url()?>assets/stylesheets/app.min.e0bb64e7.css">

    <!-- START Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?=site_url()?>assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=site_url()?>assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=site_url()?>assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=site_url()?>assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=site_url()?>assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=site_url()?>assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=site_url()?>assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=site_url()?>assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=site_url()?>assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?=site_url()?>assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=site_url()?>assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=site_url()?>assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=site_url()?>assets/images/favicons/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=site_url()?>assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- END Favicon -->

    <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" title="RSS" href="../atom.xml">

    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-83862026-1', 'auto');
      ga('send', 'pageview');
    </script>

    <!-- jekyll settings -->
    <script>
        var ASSET_PATH_BASE = '<?=site_url()?>';
    </script>
</head>
<!-- END Head -->


<body class="loading">
    <div id="initial-loader">
    <div>
        <div class="initial-loader-top">
            <!-- <img class="initial-loader-logo" src="<?=site_url()?>assets/images/spin-logo-inverted.png" alt="Loader"> -->
            <span style="color: #fff;">SIMS</span>
            <div class="loader loader--style1">
                <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewbox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
                    <g>
                        <path fill="#2d2d2d" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z">
                        <path fill="#2c97de" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0C22.32,8.481,24.301,9.057,26.013,10.047z">
                        
                    </g>
                </svg>
            </div>
        </div>
        <div class="initial-loader-bottom">
            시스템 로딩중입니다. <i class="fa fa-cricle" style="opacity: 0"></i>
        </div>
    </div>
</div>

    <!-- Bower Libraries Scripts -->
    <script src="<?=site_url()?>assets/vendor/js/lib.min.js"></script>

    <div class="main-wrap">
        <nav class="navigation">
            <!-- START Navbar -->
<div class="navbar-inverse navbar navbar-fixed-top">
       <div class="container-fluid">

           <div class="navbar-header">
            <a class="current navbar-brand" href="<?=site_url()?>">
                <!-- <img alt="Spin Logo Inverted" class="h-20" src="<?=site_url()?>assets/images/spin-logo-inverted-@2X.png"> -->
                <span style="color: #fff;">SIMS</span>
            </a>
            <button class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button">
                <i class="fa fa-fw fa-user text-white"></i>
            </button>
            <button class="action-sidebar-open navbar-toggle collapsed" type="button">
                <i class="fa fa-fw fa-bars text-white"></i>
            </button>
          </div>

        <div class="collapse navbar-collapse" id="navbar">

            <!-- START Search Mobile -->
            <div class="form-group hidden-lg hidden-md hidden-sm">
                <div class="input-group hidden-lg hidden-md">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-search"></i></button>
                    </span>
                </div>
            </div>
            <!-- END Search Mobile -->

            <!-- START Left Side Navbar -->
            <ul class="nav navbar-nav navbar-left clearfix yamm">

                <!-- START Switch Sidebar ON/OFF -->
                <li id="sidebar-switch" class="hidden-xs">
                    <a class="action-toggle-sidebar-slim" data-placement="bottom" data-toggle="tooltip" href="#" title="Slim sidebar on/off">
                        <i class="fa fa-lg fa-bars fa-fw"></i>
                    </a>
                </li>
                <!-- END Switch Sidebar ON/OFF -->

                <!-- START Menu Only Visible on Navbar -->
                <li id="top-menu-switch" class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <i class="fa fa-fw fa-caret-down"></i></a>
                    
                    
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">

                                        <!-- START Start, Widgets Navbar Menu -->
                                        <ul class="col-sm-2 list-unstyled">
                                            <li>
                                                <p class="text-muted small text-uppercase"><strong> Start</strong></p>
                                            </li>
                                            <li class="m-l-1">
                                                <a href="../start/overview.html" class="text-gray-lighter">
                                                    <span class="nav-label">Overview</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a href="../start/projects.html" class="text-gray-lighter">
                                                    <span class="nav-label">Projects</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a href="../start/analytics.html" class="text-gray-lighter">
                                                    <span class="nav-label">Analytics</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a href="../start/activity-team.html" class="text-gray-lighter">
                                                    <span class="nav-label">Activity Team</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a href="../start/e-commerce.html" class="text-gray-lighter">
                                                    <span class="nav-label">E-Commerce</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a href="../start/financial.html" class="text-gray-lighter">
                                                    <span class="nav-label">Financial</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a href="../start/stock.html" class="text-gray-lighter">
                                                    <span class="nav-label">Stock</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a href="../start/performance.html" class="text-gray-lighter">
                                                    <span class="nav-label">Performance</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a href="../start/exchange&amp;trading.html" class="text-gray-lighter">
                                                    <span class="nav-label">Exchange &amp; Trading</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a href="../start/system.html" class="text-gray-lighter">
                                                    <span class="nav-label">System</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a href="../start/monitor.html" class="text-gray-lighter">
                                                    <span class="nav-label">Monitor</span>
                                                </a>
                                            </li>

                                            <li>
                                                <p class="text-muted small text-uppercase m-t-2"><strong>Widgets</strong></p>
                                            </li>
                                            <li class="m-l-1">
                                                <a href="../widgets/widgets.html" class="text-gray-lighter">
                                                    <span class="nav-label">Widgets</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a href="../graphs-widgets/widgets.html" class="text-gray-lighter">
                                                    <span class="nav-label">Graphs Widgets</span>
                                                </a>
                                            </li>

                                              <li>
                                                <p class="text-muted small text-uppercase m-t-2"><strong>Tables</strong></p>
                                            </li>

                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../tables/pricing-tables.html">
                                                    <span class="nav-label">Pricing Tables</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../tables/tables.html">
                                                    <span class="nav-label">Tables</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../tables/datatables.html">
                                                    <span class="nav-label">Datatables</span>
                                                </a>
                                            </li>

                                            <li>
                                                <p class="text-muted small text-uppercase m-t-2"> <strong> Grid</strong></p>
                                                <ul>
                                                    <li class="m-l-1">
                                                        <a class="text-gray-lighter" href="../grids/grids.html">
                                                            <span class="nav-label">Grids</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- END Start, Widgets Navbar Menu -->

                                        <!-- START Layouts, Sidebars Navbar Menu -->
                                        <ul class="col-sm-2 list-unstyled">
                                            <li>
                                                <p class="text-muted small text-uppercase"><strong>Layouts</strong></p>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../layouts/default-fullwidth.html">
                                                    <span class="nav-label">Default FullWidth</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../layouts/default-fixed.html">
                                                    <span class="nav-label">Default Fixed</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../layouts/default-w-navbar.html">
                                                    <span class="nav-label">Default w/ Navbar</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../layouts/default-w-footer.html">
                                                    <span class="nav-label">Default w/ Footer</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../layouts/default-footer-fixed.html">
                                                    <span class="nav-label">Default Footer Fixed</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../layouts/navbar.html">
                                                    <span class="nav-label">Navbar</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../layouts/navbar-container.html">
                                                    <span class="nav-label">Navbar Container</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../layouts/empty-page.html">
                                                    <span class="nav-label">Empty Page</span>
                                                </a>
                                            </li>

                                            <li>
                                                <p class="text-muted small text-uppercase m-t-2"><strong>Sidebars</strong></p>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../sidebars/sidebar-default.html">
                                                    <span class="nav-label">Sidebar Default</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../sidebars/sidebar-w-progress.html">
                                                    <span class="nav-label">Sidebar w/ Progress</span>
                                                </a>
                                            </li>
                                                <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../sidebars/sidebar-w-menu.html">
                                                    <span class="nav-label">Sidebar w/ Menu</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../sidebars/sidebar-w-bars.html">
                                                    <span class="nav-label">Sidebar w/ Bars</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../sidebars/sidebar-avatar-&amp;-bars.html">
                                                    <span class="nav-label">Sidebar Avatar &amp; Bars</span>
                                                </a>
                                            </li>
                                             <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../sidebars/sidebar-aside.html">
                                                    <span class="nav-label">Sidebar ASide</span>
                                                </a>
                                            </li>
                                             <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../sidebars/sidebar-avatar-numbers.html">
                                                    <span class="nav-label">With Avatar &amp; Numbers</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../sidebars/sidebar-avatar-stats.html">
                                                    <span class="nav-label">With Avatar &amp; Stats</span>
                                                </a>
                                            </li>
                                             <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../sidebars/sidebar-slim.html">
                                                    <span class="nav-label">Sidebar Slim</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../sidebars/sidebar-big-icons.html">
                                                    <span class="nav-label">Sidebar Big Icons</span>
                                                </a>
                                            </li>

                                        </ul>
                                        <!-- END Layouts, Sidebars Navbar Menu -->

                                        <!-- START Layouts, Sidebars Navbar Menu -->
                                        <ul class="col-sm-2 list-unstyled">
                                            <li>
                                                <p class="text-muted small text-uppercase"><strong> Interface</strong></p>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/colors.html">
                                                    <span class="nav-label">Colors</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/typography.html">
                                                    <span class="nav-label">Typography</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/buttons.html">
                                                    <span class="nav-label">Buttons</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/paginations&amp;pager.html">
                                                    <span class="nav-label">Paginations &amp; Pager</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/images&amp;thumbs.html">
                                                    <span class="nav-label">Images &amp; Thumbs</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/avatars.html">
                                                    <span class="nav-label">Avatars</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/navbars.html">
                                                    <span class="nav-label">Navbars</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/alerts.html">
                                                    <span class="nav-label">Alerts</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/toastr.html">
                                                    <span class="nav-label">Toastr</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/modals.html">
                                                    <span class="nav-label">Modals</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/progress-bars.html">
                                                    <span class="nav-label">Progress Bars</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/badges&amp;labels.html">
                                                    <span class="nav-label">Badges &amp; Labels</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/breadcrumps.html">
                                                    <span class="nav-label">Breadcrumbs</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/tabs&amp;pills.html">
                                                    <span class="nav-label">Tabs &amp; Pills</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/tooltips&amp;popovers.html">
                                                    <span class="nav-label">Tooltips &amp; Popovers</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../interface/list-groups.html">
                                                    <span class="nav-label">List Groups</span>
                                                </a>
                                            </li>

                                            <li>
                                                <p class="text-muted small text-uppercase m-t-2"><strong>Graphs</strong></p>
                                            </li>

                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../graphs/highcharts.html">
                                                    <span class="nav-label">Highcharts</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../graphs/highstock.html">
                                                    <span class="nav-label">Highstock</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../graphs/peity.html">
                                                    <span class="nav-label">Peity</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../graphs/sparklines.html">
                                                    <span class="nav-label">Sparklines</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../graphs/chartist.html">
                                                    <span class="nav-label">Chartist</span>
                                                </a>
                                            </li>

                                        </ul>
                                        <!-- END Layouts, Sidebars Navbar Menu -->

                                        <!-- START Pages Navbar Menu -->
                                        <ul class="col-sm-2 list-unstyled">
                                            <li>
                                                <p class="text-muted small text-uppercase"><strong> Pages</strong></p>
                                            </li>
                                           <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../pages/register.html">
                                                    <span class="nav-label">Register</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../pages/login.html">
                                                    <span class="nav-label">Login</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../pages/forgot-password.html">
                                                    <span class="nav-label">Forgot Password</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../pages/lock-screen.html">
                                                    <span class="nav-label">Lock Screen</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../pages/error-404.html">
                                                    <span class="nav-label">Error 404</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../pages/invoice.html">
                                                    <span class="nav-label">Invoice</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../pages/timeline.html">
                                                    <span class="nav-label">Timeline</span>
                                                </a>
                                            </li>

                                            <li>
                                                <p class="text-muted small text-uppercase m-t-2"><strong>Projects</strong></p>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/projects-list.html">
                                                    <span class="nav-label">Projects List</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/projects-grid.html">
                                                    <span class="nav-label">Projects Grid</span>
                                                </a>
                                            </li>

                                            <li>
                                                <p class="text-muted small text-uppercase m-t-2"> <strong> Tasks</strong></p>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/tasks-list.html">
                                                    <span class="nav-label">Tasks List</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/tasks-grid.html">
                                                    <span class="nav-label">Tasks Grid</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/tasks-details.html">
                                                     <span class="nav-label">Tasks Details</span>
                                                </a>
                                            </li>

                                            <li>
                                                <p class="text-muted small text-uppercase m-t-2"><strong>Files Manager</strong></p>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/files-list.html">
                                                    <span class="nav-label">Files List</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/files-grid.html">
                                                    <span class="nav-label">Files Grid</span>
                                                </a>
                                            </li>
                                            <li>
                                                <p class="text-muted small text-uppercase m-t-2"><strong> Search Results</strong></p>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/search-results.html">
                                                    <span class="nav-label">Search Results</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/images-results.html">
                                                    <span class="nav-label">Images Results</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/videos-results.html">
                                                    <span class="nav-label">Videos Results</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/users-results.html">
                                                    <span class="nav-label">Users Results</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- END Pages Navbar Menu -->

                                        <!-- START Pages Navbar Menu -->
                                        <ul class="col-sm-2 list-unstyled">
                                            <li>
                                                <p class="text-muted small text-uppercase"><strong> Users</strong></p>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/users-list.html">
                                                    <span class="nav-label">Users List</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/users-grid.html">
                                                    <span class="nav-label">Users Grid</span>
                                                </a>
                                            </li>

                                            <li>
                                                <p class="text-muted small text-uppercase m-t-2"><strong>Mailbox</strong></p>
                                            </li>

                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/inbox.html">
                                                    <span class="nav-label">Inbox</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/email-details.html">
                                                    <span class="nav-label">Email Details</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/new-email.html">
                                                    <span class="nav-label">New Email</span>
                                                </a>
                                            </li>

                                            <li>
                                                <p class="text-muted small text-uppercase m-t-2"> <strong> Profile User</strong></p>
                                            </li>

                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/profile-details.html">
                                                    <span class="nav-label">Profile Details</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/profile-edit.html">
                                                    <span class="nav-label">Profile Edit</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/account-edit.html">
                                                    <span class="nav-label">Account Edit</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/billing-edit.html">
                                                    <span class="nav-label">Billing Edit</span>
                                                </a>
                                            </li>
                                                <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/settings-edit.html">
                                                    <span class="nav-label">Settings Edit</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../apps/sessions-edit.html">
                                                    <span class="nav-label">Sessions Edit</span>
                                                </a>
                                            </li>

                                            <li>
                                                <p class="text-muted small text-uppercase m-t-2"><strong> Icons</strong></p>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../icon/fonts-awesome.html">
                                                    <span class="nav-label">Fonts Awesome</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../icon/glyphicons.html">
                                                    <span class="nav-label">Glyphicons</span>
                                                </a>
                                            </li>
                                            <li>
                                                <p class="text-muted small text-uppercase m-t-2"><strong>Versions</strong></p>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../versions/jquery.html">
                                                    <span class="nav-label">JQuery</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../versions/react.html">
                                                    <span class="nav-label">React</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../versions/react.html">
                                                    <span class="nav-label">Photoshop .PSD</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- END Pages Navbar Menu -->

                                        <!-- START Pages Navbar Menu -->
                                        <ul class="col-sm-2 list-unstyled">
                                            <li>
                                                <p class="text-muted small text-uppercase"><strong>Forms</strong></p>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../forms/forms.html">
                                                    <span class="nav-label">Forms</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../forms/forms-layouts.html">
                                                    <span class="nav-label">Forms Layouts</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../forms/date-range-picker.html">
                                                    <span class="nav-label">Date Range Picker</span>
                                                </a>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../forms/forms-extended.html">
                                                    <span class="nav-label">Forms Extended</span>
                                                </a>
                                            </li>

                                            <li>
                                                <p class="text-muted small text-uppercase m-t-2"><strong>Panels</strong></p>
                                            </li>
                                            <li class="m-l-1">
                                                <a class="text-gray-lighter" href="../panels/panels.html">
                                                    <span class="nav-label">Panels</span>
                                                </a>
                                            </li>

                                        </ul>
                                        <!-- END Pages Navbar Menu -->

                                </div>
                            </div>
                        </li>
                    </ul>
                    
                </li>
                <!-- END Menu Only Visible on Navbar -->


                <li class="spin-search-box clearfix hidden-xs">
                    <a href="#" class="pull-left">
                        <i class="fa fa-search fa-lg icon-inactive"></i>
                        <i class="fa fa-close fa-lg icon-active"></i>
                    </a>
                    <div class="input-group input-group-sm pull-left p-10">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </li>
            </ul>
            <!-- START Left Side Navbar -->

        </div>

        
    </div>
</div>
<!-- END Navbar -->
 
    <!-- START Sidebars -->
<aside class="navbar-default sidebar">
    <div class="sidebar-overlay-head">
        <!-- <img src="<?=site_url()?>assets/images/spin-logo-inverted.png" alt="Logo" width="90"> -->
        <span style="color: #fff;">SIMS</span>
        <a href="#" class="sidebar-switch action-sidebar-close">
            <i class="fa fa-times"></i>
        </a>
    </div>
    <div class="sidebar-logo">
        <img class="logo-default" src="<?=site_url()?>assets/images/spin-logo-big-inverse-@2X.png" alt="Logo" width="53">
        <img class="logo-slim" src="<?=site_url()?>assets/images/spin-logo-slim.png" alt="Logo" height="13">
    </div>

    <div class="sidebar-content">
        <div class="p-y-3 avatar-container">
            <img src="<?=site_url()?>assets/images/avatars/spin-avatar-woman.png" width="50" alt="Avatar" class="spin-avatar img-circle">
            <div class="text-center">
                <h6 class="m-b-0">Michelle Baez</h6>
                <small class="text-muted">Help Desk</small>
                <p class="m-t-1 m-b-2">
                    <span id="sidebar-avatar-chart">5,3,2,-1,-3,-2,2,3,5,2</span>
                </p>
            </div>
        </div>
    <div class="sidebar-default-visible text-muted small text-uppercase sidebar-section p-y-2">
        <strong>Navigation</strong>
    </div>

    <!-- START Tree Sidebar Common -->
<ul class="side-menu">

    <li>
        <a href="<?=site_url()?>" title="대시보드">
            <i class="fa fa-th fa-lg fa-bars"></i><span class="nav-label">대시보드</span>
        </a>
    </li>

    <li>
        <a href="#" title="강의실 관리">
            <i class="fa fa-th fa-lg fa-bars"></i><span class="nav-label">강의실 관리</span><i class="fa arrow"></i>
        </a>
        <ul>
            <li class="">
                <a href="<?=site_url('rooms/pcs')?>">
                <span class="nav-label">PC 관리</span>
                </a>
            </li>
            <li class="">
                <a href="<?=site_url('rooms/projectors')?>">
                <span class="nav-label">프로젝터 관리</span>
                </a>
            </li>
            <li class="">
                <a href="<?=site_url('rooms/videos')?>">
                <span class="nav-label">강의영상 관리</span>
                </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#" title="주차관리">
            <i class="fa fa-bars fa-lg fa-fw"></i><span class="nav-label">주차관리</span><i class="fa arrow"></i>
        </a>
        <ul>
            <li class="">
                <a href="<?=site_url('parking/parking')?>">
                    <span class="nav-label">실시간 주차현황</span>
                </a>
            </li>
            <li class="">
                <a href="<?=site_url('parking/parking/prediction')?>">
                    <span class="nav-label">데이터분석기반 예측</span>
                </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#" title="기후기반 빌딩관리">
            <i class="fa fa-fw fa-lg fa-bars"></i><span class="nav-label">기후기반 빌딩관리</span><i class="fa arrow"></i>
        </a>
        <ul>
            <li class="">
                <a href="<?=site_url('weather/weather')?>">
                    <span class="nav-label">날씨기반 빌딩관리</span>
                </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#" title="재난경보 시스템">
            <i class="fa fa-fw fa-lg fa-bars"></i><span class="nav-label">재난경보 시스템</span><i class="fa arrow"></i>
        </a>
        <ul>
            <li class="">
                <a href="<?=site_url('evacuation/evacuation/fire')?>">
                    <span class="nav-label">화재 발생</span>
                </a>
            </li>
            <li class="">
                <a href="<?=site_url('evacuation/evacuation/earthquake')?>">
                    <span class="nav-label">지진 발생</span>
                </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#" title="수도/전기 관리">
            <i class="fa fa-fw fa-lg fa-bars"></i><span class="nav-label">누수/누전 관리</span><i class="fa arrow"></i>
        </a>
        <ul>
            <li class="">
                <a href="<?=site_url('leakages/leakages/water')?>">
                    <span class="nav-label">누수 관리</span>
                </a>
            </li>
            <li class="">
                <a href="<?=site_url('leakages/leakages/electric')?>">
                    <span class="nav-label">누전 관리</span>
                </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="#" title="출입 관리">
            <i class="fa fa-fw fa-lg fa-bars"></i><span class="nav-label">츨입 관리</span><i class="fa arrow"></i>
        </a>
        <ul>
            <li class="">
                <a href="<?=site_url('access/access')?>">
                    <span class="nav-label">출입 관리</span>
                </a>
            </li>
            <li class="">
                <a href="<?=site_url('access/access/professors')?>">
                    <span class="nav-label">교수 재실 여부</span>
                </a>
            </li>
        </ul>
    </li>

</ul>
<!-- END Tree Sidebar Common  -->
    </div>
</aside>
<!-- END Sidebars -->



        </nav>