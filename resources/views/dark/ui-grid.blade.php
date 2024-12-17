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
          @@include("partials/breadcrumb.html", {"title": "Grid", "subtitle": 'Home'})
          <!-- start Grid options -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Grid options</h4>
              <p class="mb-3 card-subtitle">
                See how aspects of the Bootstrap grid system work across
                multiple devices with a handy table. check the
                <a href="https://getbootstrap.com/docs/5.0/layout/grid/">official website grid page</a>
              </p>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <!-- start row -->
                    <tr>
                      <th></th>
                      <th class="text-center">
                        xs <br />
                        <small>&lt;576px</small>
                      </th>
                      <th class="text-center">
                        sm <br />
                        <small>≥576px</small>
                      </th>
                      <th class="text-center">
                        md <br />
                        <small>≥768px</small>
                      </th>
                      <th class="text-center">
                        lg <br />
                        <small>≥992px</small>
                      </th>
                      <th class="text-center">
                        xl <br />
                        <small>≥1200px</small>
                      </th>
                      <th class="text-center">
                        xxl <br />
                        <small>≥1400px</small>
                      </th>
                    </tr>
                    <!-- end row -->
                  </thead>
                  <tbody>
                    <!-- start row -->
                    <tr>
                      <th class="text-nowrap" scope="row">
                        Container max-width
                      </th>
                      <td>None (auto)</td>
                      <td>540px</td>
                      <td>720px</td>
                      <td>960px</td>
                      <td>1140px</td>
                      <td>1320px</td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr>
                      <th class="text-nowrap" scope="row">
                        Class prefix
                      </th>
                      <td><code>.col-</code></td>
                      <td><code>.col-sm-</code></td>
                      <td><code>.col-md-</code></td>
                      <td><code>.col-lg-</code></td>
                      <td><code>.col-xl-</code></td>
                      <td><code>.col-xxl-</code></td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr>
                      <th class="text-nowrap" scope="row">
                        # of columns
                      </th>
                      <td colspan="6">12</td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr>
                      <th class="text-nowrap" scope="row">
                        Gutter width
                      </th>
                      <td colspan="6">
                        1.5rem (.75rem on left and right)
                      </td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr>
                      <th class="text-nowrap" scope="row">
                        Custom gutters
                      </th>
                      <td colspan="6">Yes</td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr>
                      <th class="text-nowrap" scope="row">Nestable</th>
                      <td colspan="6">Yes</td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr>
                      <th class="text-nowrap" scope="row">
                        Column ordering
                      </th>
                      <td colspan="5">Yes</td>
                    </tr>
                    <!-- end row -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- end Grid options -->
          <!-- start Equal-width -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Equal-width</h4>
              <p class="mb-3 card-subtitle">
                For example, here are two grid layouts that apply to every
                device and viewport, from xs to xxl. Add any number of
                unit-less classes for each breakpoint you need and every
                column will be the same width.
              </p>
              <div class="container">
                <div class="row mb-2">
                  <div class="col text-bg-light py-2 px-3 border">1 of 2</div>
                  <div class="col text-bg-light py-2 px-3 border">2 of 2</div>
                </div>
                <div class="row">
                  <div class="col text-bg-light py-2 px-3 border">1 of 3</div>
                  <div class="col text-bg-light py-2 px-3 border">2 of 3</div>
                  <div class="col text-bg-light py-2 px-3 border">3 of 3</div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Equal-width -->
          <!-- start Setting one column width -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Setting one column width</h4>
              <p class="card-subtitle mb-3">
                Auto-layout for flexbox grid columns also means you can
                set the width of one column and have the sibling columns
                automatically resize around it. You may use predefined
                grid classes (as shown below), grid mixins, or inline
                widths. Note that the other columns will resize no matter
                the width of the center column.
              </p>
              <div class="container">
                <div class="row mb-2">
                  <div class="col text-bg-light py-2 px-3 border">1 of 3</div>
                  <div class="col-6 text-bg-light py-2 px-3 border">
                    2 of 3 (wider)
                  </div>
                  <div class="col text-bg-light py-2 px-3 border">3 of 3</div>
                </div>
                <div class="row">
                  <div class="col text-bg-light py-2 px-3 border">1 of 3</div>
                  <div class="col-5 text-bg-light py-2 px-3 border">
                    2 of 3 (wider)
                  </div>
                  <div class="col text-bg-light py-2 px-3 border">3 of 3</div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Setting one column width -->
          <!-- start Variable width content -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Variable width content</h4>
              <p class="mb-3 card-subtitle">
                Use col-{breakpoint}-auto classes to size columns based on
                the natural width of their content.
              </p>
              <h6 class="card-subtitle lh-base mb-3"></h6>
              <div class="container">
                <div class="row justify-content-md-center mb-2">
                  <div class="col col-lg-2 text-bg-light py-2 px-3 border">
                    1 of 3
                  </div>
                  <div class="col-md-auto text-bg-light py-2 px-3 border">
                    Variable width content
                  </div>
                  <div class="col col-lg-2 text-bg-light py-2 px-3 border">
                    3 of 3
                  </div>
                </div>
                <div class="row">
                  <div class="col text-bg-light py-2 px-3 border">1 of 3</div>
                  <div class="col-md-auto text-bg-light py-2 px-3 border">
                    Variable width content
                  </div>
                  <div class="col col-lg-2 text-bg-light py-2 px-3 border">
                    3 of 3
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Variable width content -->
          <!-- start All breakpoints -->
          <div class="card">
            <div class="border-bottom "></div>
            <div class="card-body">
              <h4 class="card-title">All breakpoints</h4>
              <p class="mb-3 card-subtitle">
                For grids that are the same from the smallest of devices
                to the largest, use the .col and .col-* classes. Specify a
                numbered class when you need a particularly sized column;
                otherwise, feel free to stick to .col.
              </p>
              <div class="container">
                <div class="row mb-2">
                  <div class="col text-bg-light py-2 px-3 border">col</div>
                  <div class="col text-bg-light py-2 px-3 border">col</div>
                  <div class="col text-bg-light py-2 px-3 border">col</div>
                  <div class="col text-bg-light py-2 px-3 border">col</div>
                </div>
                <div class="row">
                  <div class="col-8 text-bg-light py-2 px-3 border">col-8</div>
                  <div class="col-4 text-bg-light py-2 px-3 border">col-4</div>
                </div>
              </div>
            </div>
          </div>
          <!-- end All breakpoints -->
          <!-- start Stacked to horizontal -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Stacked to horizontal</h4>
              <p class="mb-3 card-subtitle">
                Using a single set of .col-sm-* classes, you can create a
                basic grid system that starts out stacked and becomes
                horizontal at the small breakpoint (sm).
              </p>
              <h6 class="card-subtitle lh-base mb-3"></h6>
              <div class="container">
                <div class="row mb-2">
                  <div class="col-sm-8 text-bg-light py-2 px-3 border">
                    col-sm-8
                  </div>
                  <div class="col-sm-4 text-bg-light py-2 px-3 border">
                    col-sm-4
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm text-bg-light py-2 px-3 border">
                    col-sm
                  </div>
                  <div class="col-sm text-bg-light py-2 px-3 border">
                    col-sm
                  </div>
                  <div class="col-sm text-bg-light py-2 px-3 border">
                    col-sm
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Stacked to horizontal -->
          <!-- start Mix and Match -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Mix and Match</h4>
              <p class="mb-3 card-subtitle">
                Don’t want your columns to simply stack in some grid
                tiers? Use a combination of different classes for each
                tier as needed. See the example below for a better idea of
                how it all works.
              </p>
              <div class="container">
                <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                <div class="row mb-2">
                  <div class="col-md-8 text-bg-light py-2 px-3 border">
                    .col-md-8
                  </div>
                  <div class="col-6 col-md-4 text-bg-light py-2 px-3 border">
                    .col-6 .col-md-4
                  </div>
                </div>

                <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                <div class="row mb-2">
                  <div class="col-6 col-md-4 text-bg-light py-2 px-3 border">
                    .col-6 .col-md-4
                  </div>
                  <div class="col-6 col-md-4 text-bg-light py-2 px-3 border">
                    .col-6 .col-md-4
                  </div>
                  <div class="col-6 col-md-4 text-bg-light py-2 px-3 border">
                    .col-6 .col-md-4
                  </div>
                </div>

                <!-- Columns are always 50% wide, on mobile and desktop -->
                <div class="row">
                  <div class="col-6 text-bg-light py-2 px-3 border">
                    .col-6
                  </div>
                  <div class="col-6 text-bg-light py-2 px-3 border">
                    .col-6
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Mix and Match -->
          <!-- start Row columns -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Row columns</h4>
              <p class="mb-3 card-subtitle">
                Use the responsive .row-cols-* classes to quickly set the
                number of columns that best render your content and
                layout. Whereas normal .col-* classes apply to the
                individual columns (e.g., .col-md-4), the row columns
                classes are set on the parent .row as a shortcut. With
                .row-cols-auto you can give the columns their natural
                width.
              </p>
              <div class="container">
                <div class="row row-cols-2">
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                </div>
              </div>
              <div class="container mt-3">
                <div class="row row-cols-3">
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                </div>
              </div>
              <div class="container mt-3">
                <div class="row row-cols-auto">
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                </div>
              </div>
              <div class="container mt-3">
                <div class="row row-cols-4">
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                </div>
              </div>
              <div class="container mt-3">
                <div class="row row-cols-4">
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col-6 text-bg-light py-2 px-3 border">
                    Column
                  </div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                </div>
              </div>
              <div class="container mt-3">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                  <div class="col text-bg-light py-2 px-3 border">Column</div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Row columns -->
          <!-- start Nesting -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Nesting</h4>
              <p class="mb-3 card-subtitle">
                To nest your content with the default grid, add a new .row
                and set of .col-sm-* columns within an existing .col-sm-*
                column. Nested rows should include a set of columns that
                add up to 12 or fewer (it is not required that you use all
                12 available columns).
              </p>
              <div class="container">
                <div class="row">
                  <div class="col-sm-3 text-bg-light py-2 px-3 border">
                    Level 1: .col-sm-3
                  </div>
                  <div class="col-sm-9 text-bg-light py-2 px-3 border">
                    <div class="row">
                      <div class="col-8 col-sm-6 text-bg-light py-2 px-3 border">
                        Level 2: .col-8 .col-sm-6
                      </div>
                      <div class="col-4 col-sm-6 text-bg-light py-2 px-3 border">
                        Level 2: .col-4 .col-sm-6
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Nesting -->
          <!-- start Column - Vertical Alignment -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Column - Vertical Alignment</h4>
              <p class="mb-3 card-subtitle">
                Use flexbox alignment utilities to vertically and
                horizontally align columns.
              </p>
              <div class="container">
                <div class="row align-items-start text-bg-light mb-3">
                  <div class="col border-top border-bottom border-start py-2 px-3">
                    One of three columns
                  </div>
                  <div class="col border-top border-bottom border-start border-end border py-2 px-3">
                    One of three columns
                  </div>
                  <div class="col border-top border-bottom border-end py-2 px-3">
                    One of three columns
                  </div>
                </div>
                <div class="row align-items-center text-bg-light mb-3">
                  <div class="col border-top border-bottom border-start py-2 px-3">
                    One of three columns
                  </div>
                  <div class="col border-top border-bottom border-start border-end border py-2 px-3">
                    One of three columns
                  </div>
                  <div class="col border-top border-bottom border-end py-2 px-3">
                    One of three columns
                  </div>
                </div>
                <div class="row align-items-end text-bg-light mb-3">
                  <div class="col border-top border-bottom border-start py-2 px-3">
                    One of three columns
                  </div>
                  <div class="col border-top border-bottom border-start border-end border py-2 px-3">
                    One of three columns
                  </div>
                  <div class="col border-top border-bottom border-end py-2 px-3">
                    One of three columns
                  </div>
                </div>
              </div>
              <div class="mt-4 container">
                <div class="row align-items-end text-bg-light mb-3">
                  <div class="col py-2 px-3 text-bg-light border align-self-start">
                    One of three columns
                  </div>
                  <div class="col py-2 px-3 text-bg-light border align-self-center">
                    One of three columns
                  </div>
                  <div class="col py-2 px-3 text-bg-light border align-self-end">
                    One of three columns
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Column - Vertical Alignment -->
          <!-- start Horizontal alignment -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-3">Horizontal alignment</h4>
              <div class="container">
                <div class="row justify-content-start mb-3">
                  <div class="col-4 text-bg-light border py-2 px-3">
                    One of two columns
                  </div>
                  <div class="col-4 text-bg-light border py-2 px-3">
                    One of two columns
                  </div>
                </div>
                <div class="row justify-content-center mb-3">
                  <div class="col-4 text-bg-light border py-2 px-3">
                    One of two columns
                  </div>
                  <div class="col-4 text-bg-light border py-2 px-3">
                    One of two columns
                  </div>
                </div>
                <div class="row justify-content-end mb-3">
                  <div class="col-4 text-bg-light border py-2 px-3">
                    One of two columns
                  </div>
                  <div class="col-4 text-bg-light border py-2 px-3">
                    One of two columns
                  </div>
                </div>
                <div class="row justify-content-around mb-3">
                  <div class="col-4 text-bg-light border py-2 px-3">
                    One of two columns
                  </div>
                  <div class="col-4 text-bg-light border py-2 px-3">
                    One of two columns
                  </div>
                </div>
                <div class="row justify-content-between mb-3">
                  <div class="col-4 text-bg-light border py-2 px-3">
                    One of two columns
                  </div>
                  <div class="col-4 text-bg-light border py-2 px-3">
                    One of two columns
                  </div>
                </div>
                <div class="row justify-content-evenly mb-3">
                  <div class="col-4 text-bg-light border py-2 px-3">
                    One of two columns
                  </div>
                  <div class="col-4 text-bg-light border py-2 px-3">
                    One of two columns
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Horizontal alignment -->
          <!-- start Column wrapping -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-3">Column wrapping</h4>
              <div class="container">
                <div class="row">
                  <div class="col-9 text-bg-light py-2 px-3 border">
                    .col-9
                  </div>
                  <div class="col-4 text-bg-light py-2 px-3 border">
                    .col-4<br />Since 9 + 4 = 13 &gt; 12, this
                    4-column-wide div gets wrapped onto a new line as one
                    contiguous unit.
                  </div>
                  <div class="col-6 text-bg-light py-2 px-3 border">
                    .col-6<br />Subsequent columns continue along the new
                    line.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Column wrapping -->
          <!-- start Column breaks -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-3">Column breaks</h5>
              <div class="container">
                <div class="row">
                  <div class="col-6 col-sm-3 text-bg-light border py-2 px-3">
                    .col-6 .col-sm-3
                  </div>
                  <div class="col-6 col-sm-3 text-bg-light border py-2 px-3">
                    .col-6 .col-sm-3
                  </div>

                  <!-- Force next columns to break to new line -->
                  <div class="w-100"></div>

                  <div class="col-6 col-sm-3 text-bg-light border py-2 px-3">
                    .col-6 .col-sm-3
                  </div>
                  <div class="col-6 col-sm-3 text-bg-light border py-2 px-3">
                    .col-6 .col-sm-3
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Column breaks -->
          <!-- start Reording - Order classes -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Reording - Order classes</h4>
              <p class="mb-3 card-subtitle">
                Use .order- classes for controlling the visual order of
                your content. These classes are responsive, so you can set
                the order by breakpoint (e.g., .order-1.order-md-2).
                Includes support for 1 through 5 across all six grid
                tiers.
              </p>
              <div class="container">
                <div class="row">
                  <div class="col text-bg-light border py-2 px-3">
                    First in DOM, no order applied
                  </div>
                  <div class="col order-5 text-bg-light border py-2 px-3">
                    Second in DOM, with a larger order
                  </div>
                  <div class="col order-1 text-bg-light border py-2 px-3">
                    Third in DOM, with an order of 1
                  </div>
                </div>
              </div>

              <div class="container mt-4">
                <div class="row">
                  <div class="col order-last text-bg-light border py-2 px-3">
                    First in DOM, no order applied
                  </div>
                  <div class="col text-bg-light border py-2 px-3">
                    Second in DOM, with a larger order
                  </div>
                  <div class="col order-first text-bg-light border py-2 px-3">
                    Third in DOM, with an order of 1
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Reording - Order classes -->
          <!-- start Offset column classes -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Offset column classes</h4>
              <p class="mb-3 card-subtitle">
                Move columns to the right using .offset-md-* classes.
                These classes increase the left margin of a column by *
                columns. For example, .offset-md-4 moves .col-md-4 over
                four columns.
              </p>
              <div class="container">
                <div class="row">
                  <div class="col-md-4 text-bg-light py-2 px-3 border">
                    .col-md-4
                  </div>
                  <div class="col-md-4 offset-md-4 text-bg-light py-2 px-3 border">
                    .col-md-4 .offset-md-4
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-3 offset-md-3 text-bg-light py-2 px-3 border">
                    .col-md-3 .offset-md-3
                  </div>
                  <div class="col-md-3 offset-md-3 text-bg-light py-2 px-3 border">
                    .col-md-3 .offset-md-3
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-6 offset-md-3 text-bg-light py-2 px-3 border">
                    .col-md-6 .offset-md-3
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Offset column classes -->
          <!-- start Standalone column classes -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Standalone column classes</h4>
              <p class="mb-3 card-subtitle">
                The .col-* classes can also be used outside a .row to give
                an element a specific width. Whenever column classes are
                used as non direct children of a row, the paddings are
                omitted.
              </p>
              <div class="col-3 text-bg-light p-3 border">
                .col-3: width of 25%
              </div>
              <div class="col-sm-9 text-bg-light p-3 border">
                .col-sm-9: width of 75% above sm breakpoint
              </div>
            </div>
          </div>
          <!-- end Standalone column classes -->
          <!-- start Gutters - Horizontal -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Gutters - Horizontal</h4>
              <p class="mb-3 card-subtitle">
                .gx-* classes can be used to control the horizontal gutter
                widths. The .container or .container-fluid parent may need
                to be adjusted if larger gutters are used too to avoid
                unwanted overflow, using a matching padding utility. For
                example, in the following example we’ve increased the
                padding with .px-4:
              </p>
              <div class="container px-4">
                <div class="row gx-5">
                  <div class="col">
                    <div class="p-3 border text-bg-light">
                      Custom column padding
                    </div>
                  </div>
                  <div class="col">
                    <div class="p-3 border text-bg-light">
                      Custom column padding
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Gutters - Horizontal -->
          <!-- start Gutters - Vertical -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Gutters - Vertical</h4>
              <p class="mb-3 card-subtitle">
                .gy-* classes can be used to control the vertical gutter
                widths. Like the horizontal gutters, the vertical gutters
                can cause some overflow below the .row at the end of a
                page. If this occurs, you add a wrapper around .row with
                the .overflow-hidden class:
              </p>
              <div class="container overflow-hidden">
                <div class="row gy-5">
                  <div class="col-6">
                    <div class="p-3 border text-bg-light">
                      Custom column padding
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3 border text-bg-light">
                      Custom column padding
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3 border text-bg-light">
                      Custom column padding
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3 border text-bg-light">
                      Custom column padding
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Gutters - Vertical -->
          <!-- start Gutters - Vertical & Horizontal -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Gutters - Vertical & Horizontal</h4>
              <p class="mb-3 card-subtitle">
                .g-* classes can be used to control the horizontal gutter
                widths, for the following example we use a smaller gutter
                width, so there won’t be a need to add the
                .overflow-hidden wrapper class.
              </p>
              <div class="container">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3 border text-bg-light">
                      Custom column padding
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3 border text-bg-light">
                      Custom column padding
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3 border text-bg-light">
                      Custom column padding
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="p-3 border text-bg-light">
                      Custom column padding
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Gutters - Vertical & Horizontal -->
          <!-- start Row columns gutters -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Row columns gutters</h4>
              <p class="mb-3 card-subtitle">
                Gutter classes can also be added to row columns. In the
                following example, we use responsive row columns and
                responsive gutter classes.
              </p>
              <div class="container">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                  <div class="col">
                    <div class="p-3 border text-bg-light">Row column</div>
                  </div>
                  <div class="col">
                    <div class="p-3 border text-bg-light">Row column</div>
                  </div>
                  <div class="col">
                    <div class="p-3 border text-bg-light">Row column</div>
                  </div>
                  <div class="col">
                    <div class="p-3 border text-bg-light">Row column</div>
                  </div>
                  <div class="col">
                    <div class="p-3 border text-bg-light">Row column</div>
                  </div>
                  <div class="col">
                    <div class="p-3 border text-bg-light">Row column</div>
                  </div>
                  <div class="col">
                    <div class="p-3 border text-bg-light">Row column</div>
                  </div>
                  <div class="col">
                    <div class="p-3 border text-bg-light">Row column</div>
                  </div>
                  <div class="col">
                    <div class="p-3 border text-bg-light">Row column</div>
                  </div>
                  <div class="col">
                    <div class="p-3 border text-bg-light">Row column</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end Row columns gutters -->
          <!-- start No gutters -->
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">No gutters</h4>
              <p class="mb-3 card-subtitle">
                The gutters between columns in our predefined grid classes
                can be removed with .g-0. This removes the negative
                margins from .row and the horizontal padding from all
                immediate children columns.
              </p>
              <div class="row g-0">
                <div class="col-sm-6 col-md-8 p-3 text-bg-light border">
                  .col-sm-6 .col-md-8
                </div>
                <div class="col-6 col-md-4 p-3 text-bg-light border">
                  .col-6 .col-md-4
                </div>
              </div>
            </div>
          </div>
          <!-- end No gutters -->
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