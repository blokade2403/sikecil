@extends('layouts.main')

@section('content')
    <div class="col-12">
        <div class="tab-content" id="add-product-pills-tabContent">
            <div class="tab-pane fade show active" id="overview-project" role="tabpanel" aria-labelledby="overview-project-tab">
                <div class="row">
                    <div class="col-xxl-12 box-col-12">
                        <div class="card main-summary">
                            <div class="card-header card-no-border">
                                <div class="common-space">
                                    <div class="left-header-content">
                                        <h5>Risk Matrix</h5>
                                        <p class="m-0 c-o-light">
                                            Due date exceeded for 24 projects
                                        </p>
                                    </div>
                                    <div class="card-header-right-btn">
                                        <a class="c-o-light" href="project-list.html">View All</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <div class="row g-3">
                                    <!-- LEFT CONTENT -->
                                    <div class="col-lg-12">
                                        <div class="h-100">
                                            <table class="table table-bordered text-center align-middle">
                                                <tr>
                                                    <th rowspan="2">Frekuensi ↓ / Dampak →</th>
                                                    <th colspan="5">Tingkat Dampak</th>
                                                </tr>
                                                <tr>
                                                    <th>1 <br><small>Tidak Signifikan</small></th>
                                                    <th>2 <br><small>Minor</small></th>
                                                    <th>3 <br><small>Moderat</small></th>
                                                    <th>4 <br><small>Signifikan</small></th>
                                                    <th>5 <br><small>Sangat Signifikan</small></th>
                                                </tr>

                                                @php
                                                    $likelihood = [
                                                        5 => 'Hampir pasti terjadi',
                                                        4 => 'Sering terjadi',
                                                        3 => 'Kadang terjadi',
                                                        2 => 'Jarang terjadi',
                                                        1 => 'Hampir tidak terjadi',
                                                    ];
                                                @endphp

                                                @for ($i = 5; $i >= 1; $i--)
                                                    <tr>
                                                        <th>
                                                            {{ $i }} <br>
                                                            <small>{{ $likelihood[$i] }}</small>
                                                        </th>

                                                        @for ($j = 1; $j <= 5; $j++)
                                                            @php
                                                                $score = $i * $j;

                                                                // Mapping warna seperti matriks risiko
                                                                if ($score <= 4) {
                                                                    $color = '#00bcd4'; // biru (rendah)
                                                                } elseif ($score <= 9) {
                                                                    $color = '#4caf50'; // hijau
                                                                } elseif ($score <= 15) {
                                                                    $color = '#ffeb3b'; // kuning
                                                                } elseif ($score <= 20) {
                                                                    $color = '#ff9800'; // orange
                                                                } else {
                                                                    $color = '#f44336'; // merah (tinggi)
                                                                }
                                                            @endphp

                                                            <td
                                                                style="background-color: {{ $color }}; font-weight:bold;">
                                                                {{ $matrix[$i][$j] }}
                                                            </td>
                                                        @endfor
                                                    </tr>
                                                @endfor
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <button class="btn btn-success" type="button" data-bs-toggle="modal"
                                    data-bs-target=".bd-example-modal-lg">
                                    <i class="fa-solid fa-plus"></i> Add Project
                                </button>
                            </div>
                        </div>
                        @include('hiradc.modal_add')
                    </div>
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
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Unit</th>
                                                <th>Aktivitas</th>
                                                <th>Bahaya</th>
                                                <th>Pengendalian</th>
                                                <th>Kemungkinan</th>
                                                <th>Keparahan</th>
                                                <th>Score</th>
                                                <th>Peringkat</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $d)
                                                <tr>
                                                    <td>{{ $d->unit->nama_unit ?? '-' }}</td>
                                                    <td>{{ $d->aktivitas }}</td>
                                                    <td>{{ $d->bahaya }}</td>
                                                    <td>{{ $d->pengendalian }}</td>
                                                    <td>{{ $d->kemungkinan }}</td>
                                                    <td>{{ $d->keparahan }}</td>
                                                    <td>{{ $d->score }}</td>
                                                    <td>
                                                        <span
                                                            class="badge bg-{{ $d->peringkat == 'High' ? 'danger' : ($d->peringkat == 'Medium' ? 'warning' : 'success') }}">
                                                            {{ $d->peringkat }}
                                                        </span>
                                                    </td>

                                                    {{-- STATUS --}}
                                                    <td>
                                                        <span class="badge bg-secondary">{{ $d->status }}</span>
                                                    </td>

                                                    {{-- AKSI --}}
                                                    <td>
                                                        @if ($d->status == 'draft')
                                                            <a href="{{ route('hiradc.submit', $d->id) }}"
                                                                class="btn btn-sm btn-info">Submit</a>
                                                        @elseif($d->status == 'submitted')
                                                            <a href="{{ route('hiradc.approve', $d->id) }}"
                                                                class="btn btn-sm btn-success">Approve</a>
                                                            <a href="{{ route('hiradc.reject', $d->id) }}"
                                                                class="btn btn-sm btn-danger">Reject</a>
                                                        @endif
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
    </div>
    </div>

@endsection
