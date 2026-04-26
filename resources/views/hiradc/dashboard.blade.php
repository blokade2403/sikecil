@extends('layouts.main')
@section('content')
    <div class="col-12">
        <div class="tab-content" id="add-product-pills-tabContent">
            <div class="tab-pane fade show active" id="overview-project" role="tabpanel" aria-labelledby="overview-project-tab">
                <div class="row">

                    <div class="col-12">
                        <div class="common-project-header common-space m-b-20">
                            <div class="common-space">
                                <div class="pe-sm-3">
                                    <h5>
                                        Dashboard<span class="badge badge-light-warning ms-2">In Progress</span>
                                    </h5>
                                    <span class="c-o-light">Create a brand logo design for a admin.</span>
                                </div>
                                <div class="common-align">
                                    <div class="customers">
                                        <ul>
                                            <li class="d-inline-block">
                                                <img class="img-40 rounded-circle"
                                                    src="../assets/images/dashboard/user/10.jpg" alt="user" />
                                            </li>
                                            <li class="d-inline-block">
                                                <img class="img-40 rounded-circle"
                                                    src="../assets/images/dashboard/user/11.jpg" alt="user" />
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="common-circle bg-lighter-danger">
                                                    A
                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <img class="img-40 rounded-circle"
                                                    src="../assets/images/dashboard/user/1.jpg" alt="user" />
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="bg-lighter-dark common-circle">
                                                    <span class="f-w-500">9+</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <h6>All tasks : 24</h6>
                                </div>
                            </div>
                            <div class="common-align">
                                <ul class="common-align">
                                    <li>
                                        <span>Create Date &colon;</span><svg>
                                            <use href="../assets/svg/icon-sprite.svg#vector-calendar"></use>
                                        </svg><span>10 Jul, 2024 </span>
                                    </li>
                                    <li>
                                        <span>Due Date &colon;</span><svg>
                                            <use href="../assets/svg/icon-sprite.svg#vector-calendar"></use>
                                        </svg><span>10 Aug, 2024</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 xl-100 box-col-12">
                        <div class="card">
                            <div class="card-body px-3 pt-2">
                                <div
                                    class="recent-table table-responsive currency-table recent-order-table custom-scrollbar">
                                    <div class="col-xl-12 xl-100 box-col-12">
                                        <div class="card">
                                            <div class="card-header card-no-border">
                                                <div class="common-space">
                                                    <div class="left-header-content">
                                                        <h5>Data HIRADC</h5>
                                                        <p class="m-0 c-o-light">
                                                            Total 28 projects pending
                                                        </p>
                                                    </div>
                                                    <div class="card-header-right-btn">
                                                        <a class="c-o-light" href="project-list.html">View All</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body px-3 pt-2">
                                                <div
                                                    class="recent-table table-responsive currency-table recent-order-table custom-scrollbar">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="card bg-primary text-white p-3">
                                                                <h5>Total</h5>
                                                                <h2>{{ $total }}</h2>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="card bg-success text-white p-3">
                                                                <h5>Low</h5>
                                                                <h2>{{ $low }}</h2>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="card bg-warning text-white p-3">
                                                                <h5>Medium</h5>
                                                                <h2>{{ $medium }}</h2>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="card bg-danger text-white p-3">
                                                                <h5>High</h5>
                                                                <h2>{{ $high }}</h2>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- PENDING --}}
                                                    <div class="mt-4">
                                                        <div class="alert alert-info">
                                                            Menunggu Approval: <b>{{ $pending }}</b>
                                                        </div>
                                                    </div>

                                                    {{-- CHART --}}
                                                    <div class="mt-4">
                                                        <canvas id="riskChart"></canvas>
                                                    </div>

                                                    {{-- PER UNIT --}}
                                                    <div class="mt-5">
                                                        <h5>HIRADC per Unit</h5>
                                                        <div class="card-body px-3 pt-2">
                                                            <div
                                                                class="recent-table table-responsive currency-table recent-order-table custom-scrollbar">
                                                                <table class="table table-striped" id="main-recent-order">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Unit</th>
                                                                            <th>Total HIRADC</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($perUnit as $u)
                                                                            <tr>
                                                                                <td>{{ $u->nama_unit }}</td>
                                                                                <td>{{ $u->hiradcs_count }}</td>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- CHART JS --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script id="chartjs01">
        const ctx = document.getElementById('riskChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Low', 'Medium', 'High'],
                datasets: [{
                    label: 'Jumlah Risiko',
                    data: [{{ $low }}, {{ $medium }}, {{ $high }}],
                    borderWidth: 1
                }]
            }
        });
    </script>
@endsection
