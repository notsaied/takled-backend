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
          @@include("partials/breadcrumb.html", {"title": "Custom-Validation", "subtitle": 'Home'})
          <div class="card">
            <div class="border-bottom title-part-padding">
              <h4 class="card-title mb-0">Validation Form</h4>
            </div>
            <div class="card-body">
              <form novalidate>
                <div class="mb-3 form-group">
                  <label class="form-label">Basic Text Input
                    <span class="text-danger">*</span></label>
                  <div class="controls">
                    <input type="text" name="text" class="form-control" required
                      data-validation-required-message="This field is required" />
                  </div>
                  <div class="form-control-feedback">
                    <small>Add <code>required</code> attribute to field for
                      required validation.</small>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Email Field <span class="text-danger">*</span></label>
                  <div class="controls">
                    <input type="email" name="email" class="form-control" required
                      data-validation-required-message="This field is required" />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Password Input Field
                    <span class="text-danger">*</span></label>
                  <div class="controls">
                    <input type="password" name="password" class="form-control" required
                      data-validation-required-message="This field is required" />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Repeat Password Input Field
                    <span class="text-danger">*</span></label>
                  <div class="controls">
                    <input type="password" name="password2" data-validation-match-match="password"
                      class="form-control" required />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">File Input Field
                    <span class="text-danger">*</span></label>
                  <div class="controls">
                    <input type="file" name="file" class="form-control" required />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Input with Icon <span class="text-danger">*</span></label>
                  <div class="controls">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Addon To Right"
                        data-validation-required-message="This field is required" />
                      <div class="input-group-text">
                        <span><i class="ti ti-currency-dollar"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Maximum Character Length
                    <span class="text-danger">*</span></label>
                  <div class="controls">
                    <input type="text" name="maxChar" class="form-control" required
                      data-validation-required-message="This field is required" maxlength="10" />
                  </div>
                  <div class="form-control-feedback">
                    <small>Add <code>maxlength='10'</code> attribute for maximum
                      number of characters to accept.
                    </small>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Minimum Character Length
                    <span class="text-danger">*</span></label>
                  <div class="controls">
                    <input type="text" name="minChar" class="form-control" required
                      data-validation-required-message="This field is required" minlength="6" />
                  </div>
                  <div class="form-control-feedback">
                    <small>Add <code>minlength="6"</code> attribute for minimum
                      number of characters to accept.</small>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Only Numbers <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="ti ti-currency-dollar fs-5"></i></span>
                    <input type="number" name="onlyNum" class="form-control" required
                      data-validation-required-message="This field is required" />
                    <span class="input-group-text">0.00</span>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Maximum Number <span class="text-danger">*</span></label>
                  <input type="text" name="maxNum" class="form-control" required
                    data-validation-required-message="This field is required" max="25" />
                  <div class="form-control-feedback">
                    <small><i>Must be lower than 25</i></small> -
                    <small>Add <code>max</code> attribute for maximum number to
                      accept. Also use
                      <code>data-validation-max-message</code> attribute for
                      max failure message</small>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Minimum Number <span class="text-danger">*</span></label>
                  <div class="controls">
                    <input type="text" name="minNum" class="form-control" required
                      data-validation-required-message="This field is required" min="10" />
                  </div>
                  <div class="form-control-feedback">
                    <small><i>Must be higher than 10</i></small> -
                    <small>Add <code>min</code> attribute for minimum number to
                      accept. Also use
                      <code>data-validation-min-message</code> attribute for
                      min failure message</small>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Text Input Range
                    <span class="text-danger">*</span></label>
                  <div class="controls">
                    <input type="text" name="text" class="form-control" required
                      data-validation-required-message="This field is required" minlength="10" maxlength="20"
                      placeholder="Enter number between 10 &amp; 20" />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Input with Button
                    <span class="text-danger">*</span></label>
                  <div class="controls">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search" required />

                      <button class="btn btn-primary" type="button">
                        Go!
                      </button>

                    </div>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">No Characters, Only Numbers
                    <span class="text-danger">*</span></label>
                  <div class="controls">
                    <input type="text" name="noChar" class="form-control" required
                      data-validation-containsnumber-regex="(\d)+"
                      data-validation-containsnumber-message="No Characters Allowed, Only Numbers" />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Pattern <span class="text-danger">*</span>
                    <small><i>Must start with 'a' and end with 'z'</i></small></label>
                  <div class="controls">
                    <input type="text" name="pattern" pattern="a.*z"
                      data-validation-pattern-message="Must start with 'a' and end with 'z'" class="form-control"
                      required />
                    <div class="form-control-feedback">
                      <small>Add <code>pattern</code> attribute to set input
                        pattern. Also use
                        <code>data-validation-pattern-message</code> attribute
                        for pattern failure message</small>
                    </div>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Enter URL <span class="text-danger">*</span></label>
                  <div class="controls">
                    <input type="text" class="form-control" placeholder="Add URL"
                      data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*"
                      data-validation-regex-message="Only Valid URL's" />
                    <div class="form-control-feedback">
                      <small>Add
                        <code>data-validation-regex-regex</code> attribute for
                        regular expression. Also use
                        <code>data-validation-regex-message</code> attribute
                        for regex failure message</small>
                    </div>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Enter Email Address
                    <span class="text-danger">*</span></label>
                  <div class="controls">
                    <input type="text" class="form-control" placeholder="Email Address"
                      data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})"
                      data-validation-regex-message="Enter Valid Email" />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Enter Date <span class="text-danger">*</span></label>
                  <div class="controls">
                    <input type="text" class="form-control" placeholder="MM/DD/YYYY"
                      data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})"
                      data-validation-regex-message="Enter Valid Email" />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Basic Select <span class="text-danger">*</span></label>
                  <div class="controls">
                    <select name="select" id="select" required class="form-select form-control">
                      <option value="">Select Your City</option>
                      <option value="1">India</option>
                      <option value="2">USA</option>
                      <option value="3">UK</option>
                      <option value="4">Canada</option>
                      <option value="5">Dubai</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Textarea <span class="text-danger">*</span></label>
                  <div class="controls">
                    <textarea name="textarea" id="textarea" class="form-control" required
                      placeholder="Textarea text"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3 form-group">
                      <label class="form-label">Checkbox <span class="text-danger">*</span></label>
                      <div class="controls">
                        <div class="form-check">
                          <input type="checkbox" required value="single" class="form-check-input"
                            id="customCheck1" />
                          <label class="form-check-label" for="customCheck1">Check this custom checkbox</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 form-group">
                      <label class="form-label">Checkbox Group
                        <span class="text-danger">*</span></label>
                      <div class="controls">
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" value="x" name="styled_checkbox" required
                              class="form-check-input" id="customCheck2" />
                            <label class="form-check-label" for="customCheck2">I am unchecked</label>
                          </div>
                        </fieldset>
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" value="y" name="styled_checkbox" class="form-check-input"
                              id="customCheck3" />
                            <label class="form-check-label" for="customCheck3">I am unchecked too</label>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3 form-group">
                      <label class="form-label">Select Max 2 Checkbox<span class="text-danger">*</span></label>
                      <div class="controls">
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" name="styled_max_checkbox"
                              data-validation-maxchecked-maxchecked="2"
                              data-validation-maxchecked-message="Don't be greedy!" required
                              class="form-check-input" id="customCheck4" />
                            <label class="form-check-label" for="customCheck4">I am unchecked checkbox</label>
                          </div>
                        </fieldset>
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" name="styled_max_checkbox" class="form-check-input"
                              id="customCheck5" />
                            <label class="form-check-label" for="customCheck5">I am unchecked too</label>
                          </div>
                        </fieldset>
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" name="styled_max_checkbox" class="form-check-input"
                              id="customCheck6" />
                            <label class="form-check-label" for="customCheck6">You can check me</label>
                          </div>
                        </fieldset>
                      </div>
                      <small>Select any 2 options</small>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 form-group">
                      <label class="form-label">Minimum 2 Checkbox selection<span
                          class="text-danger">*</span></label>
                      <div class="controls">
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" value="1" data-validation-minchecked-minchecked="2"
                              data-validation-minchecked-message="Choose at least two" name="styled_min_checkbox"
                              required class="form-check-input" id="customCheck7" />
                            <label class="form-check-label" for="customCheck7">I am unchecked checkbox</label>
                          </div>
                        </fieldset>
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" value="2" name="styled_min_checkbox" class="form-check-input"
                              id="customCheck8" />
                            <label class="form-check-label" for="customCheck8">I am unchecked checkbox too</label>
                          </div>
                        </fieldset>
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" value="3" name="styled_min_checkbox" class="form-check-input"
                              id="customCheck9" />
                            <label class="form-check-label" for="customCheck9">You can check me</label>
                          </div>
                        </fieldset>
                      </div>
                      <small>Select any 2 options</small>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3 form-group">
                      <label class="form-label">Radio Buttons
                        <span class="text-danger">*</span></label>
                      <fieldset class="controls">
                        <div class="form-check py-2">
                          <input type="radio" value="1" name="styled_radio" required id="styled_radio1"
                            class="form-check-input" />
                          <label class="form-check-label" for="styled_radio1">Check me</label>
                        </div>
                      </fieldset>
                      <fieldset>
                        <div class="form-check py-2">
                          <input type="radio" value="2" name="styled_radio" id="styled_radio2"
                            class="form-check-input" />
                          <label class="form-check-label" for="styled_radio2">or me</label>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 form-group">
                      <label class="form-label">Inline Radio Buttons
                        <span class="text-danger">*</span></label>
                      <div class="controls">
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="radio" value="Yes" name="styled_inline_radio" required
                              id="styled_radio_inline1" class="form-check-input" />
                            <label class="form-check-label" for="styled_radio_inline1">Check me</label>
                          </div>
                        </fieldset>
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="radio" value="No" name="styled_inline_radio" id="styled_radio_inline2"
                              class="form-check-input" />
                            <label class="form-check-label" for="styled_radio_inline2">or me</label>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex flex-wrap gap-6">
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
                  <button type="reset" class="btn bg-danger-subtle text-danger">
                    Cancel
                  </button>
                </div>
              </form>
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
  <script src="{{ URL::asset('build/js/vendor.min.js') }}"></script>
  @@include("partials/scripts.html")
  <script src="{{ URL::asset('build/js/extra-libs/jqbootstrapvalidation/validation.js') }}"></script>
  <script src="{{ URL::asset('build/js/forms/custom-validation-init.js') }}"></script>
</body>

</html>