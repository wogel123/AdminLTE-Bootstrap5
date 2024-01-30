<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 2 - BS 5</title>
    <link rel="stylesheet" href="/lib/bootstrap/5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/lib/fontawesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/lib/overlayscrollbars/2.4.7/css/overlayscrollbars.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="icon" type="image/png" href="/assets/img/favicon.ico" />
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
                            <i class="fa-regular fa-envelope"></i>
                            <span class="label label-success">4</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-regular fa-bell"></i>
                            <span class="label label-warning">10</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-regular fa-flag"></i>
                            <span class="label label-danger">9</span>
                        </a>
                    </li>
                    <li class="dropdown user-menu">
                        <a href="#" class="dropdown-toggle user" data-bs-toggle="dropdown" >
                            <img src="/assets/img/user.jpg" class="img-circle">
                            <p>Alexander Pierce</p>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header d-flex flex-column">
                                <img src="/assets/img/user.jpg" class="img-circle mx-auto">
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
                <img src="/assets/img/user.jpg" class="img-circle">
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
                                    <i class="fa-regular fa-circle"></i>
                                    Dashboard v1
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-regular fa-circle"></i>
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
                                    <i class="fa-regular fa-circle"></i>
                                    General
                                </a>
                            </li>
                            <li>
                                <a href="/pages/UI/labels-badges.php">
                                    <i class="fa-regular fa-circle"></i>
                                    Labels & Badges
                                </a>
                            </li>
                            <li>
                                <a href="/pages/UI/icons.php">
                                    <i class="fa-regular fa-circle"></i>
                                    Icons
                                </a>
                            </li>
                            <li>
                                <a href="/pages/UI/buttons.php">
                                    <i class="fa-regular fa-circle"></i>
                                    Buttons
                                </a>
                            </li>
                            <li>
                                <a href="/pages/UI/modals.php">
                                    <i class="fa-regular fa-circle"></i>
                                    Modals
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a>
                        <i class="fa fa-edit"></i>
                        <span class="menu-text">Forms</span>
                        <i class="fa fa-angle-left menu-dropdown"></i>
                    </a>
                    <div class="sidebar-submenu">
                        <h3 class="pinned-title">Forms</h3>
                        <ul>
                            <li>
                                <a href="/pages/forms/general.php">
                                    <i class="fa-regular fa-circle"></i>
                                    General elements
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span class="menu-text">Examples</span>
                        <span class="label bg-danger ms-auto my-auto me-1">14</span>
                        <span class="label bg-primary my-auto">5</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span class="menu-text">Examples</span>
                        <span class="label bg-warning ms-auto my-auto">9</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span class="menu-text">Examples</span>
                        <span class="label bg-success ms-auto my-auto">New</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span class="menu-text">Examples</span>
                        <span class="label bg-success ms-auto my-auto me-1">17</span>
                        <span class="label bg-danger my-auto me-1">8</span>
                        <span class="label bg-warning my-auto me-1">5</span>
                        <span class="label bg-info my-auto">6</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-folder"></i>
                        <span class="menu-text">Examples</span>
                        <span class="label bg-purple ms-auto my-auto me-1">Test</span>
                        <span class="label bg-maroon my-auto me-1">Prod</span>
                    </a>
                </li>
                <li class="header-menu">
                    LABELS
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle text-danger"></i>
                        <span class="menu-text">Danger</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle text-info"></i>
                        <span class="menu-text">Info</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle text-warning"></i>
                        <span class="menu-text">Warning</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle text-success"></i>
                        <span class="menu-text">Success</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-circle text-primary"></i>
                        <span class="menu-text">Primary</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="page-content">