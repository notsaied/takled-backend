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
          @@include("partials/breadcrumb.html", {"title": "Floating-Input", "subtitle": 'Home'})
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">
                Animated Line Inputs Form With Floating Labels
              </h4>
              <p class="card-subtitle">
                Just add <code>floating-labels</code> class to the form.
              </p>
              <form class="floating-labels mt-4 pt-2">
                <div class="form-group mb-4">
                  <input type="text" class="form-control" id="input1">
                  <span class="bar"></span>
                  <label for="input1">Regular Input</label>
                </div>
                <div class="form-group mb-4">
                  <input type="password" class="form-control" id="input2">
                  <span class="bar"></span>
                  <label for="input2">Password</label>
                </div>
                <div class="form-group mb-4">
                  <input type="text" class="form-control" id="input3">
                  <span class="bar"></span>
                  <label for="input3">Placeholder</label>
                </div>
                <div class="form-group mb-4">
                  <input type="text" class="form-control" id="input4">
                  <span class="bar"></span>
                  <label for="input4">Helping text</label>
                  <span class="help-block"><small>A block of help text that breaks onto a new line and may extend
                      beyond one line.</small></span>
                </div>
                <div class="form-group mb-4">
                  <input type="text" class="form-control" id="input5" data-toggle="tooltip" data-placement="bottom"
                    title="input with tooltip!!">
                  <span class="bar"></span>
                  <label for="input5">Input with tooltip</label>
                </div>
                <div class="form-group mb-4">
                  <select class="form-control form-select" id="input6">
                    <option></option>
                    <option>Male</option>
                    <option>Female</option>
                  </select><span class="bar"></span>
                  <label for="input6">Gender</label>
                </div>
                <div class="form-group mb-4">
                  <textarea class="form-control" rows="4" id="input7"></textarea>
                  <span class="bar"></span>
                  <label for="input7">Text area</label>
                </div>
              </form>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">
                Animated Line Inputs Form With Floating Labels
              </h4>
              <p class="card-subtitle">
                Just add <code>floating-labels</code> class to the form and
                <code>has-warning, has-success, has-danger & has-error</code>
                for various inputs. For input with icon add
                <code>has-feedback</code> class.
              </p>
              <form class="floating-labels mt-4">
                <div class="form-group mb-4">
                  <input type="text" class="form-control input-lg" id="input8" /><span class="bar"></span>
                  <label for="input8">Large Input</label>
                </div>
                <div class="form-group mb-4">
                  <input type="text" class="form-control input-sm" id="input9" /><span class="bar"></span>
                  <label for="input9">Small Input</label>
                </div>
                <div class="form-group has-warning mb-4">
                  <input type="text" class="form-control" id="input10" /><span class="bar"></span>
                  <label for="input10">Warning State</label>
                </div>
                <div class="form-group has-success mb-4">
                  <input type="text" class="form-control" id="input11" /><span class="bar"></span>
                  <label for="input11">Success State</label>
                </div>
                <div class="form-group has-error has-danger mb-4">
                  <input type="text" class="form-control" id="input12" /><span class="bar"></span>
                  <label for="input12">Error State</label>
                </div>
                <div class="form-group has-warning has-feedback mb-4">
                  <input type="text" class="form-control form-control-warning" id="input13" /><span
                    class="bar"></span>
                  <label for="input13">Warning State With Feedback</label>
                </div>
                <div class="form-group has-success has-feedback mb-4">
                  <input type="text" class="form-control form-control-success" id="input14" /><span
                    class="bar"></span>
                  <label for="input14">Success State With Feedback</label>
                </div>
                <div class="form-group has-danger has-error has-feedback mb-1">
                  <input type="text" class="form-control form-control-danger" id="input15" /><span
                    class="bar"></span>
                  <label for="input15">Error State With Feedback</label>
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
  <script>
    $('.floating-labels .form-control').on('focus blur', function (e) {
      $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
    }).trigger('blur');
  </script>
</body>

</html>