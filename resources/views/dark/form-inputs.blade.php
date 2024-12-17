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
          @@include("partials/breadcrumb.html", {"title": "Form Inputs", "subtitle": 'Home'})
          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Default Input -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <h4 class="card-title mb-0">Default Input</h4>
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
                              <h5 class="modal-title" id="exampleModalLabel">
                                Default Input - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                          <code>
      &lt;form&gt;
          &lt;div class=&quot;form-group&quot;&gt;
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
                    To use add <mark><code>form-control</code></mark> class to
                    the input
                  </p>
                  <form>
                    <div class="form-group">
                      <input type="text́" class="form-control" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Default Input -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input With Helper Text -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input With Helper Text</h4>
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
                                Input With Helper Text - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                          <code>
      &lt;form&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nametext&quot; aria-describedby=&quot;name&quot; placeholder=&quot;Name&quot;&gt;
              &lt;small id=&quot;name&quot; class=&quot;form-text text-muted&quot;&gt;Helper Text&lt;/small&gt;
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
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" id="nametext" aria-describedby="name"
                        placeholder="Name" />
                      <small id="name" class="form-text text-muted">Helper Text</small>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input With Helper Text -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Password -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0 fs-5">Password</h4>
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
                                Password - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                        <code>
      &lt;form&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;passtext&quot; placeholder=&quot;Password&quot;&gt;
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
                  <form>
                    <div class="form-group">
                      <input type="password" class="form-control" id="passtext" placeholder="Password" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Password -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Disabled Input -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Disabled Input</h4>
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
                                Disabled Input - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nametext1&quot; placeholder=&quot;Name&quot; disabled&gt;
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
                    Add attribute <code>disabled</code> to disable input
                    field.
                  </p>
                  <h6 class="card-subtitle mb-3"></h6>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="text" class="form-control" id="nametext1" placeholder="Name" disabled />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Disabled Input -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Predefined Input Value -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Predefined Input Value</h4>
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
                                Predefined Input Value - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-2&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;prenametext&quot; value=&quot;Name&quot;&gt;
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
                    Add attribute <mark><code>value="VALUE"</code></mark> to
                    set predefined value.
                  </p>
                  <form class="mt-2">
                    <div class="form-group">
                      <input type="text" class="form-control" id="prenametext" value="Name" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Predefined Input Value -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Readonly Input Field -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Readonly Input Field</h4>
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
                                Readonly Input Field - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;readonly&quot; placeholder=&quot;Readonly Text&quot; readonly&gt;
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
                    Add attribute <mark><code>readonly</code></mark> to set
                    field readonly.
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="text" class="form-control" id="readonly" placeholder="Readonly Text" readonly />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Readonly Input Field -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input With Placeholder -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input With Placeholder</h4>
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
                                Input With Placeholder - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;placeholder&quot; placeholder=&quot;Placeholder Text&quot;&gt;
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
                    Add attribute
                    <mark><code>placeholder="..."</code></mark> to input area.
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="text" class="form-control" id="placeholder" placeholder="Placeholder Text" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input With Placeholder -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Maximum Value -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Maximum Value</h4>
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
                                Maximum Value - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; maxlength=&quot;6&quot; id=&quot;maxval&quot; aria-describedby=&quot;maxval&quot; placeholder=&quot;Name&quot;&gt;
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
                    Add attribute <mark><code>maxlength="6"</code></mark> to
                    input area.
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="text" class="form-control" maxlength="6" id="maxval" aria-describedby="maxval"
                        placeholder="Name" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Maximum Value -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Minimum Value -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Minimum Value</h4>
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
                                Minimum Value - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
        &lt;div class=&quot;form-group&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; minlength=&quot;5&quot; id=&quot;minval&quot; aria-describedby=&quot;minval&quot; placeholder=&quot;Name&quot;&gt;
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
                    Add attribute <mark><code>minlength="5"</code></mark> to
                    input area.
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="text" class="form-control" minlength="5" id="minval" aria-describedby="minval"
                        placeholder="Name" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Minimum Value -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Input Type Options</h4>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Text -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Text</h4>
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
                                Input Type Text - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; value=&quot;Name&quot;&gt;
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
                    Using <mark><code>input type="text"</code></mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="text" class="form-control" value="Name" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Text -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Password -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Password</h4>
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
                                Input Type Password - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;password&quot; class=&quot;form-control&quot; value=&quot;Name&quot;&gt;
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
                    Using <mark><code>input type="password"</code></mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="password" class="form-control" value="Name" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Password -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Phone Number -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Phone Number</h4>
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
                                Input Phone Number - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;tel&quot; class=&quot;form-control&quot; value=&quot;1-(444)-444-4445&quot;&gt;
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
                    Using <mark><code>input type="tel"</code></mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="tel" class="form-control" value="1-(444)-444-4445" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Phone Number -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Email -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Email</h4>
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
                                Input Type Email - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;email&quot; class=&quot;form-control&quot; value=&quot;abc@example.com&quot;&gt;
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
                    Using <mark><code>input type="email"</code></mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="email" class="form-control" value="abc@example.com" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Email -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type URL -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type URL</h4>
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
                                Input Type URL - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;url&quot; class=&quot;form-control&quot; value=&quot;http://google.com&quot;&gt;
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
                    Using <mark><code>input type="url"</code></mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="url" class="form-control" value="http://google.com" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type URL -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Search -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Search</h4>
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
                                Input Type Search - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;search&quot; class=&quot;form-control&quot; value=&quot;how to...&quot;&gt;
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
                    Using <mark><code>input type="search"</code></mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="search" class="form-control" value="how to..." />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Search -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Numbers -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Numbers</h4>
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
                                Input Type Numbers - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;number&quot; class=&quot;form-control&quot; value=&quot;6029&quot;&gt;
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
                    Using <mark><code>input type="number"</code></mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="number" class="form-control" value="6029" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Numbers -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Date Time -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Date Time</h4>
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
                                Input Type Date Time - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;datetime-local&quot; class=&quot;form-control&quot; value=&quot;2008-05-13T22:33:00&quot;&gt;
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
                    Using
                    <mark><code>input type="datetime-local"</code></mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="datetime-local" class="form-control" value="2008-05-13T22:33:00" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Date Time -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Date -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Date</h4>
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
                                Input Type Date - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;date&quot; class=&quot;form-control&quot; value=&quot;2018-05-13&quot;&gt;
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
                    Using <mark><code>input type="date"</code></mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="date" class="form-control" value="2018-05-13" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Date -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Time -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Time</h4>
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
                                Input Type Time - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;time&quot; class=&quot;form-control&quot; value=&quot;22:33:00&quot;&gt;
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
                    Using <mark><code>input type="time"</code></mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="time" class="form-control" value="22:33:00" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Time -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Week -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Week</h4>
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
                                Input Type Week - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;week&quot; class=&quot;form-control&quot; value=&quot;2011-W33&quot;&gt;
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
                    Using <mark><code>input type="week"</code></mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="week" class="form-control" value="2011-W33" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Week -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Month -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Month</h4>
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
                                Input Type Month - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;month&quot; class=&quot;form-control&quot; value=&quot;1999-08&quot;&gt;
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
                    Using <mark><code>input type="month"</code></mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="month" class="form-control" value="1999-08" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Month -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Input Type Color -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Color</h4>
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
                                Input Type Color - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;color&quot; class=&quot;form-control&quot; value=&quot;#563d7c&quot;&gt;
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
                    Using <mark><code>input type="color"</code></mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="color" class="form-control" value="#563d7c" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Color -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Bootstrap Colorpicker -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Bootstrap Colorpicker</h4>
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
                                Bootstrap Colorpicker - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;color&quot; class=&quot;form-control form-control-color&quot; id=&quot;exampleColorInput&quot; value=&quot;#563d7c&quot; title=&quot;Choose your color&quot;&gt;
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
                    Use <mark><code>form-control-color</code></mark> classs
                    for bootstrap colorpicker
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c"
                        title="Choose your color" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Bootstrap Colorpicker -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Input Type Range -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Range</h4>
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
                                Input Type Range - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;range&quot; class=&quot;form-range&quot; id=&quot;customRange1&quot;&gt;
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
                    Using <mark><code>input type="range"</code></mark>
                  </p>
                  <form class="mt-3">
                    <div class="form-group">
                      <input type="range" class="form-range" id="customRange1" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Range -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">General Textarea</h4>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Textarea -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Textarea</h4>
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
                                Textarea - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;textarea class=&quot;form-control&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
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
                    <div class="form-group">
                      <textarea class="form-control" rows="3"></textarea>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Textarea -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Textarea With Placeholder -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Textarea With Placeholder</h4>
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
                                Textarea With Placeholder - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;textarea class=&quot;form-control&quot; rows=&quot;3&quot; placeholder=&quot;Text Here...&quot;&gt;&lt;/textarea&gt;
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
                    <div class="form-group">
                      <textarea class="form-control" rows="3" placeholder="Text Here..."></textarea>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Textarea With Placeholder -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Textarea With Helper Text -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Textarea With Helper Text</h4>
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
                                Textarea With Helper Text - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;textarea class=&quot;form-control&quot; rows=&quot;3&quot; placeholder=&quot;Text Here...&quot;&gt;&lt;/textarea&gt;
              &lt;small id=&quot;textHelp&quot; class=&quot;form-text text-muted&quot;&gt;Helper Text&lt;/small&gt;
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
                  <form>
                    <div class="form-group">
                      <textarea class="form-control" rows="3" placeholder="Text Here..."></textarea>
                      <small id="textHelp" class="form-text text-muted">Helper Text</small>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Textarea With Helper Text -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Inline Checkboxes &amp; Radios</h4>
            <div class="col-md-6">
              <!-- start Inline Default Checkbox -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Default Checkbox</h4>
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
                                Inline Default Checkbox - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;div class=&quot;form-check form-check-inline&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineCheckbox1&quot; value=&quot;option1&quot;&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox1&quot;&gt;1&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check form-check-inline&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineCheckbox2&quot; value=&quot;option2&quot;&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox2&quot;&gt;2&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check form-check-inline&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineCheckbox3&quot; value=&quot;option3&quot; disabled&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox3&quot;&gt;3 (disabled)&lt;/label&gt;
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
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled />
                    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                  </div>
                </div>
              </div>
              <!-- end Inline Default Checkbox -->
            </div>
            <div class="col-md-6">
              <!-- start  Inline Default Radio Button -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Default Radio Button</h4>
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
                                Inline Default Radio Button - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;div class=&quot;form-check form-check-inline&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio1&quot; value=&quot;option1&quot;&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio1&quot;&gt;1&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check form-check-inline&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio2&quot; value=&quot;option2&quot;&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio2&quot;&gt;2&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check form-check-inline&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio3&quot; value=&quot;option3&quot; disabled&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio3&quot;&gt;3 (disabled)&lt;/label&gt;
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
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                      value="option1" />
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                      value="option2" />
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                      value="option3" disabled />
                    <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                  </div>
                </div>
              </div>
              <!-- end  Inline Default Radio Button -->
            </div>
            <div class="col-md-6">
              <!-- start  Inline Custom Checkbox -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Custom Checkbox</h4>
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
                                Inline Custom Checkbox - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;div class=&quot;form-check-inline&quot;&gt;
          &lt;div class=&quot;form-check&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck1&quot;&gt;
              &lt;label class=&quot;custom-&quot; for=&quot;customCheck1&quot;&gt;1&lt;/label&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check-inline&quot;&gt;
          &lt;div class=&quot;form-check&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck2&quot;&gt;
              &lt;label class=&quot;custom-&quot; for=&quot;customCheck2&quot;&gt;2&lt;/label&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check-inline&quot;&gt;
          &lt;div class=&quot;form-check&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck3&quot; disabled=&quot;&quot;&gt;
              &lt;label class=&quot;custom-&quot; for=&quot;customCheck3&quot;&gt;3&lt;/label&gt;
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
                  <div class="form-check-inline">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="customCheck1" />
                      <label class="custom-" for="customCheck1">1</label>
                    </div>
                  </div>
                  <div class="form-check-inline">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="customCheck2" />
                      <label class="custom-" for="customCheck2">2</label>
                    </div>
                  </div>
                  <div class="form-check-inline">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="customCheck3" disabled />
                      <label class="custom-" for="customCheck3">3</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end  Inline Custom Checkbox -->
            </div>
            <div class="col-md-6">
              <!-- start  Inline Custom Radios -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Custom Radios</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code31-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code31-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Inline Custom Radios - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;div class=&quot;form-check-inline&quot;&gt;
          &lt;div class=&quot;form-check&quot;&gt;
              &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;customControlValidation2&quot; name=&quot;radio-stacked&quot;&gt;
              &lt;label class=&quot;custom-&quot; for=&quot;customControlValidation2&quot;&gt;1&lt;/label&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check-inline&quot;&gt;
          &lt;div class=&quot;form-check&quot;&gt;
              &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;customControlValidation3&quot; name=&quot;radio-stacked&quot;&gt;
              &lt;label class=&quot;custom-&quot; for=&quot;customControlValidation3&quot;&gt;2&lt;/label&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check-inline&quot;&gt;
          &lt;div class=&quot;form-check&quot;&gt;
              &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;customControlValidation4&quot; name=&quot;radio-stacked&quot; disabled&gt;
              &lt;label class=&quot;custom-&quot; for=&quot;customControlValidation4&quot;&gt;3&lt;/label&gt;
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
                  <div class="form-check-inline">
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="customControlValidation2"
                        name="radio-stacked" />
                      <label class="custom-" for="customControlValidation2">1</label>
                    </div>
                  </div>
                  <div class="form-check-inline">
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="customControlValidation3"
                        name="radio-stacked" />
                      <label class="custom-" for="customControlValidation3">2</label>
                    </div>
                  </div>
                  <div class="form-check-inline">
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="customControlValidation4"
                        name="radio-stacked" disabled />
                      <label class="custom-" for="customControlValidation4">3</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end  Inline Custom Radios -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">General Select</h4>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start  Select -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Select</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code32-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code32-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Select - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group mb-4&quot;&gt;
              &lt;label for=&quot;exampleFormControlSelect1&quot;&gt;Select No&lt;/label&gt;
              &lt;select class=&quot;form-control&quot; id=&quot;exampleFormControlSelect1&quot;&gt;
                  &lt;option&gt;1&lt;/option&gt;
                  &lt;option&gt;2&lt;/option&gt;
                  &lt;option&gt;3&lt;/option&gt;
                  &lt;option&gt;4&lt;/option&gt;
                  &lt;option&gt;5&lt;/option&gt;
              &lt;/select&gt;
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
                  <form class="mt-4">
                    <div class="form-group mb-4">
                      <label for="exampleFormControlSelect1">Select No</label>
                      <select class="form-select" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end  Select -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start  Form Select -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Form Select</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code33-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code33-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Form Select - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;div class=&quot;form-group mb-4&quot;&gt;
              &lt;label class=&quot;mr-sm-2&quot; for=&quot;inlineFormCustomSelect&quot;&gt;Select&lt;/label&gt;
              &lt;select class=&quot;form-select mr-sm-2&quot; id=&quot;inlineFormCustomSelect&quot;&gt;
                  &lt;option selected&gt;Choose...&lt;/option&gt;
                  &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                  &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                  &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
              &lt;/select&gt;
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
                    To use add <mark><code>.form-select</code></mark> class
                  </p>
                  <form>
                    <div class="form-group mb-4">
                      <label class="mr-sm-2" for="inlineFormCustomSelect">Select</label>
                      <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end  Form Select -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start  Multiple Select -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Multiple Select</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code34-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code34-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Multiple Select - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;select multiple class=&quot;form-control&quot; id=&quot;exampleFormControlSelect2&quot;&gt;
              &lt;option&gt;1&lt;/option&gt;
              &lt;option&gt;2&lt;/option&gt;
              &lt;option&gt;3&lt;/option&gt;
              &lt;option&gt;4&lt;/option&gt;
              &lt;option&gt;5&lt;/option&gt;
          &lt;/select&gt;
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
                    To use add <mark><code>multiple</code></mark> to the field
                  </p>
                  <form>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </form>
                </div>
              </div>
              <!-- end  Multiple Select -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start  Select With Addons -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Select With Addons</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code35-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code35-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Select With Addons - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;div class=&quot;input-group mb-3&quot;&gt;
              &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect01&quot;&gt;Options&lt;/label&gt;
              &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect01&quot;&gt;
                  &lt;option selected&gt;Choose...&lt;/option&gt;
                  &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                  &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                  &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
              &lt;/select&gt;
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
                    <mark><code>.input-group-prepend</code></mark> class to
                    the div
                  </p>
                  <form>
                    <div class="input-group mb-3">
                      <label class="input-group-text" for="inputGroupSelect01">Options</label>
                      <select class="form-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end  Select With Addons -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Select With Buttons -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Select With Buttons</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code36-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code36-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Select With Buttons - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect04&quot;&gt;
                  &lt;option selected&gt;Choose...&lt;/option&gt;
                  &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                  &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                  &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
              &lt;/select&gt;
                  &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
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
                    <mark><code>.input-group-append</code></mark> class to the
                    div
                  </p>
                  <form>
                    <div class="input-group">
                      <select class="form-select" id="inputGroupSelect04">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <button class="btn btn-primary" type="button">
                        Button
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Select With Buttons -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">File Upload</h4>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Default File Upload -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Default File Upload</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code37-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code37-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Default File Upload - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;formFile&quot;&gt;
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
                    <mark><code>.form-control-file</code></mark> class to the
                    input
                  </p>
                  <form class="mt-3">
                    <input class="form-control" type="file" id="formFile" />
                  </form>
                </div>
              </div>
              <!-- end Default File Upload -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Disabled File Upload -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Disabled File Upload</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code38-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code38-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Disabled File Upload - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
&lt;form&gt;
  &lt;div class=&quot;mb-3&quot;&gt;
    &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;formFileDisabled&quot; disabled&gt;
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
                    <mark><code>disabled</code></mark> attr to the
                    input
                  </p>
                  <form>
                    <div class="mb-3">
                      <input class="form-control" type="file" id="formFileDisabled" disabled>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Custom File Upload -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Small File Upload -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">
                      Small File Upload
                    </h4>
                    <div class=" ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code39-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code39-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Small File Upload - View
                                Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
&lt;form class=&quot;mt-4&quot;&gt;
  &lt;input class=&quot;form-control form-control-sm&quot; id=&quot;formFileSm&quot; type=&quot;file&quot;&gt;
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
                    <mark><code>.form-control-sm</code></mark> class to
                    the div
                  </p>
                  <form class="mt-4">
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                  </form>
                </div>
              </div>
              <!-- end Custom File Upload with Button Left -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Large File Upload -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                      <h4 class="card-title mb-0">
                        Large File Upload
                      </h4>
                    <div class=" ms-auto flex-shrink-0">
                        <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code"
                          data-bs-toggle="modal" data-bs-target="#view-code40-modal">
                          <i class="ti ti-code fs-5 d-flex"></i>
                        </button>
                        <!-- Code Modal -->
                        <div id="view-code40-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                              <div class="modal-header border-bottom">
                                <h5 class="modal-title" id="exampleModalLabel">
                                  Large File Upload - View
                                  Code
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body p-4">
                                <pre class="language-html scrollable">
                                                                                  <code>
&lt;form class=&quot;mt-4&quot;&gt;
  &lt;input class=&quot;form-control form-control-lg&quot; id=&quot;formFileLg&quot; type=&quot;file&quot;&gt;
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
                    <mark><code>.form-control-lg</code></mark> class to the
                    div
                  </p>
                  <form class="mt-4">
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                  </form>
                </div>
              </div>
              <!-- end Custom File Upload with Button Right -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Different Style in Helper Text</h4>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Left Helper Text -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Left Helper Text</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code41-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code41-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Left Helper Text - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nametext2&quot; aria-describedby=&quot;name&quot; placeholder=&quot;Name&quot;&gt;
              &lt;div class=&quot;d-flex justify-content-start&quot;&gt;
                  &lt;small id=&quot;name1&quot; class=&quot;badge badge-default text-info  bg-info-subtle form-text&quot;&gt;Helper Text&lt;/small&gt;
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
                    <mark><code>justify-content-start</code></mark> class to
                    the text
                  </p>
                  <form class="mt-3">
                    <div class="form-group">
                      <input type="text" class="form-control" id="nametext2" aria-describedby="name"
                        placeholder="Name" />
                      <div class="d-flex justify-content-start">
                        <small id="name1" class="badge badge-default text-info  bg-info-subtle form-text">Helper
                          Text</small>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Left Helper Text -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Center Helper Text -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Center Helper Text</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code42-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code42-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Center Helper Text - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;form-group mb-0&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nametext4&quot; aria-describedby=&quot;name&quot; placeholder=&quot;Name&quot;&gt;
              &lt;p class=&quot;text-center mb-0&quot;&gt;
                  &lt;small id=&quot;name45&quot; class=&quot;badge badge-default text-warning  bg-warning-subtle form-text&quot;&gt;Helper Text&lt;/small&gt;
              &lt;/p&gt;
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
                    To use add <mark><code>text-center</code></mark> class to
                    the text
                  </p>
                  <form class="mt-3">
                    <div class="form-group mb-0">
                      <input type="text" class="form-control" id="nametext4" aria-describedby="name"
                        placeholder="Name" />
                      <p class="text-center mb-0">
                        <small id="name45" class="badge badge-default text-warning  bg-warning-subtle form-text">Helper
                          Text</small>
                      </p>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Center Helper Text -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Right Helper Text -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Right Helper Text</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code43-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code43-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Right Helper Text - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nametext12&quot; aria-describedby=&quot;name&quot; placeholder=&quot;Name&quot;&gt;
              &lt;div class=&quot;d-flex justify-content-end&quot;&gt;
                  &lt;small id=&quot;name13&quot; class=&quot;badge badge-default text-danger  bg-danger-subtle form-text&quot;&gt;Helper Text&lt;/small&gt;
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
                    <mark><code>justify-content-end</code></mark> class to the
                    text
                  </p>
                  <form class="mt-3">
                    <div class="form-group">
                      <input type="text" class="form-control" id="nametext12" aria-describedby="name"
                        placeholder="Name" />
                      <div class="d-flex justify-content-end">
                        <small id="name13" class="badge badge-default text-danger  bg-danger-subtle form-text">Helper
                          Text</small>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Right Helper Text -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Inline Helper Text -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Helper Text</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code44-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code44-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Inline Helper Text - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;row&quot;&gt;
              &lt;div class=&quot;col-md-8&quot;&gt;
                  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;helpInput10&quot; placeholder=&quot;Helper Text&quot;&gt;
              &lt;/div&gt;
              &lt;div class=&quot;col-md-4&quot;&gt;
                  &lt;small class=&quot;text-muted&quot;&gt;Helper Text&lt;/small&gt;
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
                    <div class="row">
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="helpInput10" placeholder="Helper Text" />
                      </div>
                      <div class="col-md-4">
                        <small class="text-muted">Helper Text</small>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Inline Helper Text -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Inline Helper Text With Color -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Helper Text With Color</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code45-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code45-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Inline Helper Text With Color - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;helpInput11&quot; placeholder=&quot;Help Text&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-4 block-tag&quot;&gt;
                &lt;small class=&quot;badge bg-success-subtle text-success &quot;&gt;Helper Text&lt;/small&gt;
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
                    <div class="row">
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="helpInput11" placeholder="Help Text" />
                      </div>
                      <div class="col-md-4 block-tag">
                        <small class="badge bg-success-subtle text-success ">Helper Text</small>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Inline Helper Text With Color -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Input With Validaton</h4>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Input With Success -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input With Success</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code46-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code46-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input With Success - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;label class=&quot;form-&quot; for=&quot;inputSuccess1&quot;&gt;Input with success&lt;/label&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control is-valid&quot; id=&quot;inputSuccess1&quot;&gt;
        &lt;div class=&quot;valid-feedback&quot;&gt;
            Success! You've done it.
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
                    To use add <mark><code>is-valid</code></mark> class to the
                    input
                  </p>
                  <form class="mt-3">
                    <label class="form-" for="inputSuccess1">Input with success</label>
                    <input type="text" class="form-control is-valid" id="inputSuccess1" />
                    <div class="valid-feedback">Success! You've done it.</div>
                  </form>
                </div>
              </div>
              <!-- end Input With Success -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Input With Danger -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input With Danger</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code47-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code47-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input With Danger - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;label class=&quot;form-&quot; for=&quot;inputDanger1&quot;&gt;Input with danger&lt;/label&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control is-invalid&quot; id=&quot;inputDanger1&quot;&gt;
          &lt;div class=&quot;invalid-feedback&quot;&gt;
              Sorry, that username's taken. Try another?
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
                    To use add <mark><code>is-invalid</code></mark> class to
                    the input
                  </p>
                  <form class="mt-3">
                    <label class="form-" for="inputDanger1">Input with danger</label>
                    <input type="text" class="form-control is-invalid" id="inputDanger1" />
                    <div class="invalid-feedback">
                      Sorry, that username's taken. Try another?
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input With Danger -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Inline Input With Success -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Input With Success</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code48-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code48-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Inline Input With Success - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3 form-horizontal&quot;&gt;
          &lt;form class=&quot;mt-3 form-horizontal&quot;&gt;
          &lt;div class=&quot;form-group row&quot;&gt;
              &lt;label for=&quot;inputHorizontalSuccess&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Email&lt;/label&gt;
              &lt;div class=&quot;col-sm-10&quot;&gt;
                  &lt;input type=&quot;email&quot; class=&quot;form-control is-valid&quot; id=&quot;inputHorizontalSuccess&quot; placeholder=&quot;name@example.com&quot;&gt;
                  &lt;div class=&quot;valid-feedback&quot;&gt;Success! You've done it.&lt;/div&gt;
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
                    To use add <mark><code>form-horizontal</code></mark> class
                    to the input
                  </p>
                  <form class="mt-3 form-horizontal">
                    <div class="form-group row">
                      <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control is-valid" id="inputHorizontalSuccess"
                          placeholder="name@example.com" />
                        <div class="valid-feedback">
                          Success! You've done it.
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Inline Input With Success -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Inline Input With Danger -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Input With Danger</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code49-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code49-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Inline Input With Danger - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3 form-horizontal&quot;&gt;
        &lt;div class=&quot;form-group row&quot;&gt;
            &lt;label for=&quot;inputHorizontalDnger&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Email&lt;/label&gt;
            &lt;div class=&quot;col-sm-10&quot;&gt;
                &lt;input type=&quot;email&quot; class=&quot;form-control is-invalid&quot; id=&quot;inputHorizontalDnger&quot; placeholder=&quot;name@example.com&quot;&gt;
                &lt;div class=&quot;invalid-feedback&quot;&gt;Sorry, that username's taken. Try another?&lt;/div&gt;
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
                    To use add <mark><code>form-horizontal</code></mark> class
                    to the input
                  </p>
                  <form class="mt-3 form-horizontal">
                    <div class="form-group row">
                      <label for="inputHorizontalDnger" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control is-invalid" id="inputHorizontalDnger"
                          placeholder="name@example.com" />
                        <div class="invalid-feedback">
                          Sorry, that username's taken. Try another?
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Inline Input With Danger -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Input With Tooltip</h4>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Tooltip Bottom -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Tooltip Bottom</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code50-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code50-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Tooltip Bottom - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;bottom&quot; title=&quot;Tooltip on bottom&quot; class=&quot;form-control&quot; placeholder=&quot;Bottom&quot;&gt;
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
                    <input type="text" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom"
                      class="form-control" placeholder="Bottom" />
                  </form>
                </div>
              </div>
              <!-- end Tooltip Bottom -->
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Tooltip Right -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Tooltip Right</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code51-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code51-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Tooltip Right - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;right&quot; title=&quot;Tooltip on right&quot; class=&quot;form-control&quot; placeholder=&quot;Right&quot;&gt;
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
                    <input type="text" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right"
                      class="form-control" placeholder="Right" />
                  </form>
                </div>
              </div>
              <!-- end Tooltip Right -->
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Tooltip Top -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Tooltip Top</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code52-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code52-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Tooltip Top - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip on top&quot; class=&quot;form-control&quot; placeholder=&quot;Top&quot;&gt;
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
                    <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top"
                      class="form-control" placeholder="Top" />
                  </form>
                </div>
              </div>
              <!-- end Tooltip Top -->
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Tooltip Left -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Tooltip Left</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code53-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code53-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Tooltip Left - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;left&quot; title=&quot;Tooltip on left&quot; class=&quot;form-control&quot; placeholder=&quot;Left&quot;&gt;
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
                    <input type="text" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left"
                      class="form-control" placeholder="Left" />
                  </form>
                </div>
              </div>
              <!-- end Tooltip Left -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Input Text Styles</h4>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Input Text Bold -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Text Bold</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code54-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code54-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Text Bold - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control fw-bold&quot; placeholder=&quot;Bold Text&quot;&gt;
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
                    <input type="text" class="form-control fw-bold" placeholder="Bold Text" />
                  </form>
                </div>
              </div>
              <!-- end Input Text Bold -->
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Input Text Normal -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Text Normal</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code55-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code55-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Text Normal - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control fw-normal&quot; placeholder=&quot;Normal Text&quot;&gt;
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
                    <input type="text" class="form-control fw-normal" placeholder="Normal Text" />
                  </form>
                </div>
              </div>
              <!-- end Input Text Normal -->
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Input Text Light -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Text Light</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code56-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code56-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Text Light - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control fw-light&quot; placeholder=&quot;Light Text&quot;&gt;
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
                    <input type="text" class="form-control fw-light" placeholder="Light Text" />
                  </form>
                </div>
              </div>
              <!-- end Input Text Light -->
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Input Text Italic -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Text Italic</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code57-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code57-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Text Italic - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control font-italic&quot; placeholder=&quot;Italic Text&quot;&gt;
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
                    <input type="text" class="form-control font-italic" placeholder="Italic Text" />
                  </form>
                </div>
              </div>
              <!-- end Input Text Italic -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Text Lowercase -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Text Lowercase</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code58-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code58-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Text Lowercase - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control text-lowercase&quot; placeholder=&quot;Lowercase&quot;&gt;
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
                    <input type="text" class="form-control text-lowercase" placeholder="Lowercase" />
                  </form>
                </div>
              </div>
              <!-- end Input Text Lowercase -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Text Uppercase -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Text Uppercase</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code59-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code59-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Text Uppercase - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control text-uppercase&quot; placeholder=&quot;Uppercase&quot;&gt;
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
                    <input type="text" class="form-control text-uppercase" placeholder="Uppercase" />
                  </form>
                </div>
              </div>
              <!-- end Input Text Uppercase -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Text Capitalize -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Text Capitalize</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code60-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code60-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Text Capitalize - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control text-capitalize&quot; placeholder=&quot;capitalize&quot;&gt;
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
                    <input type="text" class="form-control text-capitalize" placeholder="capitalize" />
                  </form>
                </div>
              </div>
              <!-- end Input Text Capitalize -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Input Sizing</h4>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Small Input -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Small Input</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code61-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code61-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Small Input - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; id=&quot;example-input-small&quot; name=&quot;example-input-small&quot; class=&quot;form-control form-control-sm&quot; placeholder=&quot;Small&quot;&gt;
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
                    <input type="text" id="example-input-small" name="example-input-small"
                      class="form-control form-control-sm" placeholder="Small" />
                  </form>
                </div>
              </div>
              <!-- end Small Input -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Normal Input -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Normal Input</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code62-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code62-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Normal Input - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;input type=&quot;text&quot; id=&quot;example-input-normal&quot; name=&quot;example-input-normal&quot; class=&quot;form-control&quot; placeholder=&quot;Normal&quot;&gt;
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
                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control"
                      placeholder="Normal" />
                  </form>
                </div>
              </div>
              <!-- end Normal Input -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Large Input -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Large Input</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                        data-bs-target="#view-code63-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code63-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Large Input - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;input type=&quot;text&quot; id=&quot;example-input-large&quot; name=&quot;example-input-large&quot; class=&quot;form-control form-control-lg&quot; placeholder=&quot;Large&quot;&gt;
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
                    <input type="text" id="example-input-large" name="example-input-large"
                      class="form-control form-control-lg" placeholder="Large" />
                  </form>
                </div>
              </div>
              <!-- end Large Input -->
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