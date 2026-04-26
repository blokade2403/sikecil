<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities." />
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app" />
    <meta name="author" content="pixelstrap" />
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet" />
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/fontawesome.css') }}" />
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/icofont.css') }}" />
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify.css') }}" />
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css') }}" />
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}" />
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flatpickr/flatpickr.min.css') }}" />
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}" />
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}" media="screen" />
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
    <script defer src="{{ asset('assets/css/color-1.js') }}"></script>
    <script defer src="{{ asset('assets/css/color-2.js') }}"></script>
    <script defer src="{{ asset('assets/css/color-3.js') }}"></script>
    <script defer src="{{ asset('assets/css/color-4.js') }}"></script>
    <script defer src="{{ asset('assets/css/color-5.js') }}"></script>
    <script defer src="{{ asset('assets/css/color-6.js') }}"></script>
    <script defer src="{{ asset('assets/css/responsive.js') }}"></script>
    <script defer src="{{ asset('assets/css/style.js') }}"></script>
    <link href="{{ asset('assets/css/color-1.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/color-2.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/color-3.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/color-4.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/color-5.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/color-6.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>

<body onload="startTime()">
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader-index">
            <span></span>
        </div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- loader ends--><!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends--><!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Anything Here..." name="q" title="" autofocus />
                                <div class="spinner-border Typeahead-spinner" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <i class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper">
                        <a href="index.html"><img class="img-fluid for-light"
                                src="{{ asset('assets/images/logo/logo.png') }}" alt="" /><img
                                class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                alt="" /></a>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    </div>
                </div>
                <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
                    <div class="notification-slider">
                        <div class="d-flex h-100">
                            <img src="{{ asset('assets/images/giftools.gif') }}" alt="gif" />
                            <h6 class="mb-0 f-w-400">
                                <span class="font-primary">Don't Miss Out! </span><span class="f-light">
                                    Our new update has been released.</span>
                            </h6>
                            <i class="icon-arrow-top-right f-light"></i>
                        </div>
                        <div class="d-flex h-100">
                            <img src="{{ asset('assets/images/giftools.gif') }}" alt="gif" />
                            <h6 class="mb-0 f-w-400">
                                <span class="f-light">Something you love is now on sale!
                                </span>
                            </h6>
                            <a class="ms-1" href="https://1.envato.market/3GVzd" target="_blank">Buy now !</a>
                        </div>
                    </div>
                </div>
                <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                    <ul class="nav-menus">
                        <li class="language-nav">
                            <div class="translate_wrapper">
                                <div class="current_lang">
                                    <div class="lang">
                                        <i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN </span>
                                    </div>
                                </div>
                                <div class="more_lang">
                                    <div class="lang selected" data-value="en">
                                        <i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span>
                                                (US)</span></span>
                                    </div>
                                    <div class="lang" data-value="de">
                                        <i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span>
                                    </div>
                                    <div class="lang" data-value="es">
                                        <i class="flag-icon flag-icon-es"></i><span class="lang-txt">Español</span>
                                    </div>
                                    <div class="lang" data-value="fr">
                                        <i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français</span>
                                    </div>
                                    <div class="lang" data-value="pt">
                                        <i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Português<span>
                                                (BR)</span></span>
                                    </div>
                                    <div class="lang" data-value="cn">
                                        <i class="flag-icon flag-icon-cn"></i><span class="lang-txt">简体中文</span>
                                    </div>
                                    <div class="lang" data-value="ae">
                                        <i class="flag-icon flag-icon-ae"></i><span class="lang-txt">لعربية <span>
                                                (ae)</span></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="fullscreen-body">
                            <span><svg id="maximize-screen">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#full-screen') }}"></use>
                                </svg></span>
                        </li>
                        <li>
                            <span class="header-search"><svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#search') }}"></use>
                                </svg></span>
                        </li>
                        <li class="onhover-dropdown">
                            <svg>
                                <use href="{{ asset('assets/svg/icon-sprite.svg#star') }}"></use>
                            </svg>
                            <div class="onhover-show-div bookmark-flip">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="front">
                                            <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                                            <ul class="bookmark-dropdown">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-4 text-center">
                                                            <div class="bookmark-content">
                                                                <div class="bookmark-icon">
                                                                    <i data-feather="file-text"></i>
                                                                </div>
                                                                <span>Forms</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 text-center">
                                                            <div class="bookmark-content">
                                                                <div class="bookmark-icon">
                                                                    <i data-feather="user"></i>
                                                                </div>
                                                                <span>Profile</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 text-center">
                                                            <div class="bookmark-content">
                                                                <div class="bookmark-icon">
                                                                    <i data-feather="server"></i>
                                                                </div>
                                                                <span>Tables</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="text-center">
                                                    <a class="flip-btn f-w-700 btn btn-primary w-100" id="flip-btn"
                                                        href="#!">Add Bookmark</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="back">
                                            <ul>
                                                <li>
                                                    <div class="bookmark-dropdown flip-back-content">
                                                        <input type="text" placeholder="Search..." />
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="f-w-700 d-block flip-back btn btn-primary w-100"
                                                        id="flip-back" href="#!">Back</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="mode">
                                <svg>
                                    <use href="../assets/svg/icon-sprite.svg#moon"></use>
                                </svg>
                            </div>
                        </li>
                        <li class="cart-nav onhover-dropdown">
                            <div class="cart-box">
                                <svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ecommerce') }}"></use>
                                </svg><span class="badge rounded-pill badge-danger">2</span>
                            </div>
                            <div class="cart-dropdown onhover-show-div">
                                <h6 class="f-18 mb-0 dropdown-title">Cart</h6>
                                <ul>
                                    <li>
                                        <div class="d-flex">
                                            <img class="img-fluid b-r-5 me-3 img-60"
                                                src="{{ asset('assets/images/other-images/cart-img.jpg') }}"
                                                alt="" />
                                            <div class="flex-grow-1">
                                                <span>Furniture Chair for Home</span>
                                                <div class="qty-box">
                                                    <div class="input-group">
                                                        <span class="input-group-prepend"><button
                                                                class="btn quantity-left-minus" type="button"
                                                                data-type="minus" data-field="">
                                                                -
                                                            </button></span><input class="form-control input-number"
                                                            type="text" name="quantity" value="1" /><span
                                                            class="input-group-prepend"><button
                                                                class="btn quantity-right-plus" type="button"
                                                                data-type="plus" data-field="">
                                                                +
                                                            </button></span>
                                                    </div>
                                                </div>
                                                <h6 class="font-primary">$12.45</h6>
                                            </div>
                                            <div class="close-circle">
                                                <a class="bg-danger" href="#"><i data-feather="x"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex">
                                            <img class="img-fluid b-r-5 me-3 img-60"
                                                src="{{ asset('assets/images/other-images/cart-img1.jpg') }}"
                                                alt="" />
                                            <div class="flex-grow-1">
                                                <span>Rest Well Chair</span>
                                                <div class="qty-box">
                                                    <div class="input-group">
                                                        <span class="input-group-prepend"><button
                                                                class="btn quantity-left-minus" type="button"
                                                                data-type="minus" data-field="">
                                                                -
                                                            </button></span><input class="form-control input-number"
                                                            type="text" name="quantity" value="1" /><span
                                                            class="input-group-prepend"><button
                                                                class="btn quantity-right-plus" type="button"
                                                                data-type="plus" data-field="">
                                                                +
                                                            </button></span>
                                                    </div>
                                                </div>
                                                <h6 class="font-primary">$49.00</h6>
                                            </div>
                                            <div class="close-circle">
                                                <a class="bg-danger" href="#"><i data-feather="x"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="total">
                                        <h6 class="mb-0">
                                            Order Total : <span class="f-right">$1000.00</span>
                                        </h6>
                                    </li>
                                    <li class="text-center">
                                        <a class="d-block view-cart f-w-700 btn btn-primary w-100"
                                            href="cart.html">View Cart</a><a
                                            class="btn btn-primary view-checkout btn btn-primary w-100 f-w-700"
                                            href="checkout.html">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="notification-box">
                                <svg>
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#notification') }}"></use>
                                </svg><span class="badge rounded-pill badge-success">4 </span>
                            </div>
                            <div class="onhover-show-div notification-dropdown">
                                <h6 class="f-18 mb-0 dropdown-title">Notifications</h6>
                                <ul>
                                    <li class="b-l-primary border-4 toast default-show-toast align-items-center text-light border-0 fade show"
                                        aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                        <div class="d-flex justify-content-between">
                                            <div class="toast-body">
                                                <p>Delivery processing</p>
                                            </div>
                                            <button class="btn-close btn-close-white me-2 m-auto" type="button"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </li>
                                    <li class="b-l-success border-4 toast default-show-toast align-items-center text-light border-0 fade show"
                                        aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                        <div class="d-flex justify-content-between">
                                            <div class="toast-body">
                                                <p>Order Complete</p>
                                            </div>
                                            <button class="btn-close btn-close-white me-2 m-auto" type="button"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </li>
                                    <li class="b-l-secondary border-4 toast default-show-toast align-items-center text-light border-0 fade show"
                                        aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                        <div class="d-flex justify-content-between">
                                            <div class="toast-body">
                                                <p>Tickets Generated</p>
                                            </div>
                                            <button class="btn-close btn-close-white me-2 m-auto" type="button"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </li>
                                    <li class="b-l-warning border-4 toast default-show-toast align-items-center text-light border-0 fade show"
                                        aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                        <div class="d-flex justify-content-between">
                                            <div class="toast-body">
                                                <p>Delivery Complete</p>
                                            </div>
                                            <button class="btn-close btn-close-white me-2 m-auto" type="button"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="profile-nav onhover-dropdown pe-0 py-0">
                            <div class="d-flex profile-media">
                                <img class="b-r-10" src="{{ asset('assets/images/dashboard/profile.png') }}"
                                    alt="" />
                                <div class="flex-grow-1">
                                    <span>Emay Walter</span>
                                    <p class="mb-0">
                                        Admin <i class="middle fa-solid fa-angle-down"></i>
                                    </p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li>
                                    <a href="sign-up.html"><i data-feather="user"></i><span>Account </span></a>
                                </li>
                                <li>
                                    <a href="mail-box.html"><i data-feather="mail"></i><span>Inbox</span></a>
                                </li>
                                <li>
                                    <a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a>
                                </li>
                                <li>
                                    <a href="add-user.html"><i data-feather="settings"></i><span>Settings</span></a>
                                </li>
                                <li>
                                    <a href="login.html"><i data-feather="log-in"> </i><span>Log out</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
              <div class="ProfileCard-avatar"><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-airplay m-0"
                ><path
                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"
                  ></path><polygon
                    points="12 15 17 21 7 21 12 15"
                  ></polygon></svg></div>
              <div class="ProfileCard-details">
                <div class="ProfileCard-realName"></div>
              </div>
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template">
            <div class="EmptyMessage">Your search turned up 0 results. This most
              likely means the backend is down, yikes!</div>
          </script>
            </div>
        </div>
        <!-- Page Header Ends                              --><!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
                <div>
                    <div class="logo-wrapper">
                        <a href="index.html"><img class="img-fluid for-light"
                                src="{{ asset('assets/images/logo/logo.png') }}" alt="" /><img
                                class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                alt="" /></a>
                        <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="toggle-sidebar">
                            <i class="status_toggle middle sidebar-toggle" data-feather="grid">
                            </i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="index.html"><img class="img-fluid"
                                src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="" /></a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn">
                                    <a href="index.html"><img class="img-fluid"
                                            src="{{ asset('assets/images/logo/logo-icon.png') }}"
                                            alt="" /></a>
                                    <div class="mobile-back text-end">
                                        <span>Back</span><i class="fa-solid fa-angle-right ps-2"
                                            aria-hidden="true"></i>
                                    </div>
                                </li>
                                <li class="pin-title sidebar-main-title">
                                    <div>
                                        <h6>Pinned</h6>
                                    </div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6 class="lan-1">General</h6>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i><label
                                        class="badge badge-light-primary">13</label><a
                                        class="sidebar-link sidebar-title" href="#"><svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                        </svg><svg class="fill-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                                        </svg><span class="lan-3">Dashboard </span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a class="lan-4" href="index.html">Default</a></li>
                                        <li>
                                            <a class="lan-5" href="dashboard-02.html">Ecommerce</a>
                                        </li>
                                        <li>
                                            <label class="badge badge-light-success">New</label><a
                                                href="dashboard-12.html">Projects</a>
                                        </li>
                                        <li>
                                            <label class="badge badge-light-success">New</label><a
                                                href="dashboard-13.html">Logistics</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title"
                                        href="#"><svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                                        </svg><svg class="fill-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                                        </svg><span class="lan-6">Widgets</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="general-widget.html">General</a></li>
                                        <li><a href="chart-widget.html">Chart</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title"
                                        href="#"><svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-layout') }}"></use>
                                        </svg><svg class="fill-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-layout') }}"></use>
                                        </svg><span class="lan-7">Page layout</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="box-layout.html">Boxed</a></li>
                                        <li><a href="layout-rtl.html">RTL</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6 class="lan-8">Applications</h6>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"> </i><a class="sidebar-link sidebar-title"
                                        href="#"><svg class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}">
                                            </use>
                                        </svg><svg class="fill-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                                        </svg><span>Projects </span></a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <label class="badge badge-light-success">New</label><a
                                                href="project-details.html">Project Details</a>
                                        </li>
                                        <li><a href="project-list.html">Project List</a></li>
                                        <li><a href="createnew.html">Create new</a></li>
                                    </ul>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i><a
                                        class="sidebar-link sidebar-title link-nav" href="file-manager.html"><svg
                                            class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-file') }}"></use>
                                        </svg><svg class="fill-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-file') }}"></use>
                                        </svg><span>File manager</span></a>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"> </i><a
                                        class="sidebar-link sidebar-title link-nav" href="kanban.html"><svg
                                            class="stroke-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                                        </svg><svg class="fill-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#fill-board') }}"></use>
                                        </svg><span>kanban Board</span></a>
                                </li>
                                <li class="sidebar-list">
                                    <i class="fa-solid fa-thumbtack"></i><a
                                        class="sidebar-link sidebar-title link-nav" href="buttons.html"><svg
                                            class="stroke-icon">
                                            <use href="../assets/svg/icon-sprite.svg#stroke-button"></use>
                                        </svg><svg class="fill-icon">
                                            <use href="../assets/svg/icon-sprite.svg#fill-button"></use>
                                        </svg><span>Button</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>School Management</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <svg class="stroke-icon">
                                                <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                            </svg></a>
                                    </li>
                                    <li class="breadcrumb-item">Dashboard</li>
                                    <li class="breadcrumb-item active">School Manage</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid dashboard-7">
                    <div class="row">
                        <div class="col-xxl-9 box-col-12">
                            <div class="row">
                                <div class="col-xxl-4 col-md-5">
                                    <div class="card">
                                        <div class="card-header card-no-border">
                                            <div class="header-top">
                                                <h5>Academic Performance</h5>
                                                <div class="dropdown icon-dropdown">
                                                    <button class="btn dropdown-toggle" id="performance_dropdown"
                                                        type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="icon-more-alt"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="performance_dropdown">
                                                        <a class="dropdown-item" href="#">This Month</a><a
                                                            class="dropdown-item" href="#">Previous Month</a><a
                                                            class="dropdown-item" href="#">Last 3 Months</a><a
                                                            class="dropdown-item" href="#">Last 6 Months</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="performance-wrap">
                                                <div id="academic_performance-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-8 col-md-7">
                                    <div class="card">
                                        <div class="card-header card-no-border">
                                            <div class="header-top">
                                                <h5>School Performance</h5>
                                                <div class="card-header-right-icon">
                                                    <div class="dropdown">
                                                        <button class="btn dropdown-toggle" id="viewButton"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            Today
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="viewButton">
                                                            <a class="dropdown-item" href="#">This Month</a><a
                                                                class="dropdown-item" href="#">Previous
                                                                Month</a><a class="dropdown-item" href="#">Last
                                                                3 Months</a><a class="dropdown-item"
                                                                href="#">Last 6 Months</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="school-performance-wrap">
                                                <div id="chart-school-performance"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card widget-hover overflow-hidden">
                                        <div class="card-header card-no-border pb-2">
                                            <h5>Teachers</h5>
                                        </div>
                                        <div class="card-body pt-0 count-student">
                                            <div class="school-wrapper">
                                                <div class="school-header">
                                                    <h4 class="txt-warning counter" data-target="1098">
                                                        0
                                                    </h4>
                                                    <div
                                                        class="d-flex gap-1 align-items-center flex-wrap pt-xxl-0 pt-2">
                                                        <i class="icon-arrow-down f-light"></i><span
                                                            class="f-w-500 f-light">-3.7%</span>
                                                    </div>
                                                </div>
                                                <div class="school-body">
                                                    <img src="{{ asset('assets/images/dashboard-7/icon-2.svg') }}"
                                                        alt="total teachers" />
                                                    <div class="right-line">
                                                        <img src="{{ asset('assets/images/dashboard-7/line.png') }}"
                                                            alt="line" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card widget-hover overflow-hidden">
                                        <div class="card-header card-no-border pb-2">
                                            <h5>Students</h5>
                                        </div>
                                        <div class="card-body pt-0 count-student">
                                            <div class="school-wrapper">
                                                <div class="school-header">
                                                    <h4 class="txt-primary counter" data-target="890">
                                                        0
                                                    </h4>
                                                    <div
                                                        class="d-flex gap-1 align-items-center flex-wrap pt-xxl-0 pt-2">
                                                        <i class="icon-arrow-up f-light"></i><span
                                                            class="f-w-500 f-light">+6.7%</span>
                                                    </div>
                                                </div>
                                                <div class="school-body">
                                                    <img src="{{ asset('assets/images/dashboard-7/icon1.svg') }}"
                                                        alt="total students" />
                                                    <div class="right-line">
                                                        <img src="{{ asset('assets/images/dashboard-7/line.png') }}"
                                                            alt="line" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card widget-hover overflow-hidden">
                                        <div class="card-header card-no-border pb-2">
                                            <h5>Parents</h5>
                                        </div>
                                        <div class="card-body pt-0 count-student">
                                            <div class="school-wrapper">
                                                <div class="school-header">
                                                    <h4 class="txt-success counter" data-target="1018">
                                                        0
                                                    </h4>
                                                    <div
                                                        class="d-flex gap-1 align-items-center flex-wrap pt-xxl-0 pt-2">
                                                        <i class="icon-arrow-up f-light"></i><span
                                                            class="f-w-500 f-light">+2.0%</span>
                                                    </div>
                                                </div>
                                                <div class="school-body">
                                                    <img src="{{ asset('assets/images/dashboard-7/icon-3.svg') }}"
                                                        alt="Total parents" />
                                                    <div class="right-line">
                                                        <img src="{{ asset('assets/images/dashboard-7/line.png') }}"
                                                            alt="line" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 box-col-5">
                                    <div class="card height-equal">
                                        <div class="card-header card-no-border">
                                            <div class="header-top">
                                                <h5>School Finance</h5>
                                                <div class="dropdown icon-dropdown">
                                                    <button class="btn dropdown-toggle" id="income_dropdown"
                                                        type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="icon-more-alt"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="income_dropdown">
                                                        <a class="dropdown-item" href="#">This Month</a><a
                                                            class="dropdown-item" href="#">Previous Month</a><a
                                                            class="dropdown-item" href="#">Last 3 Months</a><a
                                                            class="dropdown-item" href="#">Last 6 Months</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="income-wrapper">
                                                <ul>
                                                    <li>
                                                        <div class="income-dot dot-primary"></div>
                                                        <span class="text-muted">Income</span>
                                                        <h6>
                                                            $<span class="counter" data-target="57143">0
                                                            </span>
                                                        </h6>
                                                    </li>
                                                    <li>
                                                        <div class="income-dot dot-warning"></div>
                                                        <span class="text-muted">Expense</span>
                                                        <h6>
                                                            $<span class="counter" data-target="39023">0</span>
                                                        </h6>
                                                    </li>
                                                    <li>
                                                        <div class="income-dot dot-success"></div>
                                                        <span class="text-muted">Revenue</span>
                                                        <h6>
                                                            $<span class="counter" data-target="18120">0</span>
                                                        </h6>
                                                    </li>
                                                </ul>
                                                <div class="main-income-chart">
                                                    <div id="income_chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-12 order-1 order-xl-0 box-col-7">
                                    <div class="card height-equal">
                                        <div class="card-header">
                                            <div class="header-top">
                                                <h5 class="m-0">Performance Overview</h5>
                                                <div class="performance-right">
                                                    <p class="mb-0">28-02-2024</p>
                                                    <i class="fa-solid fa-calendar txt-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row g-md-0 g-4">
                                                <div class="col-xl-5 col-md-4 box-col-12">
                                                    <div class="attendance-chart">
                                                        <div id="chart_current_academic"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-md-8 box-col-none">
                                                    <div class="row g-3">
                                                        <div class="col-xl-12">
                                                            <div class="light-card attendance-card widget-hover">
                                                                <div class="left-overview-content">
                                                                    <div class="svg-box">
                                                                        <img src="{{ asset('assets/images/dashboard-7/attendance/1.png') }}"
                                                                            alt="homework" />
                                                                    </div>
                                                                </div>
                                                                <div class="right-overview-content">
                                                                    <div>
                                                                        <h6>Homework</h6>
                                                                        <span class="text-muted text-ellipsis">Bring
                                                                            Something into the
                                                                            Classroom...</span>
                                                                    </div>
                                                                    <div class="d-flex marks-count">
                                                                        <h5>
                                                                            89/<sub class="text-muted">100</sub>
                                                                        </h5>
                                                                        <div
                                                                            class="d-flex justify-content-center align-items-center">
                                                                            <i
                                                                                class="icon-arrow-up txt-success pe-2 f-w-600"></i><span
                                                                                class="txt-success f-w-500">+80%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="light-card attendance-card widget-hover">
                                                                <div class="left-overview-content">
                                                                    <div class="svg-box">
                                                                        <img src="{{ asset('assets/images/dashboard-7/attendance/2.png') }}"
                                                                            alt="tests" />
                                                                    </div>
                                                                </div>
                                                                <div class="right-overview-content">
                                                                    <div>
                                                                        <h6>Tests</h6>
                                                                        <span class="text-muted text-ellipsis">These 5
                                                                            study tips can help you
                                                                            take...</span>
                                                                    </div>
                                                                    <div class="d-flex marks-count">
                                                                        <h5>
                                                                            95/<sub class="text-muted">100</sub>
                                                                        </h5>
                                                                        <div
                                                                            class="d-flex justify-content-center align-items-center">
                                                                            <i
                                                                                class="icon-arrow-up txt-success pe-2 f-w-600"></i><span
                                                                                class="txt-success f-w-500">+97%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="light-card attendance-card widget-hover">
                                                                <div class="left-overview-content">
                                                                    <div class="svg-box">
                                                                        <img src="{{ asset('assets/images/dashboard-7/attendance/3.png') }}"
                                                                            alt="attendance" />
                                                                    </div>
                                                                </div>
                                                                <div class="right-overview-content">
                                                                    <div>
                                                                        <h6>Attendance</h6>
                                                                        <span class="text-muted text-ellipsis">Student
                                                                            absence reduces even
                                                                            best...</span>
                                                                    </div>
                                                                    <div class="d-flex marks-count">
                                                                        <h5>
                                                                            92/<sub class="text-muted">100</sub>
                                                                        </h5>
                                                                        <div
                                                                            class="d-flex justify-content-center align-items-center">
                                                                            <i
                                                                                class="icon-arrow-up txt-success pe-2 f-w-600"></i><span
                                                                                class="txt-success f-w-500">+94%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 order-0">
                                    <div class="card default-inline-calender">
                                        <div class="card-header card-no-border">
                                            <div class="header-top">
                                                <h5>School Calendar</h5>
                                                <div class="dropdown icon-dropdown">
                                                    <button class="btn dropdown-toggle" id="calender_dropdown"
                                                        type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="icon-more-alt"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="calender_dropdown">
                                                        <a class="dropdown-item" href="#">This Month</a><a
                                                            class="dropdown-item" href="#">Previous Month</a><a
                                                            class="dropdown-item" href="#">Last 3 Months</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 school-calender">
                                            <div class="input-group main-inline-calender">
                                                <input class="form-control" id="inline-calender2" type="date" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 order-2">
                                    <div class="card">
                                        <div class="card-header card-no-border">
                                            <div class="header-top">
                                                <h5>Today's Task</h5>
                                                <div class="dropdown icon-dropdown">
                                                    <button class="btn dropdown-toggle" id="task_dropdown"
                                                        type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="icon-more-alt"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="task_dropdown">
                                                        <a class="dropdown-item" href="#">This Month</a><a
                                                            class="dropdown-item" href="#">Previous Month</a><a
                                                            class="dropdown-item" href="#">Last 3 Months</a><a
                                                            class="dropdown-item" href="#">Last 6 Months</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 task-table">
                                            <div class="main-task">
                                                <span class="text-muted">2 Task
                                                    <span class="txt-success">completed
                                                        <span class="text-muted"> out of 12</span></span></span>
                                                <div class="progress task-progress">
                                                    <div class="progress-bar w-50 bg-success" role="progressbar"
                                                        aria-label="Basic example" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="recent-table table-responsive currency-table task-table">
                                                <table class="table">
                                                    <tbody class="main-task-wrapper">
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="form-check checkbox-width checkbox checkbox-primary mb-0">
                                                                        <input class="from-check-input"
                                                                            id="checkbox-task-1" type="checkbox"
                                                                            checked="" /><label
                                                                            class="form-check-label"
                                                                            for="checkbox-task-1">
                                                                        </label>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center gap-2 justify-content-center">
                                                                        <div>
                                                                            <a class="pb-1" href="task.html">Teacher
                                                                                Meeting & Campus Tour</a>
                                                                            <ul class="task-icons">
                                                                                <li>
                                                                                    <span class="text-muted">Class
                                                                                        Number 10</span>
                                                                                </li>
                                                                                <li class="f-light flex-wrap">
                                                                                    <svg
                                                                                        class="fill-icon fill-primary">
                                                                                        <use
                                                                                            href="../assets/svg/icon-sprite.svg#clock">
                                                                                        </use>
                                                                                    </svg><span>11 : 00 AM</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button class="btn button-primary">
                                                                    In Progress
                                                                </button>
                                                            </td>
                                                            <td class="icons-box">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="square-white">
                                                                        <i class="fa-solid fa-pencil"></i>
                                                                    </div>
                                                                    <div class="square-white">
                                                                        <i class="fa-solid fa-trash"></i>
                                                                    </div>
                                                                    <div class="square-white">
                                                                        <i class="fa-solid fa-print"></i>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="icons-box-2 ps-0">
                                                                <div class="open-options">
                                                                    <div class="square-white dropdown-toggle"
                                                                        role="main" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="fa-solid fa-ellipsis"></i>
                                                                    </div>
                                                                    <ul
                                                                        class="dropdown-menu dropdown-block dropdown-menu-end">
                                                                        <li>
                                                                            <a class="dropdown-item square-white border-top-0"
                                                                                href="#!"><i
                                                                                    class="fa-solid fa-pencil"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item square-white border-top-0"
                                                                                href="#!"><i
                                                                                    class="fa-solid fa-trash"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item square-white border-top-0"
                                                                                href="#!"><i
                                                                                    class="fa-solid fa-print"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="light-card">
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="form-check checkbox-width checkbox checkbox-primary mb-0">
                                                                        <input class="from-check-input"
                                                                            id="checkbox-task-2"
                                                                            type="checkbox" /><label
                                                                            class="form-check-label"
                                                                            for="checkbox-task-2">
                                                                        </label>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center gap-2 justify-content-center">
                                                                        <div>
                                                                            <a href="task.html">Exercise 1, 2 and Learn
                                                                                more Books</a>
                                                                            <ul class="task-icons">
                                                                                <li>
                                                                                    <span class="text-muted">Class
                                                                                        Number 11</span>
                                                                                </li>
                                                                                <li class="f-light flex-wrap">
                                                                                    <svg class="fill-icon fill-clock">
                                                                                        <use
                                                                                            href="../assets/svg/icon-sprite.svg#clock">
                                                                                        </use>
                                                                                    </svg><span>01 : 00 PM</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button class="btn badge-light-success">
                                                                    Done
                                                                </button>
                                                            </td>
                                                            <td class="icons-box">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="square-white">
                                                                        <i class="fa-solid fa-pencil"></i>
                                                                    </div>
                                                                    <div class="square-white">
                                                                        <i class="fa-solid fa-trash"></i>
                                                                    </div>
                                                                    <div class="square-white">
                                                                        <i class="fa-solid fa-print"></i>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="icons-box-2 ps-0">
                                                                <div class="open-options">
                                                                    <div class="square-white dropdown-toggle"
                                                                        role="main" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="fa-solid fa-ellipsis"></i>
                                                                    </div>
                                                                    <ul
                                                                        class="dropdown-menu dropdown-block dropdown-menu-end">
                                                                        <li>
                                                                            <a class="dropdown-item square-white border-top-0"
                                                                                href="#!"><i
                                                                                    class="fa-solid fa-pencil"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item square-white border-top-0"
                                                                                href="#!"><i
                                                                                    class="fa-solid fa-trash"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item square-white border-top-0"
                                                                                href="#!"><i
                                                                                    class="fa-solid fa-print"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="form-check checkbox-width checkbox checkbox-primary mb-0">
                                                                        <input class="from-check-input"
                                                                            id="checkbox-task-3"
                                                                            type="checkbox" /><label
                                                                            class="form-check-label"
                                                                            for="checkbox-task-3">
                                                                        </label>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center gap-2 justify-content-center">
                                                                        <div>
                                                                            <a href="task.html">Guest Lecture and
                                                                                Parent Meeting</a>
                                                                            <ul class="task-icons">
                                                                                <li>
                                                                                    <span class="text-muted">Class
                                                                                        Number 8</span>
                                                                                </li>
                                                                                <li class="f-light flex-wrap">
                                                                                    <svg class="fill-icon fill-clock">
                                                                                        <use
                                                                                            href="../assets/svg/icon-sprite.svg#clock">
                                                                                        </use>
                                                                                    </svg><span>09 : 00 AM</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button class="btn badge-light-success">
                                                                    Done
                                                                </button>
                                                            </td>
                                                            <td class="icons-box">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="square-white">
                                                                        <i class="fa-solid fa-pencil"></i>
                                                                    </div>
                                                                    <div class="square-white">
                                                                        <i class="fa-solid fa-trash"></i>
                                                                    </div>
                                                                    <div class="square-white">
                                                                        <i class="fa-solid fa-print"></i>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="icons-box-2 ps-0">
                                                                <div class="open-options">
                                                                    <div class="square-white dropdown-toggle"
                                                                        role="main" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="fa-solid fa-ellipsis"></i>
                                                                    </div>
                                                                    <ul
                                                                        class="dropdown-menu dropdown-block dropdown-menu-end">
                                                                        <li>
                                                                            <a class="dropdown-item square-white border-top-0"
                                                                                href="#!"><i
                                                                                    class="fa-solid fa-pencil"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item square-white border-top-0"
                                                                                href="#!"><i
                                                                                    class="fa-solid fa-trash"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item square-white border-top-0"
                                                                                href="#!"><i
                                                                                    class="fa-solid fa-print"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="light-card">
                                                            <td>
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="form-check checkbox-width checkbox checkbox-primary mb-0">
                                                                        <input class="from-check-input"
                                                                            id="checkbox-task-4"
                                                                            type="checkbox" /><label
                                                                            class="form-check-label"
                                                                            for="checkbox-task-4">
                                                                        </label>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center gap-2 justify-content-center">
                                                                        <div>
                                                                            <a href="task.html">Meetup meeting with new
                                                                                Client</a>
                                                                            <ul class="task-icons">
                                                                                <li>
                                                                                    <span class="text-muted">Class
                                                                                        Number 11</span>
                                                                                </li>
                                                                                <li class="f-light flex-wrap">
                                                                                    <svg
                                                                                        class="fill-icon fill-primary">
                                                                                        <use
                                                                                            href="../assets/svg/icon-sprite.svg#clock">
                                                                                        </use>
                                                                                    </svg><span>02 : 00 PM</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button class="btn button-primary">
                                                                    In Progress
                                                                </button>
                                                            </td>
                                                            <td class="icons-box ps-2">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="square-white">
                                                                        <i class="fa-solid fa-pencil"></i>
                                                                    </div>
                                                                    <div class="square-white">
                                                                        <i class="fa-solid fa-trash"></i>
                                                                    </div>
                                                                    <div class="square-white">
                                                                        <i class="fa-solid fa-print"> </i>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="icons-box-2 ps-0">
                                                                <div class="open-options">
                                                                    <div class="square-white dropdown-toggle"
                                                                        role="main" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="fa-solid fa-ellipsis"></i>
                                                                    </div>
                                                                    <ul
                                                                        class="dropdown-menu dropdown-block dropdown-menu-end">
                                                                        <li>
                                                                            <a class="dropdown-item square-white border-top-0"
                                                                                href="#!"><i
                                                                                    class="fa-solid fa-pencil"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item square-white border-top-0"
                                                                                href="#!"><i
                                                                                    class="fa-solid fa-trash"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item square-white border-top-0"
                                                                                href="#!"><i
                                                                                    class="fa-solid fa-print">
                                                                                </i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 d-xxl-block d-none box-col-none">
                            <div class="row">
                                <div class="col-xl-12 d-xl-block d-none">
                                    <div class="card">
                                        <div class="card-header card-no-border pb-4">
                                            <h5>Increase your knowledge by Learning!</h5>
                                        </div>
                                        <div class="card-body pt-0 position-relative pb-0 pe-0 increase-content">
                                            <div class="knowledge-wrapper">
                                                <div>
                                                    <p class="f-light">
                                                        The essential way to learn about anything is by
                                                        reading quality literature!
                                                    </p>
                                                    <a class="btn btn-primary btn-hover-effect f-w-500 knowledge-btn"
                                                        href="course-details.html">Learn More</a>
                                                </div>
                                                <div class="knowledgebase-wrapper">
                                                    <img class="knowledge-img img-fluid w-100"
                                                        src="../assets/images/dashboard-7/knowledge-base.png"
                                                        alt="knowledge-base" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 notification box-col-6 d-xl-block d-none">
                                    <div class="card">
                                        <div class="card-header card-no-border">
                                            <div class="header-top">
                                                <h5>Notice Board</h5>
                                                <div class="dropdown icon-dropdown">
                                                    <button class="btn dropdown-toggle" id="notice_dropdown"
                                                        type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="icon-more-alt"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="notice_dropdown">
                                                        <a class="dropdown-item" href="#">This Month</a><a
                                                            class="dropdown-item" href="#">Previous
                                                            Month</a><a class="dropdown-item" href="#">Last 3
                                                            Months</a><a class="dropdown-item" href="#">Last 6
                                                            Months
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 notice-board">
                                            <ul>
                                                <li class="d-flex">
                                                    <div class="activity-dot-primary"></div>
                                                    <div class="ms-3">
                                                        <p class="d-flex mb-2">
                                                            <span class="date-content light-background">16 Feb,
                                                                2024</span>
                                                        </p>
                                                        <h6>
                                                            We have over 25 years of experience. We've
                                                            rented more than 250 properties and won
                                                            awards.<span class="dot-notification"></span>
                                                        </h6>
                                                        <p class="f-light">
                                                            Jennyfar Lopez / 5 min ago<span
                                                                class="badge alert-light-success txt-success ms-2 f-w-600">New</span>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="d-flex">
                                                    <div class="activity-dot-secondary"></div>
                                                    <div class="ms-3">
                                                        <p class="d-flex mb-2">
                                                            <span class="date-content light-background">17 Feb,
                                                                2024</span>
                                                        </p>
                                                        <h6>
                                                            Drawing Competition, Story Telling Competition,
                                                            Craft and Creativity & Dance Competition<span
                                                                class="dot-notification"></span>
                                                        </h6>
                                                        <p class="f-light">Rubi Rao / 10 min ago</p>
                                                    </div>
                                                </li>
                                                <li class="d-flex">
                                                    <div class="activity-dot-success"></div>
                                                    <div class="ms-3">
                                                        <p class="d-flex mb-2">
                                                            <span class="date-content light-background">18 Feb,
                                                                2024</span>
                                                        </p>
                                                        <h6>
                                                            Announces a series of Parent Education Webinars
                                                            for connected parents<span class="dot-notification"></span>
                                                        </h6>
                                                        <p class="f-light">Jenny Wilson / 1 hr ago</p>
                                                    </div>
                                                </li>
                                                <li class="d-flex pb-0">
                                                    <div class="activity-dot-warning"></div>
                                                    <div class="ms-3">
                                                        <p class="d-flex mb-2">
                                                            <span class="date-content light-background">19 Feb,
                                                                2024</span>
                                                        </p>
                                                        <h6>
                                                            Rakhi Making Competition & Independence day and
                                                            Investiture Ceremony<span class="dot-notification"></span>
                                                        </h6>
                                                        <p class="f-light">
                                                            Cameron Williamson / 10 min ago
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 d-xl-block d-none">
                                    <div class="card">
                                        <div class="card-header card-no-border">
                                            <div class="header-top">
                                                <h5>Shinning Stars</h5>
                                                <div class="dropdown icon-dropdown">
                                                    <button class="btn dropdown-toggle" id="students_dropdown"
                                                        type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="icon-more-alt"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="students_dropdown">
                                                        <a class="dropdown-item" href="#">This Month</a><a
                                                            class="dropdown-item" href="#">Previous
                                                            Month</a><a class="dropdown-item" href="#">Last 3
                                                            Months</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="student-leader-wrapper">
                                                <div class="student-leader-content light-card">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="../assets/images/dashboard-7/attendance/student-leader/rank-1.svg"
                                                            alt="rank-1" /><img class="leader-img"
                                                            src="../assets/images/dashboard-7/attendance/student-leader/user-1.jpg"
                                                            alt="user 1" />
                                                        <div class="leader-content-height">
                                                            <h6>
                                                                Jacob<span class="c-o-light f-14 f-w-400 ps-1">(Grade
                                                                    10)
                                                                </span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <span class="f-14 txt-primary">98.75%</span>
                                                </div>
                                                <div class="student-leader-content light-card">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="../assets/images/dashboard-7/attendance/student-leader/rank-2.svg"
                                                            alt="rank-2" /><img class="leader-img"
                                                            src="../assets/images/dashboard-7/attendance/student-leader/user-2.jpg"
                                                            alt="user 2" />
                                                        <div class="leader-content-height">
                                                            <h6>
                                                                Jenny<span class="c-o-light f-14 f-w-400 ps-1">(Grade
                                                                    09)</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <span class="f-14 txt-primary">92.60%</span>
                                                </div>
                                                <div class="student-leader-content light-card">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <img src="../assets/images/dashboard-7/attendance/student-leader/rank-3.svg"
                                                            alt="rank-2" /><img class="leader-img"
                                                            src="../assets/images/dashboard-7/attendance/student-leader/user-3.jpg"
                                                            alt="user 3" />
                                                        <div class="leader-content-height">
                                                            <h6>
                                                                Nick<span class="c-o-light f-14 f-w-400 ps-1">(Grade
                                                                    11)</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <span class="f-14 txt-primary">88.90%</span>
                                                </div>
                                                <div class="student-leader-content">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <h5>4<sup>th</sup></h5>
                                                        <img class="leader-img"
                                                            src="../assets/images/dashboard-7/attendance/student-leader/user-4.jpg"
                                                            alt="user 4" />
                                                        <div class="leader-content-height">
                                                            <h6>
                                                                Bob<span class="c-o-light f-14 f-w-400 ps-1">(Grade
                                                                    12)</span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <span class="f-14 txt-primary">79.48%</span>
                                                </div>
                                                <div class="student-leader-content">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <h5>5<sup>th</sup></h5>
                                                        <img class="leader-img"
                                                            src="../assets/images/dashboard-7/attendance/student-leader/user-5.jpg"
                                                            alt="user 4" />
                                                        <div class="leader-content-height">
                                                            <h6>
                                                                Ralph<span class="c-o-light f-14 f-w-400 ps-1">(Grade
                                                                    08)
                                                                </span>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <span class="f-14 txt-primary">75.95%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">
                                Copyright <span class="year-update"> </span> © Cuba Theme By
                                Pixelstrap
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('assets/js/scrollbar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('assets/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/js/header-slick.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/flat-pickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_7.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <!-- Plugins JS Ends--><!-- Theme js-->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/script1.js') }}"></script>
    <script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>
</body>

</html>
