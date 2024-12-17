<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  @@include("partials/head.html")
  <title>Modernize Bootstrap Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
          @@include("partials/breadcrumb.html", {"title": "Animation", "subtitle": 'Home'})
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Animation</h4>
              <p class="card-subtitle">
                Select the animation style class and check the animation to
                the image, you can use any of this animation to anywhere,
                just place exact word. example
                <code>.animated .bounce</code>
              </p>
              <form class="mb-4 mt-5">
                <div class="row justify-content-center">
                  <div class="col-sm-8">
                    <div class="input-group">
                      <select class="form-select js--animations">
                        <optgroup label="Attention Seekers">
                          <option value="bounce">bounce</option>
                          <option value="flash">flash</option>
                          <option value="pulse">pulse</option>
                          <option value="rubberBand">rubberBand</option>
                          <option value="shake">shake</option>
                          <option value="swing">swing</option>
                          <option value="tada">tada</option>
                          <option value="wobble">wobble</option>
                          <option value="jello">jello</option>
                        </optgroup>
                        <optgroup label="Bouncing Entrances">
                          <option value="bounceIn">bounceIn</option>
                          <option value="bounceInDown">bounceInDown</option>
                          <option value="bounceInLeft">bounceInLeft</option>
                          <option value="bounceInRight">
                            bounceInRight
                          </option>
                          <option value="bounceInUp">bounceInUp</option>
                        </optgroup>
                        <optgroup label="Bouncing Exits">
                          <option value="bounceOut">bounceOut</option>
                          <option value="bounceOutDown">
                            bounceOutDown
                          </option>
                          <option value="bounceOutLeft">
                            bounceOutLeft
                          </option>
                          <option value="bounceOutRight">
                            bounceOutRight
                          </option>
                          <option value="bounceOutUp">bounceOutUp</option>
                        </optgroup>
                        <optgroup label="Fading Entrances">
                          <option value="fadeIn">fadeIn</option>
                          <option value="fadeInDown">fadeInDown</option>
                          <option value="fadeInDownBig">
                            fadeInDownBig
                          </option>
                          <option value="fadeInLeft">fadeInLeft</option>
                          <option value="fadeInLeftBig">
                            fadeInLeftBig
                          </option>
                          <option value="fadeInRight">fadeInRight</option>
                          <option value="fadeInRightBig">
                            fadeInRightBig
                          </option>
                          <option value="fadeInUp">fadeInUp</option>
                          <option value="fadeInUpBig">fadeInUpBig</option>
                        </optgroup>
                        <optgroup label="Fading Exits">
                          <option value="fadeOut">fadeOut</option>
                          <option value="fadeOutDown">fadeOutDown</option>
                          <option value="fadeOutDownBig">
                            fadeOutDownBig
                          </option>
                          <option value="fadeOutLeft">fadeOutLeft</option>
                          <option value="fadeOutLeftBig">
                            fadeOutLeftBig
                          </option>
                          <option value="fadeOutRight">fadeOutRight</option>
                          <option value="fadeOutRightBig">
                            fadeOutRightBig
                          </option>
                          <option value="fadeOutUp">fadeOutUp</option>
                          <option value="fadeOutUpBig">fadeOutUpBig</option>
                        </optgroup>
                        <optgroup label="Flippers">
                          <option value="flip">flip</option>
                          <option value="flipInX">flipInX</option>
                          <option value="flipInY">flipInY</option>
                          <option value="flipOutX">flipOutX</option>
                          <option value="flipOutY">flipOutY</option>
                        </optgroup>
                        <optgroup label="Lightspeed">
                          <option value="lightSpeedIn">lightSpeedIn</option>
                          <option value="lightSpeedOut">
                            lightSpeedOut
                          </option>
                        </optgroup>
                        <optgroup label="Rotating Entrances">
                          <option value="rotateIn">rotateIn</option>
                          <option value="rotateInDownLeft">
                            rotateInDownLeft
                          </option>
                          <option value="rotateInDownRight">
                            rotateInDownRight
                          </option>
                          <option value="rotateInUpLeft">
                            rotateInUpLeft
                          </option>
                          <option value="rotateInUpRight">
                            rotateInUpRight
                          </option>
                        </optgroup>
                        <optgroup label="Rotating Exits">
                          <option value="rotateOut">rotateOut</option>
                          <option value="rotateOutDownLeft">
                            rotateOutDownLeft
                          </option>
                          <option value="rotateOutDownRight">
                            rotateOutDownRight
                          </option>
                          <option value="rotateOutUpLeft">
                            rotateOutUpLeft
                          </option>
                          <option value="rotateOutUpRight">
                            rotateOutUpRight
                          </option>
                        </optgroup>
                        <optgroup label="Sliding Entrances">
                          <option value="slideInUp">slideInUp</option>
                          <option value="slideInDown">slideInDown</option>
                          <option value="slideInLeft">slideInLeft</option>
                          <option value="slideInRight">slideInRight</option>
                        </optgroup>
                        <optgroup label="Sliding Exits">
                          <option value="slideOutUp">slideOutUp</option>
                          <option value="slideOutDown">slideOutDown</option>
                          <option value="slideOutLeft">slideOutLeft</option>
                          <option value="slideOutRight">
                            slideOutRight
                          </option>
                        </optgroup>
                        <optgroup label="Zoom Entrances">
                          <option value="zoomIn">zoomIn</option>
                          <option value="zoomInDown">zoomInDown</option>
                          <option value="zoomInLeft">zoomInLeft</option>
                          <option value="zoomInRight">zoomInRight</option>
                          <option value="zoomInUp">zoomInUp</option>
                        </optgroup>
                        <optgroup label="Zoom Exits">
                          <option value="zoomOut">zoomOut</option>
                          <option value="zoomOutDown">zoomOutDown</option>
                          <option value="zoomOutLeft">zoomOutLeft</option>
                          <option value="zoomOutRight">zoomOutRight</option>
                          <option value="zoomOutUp">zoomOutUp</option>
                        </optgroup>
                        <optgroup label="Specials">
                          <option value="hinge">hinge</option>
                          <option value="rollIn">rollIn</option>
                          <option value="rollOut">rollOut</option>
                        </optgroup>
                      </select>
                      <span class="input-group-btn">
                        <button class="btn btn-primary js--triggerAnimation rounded-start-0" type="button">
                          Animate Me !
                        </button>
                      </span>
                    </div>
                  </div>
                </div>
              </form>
              <!-- / Form -->
              <!-- div -->
              <div class="row justify-content-center">
                <div class="text-center col-lg-4 col-md-6">
                  <span class="d-block" id="animationSandbox">
                    <img src="{{ URL::asset('build/images/backgrounds/img1.jpg') }}" class="img-fluid rounded-1" alt="user" />
                  </span>
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
  <script src="{{ URL::asset('build/js/plugins/animation-init.js') }}"></script>
</body>

</html>