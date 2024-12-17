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
          @@include("partials/breadcrumb.html", {"title": "FAQ", "subtitle": 'Home'})
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="text-center mb-7">
                <h3 class="fw-semibold">Frequently asked questions</h3>
                <p class="fw-normal mb-0 fs-4">Get to know more about ready-to-use admin dashboard templates</p>
              </div>
              <div class="accordion accordion-flush mb-5 card position-relative overflow-hidden"
                id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed fs-4 fw-semibold shadow-none" type="button"
                      data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                      aria-controls="flush-collapseOne">
                      What is an Admin Dashboard?
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body fw-normal">
                      Admin Dashboard is the backend interface of a website or an application that helps to manage the
                      website's overall content and settings. It is widely used by the site owners to keep track of
                      their website,
                      make changes to their content, and more.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed fs-4 fw-semibold shadow-none" type="button"
                      data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                      aria-controls="flush-collapseTwo">
                      What should an admin dashboard template include?
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body fw-normal">
                      Admin dashboard template should include user & SEO friendly design with a variety of components
                      and
                      application designs to help create your own web application with ease. This could include
                      customization
                      options, technical support and about 6 months of future updates.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed fs-4 fw-semibold shadow-none" type="button"
                      data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                      aria-controls="flush-collapseThree">
                      Why should I buy admin templates from Wrappixel?
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body fw-normal">
                      Wrappixel offers high-quality templates that are easy to use and fully customizable. With over
                      101,801
                      happy customers & trusted by 10,000+ Companies. Wrappixel is recognized as the leading online
                      source
                      for buying admin templates.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingfour">
                    <button class="accordion-button collapsed fs-4 fw-semibold shadow-none" type="button"
                      data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false"
                      aria-controls="flush-collapsefour">
                      Do Wrappixel offers a money back guarantee?
                    </button>
                  </h2>
                  <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body fw-normal">
                      There is no money back guarantee in most companies, but if you are unhappy with our product,
                      Wrappixel
                      gives you a 100% money back guarantee.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card bg-primary-subtle rounded-2">
            <div class="card-body text-center">
              <div class="d-flex align-items-center justify-content-center mb-4 pt-8">
                <a href="javascript:void(0)">
                  <img src="{{ URL::asset('build/images/profile/user-3.jpg') }}"
                    class="rounded-circle me-n2 card-hover border border-2 border-white" width="44" height="44">
                </a>
                <a href="javascript:void(0)">
                  <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}"
                    class="rounded-circle me-n2 card-hover border border-2 border-white" width="44" height="44">
                </a>
                <a href="javascript:void(0)">
                  <img src="{{ URL::asset('build/images/profile/user-4.jpg') }}"
                    class="rounded-circle me-n2 card-hover border border-2 border-white" width="44" height="44">
                </a>
              </div>
              <h3 class="fw-semibold">Still have questions</h3>
              <p class="fw-normal mb-4 fs-4">Can't find the answer your're looking for ? Please chat to our friendly
                team.</p>
              <a href="javascript:void(0)" class="btn btn-primary mb-8">Chat with us</a>
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