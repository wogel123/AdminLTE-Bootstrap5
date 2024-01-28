<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 2</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.4.7/styles/overlayscrollbars.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
<div class="page-wrapper">

    <header>
        <div class="brand">
            <a href="#">
                <span class="brand-big"><b>Admin</b>LTE</span>
                <span class="brand-small"><b>A</b>LT</span>
            </a>
        </div>
        <nav class="navbar">
            <a id="pin-sidebar">
                <i class="fa fa-bars"></i>
            </a>
            <div class="navbar-menu">
                <ul class="navbar-nav flex-row">
                    <li>
                        <a href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                    </li>
                    <li class="dropdown user-menu">
                        <a href="#" class="dropdown-toggle user" data-bs-toggle="dropdown" >
                            <img src="/img/user.jpg" class="img-circle">
                            <p>Alexander Pierce</p>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header d-flex flex-column">
                                <img src="/img/user.jpg" class="img-circle mx-auto">
                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-sm-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>

                            </li>
                            <li class="user-footer d-flex">
                                <div>
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="ms-auto">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <aside id="sidebar" class="sidebar-wrapper" data-overlayscrollbars-initialize>
        <div class="sidebar-item sidebar-header d-flex flex-nowrap">
            <div class="user-pic">
                <img src="/img/user.jpg" class="img-circle">
            </div>
            <div class="user-info">
                 <span class="user-name">
                     Alexander Pierce
                 </span>
                <span class="user-status">
                     <i class="fa fa-circle"></i>
                    <span>Online</span>
                </span>
            </div>
        </div>
        <div class="sidebar-item sidebar-search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-text"><i class="fa fa-search"></i></span>
            </div>
        </div>
        <div class="sidebar-item sidebar-menu">
            <ul>
                <li class="header-menu">
                    MAIN NAVIGATION
                </li>
                <li class="sidebar-dropdown">
                    <a>
                        <i class="fa fa-dashboard"></i>
                        <span class="menu-text">Dashboard</span>
                        <i class="fa fa-angle-left menu-dropdown"></i>
                    </a>
                    <div class="sidebar-submenu">
                        <h3 class="pinned-title">Dashboard</h3>
                        <ul>
                            <li>
                                <a href="/">
                                    <i class="fa fa-circle-o"></i>
                                    Dashboard v1
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    Dashboard v2
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a>
                        <i class="fa fa-dashboard"></i>
                        <span class="menu-text">UI Elements</span>
                        <i class="fa fa-angle-left menu-dropdown"></i>
                    </a>
                    <div class="sidebar-submenu">
                        <h3 class="pinned-title">UI Elements</h3>
                        <ul>
                            <li>
                                <a href="/pages/UI/general.php">
                                    <i class="fa fa-circle-o"></i>
                                    General
                                </a>
                            </li>
                            <li>
                                <a href="/pages/UI/icons.php">
                                    <i class="fa fa-circle-o"></i>
                                    Icons
                                </a>
                            </li>
                            <li>
                                <a href="/pages/UI/buttons.php">
                                    <i class="fa fa-circle-o"></i>
                                    Buttons
                                </a>
                            </li>
                            <li>
                                <a href="/pages/UI/modals.php">
                                    <i class="fa fa-circle-o"></i>
                                    Modals
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span class="menu-text">Examples</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span class="menu-text">Examples</span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>

    <main class="page-content">