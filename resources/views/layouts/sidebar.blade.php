 <div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
     <div>
         <div class="logo-wrapper">
             <a href="index.html"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}"
                     alt="" /><img class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                     alt="" /></a>
             <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
             <div class="toggle-sidebar">
                 <i class="status_toggle middle sidebar-toggle" data-feather="grid">
                 </i>
             </div>
         </div>
         <div class="logo-icon-wrapper">
             <a href="index.html"><img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}"
                     alt="" /></a>
         </div>
         <nav class="sidebar-main">
             <div class="left-arrow" id="left-arrow">
                 <i data-feather="arrow-left"></i>
             </div>
             <div id="sidebar-menu">
                 <ul class="sidebar-links" id="simple-bar">
                     <li class="back-btn">
                         <a href="index.html"><img class="img-fluid"
                                 src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="" /></a>
                         <div class="mobile-back text-end">
                             <span>Back</span><i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i>
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
                         <i class="fa-solid fa-thumbtack"></i><label class="badge badge-light-primary">13</label><a
                             class="sidebar-link sidebar-title" href="{{ route('dashboard') }}"><svg
                                 class="stroke-icon">
                                 <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                             </svg><svg class="fill-icon">
                                 <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                             </svg><span class="lan-3">Dashboard </span></a>
                     </li>
                     <li class="sidebar-list">
                         <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#"><svg
                                 class="stroke-icon">
                                 <use href="../assets/svg/icon-sprite.svg#stroke-widget"></use>
                             </svg><svg class="fill-icon">
                                 <use href="../assets/svg/icon-sprite.svg#fill-widget"></use>
                             </svg><span class="lan-6">Widgets</span></a>
                         <ul class="sidebar-submenu">
                             <li><a href="general-widget.html">General</a></li>
                             <li><a href="chart-widget.html">Chart</a></li>
                         </ul>
                     </li>
                     <li class="sidebar-list">
                         <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title" href="#"><svg
                                 class="stroke-icon">
                                 <use href="../assets/svg/icon-sprite.svg#stroke-layout"></use>
                             </svg><svg class="fill-icon">
                                 <use href="../assets/svg/icon-sprite.svg#fill-layout"></use>
                             </svg><span>Setting Employee</span></a>
                         <ul class="sidebar-submenu">
                             <li><a href="{{ route('units.index') }}">Unit</a></li>
                             <li><a href="{{ route('roles.index') }}">Role</a></li>
                             <li><a href="{{ route('positions.index') }}">Positions</a></li>
                             <li><a href="{{ route('users.index') }}">Users</a></li>
                             <li><a href="{{ route('employees.index') }}">Employee</a></li>
                             <li><a href="footer-dark.html">Footer Dark</a></li>
                             <li><a href="footer-fixed.html">Footer Fixed</a></li>
                         </ul>
                     </li>

                     <li class="sidebar-main-title">
                         <div>
                             <h6 class="lan-8">Applications</h6>
                         </div>
                     </li>
                     <li class="sidebar-list">
                         <i class="fa-solid fa-thumbtack"> </i><a class="sidebar-link sidebar-title" href="#"><svg
                                 class="stroke-icon">
                                 <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}">
                                 </use>
                             </svg><svg class="fill-icon">
                                 <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                             </svg><span>Kesehatan Pegawai </span></a>
                         <ul class="sidebar-submenu">
                             <li>
                                 <a href="{{ route('health.index') }}">Riwayat Pemeriksaan</a>
                             </li>
                             <li><a href="createnew.html">Data Pegawai</a></li>
                             <li> <label class="badge badge-light-success">New</label><a href="createnew.html">Program
                                     Latihan</a></li>
                         </ul>
                     </li>
                     <li class="sidebar-list">
                         <i class="fa-solid fa-thumbtack"> </i><a class="sidebar-link sidebar-title" href="#"><svg
                                 class="stroke-icon">
                                 <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-button') }}"></use>
                             </svg><svg class="fill-icon">
                                 <use href="{{ asset('assets/svg/icon-sprite.svg#fill-button') }}"></use>
                             </svg><span>HiraDC</span></a>
                         <ul class="sidebar-submenu">
                             <li><a href="{{ route('hiradc.dashboard') }}">Risk Dashboard</a></li>
                             <li><a href="{{ route('hiradc.index') }}">Daftar HIRA</a></li>
                         </ul>
                     </li>
                     <li class="sidebar-list">
                         <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title"
                             href="#"><svg class="stroke-icon">
                                 <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                             </svg><svg class="fill-icon">
                                 <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                             </svg><span>Kecelakaan Kerja</span></a>
                         <ul class="sidebar-submenu">
                             <li><a href="{{ route('accident.index') }}">Laporan Kejadian</a></li>
                             <li><a href="chart-widget.html">Investigasi</a></li>
                             <li><a href="chart-widget.html">Statistik</a></li>
                         </ul>
                     </li>
                     <li class="sidebar-list">
                         <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link sidebar-title"
                             href="#"><svg class="stroke-icon">
                                 <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-layout') }}"></use>
                             </svg><svg class="fill-icon">
                                 <use href="{{ asset('assets/svg/icon-sprite.svg#fill-layout') }}"></use>
                             </svg><span>Monitoring APAR</span></a>
                         <ul class="sidebar-submenu">
                             <li><a href="{{ route('apar.index') }}">Data APAR</a></li>
                             <li><a href="layout-rtl.html">Checklist APAR</a></li>
                             <li><a href="layout-rtl.html">Monitoring Expired</a></li>
                         </ul>
                     </li>

                 </ul>
             </div>
             <div class="right-arrow" id="right-arrow">
                 <i data-feather="arrow-right"></i>
             </div>
         </nav>
     </div>
 </div>
