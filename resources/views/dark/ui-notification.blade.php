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
          @@include("partials/breadcrumb.html", {"title": "Notification", "subtitle": 'Home'})
          <div class="row">
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Default Alert -->
              <div class="card w-100">
                <div class="card-body">

                  <h4 class="card-title">Default Alert</h4>

                  <p class="mb-3 card-subtitle">
                    Alerts are available for any length of text, as well as an
                    optional dismiss button. For proper styling, use one of
                    the eight
                    <strong>required</strong> contextual classes (e.g.,
                    <mark><code>.alert-success</code></mark>). For background color use class
                    <mark><code>.bg-* </code></mark>,
                    <mark><code>.text-white </code></mark>
                  </p>

                  <div class="alert alert-primary text-primary role=" alert">
                    <strong>Primary - </strong> A simple primary alert
                  </div>
                  <div class="alert alert-secondary text-secondary" role="alert">
                    <strong>Secondary - </strong> A simple secondary alert
                  </div>
                  <div class="alert alert-success text-success" role="alert">
                    <strong>Success - </strong> A simple success alert
                  </div>
                  <div class="alert alert-danger text-danger" role="alert">
                    <strong>Error - </strong> A simple danger alert
                  </div>
                  <div class="alert alert-warning text-warning" role="alert">
                    <strong>Warning - </strong> A simple warning alert
                  </div>
                  <div class="alert alert-info text-info" role="alert">
                    <strong>Info - </strong> A simple info alert
                  </div>
                  <div class="alert bg-light-subtle" role="alert">
                    <strong>Light - </strong> A simple light alert
                  </div>
                  <div class="alert bg-dark-subtle text-white" role="alert">
                    <strong>Dark - </strong> A simple dark alert
                  </div>
                </div>
                <!-- end card-body-->
              </div>
              <!-- end card-->
              <!-- end Default Alert -->
            </div>
            <!-- end col-->

            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Dismissing Alerts -->
              <div class="card w-100">
                <div class="card-body">

                  <h4 class="card-title">Dismissing Alerts</h4>

                  <p class="mb-3 card-subtitle">
                    Add a dismiss button and the
                    <mark><code>.alert-dismissible</code></mark>
                    class, which adds extra padding to the right of the alert
                    and positions the
                    <mark><code>.close</code></mark> button.
                  </p>

                  <div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show"
                    role="alert">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                      aria-label="Close"></button>
                    <strong>Primary - </strong> A simple primary alert
                  </div>
                  <div class="alert alert-secondary alert-dismissible bg-secondary text-white border-0 fade show"
                    role="alert">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                      aria-label="Close"></button>
                    <strong>Secondary - </strong> A simple secondary alert
                  </div>
                  <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                    role="alert">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                      aria-label="Close"></button>
                    <strong>Success - </strong> A simple success alert
                  </div>
                  <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                    role="alert">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                      aria-label="Close"></button>
                    <strong>Error - </strong> A simple danger alert
                  </div>
                  <div class="alert alert-warning text-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close btn-close" data-bs-dismiss="alert"
                      aria-label="Close"></button>
                    <strong>Warning - </strong> A simple warning alert
                  </div>
                  <div class="alert alert-info text-info alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close btn-close" data-bs-dismiss="alert"
                      aria-label="Close"></button>
                    <strong>Info - </strong> A simple info alert
                  </div>
                  <div class="alert bg-light-subtle alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Light - </strong> A simple light alert
                  </div>
                  <div class="alert bg-dark-subtle text-white alert-dismissible fade show mb-0" role="alert">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                      aria-label="Close"></button>
                    <strong>Dark - </strong> A simple dark alert
                  </div>
                </div>
                <!-- end card-body-->
              </div>
              <!-- end card-->
              <!-- end Dismissing Alerts -->
            </div>
            <!-- end col-->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Outline Alerts -->
              <div class="card w-100">
                <div class="card-body">

                  <h4 class="card-title">Outline Alerts</h4>

                  <p class="mb-3 card-subtitle">
                    Add a dismiss button and the
                    <mark><code>.border-{ color }</code></mark>
                    class, which adds extra padding to the right of the alert
                    and positions the
                    <mark><code>.close</code></mark> button.
                  </p>

                  <div
                    class="alert customize-alert alert-dismissible text-primary border border-primary fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 flex-shrink-0 text-primary"></i>
                      A simple primary outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible border-secondary text-secondary fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-secondary"></i>
                      A simple secondary outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible border-success text-success fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-success"></i>
                      A simple success outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible border-danger text-danger fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-danger"></i>
                      A simple danger outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible border-warning text-warning fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                      A simple warning outline alert
                    </div>
                  </div>
                  <div class="alert customize-alert alert-dismissible border-info text-info fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-info"></i>
                      A simple info outline alert
                    </div>
                  </div>
                </div>
                <!-- end card-body-->
              </div>
              <!-- end card-->
              <!-- end Outline Alerts -->
            </div>
            <!-- end col-->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Light Alerts -->
              <div class="card w-100">
                <div class="card-body">

                  <h4 class="card-title">Light Alerts</h4>

                  <p class="mb-3 card-subtitle">
                    Add a dismiss button and the
                    <mark><code>.alert-light-{ color }</code></mark> class,
                    which adds extra padding to the right of the alert and
                    positions the <mark><code>.close</code></mark> button.
                  </p>

                  <div
                    class="alert customize-alert alert-dismissible text-primary text-primary alert-light-primary bg-primary-subtle fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 flex-shrink-0 text-primary"></i>
                      A simple primary outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible text-secondary alert-light-secondary bg-secondary-subtle fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-secondary"></i>
                      A simple secondary outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible text-success alert-light-success bg-success-subtle fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-success"></i>
                      A simple success outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible alert-light-danger bg-danger-subtle text-danger fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-danger"></i>
                      A simple danger outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible alert-light-warning bg-warning-subtle text-warning fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                      A simple warning outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible alert-light-info bg-info-subtle text-info fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-info"></i>
                      A simple info outline alert
                    </div>
                  </div>
                </div>
                <!-- end card-body-->
              </div>
              <!-- end card-->
              <!-- end Light Alerts -->
            </div>
            <!-- end col-->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Outline Rounded Alerts -->
              <div class="card w-100">
                <div class="card-body">

                  <h4 class="card-title">Outline Rounded Alerts</h4>

                  <p class="mb-3 card-subtitle">
                    Add a dismiss button and the
                    <mark><code>.rounded-pill</code></mark> class, which adds
                    extra padding to the right of the alert and positions the
                    <mark><code>.close</code></mark> button.
                  </p>

                  <div
                    class="alert customize-alert alert-dismissible rounded-pill text-primary border border-primary fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 flex-shrink-0 text-primary"></i>
                      A simple primary outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible rounded-pill border-secondary text-secondary fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-secondary"></i>
                      A simple secondary outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible rounded-pill border-success text-success fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-success"></i>
                      A simple success outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible rounded-pill border-danger text-danger fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-danger"></i>
                      A simple danger outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible rounded-pill border-warning text-warning fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                      A simple warning outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible rounded-pill border-info text-info fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-info"></i>
                      A simple info outline alert
                    </div>
                  </div>
                </div>
                <!-- end card-body-->
              </div>
              <!-- end card-->
              <!-- end Outline Rounded Alerts -->
            </div>
            <!-- end col-->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Light Rounded Alerts -->
              <div class="card w-100">
                <div class="card-body">

                  <h4 class="card-title">Light Rounded Alerts</h4>

                  <p class="mb-3 card-subtitle">
                    Add a dismiss button and the
                    <mark><code>.alert-light-{ color }</code></mark> class,
                    which adds extra padding to the right of the alert and
                    positions the <mark><code>.close</code></mark> button.
                  </p>

                  <div
                    class="alert customize-alert alert-dismissible text-primary rounded-pill alert-light-primary bg-primary-subtle fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 flex-shrink-0 text-primary"></i>
                      A simple primary outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible text-secondary rounded-pill alert-light-secondary bg-secondary-subtle fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-secondary"></i>
                      A simple secondary outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible text-success rounded-pill alert-light-success bg-success-subtle text-success fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-success"></i>
                      A simple success outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible rounded-pill alert-light-danger bg-danger-subtle text-danger fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-danger"></i>
                      A simple danger outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible rounded-pill alert-light-warning bg-warning-subtle text-warning fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-warning"></i>
                      A simple warning outline alert
                    </div>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible rounded-pill alert-light-info bg-info-subtle text-info fade show remove-close-icon"
                    role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-info-circle fs-5 me-2 text-info"></i>
                      A simple info outline alert
                    </div>
                  </div>
                </div>
                <!-- end card-body-->
              </div>
              <!-- end card-->
              <!-- end Light Rounded Alerts -->
            </div>
            <!-- end col-->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Notify Alerts -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="mb-3">
                    <h5 class="mb-0">Notify Alerts</h5>
                  </div>
                  <div
                    class="alert customize-alert alert-dismissible text-primary alert-light-primary bg-primary-subtle fade show remove-close-icon"
                    role="alert">
                    <span class="side-line bg-primary"></span>

                    <div class="d-flex align-items-center ">
                      <i class="ti ti-info-circle fs-5 me-2 flex-shrink-0 text-primary"></i>
                      <span class="text-truncate">A primary outline alert</span>
                      <div class="ms-auto d-flex justify-content-end">
                        <a href="javascript:void(0)" class="px-2 btn" data-bs-dismiss="alert" aria-label="Close">
                          <i class="ti ti-trash fs-5 text-primary"></i>
                        </a>
                        <a href="javascript:void(0)" class="px-2 btn" data-bs-dismiss="alert" aria-label="Close">
                          <i class="ti ti-settings fs-5 text-primary"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="alert customize-alert alert-dismissible text-secondary alert-light-secondary bg-secondary-subtle fade show remove-close-icon"
                    role="alert">
                    <span class="side-line bg-secondary"></span>

                    <div class="d-flex align-items-center ">
                      <i class="ti ti-info-circle fs-5 text-secondary me-2 flex-shrink-0"></i>
                      <span class="text-truncate">A secondary outline alert</span>
                      <div class="ms-auto d-flex justify-content-end">
                        <a href="javascript:void(0)" class="px-2 btn" data-bs-dismiss="alert" aria-label="Close">
                          <i class="ti ti-trash fs-5 text-secondary"></i>
                        </a>
                        <a href="javascript:void(0)" class="px-2 btn" data-bs-dismiss="alert" aria-label="Close">
                          <i class="ti ti-settings fs-5 text-secondary"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="alert customize-alert alert-dismissible text-success alert-light-success bg-success-subtle fade show remove-close-icon"
                    role="alert">
                    <span class="side-line bg-success"></span>

                    <div class="d-flex align-items-center ">
                      <i class="ti ti-info-circle fs-5 text-secondary me-2 flex-shrink-0"></i>
                      <span class="text-truncate">A success outline alert</span>
                      <div class="ms-auto d-flex justify-content-end">
                        <a href="javascript:void(0)" class="px-2 btn" data-bs-dismiss="alert" aria-label="Close">
                          <i class="ti ti-trash fs-5 text-success"></i>
                        </a>
                        <a href="javascript:void(0)" class="px-2 btn" data-bs-dismiss="alert" aria-label="Close">
                          <i class="ti ti-settings fs-5 text-success"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="alert customize-alert alert-dismissible text-danger alert-light-danger bg-danger-subtle fade show remove-close-icon"
                    role="alert">
                    <span class="side-line bg-danger"></span>
                    <div class="d-flex align-items-center ">
                      <i class="ti ti-info-circle fs-5 text-danger me-2 flex-shrink-0"></i>
                      <span class="text-truncate">A danger outline alert</span>
                      <div class="ms-auto d-flex justify-content-end">
                        <a href="javascript:void(0)" class="px-2 btn" data-bs-dismiss="alert" aria-label="Close">
                          <i class="ti ti-trash fs-5 text-danger"></i>
                        </a>
                        <a href="javascript:void(0)" class="px-2 btn" data-bs-dismiss="alert" aria-label="Close">
                          <i class="ti ti-settings fs-5 text-danger"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="alert customize-alert alert-dismissible text-warning alert-light-warning bg-warning-subtle fade show remove-close-icon"
                    role="alert">
                    <span class="side-line bg-warning"></span>
                    <div class="d-flex align-items-center ">
                      <i class="ti ti-info-circle fs-5 text-warning me-2 flex-shrink-0"></i>
                      <span class="text-truncate">A warning outline alert</span>
                      <div class="ms-auto d-flex justify-content-end">
                        <a href="javascript:void(0)" class="px-2 btn" data-bs-dismiss="alert" aria-label="Close">
                          <i class="ti ti-trash fs-5 text-warning"></i>
                        </a>
                        <a href="javascript:void(0)" class="px-2 btn" data-bs-dismiss="alert" aria-label="Close">
                          <i class="ti ti-settings fs-5 text-warning"></i>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div
                    class="alert customize-alert alert-dismissible text-info alert-light-info bg-info-subtle fade show remove-close-icon"
                    role="alert">
                    <span class="side-line bg-info"></span>
                    <div class="d-flex align-items-center ">
                      <i class="ti ti-info-circle fs-5 text-info me-2 flex-shrink-0"></i>
                      <span class="text-truncate">A info outline alert</span>
                      <div class="ms-auto d-flex justify-content-end">
                        <a href="javascript:void(0)" class="px-2 btn" data-bs-dismiss="alert" aria-label="Close">
                          <i class="ti ti-trash fs-5 text-info"></i>
                        </a>
                        <a href="javascript:void(0)" class="px-2 btn" data-bs-dismiss="alert" aria-label="Close">
                          <i class="ti ti-settings fs-5 text-info"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end card-body-->
              </div>
              <!-- end card-->
              <!-- end Notify Alerts -->
            </div>
            <!-- end col-->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Alerts Links -->
              <div class="card w-100">
                <div class="card-body">

                  <h4 class="card-title">Alerts Links</h4>

                  <p class="mb-3 card-subtitle">
                    Use the <mark><code>.alert-link</code></mark> utility
                    class to quickly provide matching colored links within any
                    alert.
                  </p>

                  <div class="alert alert-primary" role="alert">
                    A simple primary alert with
                    <a href="javascript:void(0)" class="alert-link">an example link</a>. Give
                    it a click if you like.
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    A simple secondary alert with
                    <a href="javascript:void(0)" class="alert-link">an example link</a>. Give
                    it a click if you like.
                  </div>
                  <div class="alert alert-success" role="alert">
                    A simple success alert with
                    <a href="javascript:void(0)" class="alert-link">an example link</a>. Give
                    it a click if you like.
                  </div>
                  <div class="alert alert-danger" role="alert">
                    A simple danger alert with
                    <a href="javascript:void(0)" class="alert-link">an example link</a>. Give
                    it a click if you like.
                  </div>
                  <div class="alert alert-warning" role="alert">
                    A simple warning alert with
                    <a href="javascript:void(0)" class="alert-link">an example link</a>. Give
                    it a click if you like.
                  </div>
                  <div class="alert alert-info" role="alert">
                    A simple info alert with
                    <a href="javascript:void(0)" class="alert-link">an example link</a>. Give
                    it a click if you like.
                  </div>
                </div>
                <!-- end card-body-->
              </div>
              <!-- end card-->
              <!-- end Alerts Links -->
            </div>
            <!-- end col-->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Additional content -->
              <div class="card w-100">
                <div class="card-body">

                  <h4 class="card-title">Additional content</h4>

                  <p class="mb-3 card-subtitle">
                    Alerts can also contain additional HTML elements like
                    headings, paragraphs and dividers.
                  </p>
                  <div class="alert alert-light-success bg-success-subtle bg-success-subtle text-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>
                      Aww yeah, you successfully read this important alert
                      message. This example text is going to run a bit longer
                      so that you can see how spacing within an alert works
                      with this kind of content.
                    </p>
                    <hr />
                    <p class="mb-0">
                      Whenever you need to, be sure to use margin utilities to
                      keep things nice and tidy.
                    </p>
                  </div>
                  <div class="alert alert-light-danger bg-danger-subtle bg-danger-subtle text-danger" role="alert">
                    <h4 class="alert-heading">Alert!</h4>
                    <p>
                      Aww yeah, you successfully read this important alert
                      message. This example text is going to run a bit longer
                      so that you can see how spacing within an alert works
                      with this kind of content.
                    </p>
                    <hr />
                    <p class="mb-0">
                      Whenever you need to, be sure to use margin utilities to
                      keep things nice and tidy.
                    </p>
                  </div>
                </div>
              </div>
              <!-- end card-body-->
              <!-- end Additional content -->
            </div>
            <!-- end card-->
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