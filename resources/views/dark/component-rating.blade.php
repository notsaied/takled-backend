<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  @@include("partials/head.html")
  <title>Modernize Bootstrap Admin</title>
  <link rel="stylesheet" href="{{ URL::asset('build/libs/jquery-raty-js/lib/jquery.raty.css') }}">
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
          @@include("partials/breadcrumb.html", {"title": "Rating", "subtitle": 'Home'})
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Default</h4>
                </div>
                <div class="card-body">
                  <p>This is the most basic example of ratings.</p>
                  <div id="default-star-rating"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Score</h4>
                </div>
                <div class="card-body">
                  <p>Used when we want starts with a saved rating.</p>
                  <div id="score-rating"></div>

                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Number Of Stars</h4>
                </div>
                <div class="card-body">
                  <p>Changes the number of stars.</p>
                  <div id="no-of-stars"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Number Max</h4>
                </div>
                <div class="card-body">
                  <p>Change the maximum of stars that can be created.</p>
                  <div id="max-number-stars"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Read Only</h4>
                </div>
                <div class="card-body">
                  <p>
                    You can prevent users to vote. It can be applied with or
                    without score.
                  </p>
                  <div id="read-only-stars"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">No Rated Message</h4>
                </div>
                <div class="card-body">
                  <p>
                    If readOnly is enabled and there is no score, the hint "Not
                    rated yet!" will be shown for all stars.
                  </p>
                  <div id="no-rated-msg"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Cancel</h4>
                </div>
                <div class="card-body">
                  <p>
                    Add a cancel button on the left side of the stars to cancel
                    the score.
                  </p>
                  <div id="cancel-star"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Space</h4>
                </div>
                <div class="card-body">
                  <p>
                    You can change the space between the star and make them
                    conjusted.
                  </p>
                  <div id="space-star"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Single</h4>
                </div>
                <div class="card-body">
                  <p>
                    You can turn on just the mouseovered star instead all from
                    the first until that one.
                  </p>
                  <div id="single-star"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Half</h4>
                </div>
                <div class="card-body">
                  <p>
                    Enables the half star mouseover to be possible vote with
                    half values.
                  </p>
                  <div id="half-star"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Star Half</h4>
                </div>
                <div class="card-body">
                  <p>Changes the color of the half star.</p>
                  <div id="star-half"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Custom Icon</h4>
                </div>
                <div class="card-body">
                  <p>Change the maximum of stars that can be created.</p>
                  <div id="custom-icon-star"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Icon Range</h4>
                </div>
                <div class="card-body">
                  <p>Change the maximum of stars that can be created.</p>
                  <div id="icon-range"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Round Figure Enabled</h4>
                </div>
                <div class="card-body">
                  <ul class="list-style-none mb-3">
                    <li>
                      Down: score &lt;= x.25 the star will be rounded down;
                    </li>
                    <li>
                      Half: score &gt;= x.26 and &lt;= x.75 the star will be a
                      half star;
                    </li>
                    <li>Up: score &gt;= x.76 the star will be rounded up.</li>
                  </ul>
                  <div id="round-enabled"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="card">
                <div class="border-bottom title-part-padding">
                  <h4 class="card-title mb-0">Round Figure Disabled</h4>
                </div>
                <div class="card-body">
                  <ul class="list-style-none mb-3">
                    <li>Down: score &lt; x.6 the star will be rounded down;</li>
                    <li>Up: score &gt;= x.6 the star will be rounded up;</li>
                  </ul>
                  <div id="round-disabled"></div>
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
  <script src="{{ URL::asset('build/js/vendor.min.js') }}"></script>
  @@include("partials/scripts.html")
  <script src="{{ URL::asset('build/libs/jquery-raty-js/lib/jquery.raty.js') }}"></script>
  <script src="{{ URL::asset('build/js/plugins/rating-init.js') }}"></script>
</body>

</html>