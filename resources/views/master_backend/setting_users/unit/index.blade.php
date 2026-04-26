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
                        @include('master_backend.setting_users.unit.modal_add')
                    </div>
                    <div class="col-12">
                        <div class="tab-content" id="add-product-pills-tabContent">
                            <div class="tab-pane fade show active" id="overview-project" role="tabpanel"
                                aria-labelledby="overview-project-tab">
                                <div class="row">
                                    <div class="col-xxl-8 box-col-12">
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
                                                    <div class="col-md-8 xl-50 order-md-0 order-1">
                                                        <ul class="summary-section">
                                                            <li class="p-b-20">
                                                                <p>
                                                                    The proposal's project summary is
                                                                    among its most crucial sections. It is
                                                                    probably the first thing a reviewer
                                                                    will look at, so here is your best
                                                                    chance to catch their attention.
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <ul class="common-space p-t-10">
                                                                    <li>
                                                                        <ul>
                                                                            <li>
                                                                                <p class="mb-1">
                                                                                    Creation Date
                                                                                </p>
                                                                                <span>14 March, 2024</span>
                                                                            </li>
                                                                            <li>
                                                                                <p class="mb-1">Due Date</p>
                                                                                <span>30 April, 2024</span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <ul>
                                                                            <li>
                                                                                <p class="mb-1">Priority</p>
                                                                                <span
                                                                                    class="badge badge-light-primary">High</span>
                                                                            </li>
                                                                            <li>
                                                                                <p class="mb-1">Status</p>
                                                                                <span class="badge badge-light-success">In
                                                                                    progress</span>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <p class="p-t-10 mb-2">Resource</p>
                                                                        <div class="attachment-file common-flex">
                                                                            <div class="common-flex align-items-center">
                                                                                <img class="img-fluid"
                                                                                    src="../assets/images/project/files/pdf.png"
                                                                                    alt="pdf" />
                                                                                <div class="d-block">
                                                                                    <p class="mb-0">
                                                                                        Projects Webflow
                                                                                    </p>
                                                                                    <p class="c-o-light">
                                                                                        678 KB
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <a href="../assets/pug/pages/template/text_file.pdf"
                                                                                download>
                                                                                <i
                                                                                    class="fa-solid fa-download f-light"></i></a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 xl-50">
                                                        <div class="summary-chart-box">
                                                            <div id="summary-chart"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6 order-xxl-0 order-sm-1 box-col-6 box-ord-1">
                                        <div class="card">
                                            <div class="card-header card-no-border">
                                                <div class="common-space">
                                                    <div class="left-header-content">
                                                        <h5>To Do List</h5>
                                                    </div>
                                                    <div class="card-header-right-btn">
                                                        <a class="c-o-light" href="to-do.html">View All</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0 project-todo">
                                                <ul class="crm-todo-list">
                                                    <li class="d-flex align-items-center">
                                                        <span class="l-line-primary"></span>
                                                        <div class="flex-shrink-0">
                                                            <div class="form-check">
                                                                <input class="form-check-input checkbox-primary"
                                                                    type="checkbox" value="" />
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="f-w-400">
                                                                Establish a project plan
                                                            </h6>
                                                            <span class="mb-0">Divide the project manageable
                                                                phases</span>
                                                        </div>
                                                        <div class="dropdown icon-dropdown">
                                                            <button class="btn dropdown-toggle" id="appointmentDropdown"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="icon-more-alt"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="appointmentDropdown">
                                                                <a class="dropdown-item" href="#">Completed</a><a
                                                                    class="dropdown-item" href="#">Reschedule</a><a
                                                                    class="dropdown-item" href="#">Repeat</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <span class="l-line-secondary"></span>
                                                        <div class="flex-shrink-0">
                                                            <div class="form-check">
                                                                <input class="form-check-input checkbox-secondary"
                                                                    type="checkbox" value="" />
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="f-w-400">Gathering Info</h6>
                                                            <span class="mb-0">Establish a budget for project
                                                                costs</span>
                                                        </div>
                                                        <div class="dropdown icon-dropdown">
                                                            <button class="btn dropdown-toggle" id="getherInfoDropdown"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="icon-more-alt"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="getherInfoDropdown">
                                                                <a class="dropdown-item" href="#">Completed</a><a
                                                                    class="dropdown-item" href="#">Reschedule</a><a
                                                                    class="dropdown-item" href="#">Repeat</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <span class="l-line-success"></span>
                                                        <div class="flex-shrink-0">
                                                            <div class="form-check">
                                                                <input class="form-check-input checkbox-success"
                                                                    type="checkbox" value="" />
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h6 class="f-w-400">
                                                                Track & keep an eye on progress
                                                            </h6>
                                                            <span class="mb-0">Development task</span>
                                                        </div>
                                                        <div class="dropdown icon-dropdown">
                                                            <button class="btn dropdown-toggle" id="developmentDropdown"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="icon-more-alt"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="developmentDropdown">
                                                                <a class="dropdown-item" href="#">Completed</a><a
                                                                    class="dropdown-item" href="#">Reschedule</a><a
                                                                    class="dropdown-item" href="#">Repeat</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 xl-100 box-col-12">
                                        <div class="card">
                                            <div class="card-header card-no-border">
                                                <div class="common-space">
                                                    <div class="left-header-content">
                                                        <h5>Projects Pending</h5>
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
                                                    class="recent-table table-responsive custom-scrollbar project-pending-table">
                                                    <table class="table table-striped" id="main-recent-order">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Unit</th>
                                                                <th>Created At</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $no = 1;
                                                            @endphp
                                                            @foreach ($units as $c)
                                                                <tr>
                                                                    <td>{{ $no++ }}</td>
                                                                    <td>{{ $c->nama_unit }}</td>
                                                                    <td>{{ $c->created_at }}</td>
                                                                    <td>
                                                                        <ul class="action">
                                                                            <li class="edit">
                                                                                <button
                                                                                    style="border:none; background:none;"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#editModal{{ $c->id }}">
                                                                                    <i
                                                                                        class="fa-regular fa-pen-to-square"></i>
                                                                                </button>

                                                                            </li>
                                                                            <li class="delete">
                                                                                <form
                                                                                    action="{{ route('units.destroy', $c->id) }}"
                                                                                    method="POST"
                                                                                    style="display:inline-block;"
                                                                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit" class="delete"
                                                                                        style="border:none; background:none;">
                                                                                        <i
                                                                                            class="fa-solid fa-trash-can"></i>
                                                                                    </button>
                                                                                </form>
                                                                            </li>
                                                                        </ul>
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
            </div>
        </div>
    </div>
@endsection
