<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  @@include("partials/head.html")
  <title>Modernize Bootstrap Admin</title>
</head>

<body class="link-sidebar">
  <!-- Preloader -->
  <div class="preloader">
    <img src="{{ URL::asset('build/images/logos/favicon.png') }}" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <!-- Sidebar Start -->
    <aside class="left-sidebar with-vertical">
      <div>@@include("partials/sidebar.html", { "page": "dashboard", })</div>
    </aside>
    <!--  Sidebar End -->
    <div class="page-wrapper">
      <!--  Header Start -->
      <header class="topbar">
        <div class="with-vertical">@@include("partials/header.html")</div>
        <div class="app-header with-horizontal">
          @@include("partials/horizontal-header.html")
        </div>
      </header>
      <!--  Header End -->
      
      <aside class="left-sidebar with-horizontal">
        @@include("partials/horizontal-sidebar.html", { "page": "dashboard",
        })
      </aside>

      <div class="body-wrapper">
        <div class="container-fluid">
          @@include("partials/breadcrumb.html", {"title": "Basic Table", "subtitle": 'Home'})
          <div class="card w-100 position-relative overflow-hidden">
            <div class="px-4 py-3 border-bottom">
              <h4 class="card-title mb-0">Basic Table</h4>
            </div>
            <div class="card-body p-4">
              <div class="table-responsive mb-4 border rounded-1">
                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">User</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Project Name</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Team</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Status</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Budget</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-3.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Sunil Joshi</h6>
                            <span class="fw-normal">Web Designer</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Elite Admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)"
                            class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                            >
                            S
                          </a>
                          <a href="javascript:void(0)"
                            class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                            >
                            D
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">Active</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$3.9k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Arlene McCoy</h6>
                            <span class="fw-normal">Project Manager</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Real Homes WP Theme</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)"
                            class="text-bg-primary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                            >
                            A
                          </a>
                          <a href="javascript:void(0)"
                            class="text-bg-warning text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                            >
                            X
                          </a>
                          <a href="javascript:void(0)"
                            class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                            >
                            N
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-warning-subtle text-warning">Pending</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$24.5k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-6.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Christopher Jamil</h6>
                            <span class="fw-normal">Project Manager</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">MedicalPro WP Theme</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)"
                            class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                            >
                            X
                          </a>
                        </div>
                      </td>
                      <td>
                        <span
                          class="badge bg-primary-subtle text-primary">Completed</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$12.8k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-4.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Evelyn Pope</h6>
                            <span class="fw-normal">Frontend Engineer</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)"
                            class="text-bg-primary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                            >
                            Y
                          </a>
                          <a href="javascript:void(0)"
                            class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                            >
                            X
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">Active</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$2.4k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-5.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Micheal Doe</h6>
                            <span class="fw-normal">Content Writer</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)"
                            class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center"
                            >
                            S
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">Cancel</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$9.3k</h6>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive mb-4 border rounded-1">
                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">User</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Project Name</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Users</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Status</h6>
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-10.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Olivia Rhye</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Xtreme admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="{{ URL::asset('build/images/profile/user-4.jpg') }}"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-primary-subtle text-primary">active</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Barbara Steele</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Adminpro admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="{{ URL::asset('build/images/profile/user-5.jpg') }}"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="{{ URL::asset('build/images/profile/user-3.jpg') }}"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">cancel</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-3.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Leonard Gordon</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Monster admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="{{ URL::asset('build/images/profile/user-3.jpg') }}"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-primary-subtle text-primary">active</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-4.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Evelyn Pope</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Materialpro admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="{{ URL::asset('build/images/profile/user-3.jpg') }}"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="{{ URL::asset('build/images/profile/user-5.jpg') }}"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span
                          class="badge bg-success-subtle text-success">pending</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-5.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Tommy Garza</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Elegant admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="{{ URL::asset('build/images/profile/user-5.jpg') }}"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="{{ URL::asset('build/images/profile/user-6.jpg') }}"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">cancel</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-6.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">James Smith</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Modernize admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="{{ URL::asset('build/images/profile/user-4.jpg') }}"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span
                          class="badge bg-success-subtle text-success">pending</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive mb-4 border rounded-1">
                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Customer</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Status</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Email Address</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Teams</h6>
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Olivia Rhye</h6>
                            <span class="fw-normal">@rhye</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span
                          class="badge bg-success-subtle text-success fw-semibold fs-2 gap-1 d-inline-flex align-items-center"><i
                            class="ti ti-circle fs-3"></i>active</span>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">olivia@ui.com</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <span class="badge text-bg-primary">Design</span>
                          <span class="badge text-bg-secondary">Product</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots fs-5"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Barbara Steele</h6>
                            <span class="fw-normal">@steele</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span
                          class="badge text-bg-light text-dark fw-semibold fs-2 gap-1 d-inline-flex align-items-center"><i
                            class="ti ti-clock-hour-4 fs-3"></i>offline</span>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">steele@ui.com</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <span class="badge text-bg-secondary">Product</span>
                          <span class="badge text-bg-danger">Operations</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots fs-5"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-3.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Leonard Gordon</h6>
                            <span class="fw-normal">@gordon</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span
                          class="badge bg-success-subtle text-success fw-semibold fs-2 gap-1 d-inline-flex align-items-center"><i
                            class="ti ti-circle fs-3"></i>active</span>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">olivia@ui.com</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <span class="badge text-bg-primary">Finance</span>
                          <span class="badge text-bg-success">Customer Success</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots fs-5"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-4.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Evelyn Pope</h6>
                            <span class="fw-normal">@pope</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span
                          class="badge text-bg-light text-dark fw-semibold fs-2 gap-1 d-inline-flex align-items-center"><i
                            class="ti ti-clock-hour-4 fs-3"></i>offline</span>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">steele@ui.com</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <span class="badge text-bg-danger">Operations</span>
                          <span class="badge text-bg-primary">Design</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots fs-5"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-5.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Tommy Garza</h6>
                            <span class="fw-normal">@garza</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span
                          class="badge bg-success-subtle text-success fw-semibold fs-2 gap-1 d-inline-flex align-items-center"><i
                            class="ti ti-circle fs-3"></i>active</span>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">olivia@ui.com</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <span class="badge text-bg-secondary">Product</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots fs-5"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-6.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">James Smith</h6>
                            <span class="fw-normal">@vasquez</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span
                          class="badge bg-success-subtle text-success fw-semibold fs-2 gap-1 d-inline-flex align-items-center"><i
                            class="ti ti-circle fs-3"></i>active</span>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">steele@ui.com</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <span class="badge text-bg-success">Customer Success</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots fs-5"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive mb-4 border rounded-1">
                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Invoice</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Status</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Customer</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Progress</h6>
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <h6 class="fw-semibold mb-0">INV-3066</h6>
                      </td>
                      <td>
                        <span
                          class="badge bg-primary-subtle text-primary d-inline-flex align-items-center gap-1"><i
                            class="ti ti-check fs-4"></i>paid</span>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Olivia Rhye</h6>
                            <span class="fw-normal">olivia@ui.com</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <div class="progress text-bg-light w-100 h-4">
                            <div class="progress-bar" role="progressbar" aria-label="Example 4px high"
                              style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <span class="fw-normal">60%</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h6 class="fw-semibold mb-0">INV-3067</h6>
                      </td>
                      <td>
                        <span
                          class="badge bg-danger-subtle text-danger d-inline-flex align-items-center gap-1"><i
                            class="ti ti-x fs-4"></i>cancelled</span>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Barbara Steele</h6>
                            <span class="fw-normal">steele@ui.com</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <div class="progress text-bg-light w-100 h-4">
                            <div class="progress-bar" role="progressbar" aria-label="Example 4px high"
                              style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <span class="fw-normal">30%</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h6 class="fw-semibold mb-0">INV-3068</h6>
                      </td>
                      <td>
                        <span
                          class="badge bg-primary-subtle text-primary d-inline-flex align-items-center gap-1"><i
                            class="ti ti-check fs-4"></i>paid</span>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-3.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Leonard Gordon</h6>
                            <span class="fw-normal">olivia@ui.com</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <div class="progress text-bg-light w-100 h-4">
                            <div class="progress-bar" role="progressbar" aria-label="Example 4px high"
                              style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <span class="fw-normal">45%</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h6 class="fw-semibold mb-0">INV-3069</h6>
                      </td>
                      <td>
                        <span
                          class="badge bg-secondary-subtle text-secondary d-inline-flex align-items-center gap-1"><i
                            class="ti ti-arrow-back-up fs-4"></i>refunded</span>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-4.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Evelyn Pope</h6>
                            <span class="fw-normal">teele@ui.com</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <div class="progress text-bg-light w-100 h-4">
                            <div class="progress-bar" role="progressbar" aria-label="Example 4px high"
                              style="width: 37%;" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <span class="fw-normal">37%</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h6 class="fw-semibold mb-0">INV-3070</h6>
                      </td>
                      <td>
                        <span
                          class="badge bg-danger-subtle text-danger d-inline-flex align-items-center gap-1"><i
                            class="ti ti-x fs-4"></i>cancelled</span>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-5.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Tommy Garza</h6>
                            <span class="fw-normal">olivia@ui.com</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <div class="progress text-bg-light w-100 h-4">
                            <div class="progress-bar" role="progressbar" aria-label="Example 4px high"
                              style="width: 87%;" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <span class="fw-normal">87%</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h6 class="fw-semibold mb-0">INV-3071</h6>
                      </td>
                      <td>
                        <span
                          class="badge bg-primary-subtle text-primary d-inline-flex align-items-center gap-1"><i
                            class="ti ti-check fs-4"></i>paid</span>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/profile/user-6.jpg') }}" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">James Smith</h6>
                            <span class="fw-normal">olivia@ui.com</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <div class="progress text-bg-light w-100 h-4">
                            <div class="progress-bar" role="progressbar" aria-label="Example 4px high"
                              style="width: 32%;" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <span class="fw-normal">32%</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive border rounded-4">
                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Authors</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Courses</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Users</h6>
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/blog/blog-img1.jpg') }}" class="rounded-2" width="42"
                            height="42" />
                          <div class="ms-3">
                            <h6 class="fw-semibold mb-1">Top Authors</h6>
                            <span class="fw-normal">Successful Fellas</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <span class="badge bg-danger-subtle text-danger">Angular</span>
                          <span class="badge bg-primary-subtle text-primary">PHP</span>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">4300 Users</p>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots fs-5"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/blog/blog-img2.jpg') }}" class="rounded-2" width="42"
                            height="42" />
                          <div class="ms-3">
                            <h6 class="fw-semibold mb-1">Popular Authors</h6>
                            <span class="fw-normal">Most Successful</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <span class="badge bg-primary-subtle text-primary">Bootstrap</span>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">1200 Users</p>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots fs-5"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/blog/blog-img3.jpg') }}" class="rounded-2" width="42"
                            height="42" />
                          <div class="ms-3">
                            <h6 class="fw-semibold mb-1">New Users</h6>
                            <span class="fw-normal">Awesome Users</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <span class="badge bg-success-subtle text-success">Reactjs</span>
                          <span class="badge bg-danger-subtle text-danger">Angular</span>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">2000 Users</p>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots fs-5"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/blog/blog-img4.jpg') }}" class="rounded-2" width="42"
                            height="42" />
                          <div class="ms-3">
                            <h6 class="fw-semibold mb-1">Active Customers</h6>
                            <span class="fw-normal">Best Customers</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <span class="badge bg-primary-subtle text-primary">Bootstrap</span>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">1500 Users</p>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots fs-5"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="{{ URL::asset('build/images/blog/blog-img5.jpg') }}" class="rounded-2" width="42"
                            height="42" />
                          <div class="ms-3">
                            <h6 class="fw-semibold mb-1">Bestseller Theme</h6>
                            <span class="fw-normal">Amazing Templates</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-2">
                          <span class="badge bg-danger-subtle text-danger">Angular</span>
                          <span class="badge bg-success-subtle text-success">Reactjs</span>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">9500 Users</p>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots fs-5"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-plus"></i>Add</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-edit"></i>Edit</a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"><i
                                  class="fs-4 ti ti-trash"></i>Delete</a>
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
      @@include("partials/customizer.html")
    </div>

    @@include("partials/header-components/dd-searchbar.html")
    @@include("partials/header-components/dd-shopping-cart.html")
  </div>
  <div class="dark-transparent sidebartoggler"></div>
  @@include("partials/scripts.html")
</body>

</html>