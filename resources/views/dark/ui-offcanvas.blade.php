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
          @@include("partials/breadcrumb.html", {"title": "Offcanvas", "subtitle": 'Home'})
           <!-- ---------------------------------------------- -->
            <!-- 1. Offcanvas -->
            <!-- ---------------------------------------------- -->
            <div class="card">
              <div class="card-body">
                <h4 class="card-title mb-3">Offcanvas</h4>
                <div class="d-flex gap-6 flex-wrap">
                  <a class="btn bg-primary-subtle text-primary" data-bs-toggle="offcanvas" href="#example1"
                    role="button" aria-controls="example1">
                    Offcanvas with href
                  </a>
                  <button class="btn bg-info-subtle text-info" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#example2" aria-controls="example2">
                    Offcanvas with data-bs-target
                  </button>
                  <button class="btn bg-danger-subtle text-danger" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    Offcanvas Right
                  </button>
                  <button class="btn bg-warning-subtle text-warning" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                    Offcanvas Bottom
                  </button>
                  <button class="btn bg-secondary-subtle text-secondary" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                    Enable body scrolling
                  </button>
                  <button class="btn bg-success-subtle text-success" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
                    Enable backdrop (default)
                  </button>
                  <button class="btn bg-primary-subtle text-primary" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    Enable both scrolling & backdrop
                  </button>
                </div>
                <!-- 1 -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="example1"
                  aria-labelledby="offcanvasExampleLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                      Offcanvas
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                      aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <div>
                      Some text as placeholder. In real life you can have
                      the elements you have chosen. Like, text, images,
                      lists, etc.
                    </div>
                    <div class="dropdown mt-3">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown">
                        Dropdown button
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- 2 -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="example2"
                  aria-labelledby="offcanvasExampleLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                      Offcanvas
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                      aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <div>
                      Some text as placeholder. In real life you can have
                      the elements you have chosen. Like, text, images,
                      lists, etc.
                    </div>
                    <div class="dropdown mt-3">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown">
                        Dropdown button
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- 3 -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                  aria-labelledby="offcanvasRightLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                      Offcanvas Right
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                      aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <div>
                      Some text as placeholder. In real life you can have
                      the elements you have chosen. Like, text, images,
                      lists, etc.
                    </div>
                    <div class="dropdown mt-3">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown">
                        Dropdown button
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- 4 -->
                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
                  aria-labelledby="offcanvasBottomLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                      Offcanvas Bottom
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                      aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <div>
                      Some text as placeholder. In real life you can have
                      the elements you have chosen. Like, text, images,
                      lists, etc.
                    </div>
                  </div>
                </div>
                <!-- 5 -->
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                  id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">
                      Colored with scrolling
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                      aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <p>
                      Try scrolling the rest of the page to see this option
                      in action.
                    </p>
                  </div>
                </div>
                <!-- 6 -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop"
                  aria-labelledby="offcanvasWithBackdropLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">
                      Offcanvas with backdrop
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                      aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <p>
                      Try scrolling the rest of the page to see this option
                      in action.
                    </p>
                  </div>
                </div>
                <!-- 7 -->
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                  id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                      Backdroped with scrolling
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                      aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <p>
                      Try scrolling the rest of the page to see this option
                      in action.
                    </p>
                  </div>
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