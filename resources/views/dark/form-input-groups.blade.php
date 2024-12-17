<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  @@include("partials/head.html")
  <title>Modernize Bootstrap Admin</title>
  <link rel="stylesheet" href="{{ URL::asset('build/libs/prismjs/themes/prism-okaidia.min.css') }}">
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
          @@include("partials/breadcrumb.html", {"title": "Form Input Groups", "subtitle": 'Home'})
          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Addons Left -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Addons Left</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code1-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code1-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              -
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Addons Left - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;div class=&quot;input-group mb-3&quot;&gt;
          &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;@&lt;/span&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
      &lt;/div&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Add span with
                    <mark><code>.input-group-text</code></mark> class before
                    <mark><code>&lt;input&gt;</code></mark>
                  </p>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                      aria-describedby="basic-addon1" />
                  </div>
                </div>
              </div>
              <!-- end Input Addons Left -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Addons Both Side -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Addons Both Side</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code2-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code2-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Addons Both Side - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;div class=&quot;input-group mb-3&quot;&gt;
          &lt;div class=&quot;input-group-prepend&quot;&gt;
              &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
          &lt;/div&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
          &lt;div class=&quot;input-group-append&quot;&gt;
              &lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;
          &lt;/div&gt;
      &lt;/div&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Add span with
                    <mark><code>.input-group-text</code></mark> class before
                    &amp; after
                    <mark><code>&lt;input&gt;</code></mark>
                  </p>

                  <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" />
                    <span class="input-group-text">.00</span>
                  </div>
                </div>
              </div>
              <!-- end Input Addons Both Side -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Addons Right -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Addons Right</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code3-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code3-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Addons Right - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;div class=&quot;input-group mb-3&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
        &lt;span class=&quot;input-group-text&quot;&gt;@&lt;/span&gt;
      &lt;/div&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Add span with
                    <mark><code>.input-group-text</code></mark> class
                    after<mark><code>&lt;input&gt;</code></mark>
                  </p>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                      aria-describedby="basic-addon1" />
                    <span class="input-group-text">@</span>
                  </div>
                </div>
              </div>
              <!-- end Input Addons Right -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Addons Left Icon -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Addons Left Icon</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code4-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code4-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Addons Left Icon - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;div class=&quot;input-group&quot;&gt;
          &lt;span class=&quot;input-group-text&quot;&gt;&lt;i data-feather=&quot;file-text&quot; class=&quot;feather-sm fill-white&quot;&gt;&lt;/i&gt;&lt;/span&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
      &lt;/div&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <div class="input-group">
                    <span class="input-group-text"><i class="ti ti-file-text fs-4"></i></span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                      aria-describedby="basic-addon1" />
                  </div>
                </div>
              </div>
              <!-- end Input Addons Left Icon -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Addons Both Side Icon -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Addons Both Side Icon</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code5-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code5-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Addons Both Side Icon - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
        &lt;div class=&quot;input-group mb-3&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;&lt;i data-feather=&quot;file-text&quot; class=&quot;feather-sm fill-white&quot;&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;&lt;i data-feather=&quot;trash-2&quot; class=&quot;feather-sm fill-white&quot;&gt;&lt;/i&gt;&lt;/span&gt;
        &lt;/div&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text"><i class="ti ti-file-text fs-4"></i></span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" />
                    <span class="input-group-text"><i class="ti ti-trash fs-4"></i></span>
                  </div>
                </div>
              </div>
              <!-- end Input Addons Both Side Icon -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Addons Right Icon -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Addons Right Icon</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code6-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code6-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Addons Right Icon - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;div class=&quot;input-group mb-3&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
          &lt;span class=&quot;input-group-text&quot;&gt;&lt;i data-feather=&quot;file-text&quot; class=&quot;feather-sm fill-white&quot;&gt;&lt;/i&gt;&lt;/span&gt;
      &lt;/div&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                      aria-describedby="basic-addon1" />
                    <span class="input-group-text"><i class="ti ti-file-text fs-4"></i></span>
                  </div>
                </div>
              </div>
              <!-- end Input Addons Right Icon -->
            </div>
            <h4 class="card-title text-dark mt-5 mb-4">Addons With Checkbox</h4>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Addons With Right Checkbox -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Right Checkbox</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code7-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code7-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With Right Checkbox - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;div class=&quot;input-group-text&quot;&gt;
                  &lt;div class=&quot;form-check&quot;&gt;
                      &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;checkbox3&quot; value=&quot;check&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;checkbox3&quot;&gt;&lt;/label&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with checkbox&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark><code>input-group-prepend</code></mark> before input
                    field.
                  </p>
                  <form>
                    <div class="input-group">
                      <div class="input-group-text">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkbox3" value="check" />
                          <label class="form-check-label" for="checkbox3"></label>
                        </div>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with checkbox" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With Right Checkbox -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Addons With Checkbox &amp; Button -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">
                      Checkbox &amp; Button
                    </h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code8-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code8-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With Checkbox &amp; Button - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;div class=&quot;input-group-text&quot;&gt;
                  &lt;div class=&quot;form-check&quot;&gt;
                      &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;checkbox2&quot; value=&quot;check&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;checkbox2&quot;&gt;&lt;/label&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with checkbox&quot;&gt;
              &lt;button class=&quot;btn bg-info-subtle text-info &quot; type=&quot;button&quot;&gt;Go!&lt;/button&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark><code>input-group-prepend &amp; append</code></mark>
                    before and afetr input field.
                  </p>
                  <form>
                    <div class="input-group">
                      <div class="input-group-text">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkbox2" value="check" />
                          <label class="form-check-label" for="checkbox2"></label>
                        </div>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with checkbox" />
                      <button class="btn bg-primary-subtle text-primary " type="button">
                        Go!
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With Checkbox &amp; Button -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Addons With Left Checkbox -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Left Checkbox</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code9-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code9-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With Left Checkbox - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with checkbox&quot;&gt;
              &lt;div class=&quot;input-group-text&quot;&gt;
                  &lt;div class=&quot;form-check&quot;&gt;
                      &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;checkbox4&quot; value=&quot;check&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;checkbox4&quot;&gt;&lt;/label&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark><code>input-group-append</code></mark> after input
                    field.
                  </p>
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="Text input with checkbox" />
                      <div class="input-group-text">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkbox4" value="check" />
                          <label class="form-check-label" for="checkbox4"></label>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With Left Checkbox -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Addons With Radio</h4>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Addons With Left Radio -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Left Radio</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code10-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code10-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With Left Radio - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;div class=&quot;input-group-text&quot;&gt;
                  &lt;div class=&quot;form-check&quot;&gt;
                      &lt;input type=&quot;radio&quot; id=&quot;customRadio5&quot; name=&quot;customRadio&quot; class=&quot;form-check-input&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;customRadio5&quot;&gt;&lt;/label&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with radio button&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark><code>input-group-prepend</code></mark> before input
                    field.
                  </p>
                  <form>
                    <div class="input-group">
                      <div class="input-group-text">
                        <div class="form-check">
                          <input type="radio" id="customRadio5" name="customRadio" class="form-check-input" />
                          <label class="form-check-label" for="customRadio5"></label>
                        </div>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with radio button" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With Left Radio -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Addons With Radio &amp; Button -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">
                      Radio &amp; Button
                    </h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code11-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code11-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With Radio &amp; Button - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;button class=&quot;btn bg-info-subtle text-info &quot; type=&quot;button&quot;&gt;Go!&lt;/button&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with radio button&quot;&gt;
              &lt;div class=&quot;input-group-text&quot;&gt;
                  &lt;div class=&quot;form-check&quot;&gt;
                      &lt;input type=&quot;radio&quot; id=&quot;customRadio6&quot; name=&quot;customRadio&quot; class=&quot;form-check-input&quot;&gt;
                      &lt;label class=&quot;form-check-label&quot; for=&quot;customRadio6&quot;&gt;&lt;/label&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark><code>input-group-prepend &amp; append</code></mark>
                    before and afetr input field.
                  </p>
                  <form>
                    <div class="input-group">
                      <button class="btn bg-primary-subtle text-primary " type="button">
                        Go!
                      </button>
                      <input type="text" class="form-control" aria-label="Text input with radio button" />
                      <div class="input-group-text">
                        <div class="form-check">
                          <input type="radio" id="customRadio6" name="customRadio" class="form-check-input" />
                          <label class="form-check-label" for="customRadio6"></label>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With Radio &amp; Button -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Addons With Right Radio -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Right Radio</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code12-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code12-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With Right Radio - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with radio button&quot;&gt;
              &lt;div class=&quot;input-group-append&quot;&gt;
                  &lt;div class=&quot;input-group-text&quot;&gt;
                      &lt;div class=&quot;form-check&quot;&gt;
                          &lt;input type=&quot;radio&quot; id=&quot;customRadio7&quot; name=&quot;customRadio&quot; class=&quot;form-check-input&quot;&gt;
                          &lt;label class=&quot;form-check-label&quot; for=&quot;customRadio7&quot;&gt;&lt;/label&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark><code>input-group-append</code></mark> after input
                    field.
                  </p>
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="Text input with radio button" />

                      <div class="input-group-text">
                        <div class="form-check">
                          <input type="radio" id="customRadio7" name="customRadio" class="form-check-input" />
                          <label class="form-check-label" for="customRadio7"></label>
                        </div>
                      </div>

                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With Right Radio -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Addons With Buttons</h4>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Addons With Color Button Left -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Color Button Left</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code13-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code13-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With Color Button Left - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;input-group mb-3&quot;&gt;
                  &lt;button class=&quot;btn bg-info-subtle text-info &quot; type=&quot;button&quot;&gt;Go!&lt;/button&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark><code>button</code></mark> in the prepend
                    div.
                  </p>
                  <form class="mt-3">
                    <div class="input-group mb-3">
                      <button class="btn bg-primary-subtle text-primary" type="button">
                        Go!
                      </button>
                      <input type="text" class="form-control" placeholder="" aria-label=""
                        aria-describedby="basic-addon1" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With Color Button Left -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Addons With Color Buttons Both -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">
                      Color Buttons Both
                    </h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code14-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code14-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With Color Buttons Both - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;div class=&quot;input-group mb-3&quot;&gt;
            &lt;button class=&quot;btn bg-danger-subtle text-danger  d-flex align-items-center&quot; type=&quot;button&quot;&gt;&lt;i data-feather=&quot;heart&quot; class=&quot;fill-white feather-sm me-1&quot;&gt;&lt;/i&gt; Love&lt;/button&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
            &lt;button class=&quot;btn bg-info-subtle text-info  d-flex align-items-center&quot; type=&quot;button&quot;&gt;&lt;i data-feather=&quot;slash&quot; class=&quot;fill-white feather-sm me-1&quot;&gt;&lt;/i&gt;Hate&lt;/button&gt;
        &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark><code>button</code></mark> in the prepend
                    and append div.
                  </p>
                  <form class="mt-3">
                    <div class="input-group mb-3">
                      <button class="btn bg-danger-subtle text-danger d-flex align-items-center" type="button">
                        <i class="ti ti-heart fs-5 me-1"></i>
                        Love
                      </button>
                      <input type="text" class="form-control" placeholder="" aria-label=""
                        aria-describedby="basic-addon1" />
                      <button class="btn bg-info-subtle text-info d-flex align-items-center" type="button">
                        <i class="ti ti-circle-half fs-4 me-1"></i>Hate
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With Color Buttons Both -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Addons With Color Button Right -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">
                      Color Button Right
                    </h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code15-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code15-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With Color Button Right - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;input-group mb-3&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
              &lt;button class=&quot;btn bg-info-subtle text-info &quot; type=&quot;button&quot;&gt;Go!&lt;/button&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark><code>button</code></mark> in the append
                    div.
                  </p>
                  <form class="mt-3">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="" aria-label=""
                        aria-describedby="basic-addon1" />
                      <button class="btn bg-primary-subtle text-primary " type="button">
                        Go!
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With Color Button Right -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Addons With icon Button Left -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Icon Button Left</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code16-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code16-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With icon Button Left - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;div class=&quot;input-group mb-3&quot;&gt;
            &lt;div class=&quot;input-group-prepend&quot;&gt;
                &lt;button class=&quot;btn bg-info-subtle text-info&quot; type=&quot;button&quot;&gt;
                    &lt;i data-feather=&quot;settings&quot; class=&quot;fill-white feather-sm&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
        &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <div class="input-group mb-3">
                      <button class="btn bg-primary-subtle text-primary" type="button">
                        <i class="ti ti-settings fs-4"></i>
                      </button>
                      <input type="text" class="form-control" placeholder="" aria-label=""
                        aria-describedby="basic-addon1" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With icon Button Left -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Addons With icon Buttons Both -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Icon Buttons Both</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code17-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code17-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With icon Buttons Both - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;input-group mb-3&quot;&gt;
              &lt;div class=&quot;input-group-prepend&quot;&gt;
                  &lt;button class=&quot;btn bg-info-subtle text-info&quot; type=&quot;button&quot;&gt;
                      &lt;i data-feather=&quot;edit-2&quot; class=&quot;fill-white feather-sm&quot;&gt;&lt;/i&gt;
                  &lt;/button&gt;
              &lt;/div&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
              &lt;button class=&quot;btn bg-danger-subtle text-danger&quot; type=&quot;button&quot;&gt;
                  &lt;i data-feather=&quot;trash-2&quot; class=&quot;fill-white feather-sm&quot;&gt;&lt;/i&gt;
              &lt;/button&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <div class="input-group mb-3">
                      <button class="btn bg-primary-subtle text-primary" type="button">
                        <i class="ti ti-pencil fs-4"></i>
                      </button>
                      <input type="text" class="form-control" placeholder="" aria-label=""
                        aria-describedby="basic-addon1" />
                      <button class="btn bg-danger-subtle text-danger" type="button">
                        <i class="ti ti-trash fs-5"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With icon Buttons Both -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Addons With icon Button Right -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Icon Button Right</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code18-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code18-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With icon Button Right - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;input-group mb-3&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
              &lt;button class=&quot;btn bg-danger-subtle text-danger&quot; type=&quot;button&quot;&gt;
                  &lt;i data-feather=&quot;heart&quot; class=&quot;fill-white feather-sm&quot;&gt;&lt;/i&gt;
              &lt;/button&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="" aria-label=""
                        aria-describedby="basic-addon1" />
                      <button class="btn bg-danger-subtle text-danger" type="button">
                        <i class="ti ti-heart fs-5"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With icon Button Right -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Multiple Addons</h4>
            <div class="col-sm-12 col-md-6">
              <!-- start Addons With Left Side -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Addons With Left Side</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code19-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code19-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With Left Side - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
              &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark><code>input-group-text</code></mark> class in the
                    input-group-prepend class.
                  </p>
                  <form class="mt-3">
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <span class="input-group-text">0.00</span>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With Left Side -->
            </div>
            <div class="col-sm-12 col-md-6">
              <!-- start Addons With Right Side -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="mb-0">Addons With Right Side</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code20-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code20-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With Right Side - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
              &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
              &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark><code>input-group-text</code></mark> class in the
                    input-group-append class.
                  </p>
                  <form class="mt-3">
                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" />
                      <span class="input-group-text">$</span>
                      <span class="input-group-text">0.00</span>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With Right Side -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Multiple Inputs with Addons</h4>
            <div class="col-sm-12 col-md-6">
              <!-- start Input With Right Side -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input With Right Side</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code21-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code21-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input With Right Side - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;First and last name&lt;/span&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
        &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark><code>form-control</code></mark> two
                    times.
                  </p>
                  <form class="mt-3">
                    <div class="input-group">
                      <span class="input-group-text">First and last name</span>
                      <input type="text" class="form-control" />
                      <input type="text" class="form-control" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input With Right Side -->
            </div>
            <div class="col-sm-12 col-md-6">
              <!-- start Input With Left Side -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input With Left Side</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code22-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code22-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input With Left Side - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;First and last name&lt;/span&gt;
        &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark><code>form-control</code></mark> two
                    times.
                  </p>
                  <form class="mt-3">
                    <div class="input-group">
                      <input type="text" class="form-control" />
                      <input type="text" class="form-control" />
                      <span class="input-group-text">First and last name</span>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input With Left Side -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Button Addons</h4>
            <div class="col-sm-12 col-md-6">
              <!-- start Button With Left Side -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Button With Left Side</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code23-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code23-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Button With Left Side - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
                                                                                      &lt;form class=&quot;mt-3&quot;&gt;
                                                                                          &lt;div class=&quot;input-group&quot;&gt;
                                                                                              &lt;button class=&quot;btn bg-secondary-subtle text-secondary &quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
                                                                                              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Left Side&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
                                                                                          &lt;/div&gt;
                                                                                      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark><code>button</code></mark> in the prepend
                    class.
                  </p>
                  <form class="mt-3">
                    <div class="input-group">
                      <button class="btn bg-primary-subtle text-primary " type="button">
                        Button
                      </button>
                      <input type="text" class="form-control" placeholder="Left Side" aria-label=""
                        aria-describedby="basic-addon1" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Button With Left Side -->
            </div>
            <div class="col-sm-12 col-md-6">
              <!-- start Button With Right Side -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Button With Right Side</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code24-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code24-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Button With Right Side - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Right Side&quot; aria-label=&quot;Recipient's username&quot; aria-describedby=&quot;basic-addon2&quot;&gt;
              &lt;button class=&quot;btn bg-secondary-subtle text-secondary &quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark><code>button</code></mark> in the append
                    class.
                  </p>
                  <form class="mt-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Right Side" aria-label="Recipient's username"
                        aria-describedby="basic-addon2" />
                      <button class="btn bg-primary-subtle text-primary  rounded-end" type="button">
                        Button
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Button With Right Side -->
            </div>
            <div class="col-sm-12 col-md-6">
              <!-- start Multiple Buttons With Left Side -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">
                      Multiple Buttons With Left Side
                    </h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code25-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code25-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Multiple Buttons With Left Side - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;button class=&quot;btn bg-secondary-subtle text-secondary &quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
            &lt;button class=&quot;btn bg-secondary-subtle text-secondary &quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Left Side&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
        &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <div class="input-group">
                      <button class="btn bg-primary-subtle text-primary " type="button">
                        Button
                      </button>
                      <button class="btn bg-primary-subtle text-primary " type="button">
                        Button
                      </button>
                      <input type="text" class="form-control" placeholder="Left Side" aria-label=""
                        aria-describedby="basic-addon1" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Multiple Buttons With Left Side -->
            </div>
            <div class="col-sm-12 col-md-6">
              <!-- start Multiple Buttons With Left Side -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">
                      Multiple Buttons With Left Side
                    </h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code26-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code26-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Multiple Buttons With Left Side - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Right Side&quot; aria-label=&quot;Recipient's username&quot; aria-describedby=&quot;basic-addon2&quot;&gt;
            &lt;button class=&quot;btn bg-secondary-subtle text-secondary &quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
            &lt;button class=&quot;btn bg-secondary-subtle text-secondary &quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
        &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Right Side" aria-label="Recipient's username"
                        aria-describedby="basic-addon2" />
                      <button class="btn bg-primary-subtle text-primary " type="button">
                        Button
                      </button>
                      <button class="btn bg-primary-subtle text-primary  rounded-end" type="button">
                        Button
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Multiple Buttons With Left Side -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Addons With Dropdown Buttons</h4>
            <div class="col-sm-12 col-md-6">
              <!-- start Addons With Left Side Dropdown -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">
                      Addons With Left Side Dropdown
                    </h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code27-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code27-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With Left Side Dropdown - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;button class=&quot;btn bg-info-subtle text-info  dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
            &lt;div class=&quot;dropdown-menu&quot;&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                &lt;div role=&quot;separator&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
            &lt;/div&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
        &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark><code>dropdown</code></mark> in the
                    prepend class div.
                  </p>
                  <form class="mt-3">
                    <div class="input-group">
                      <button class="btn bg-primary-subtle text-primary  dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with dropdown button" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With Left Side Dropdown -->
            </div>
            <div class="col-sm-12 col-md-6">
              <!-- start Addons With Right Side Dropdown -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">
                      Addons With Right Side Dropdown
                    </h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code28-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code28-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With Right Side Dropdown - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
            &lt;button class=&quot;btn bg-info-subtle text-info  dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
            &lt;div class=&quot;dropdown-menu&quot;&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                &lt;div role=&quot;separator&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark><code>dropdown</code></mark> in the
                    append class div.
                  </p>
                  <form class="mt-3">
                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="Text input with dropdown button" />
                      <button class="btn bg-primary-subtle text-primary  dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With Right Side Dropdown -->
            </div>
            <div class="col-sm-12 col-md-6">
              <!-- start Addons With Left Side Dropdown Segments -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">
                      Addons With Left Side Dropdown Segments
                    </h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code29-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code29-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With Left Side Dropdown Segments - View
                                Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn bg-secondary-subtle text-secondary &quot;&gt;Action&lt;/button&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn bg-secondary-subtle text-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
            &lt;/button&gt;
            &lt;div class=&quot;dropdown-menu&quot;&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                &lt;div role=&quot;separator&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
            &lt;/div&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with segmented dropdown button&quot;&gt;
        &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <div class="input-group">
                      <button type="button" class="btn bg-primary-subtle text-primary ">
                        Action
                      </button>
                      <button type="button"
                        class="btn bg-primary-subtle text-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With Left Side Dropdown Segments -->
            </div>
            <div class="col-sm-12 col-md-6">
              <!-- start Addons With Right Side Dropdown Segments -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">
                      Addons With Right Side Dropdown Segments
                    </h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code30-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code30-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Addons With Right Side Dropdown Segments -
                                View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with segmented dropdown button&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn bg-secondary-subtle text-secondary &quot;&gt;Action&lt;/button&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn bg-secondary-subtle text-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
            &lt;/button&gt;
            &lt;div class=&quot;dropdown-menu&quot;&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
                &lt;div role=&quot;separator&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" />
                      <button type="button" class="btn bg-primary-subtle text-primary ">
                        Action
                      </button>
                      <button type="button"
                        class="btn bg-primary-subtle text-primary dropdown-toggle rounded-end dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Addons With Right Side Dropdown Segments -->
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
  <script src="{{ URL::asset('build/libs/prismjs/prism.js') }}"></script>
</body>

</html>