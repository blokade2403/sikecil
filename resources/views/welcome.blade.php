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
            @include('layouts.content')
            @yield('content')
            @include('layouts.footer')
        </div>
    </div>
    @include('layouts.jquery')
</body>

</html>
