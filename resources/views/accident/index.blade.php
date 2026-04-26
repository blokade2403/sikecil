@extends('layouts.main')
@section('content')
    <div class="container-fluid main-scope-project">
        <div class="row scope-bottom-wrapper">

            <div class="col-xxl-12 recent-xl-77 col-xl-9 box-col-9">
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
                                <button class="btn btn-success" type="button" data-bs-toggle="modal"
                                    data-bs-target=".bd-example-modal-lg">
                                    <i class="fa-solid fa-plus"></i> Add Project
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="tab-content" id="add-product-pills-tabContent">
                            <div class="tab-pane fade show active" id="overview-project" role="tabpanel"
                                aria-labelledby="overview-project-tab">
                                <div class="row">
                                    <div class="col-xxl-12 box-col-12">
                                        <div class="card main-summary">
                                            <div class="card-header card-no-border">
                                                <div class="common-space">
                                                    <div class="left-header-content">
                                                        <h5>Project Summary</h5>
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
                                                    <div class="container-fluid candidate-wrapper">
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <div class="row g-3">
                                                                    <div class="col-xl col-md-4 col-sm-6">
                                                                        <label class="form-label">Location</label><select
                                                                            class="form-select"
                                                                            aria-label="Select location">
                                                                            <option selected="">Australia
                                                                            </option>
                                                                            <option value="1">Japan</option>
                                                                            <option value="2">Brazil</option>
                                                                            <option value="3">Egypt</option>
                                                                            <option value="4">India</option>
                                                                            <option value="5">Norway</option>
                                                                            <option value="6">Spain</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xl col-md-4 col-sm-6">
                                                                        <label class="form-label">Skills</label><select
                                                                            class="form-select"
                                                                            aria-label="Select parent category">
                                                                            <option selected="">Senior Data
                                                                                Scientist</option>
                                                                            <option value="1">Web Designer
                                                                            </option>
                                                                            <option value="2">Software Engineer
                                                                            </option>
                                                                            <option value="3">Wordpress
                                                                                Developer</option>
                                                                            <option value="4">UI/UX Designer
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xl col-md-4 col-sm-6">
                                                                        <label class="form-label">Salary</label><select
                                                                            class="form-select"
                                                                            aria-label="Select parent category">
                                                                            <option selected="">Under $1000
                                                                            </option>
                                                                            <option value="1">$2000-3000
                                                                            </option>
                                                                            <option value="2">$4000-8000
                                                                            </option>
                                                                            <option value="3">$10000-40000
                                                                            </option>
                                                                            <option value="4">$120000-$340000
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xl col-md-4 col-sm-6">
                                                                        <label class="form-label">Experience</label><select
                                                                            class="form-select"
                                                                            aria-label="Select your experience">
                                                                            <option selected="">Fresher</option>
                                                                            <option value="1">1-2 Years
                                                                            </option>
                                                                            <option value="2">3-5 Years
                                                                            </option>
                                                                            <option value="3">6-10 Years
                                                                            </option>
                                                                            <option value="4">16+ Years
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col common-f-start">
                                                                        <a class="btn btn-primary f-w-500"
                                                                            href="#!">Filter</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div
                                                                    class="recent-table table-responsive currency-table recent-order-table custom-scrollbar">
                                                                    <table class="table table-striped"
                                                                        id="main-recent-order">
                                                                        <thead>
                                                                            <tr>
                                                                                <th></th>
                                                                                <th>Candidate Name</th>
                                                                                <th>Description</th>
                                                                                <th>Educations</th>
                                                                                <th>Experience & Skills</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @forelse($data as $index => $d)
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td>
                                                                                        <div
                                                                                            class="common-flex align-items-center">
                                                                                            <div class="position-relative">
                                                                                                @if ($d->foto)
                                                                                                    <img class="img-fluid rounded-circle"
                                                                                                        src="{{ asset($d->foto) }}"
                                                                                                        alt="Foto Kejadian"
                                                                                                        width="100">
                                                                                                    <div class="status">
                                                                                                        <div
                                                                                                            class="inner-dot bg-warning">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                @else
                                                                                                    <img class="img-fluid rounded-circle"
                                                                                                        src="../assets/images/dashboard-9/user/1.png"
                                                                                                        alt="user" />
                                                                                                    <div class="status">
                                                                                                        <div
                                                                                                            class="inner-dot bg-warning">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                @endif

                                                                                            </div>
                                                                                            <div>
                                                                                                <a class="f-w-500"
                                                                                                    href="#!">Rome
                                                                                                    Gordon</a>
                                                                                                <p>Wales,UK</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="common-f-start">
                                                                                            <div class="attachment">
                                                                                                <i
                                                                                                    class="fa-solid fa-paperclip"></i><span>03
                                                                                                    Projects</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <ul class="candidate-desc">
                                                                                            <li>
                                                                                                <h6>UX/UI Designer</h6>
                                                                                            </li>
                                                                                            <li>
                                                                                                <h6 class="c-light">
                                                                                                    Salary Range:
                                                                                                    <span
                                                                                                        class="f-14">$40000-80000</span>
                                                                                                </h6>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </td>
                                                                                    <td>
                                                                                        <ul class="educations">
                                                                                            <li>
                                                                                                <p class="mb-0">
                                                                                                    Bachelor's Degree
                                                                                                    2022-2024
                                                                                                </p>
                                                                                                <p class="mb-0">High
                                                                                                    School 2010-2021</p>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </td>
                                                                                    <td>
                                                                                        <ul class="candidate-skill">
                                                                                            <li>
                                                                                                <p class="mb-2">
                                                                                                    Experience : <span>1
                                                                                                        Year</span>
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <div class="common-flex">
                                                                                                    <span
                                                                                                        class="badge badge-light-primary">Adobe
                                                                                                        XD</span><span
                                                                                                        class="badge badge-light-warning">Sketch</span><span
                                                                                                        class="badge badge-light-secondary">Figma</span><span
                                                                                                        class="badge badge-light-success">Prototyping</span><span
                                                                                                        class="badge badge-light-danger">User
                                                                                                        Research</span>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="d-flex">
                                                                                            <button class="btn btn-primary"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-placement="top"
                                                                                                data-bs-title="Message">
                                                                                                <i
                                                                                                    class="fa-solid fa-envelope"></i></button><button
                                                                                                class="btn btn-success"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-placement="top"
                                                                                                data-bs-title="Approve">
                                                                                                <i
                                                                                                    class="fa-solid fa-thumbs-up"></i></button><button
                                                                                                class="btn btn-danger"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-placement="top"
                                                                                                data-bs-title="Reject">
                                                                                                <i
                                                                                                    class="fa-solid fa-circle-xmark">
                                                                                                </i>
                                                                                            </button>
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
                                                    <!-- LEFT CONTENT -->
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
    <div class="container">
        <h3 class="mb-4">Laporan Kecelakaan</h3>

        <a href="{{ route('accident.create') }}" class="btn btn-primary mb-3">
            + Tambah Laporan
        </a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Tempat</th>
                    <th>Nama Korban</th>
                    <th>Tipe</th>
                    <th>Foto</th>
                    <th>Tingkat Cedera</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $index => $d)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $d->tanggal }}</td>
                        <td>{{ $d->tempat }}</td>
                        <td>{{ $d->nama_korban }}</td>
                        <td>{{ ucfirst($d->tipe) }}</td>
                        <td>
                            @if ($d->foto)
                                <img src="{{ asset($d->foto) }}" alt="Foto Kejadian" width="100">
                            @else
                                <span class="text-muted">Tidak ada foto</span>
                            @endif
                        </td>
                        <td>{{ ucfirst($d->tingkat_cedera) }}</td>
                        <td>
                            <a href="{{ route('accident.pdf', $d->id) }}" class="btn btn-danger btn-sm">
                                PDF
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">Belum ada data laporan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
