@extends('layouts.main')
@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid dashboard-7">
        <div class="row">
            <div class="col-xxl-9 box-col-12">
                <div class="row">
                    <div class="col-xxl-4 col-md-5">
                    </div>
                    <div class="col-xxl-8 col-md-7">
                        <form method="GET" class="row mb-3">

                            <div class="col-md-3">
                                <select name="unit_id" class="form-select">
                                    <option value="">-- Semua Unit --</option>
                                    @foreach ($units as $u)
                                        <option value="{{ $u->id }}">{{ $u->nama_unit }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-3">
                                <input type="date" name="from" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <input type="date" name="to" class="form-control">
                            </div>

                            <div class="col-md-3 d-flex gap-2">
                                <button class="btn btn-primary w-100">Filter</button>

                                <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary w-100">
                                    Reset
                                </a>
                            </div>
                        </form>
                    </div>
                    @if ($obesitas->count())
                        <div class="alert alert-danger mt-3">
                            🚨 <b>{{ $obesitas->count() }}</b> Pegawai terdeteksi OBESITAS!
                        </div>
                    @endif

                    <div class="col-xl-4 col-sm-6 box-col-5">
                        <div class="card height-equal">
                            <div class="card-header card-header border-t-primary">
                                <div class="header-top">
                                    <h5>Distribusi Kebugaran</h5>
                                    <div class="dropdown icon-dropdown">
                                        <button class="btn dropdown-toggle" id="income_dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="icon-more-alt"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="income_dropdown">
                                            <a class="dropdown-item" href="#">This Month</a><a class="dropdown-item"
                                                href="#">Previous Month</a><a class="dropdown-item"
                                                href="#">Last 3 Months</a><a class="dropdown-item" href="#">Last
                                                6 Months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <div class="income-wrapper">
                                    <ul>
                                        <li>
                                            <div class="income-dot dot-primary"></div>
                                            <span class="text-muted">Total</span>
                                            <h6>
                                                <span>{{ count($checks) }}
                                                </span>
                                            </h6>
                                        </li>
                                        <li>
                                            <div class="income-dot dot-warning"></div>
                                            <span class="text-muted">Rata-rata IMT</span>
                                            <h6>
                                                <span>{{ round($checks->avg('imt.imt'), 2) }}</span>
                                            </h6>
                                        </li>
                                        <li>
                                            <div class="income-dot dot-success"></div>
                                            <span class="text-muted">Rata-rata VO2</span>
                                            <h6>
                                                <span>{{ round($checks->avg('fitness.vo2_max'), 2) }}</span>
                                            </h6>
                                        </li>
                                    </ul>
                                    <div class="main-income-chart">
                                        <canvas id="fitnessChart"></canvas>
                                    </div>
                                    <p class="text-muted text-center mt-2 mb-0">Rata-rata IMT:
                                        {{ round($checks->avg('imt.imt'), 2) }} | Rata-rata VO2 Max:
                                        {{ round($checks->avg('fitness.vo2_max'), 2) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-12 order-1 order-xl-0 box-col-7">
                        <div class="card height-equal">
                            <div class="card-header card-header border-t-primary">
                                <div class="header-top">
                                    <h5 class="m-0">Distribusi IMT</h5>
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
                                            <canvas id="imtChart"></canvas>
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
                                                            <h6>Rata-rata Nilai IMT</h6>
                                                            <span class="text-muted text-ellipsis">Bring
                                                                Something into the
                                                                Classroom...</span>
                                                        </div>
                                                        <div class="d-flex marks-count">
                                                            <h5>

                                                                {{ round($checks->avg('imt.imt'), 2) }}
                                                                <sub class="text-muted"></sub>
                                                            </h5>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <i class="icon-arrow-up txt-success pe-2 f-w-600"></i><span
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
                                                            <h6>Rata-rata VO2 Max</h6>
                                                            <span class="text-muted text-ellipsis">These 5
                                                                study tips can help you
                                                                take...</span>
                                                        </div>
                                                        <div class="d-flex marks-count">
                                                            <h5>
                                                                {{ round($checks->avg('fitness.vo2_max'), 2) }}<sub
                                                                    class="text-muted"></sub>
                                                            </h5>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <i class="icon-arrow-up txt-success pe-2 f-w-600"></i><span
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
                                                            <h6>Total Data Pegawai</h6>
                                                            <span class="text-muted text-ellipsis">
                                                                Data Total Pengukuran Kesehatan Pegawai </span>
                                                        </div>
                                                        <div class="d-flex marks-count">
                                                            <h5>
                                                                {{ count($checks) }}<sub class="text-muted"> orang</sub>
                                                            </h5>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <i class="icon-arrow-up txt-success pe-2 f-w-600"></i><span
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

                    <div class="col-xl-12 order-2">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Today's Task</h5>
                                    <div class="dropdown icon-dropdown">
                                        <button class="btn dropdown-toggle" id="task_dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="icon-more-alt"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="task_dropdown">
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
                                            aria-label="Basic example" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div
                                        class="recent-table table-responsive currency-table recent-order-table custom-scrollbar">
                                        <table class="table" id="main-recent-order">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Detail Pegawai</th>
                                                    <th>Kategori</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="main-task-wrapper">
                                                @foreach ($latest as $d)
                                                    <tr class="light-card">
                                                        <td>
                                                            {{ $loop->iteration }}
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div
                                                                    class="d-flex align-items-center gap-2 justify-content-center">
                                                                    <div>
                                                                        <a
                                                                            href="task.html">{{ $d->user->nama ?? '-' }}</a>
                                                                        <ul class="task-icons">
                                                                            <li>
                                                                                <span class="text-muted">Nilai IMT :
                                                                                    {{ round($d->imt->imt ?? 0, 2) }}</span>
                                                                            </li>
                                                                            <li class="f-light flex-wrap">
                                                                                <svg class="fill-icon fill-primary">
                                                                                    <use
                                                                                        href="../assets/svg/icon-sprite.svg#clock">
                                                                                    </use>
                                                                                </svg><span>Nilai VO2 :
                                                                                    {{ round($d->fitness->vo2_max ?? 0, 2) }}</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn button-primary">
                                                                {{ $d->imt->kategori_imt ?? '-' }}
                                                            </button>
                                                        </td>
                                                        <td class="icons-box ps-2">
                                                            <button class="btn button-primary">
                                                                {{ $d->fitness->hasil ?? '-' }}
                                                            </button>
                                                        </td>
                                                        <td class="icons-box-2 ps-0">
                                                            <div class="open-options">
                                                                <div class="square-white dropdown-toggle" role="main"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis"></i>
                                                                </div>
                                                                <ul class="dropdown-menu dropdown-block dropdown-menu-end">
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
                                                                            href="#!"><i class="fa-solid fa-print">
                                                                            </i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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
                                <h5>⚠️ Daftar Pegawai Obesitas</h5>
                            </div>
                            <div class="card-body pt-0 position-relative pb-0 pe-0 increase-content">
                                <div class="card-body px-0 pt-0 treading-product">
                                    <div class="recent-table table-responsive custom-scrollbar">
                                        <table class="table" id="treading-t-product">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Nilai IMT</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($obesitas as $o)
                                                    <tr>
                                                        <td>
                                                            <div class="common-flex align-items-center">
                                                                <img class="img-fluid rounded-circle"
                                                                    src="../assets/images/dashboard-2/order/sub-product/17.png"
                                                                    alt="user" /><a class="f-w-500"
                                                                    href="list-products.html">{{ $o->user->nama ?? '-' }}</a>
                                                            </div>
                                                        </td>
                                                        <td>{{ round($o->imt->imt ?? 0, 2) }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 notification box-col-6 d-xl-block d-none">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h6>🏆 Top 5 Pegawai Paling Fit</h6>
                                    <div class="dropdown icon-dropdown">
                                        <button class="btn dropdown-toggle" id="notice_dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="icon-more-alt"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="notice_dropdown">
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
                        <div class="card default-inline-calender">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>School Calendar</h5>
                                    <div class="dropdown icon-dropdown">
                                        <button class="btn dropdown-toggle" id="calender_dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="icon-more-alt"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="calender_dropdown">
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
                </div>
            </div>
        </div>
        {{-- <div class="container">

            <h3 class="mb-4">📊 Dashboard Kesehatan Pegawai</h3>

            <!-- 🔹 CARD SUMMARY -->
            <div class="row mb-4">

                <div class="col-md-4">
                    <div class="card shadow border-0 text-center">
                        <div class="card-body">
                            <h6>Total Pemeriksaan</h6>
                            <h2 class="fw-bold text-primary">{{ $totalCheck }}</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow border-0 text-center">
                        <div class="card-body">
                            <h6>Rata-rata VO2 Max</h6>
                            <h2 class="fw-bold text-success">{{ $avgVo2 }}</h2>
                        </div>
                    </div>
                </div>

            </div>

            <!-- 🔹 CHART -->


            <!-- 🔹 DATA TERBARU -->
            <div class="card mt-4 shadow border-0">
                <div class="card-body">
                    <h6>Data Terbaru</h6>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>IMT</th>
                                <th>Kategori</th>
                                <th>VO2</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($latest as $d)
                                <tr>
                                    <td>{{ $d->employee->nama ?? '-' }}</td>
                                    <td>{{ round($d->imt->imt ?? 0, 2) }}</td>
                                    <td>{{ $d->imt->kategori_imt ?? '-' }}</td>
                                    <td>{{ round($d->fitness->vo2_max ?? 0, 2) }}</td>
                                    <td>{{ $d->fitness->hasil ?? '-' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div> --}}
    </div>
    <!-- Container-fluid Ends-->
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // IMT Chart
        const imtData = @json($imtStats);

        new Chart(document.getElementById('imtChart'), {
            type: 'pie',
            data: {
                labels: imtData.map(i => i.label),
                datasets: [{
                    data: imtData.map(i => i.total)
                }]
            }
        });

        // Fitness Chart
        const fitnessData = @json($fitnessStats);

        new Chart(document.getElementById('fitnessChart'), {
            type: 'bar',
            data: {
                labels: fitnessData.map(i => i.label),
                datasets: [{
                    label: 'Jumlah',
                    data: fitnessData.map(i => i.total)
                }]
            }
        });
    </script>
@endpush
