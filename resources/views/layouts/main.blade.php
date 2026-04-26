<!doctype html>
<html lang="en">

@include('layouts.head')

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
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        @include('layouts.headers')
        <div class="page-body-wrapper">
            @include('layouts.sidebar')
            {{-- @include('layouts.content') --}}
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>Autofill Datatables</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <svg class="stroke-icon">
                                                <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item">Extension Data Tables</li>
                                    <li class="breadcrumb-item active">Autofill Datatables</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div><!-- Container-fluid starts-->
                @yield('content')
            </div>
            @include('layouts.footer')
        </div>
    </div>
    @include('layouts.jquery')
    @include('layouts.js')
    @stack('scripts')
</body>

</html>
