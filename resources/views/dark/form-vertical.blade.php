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
          @@include("partials/breadcrumb.html", {"title": "Vertical Form", "subtitle": 'Home'})
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="px-4 py-3 border-bottom">
                  <h4 class="card-title mb-0">Basic Layout</h4>
                </div>
                <div class="card-body p-4">
                  <div class="mb-4">
                    <label for="exampleInputname" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputname" placeholder="John Deo">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputtext1" class="form-label">Company</label>
                    <input type="text" class="form-control" id="exampleInputtext1" placeholder="ACME Inc.">
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Email</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="John Deo">
                      <span class="input-group-text px-6" id="basic-addon1">@example.com</span>
                    </div>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputtext2" class="form-label">Phone No</label>
                    <input type="text" class="form-control" id="exampleInputtext2" placeholder="412 2150 451">
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Message</label>
                    <textarea class="form-control p-7" name="" id="" cols="20" rows="1"
                      placeholder="Hi, Do you  have a moment to talk Jeo ?"></textarea>
                  </div>
                  <BUtton class="btn btn-primary">Send</BUtton>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="px-4 py-3 border-bottom">
                  <h4 class="card-title mb-0">Basic Layout</h4>
                </div>
                <div class="card-body p-4">
                  <div class="mb-4">
                    <label class="form-label">Name</label>
                    <div class="input-group">
                      <span class="input-group-text px-6" id="basic-addon1"><i class="ti ti-user fs-6"></i></span>
                      <input type="text" class="form-control ps-2" placeholder="John Deo">
                    </div>
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Company</label>
                    <div class="input-group">
                      <span class="input-group-text px-6" id="basic-addon1"><i
                          class="ti ti-building-arch fs-6"></i></span>
                      <input type="text" class="form-control ps-2" placeholder="ACME Inc.">
                    </div>
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Email</label>
                    <div class="input-group">
                      <span class="input-group-text px-6" id="basic-addon1"><i class="ti ti-mail fs-6"></i></span>
                      <input type="text" class="form-control ps-2" placeholder="John Deo">
                    </div>
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Phone No</label>
                    <div class="input-group">
                      <span class="input-group-text px-6" id="basic-addon1"><i class="ti ti-phone fs-6"></i></span>
                      <input type="text" class="form-control ps-2" placeholder="412 2150 451">
                    </div>
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Message</label>
                    <div class="input-group">
                      <span class="input-group-text px-6" id="basic-addon1"><i class="ti ti-message-2 fs-6"></i></span>
                      <textarea class="form-control p-7 ps-2" name="" id="" cols="20" rows="1"
                        placeholder="Hi, Do you  have a moment to talk Jeo ?"></textarea>
                    </div>
                  </div>
                  <BUtton class="btn btn-primary">Send</BUtton>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="px-4 py-3 border-bottom">
                  <h4 class="card-title mb-0">Multi Column with Form Separator</h4>
                </div>
                <div class="card-body p-4 border-bottom">
                  <h5 class="fs-4 fw-semibold mb-4">Account Details</h5>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-4">
                        <label for="exampleInputtext3" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputtext3" placeholder="John Deo">
                      </div>
                      <div>
                        <label class="form-label">Password</label>
                        <div class="input-group">
                          <input type="password" class="form-control" placeholder="John Deo">
                          <span class="input-group-text px-6" id="basic-addon1"><i class="ti ti-eye fs-6"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-4">
                        <label class="form-label">Email</label>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="John Deo">
                          <span class="input-group-text px-6" id="basic-addon1">@example.com</span>
                        </div>
                      </div>
                      <div>
                        <label class="form-label">Confirm Password</label>
                        <div class="input-group">
                          <input type="password" class="form-control" placeholder="John Deo">
                          <span class="input-group-text px-6" id="basic-addon1"><i class="ti ti-eye fs-6"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body p-4">
                  <h5 class="fs-4 fw-semibold mb-4">Personal Info</h5>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-4">
                        <label for="exampleInputfirstname4" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="exampleInputfirstname4" placeholder="John">
                      </div>
                      <div class="mb-4">
                        <label class="form-label">Country</label>
                        <select class="form-select" aria-label="Default select example">
                          <option selected="">India</option>
                          <option value="1">United Kingdom</option>
                          <option value="2">Srilanka</option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputBirthDate" class="form-label">Birth Date</label>
                        <input id="exampleInputBirthDate" class="form-control" type="date" />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-4">
                        <label for="exampleInputlastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputlastname" placeholder="Deo">
                      </div>
                      <div class="mb-4">
                        <label class="form-label">Language</label>
                        <select class="form-select" aria-label="Default select example">
                          <option selected="">English</option>
                          <option value="1">French</option>
                        </select>
                      </div>
                      <div class="mb-4">
                        <label for="exampleInputphoneno" class="form-label">Phone no</label>
                        <input type="text" class="form-control" id="exampleInputphoneno" placeholder="123 4567 201">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-flex align-items-center gap-3">
                        <button class="btn btn-primary">Submit</button>
                        <button class="btn bg-danger-subtle text-danger">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="collapsible-section mb-4">
            <h5 class="card-title fw-semibold mb-4">Collapsible Section</h5>
            <div class="accordion accordion-flush position-relative overflow-hidden" id="accordionFlushExample">
              <div class="accordion-item mb-3 shadow-none border rounded-top">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed fs-4 fw-semibold px-3 py-6 lh-base border-0 rounded-top"
                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                    aria-controls="flush-collapseOne">
                    Delivery Address
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body px-3 fw-normal">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname" class="form-label">First Name</label>
                          <input type="text" class="form-control" id="exampleInputfirstname" placeholder="John">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputphoneno3" class="form-label">Phone no</label>
                          <input type="text" class="form-control" id="exampleInputphoneno3" placeholder="1340 2154 123">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="mb-4">
                          <label class="form-label">Address</label>
                          <textarea class="form-control p-7" name="" id="" cols="20" rows="1"
                            placeholder="150, Ring Road"></textarea>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputpincode" class="form-label">Pincode</label>
                          <input type="text" class="form-control" id="exampleInputpincode" placeholder="120125">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputlandmark" class="form-label">Landmark</label>
                          <input type="text" class="form-control" id="exampleInputlandmark"
                            placeholder="Nr. Wall Street">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputcity" class="form-label">City</label>
                          <input type="text" class="form-control" id="exampleInputcity" placeholder="Jackson">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label class="form-label">State</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected="">Alaska</option>
                            <option value="1">Arizona</option>
                            <option value="2">Hawaii</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div>
                      <h6 class="fw-semibold">Address Type</h6>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioHome"
                          value="option1">
                        <label class="form-check-label" for="inlineRadioHome">Home (All day delivery)</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioOffice"
                          value="option1">
                        <label class="form-check-label" for="inlineRadioOffice"> Office (Delivery between 10 AM - 5
                          PM)</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3 shadow-none border">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed fs-4 fw-semibold px-3 py-6 lh-base border-0" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                    aria-controls="flush-collapseTwo">
                    Delivery Options
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body px-3 fw-normal">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioStandard"
                        value="option1">
                      <label class="form-check-label" for="inlineRadioStandard">Standard 3-5 Days</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioExpress"
                        value="option1">
                      <label class="form-check-label" for="inlineRadioExpress">Express</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioOvernight"
                        value="option1">
                      <label class="form-check-label" for="inlineRadioOvernight">Overnight</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3 shadow-none border rounded-bottom">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed fs-4 fw-semibold px-3 py-6 lh-base border-0 rounded-bottom"
                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                    aria-controls="flush-collapseThree">
                    Payment Method
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body px-3 fw-normal">
                    <div class="mb-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                          id="inlineRadioCreditDebitATMCard" value="option1">
                        <label class="form-check-label" for="inlineRadioCreditDebitATMCard">Credit/Debit/ATM
                          Card</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                          id="inlineRadioCashonDelivery" value="option1">
                        <label class="form-check-label" for="inlineRadioCashonDelivery">Cash on Delivery</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="mb-4">
                          <label for="exampleInputCardNumber" class="form-label">Card Number</label>
                          <input type="text" class="form-control" id="exampleInputCardNumber"
                            placeholder="1250 4521 5630 1540">
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-4">
                              <label for="exampleInputname2" class="form-label">Name</label>
                              <input type="text" class="form-control" id="exampleInputname2" placeholder="John Deo">
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="mb-4">
                              <label for="exampleInputexpdate" class="form-label">Exp. Date</label>
                              <input type="text" class="form-control" id="exampleInputexpdate" placeholder="MM/YY">
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <div class="mb-4">
                              <label for="exampleInputtext1" class="form-label">CCV Code</label>
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="456">
                                <span class="input-group-text px-6" id="basic-addon1"><i
                                    class="ti ti-help fs-6"></i></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                          <button class="btn btn-primary">Submit</button>
                          <button class="btn bg-danger-subtle text-danger">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-with-tabs">
            <h4 class="card-title mb-4 mt-5 text-dark">Form with Tabs</h4>
            <div class="card">
              <ul class="nav nav-pills user-profile-tab border-bottom" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                    id="pills-personal-info-tab" data-bs-toggle="pill" data-bs-target="#pills-personal-info"
                    type="button" role="tab" aria-controls="pills-personal-info" aria-selected="true">
                    Personal Info
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                    id="pills-account-details-tab" data-bs-toggle="pill" data-bs-target="#pills-account-details"
                    type="button" role="tab" aria-controls="pills-account-details" aria-selected="false">
                    Account Details
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                    id="pills-social-links-tab" data-bs-toggle="pill" data-bs-target="#pills-social-links" type="button"
                    role="tab" aria-controls="pills-social-links" aria-selected="false">
                    Social Links
                  </button>
                </li>
              </ul>
              <div class="card-body p-4">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-personal-info" role="tabpanel"
                    aria-labelledby="pills-personal-info-tab" tabindex="0">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfirstname2" class="form-label">First Name</label>
                          <input type="text" class="form-control" id="exampleInputfirstname2" placeholder="John">
                        </div>
                        <div class="mb-4">
                          <label class="form-label">Country</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected="">India</option>
                            <option value="1">United Kingdom</option>
                            <option value="2">Srilanka</option>
                          </select>
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputfirstname3" class="form-label">First Name</label>
                          <input id="exampleInputfirstname3" class="form-control" type="date">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputlastname2" class="form-label">Last Name</label>
                          <input type="text" class="form-control" id="exampleInputlastname2" placeholder="Deo">
                        </div>
                        <div class="mb-4">
                          <label class="form-label">Language</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected="">English</option>
                            <option value="1">French</option>
                          </select>
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputphoneno2" class="form-label">Phone no</label>
                          <input type="text" class="form-control" id="exampleInputphoneno2" placeholder="123 4567 201">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-flex align-items-center gap-3">
                          <button class="btn btn-primary">Submit</button>
                          <button class="btn bg-danger-subtle text-danger">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-account-details" role="tabpanel"
                    aria-labelledby="pills-account-details-tab" tabindex="0">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputUsername" class="form-label">Username</label>
                          <input type="text" class="form-control" id="exampleInputUsername" placeholder="John Deo">
                        </div>
                        <div class="mb-4">
                          <label class="form-label">Password</label>
                          <div class="input-group">
                            <input type="password" class="form-control" placeholder="John Deo">
                            <span class="input-group-text px-6" id="basic-addon1"><i class="ti ti-eye fs-6"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label class="form-label">Email</label>
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="John Deo">
                            <span class="input-group-text px-6" id="basic-addon1">@example.com</span>
                          </div>
                        </div>
                        <div class="mb-4">
                          <label class="form-label">Confirm Password</label>
                          <div class="input-group">
                            <input type="password" class="form-control" placeholder="John Deo">
                            <span class="input-group-text px-6" id="basic-addon1"><i class="ti ti-eye fs-6"></i></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-flex align-items-center gap-3">
                          <button class="btn btn-primary">Submit</button>
                          <button class="btn bg-danger-subtle text-danger">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-social-links" role="tabpanel"
                    aria-labelledby="pills-social-links-tab" tabindex="0">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputtwitter" class="form-label">Twitter</label>
                          <input type="text" class="form-control" id="exampleInputtwitter"
                            placeholder="https://twitter.com/abc">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputgoogle" class="form-label">Google</label>
                          <input type="text" class="form-control" id="exampleInputgoogle"
                            placeholder="https://plus.google.com/abc">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputinstagram" class="form-label">Instagram</label>
                          <input type="text" class="form-control" id="exampleInputinstagram"
                            placeholder="https://instagram.com/abc">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-4">
                          <label for="exampleInputfacebook" class="form-label">Facebook</label>
                          <input type="text" class="form-control" id="exampleInputfacebook"
                            placeholder="https://facebook.com/abc">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputlinkedin" class="form-label">Linkedin</label>
                          <input type="text" class="form-control" id="exampleInputlinkedin"
                            placeholder="https://linkedin.com/abc">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputquora" class="form-label">Quora</label>
                          <input type="text" class="form-control" id="exampleInputquora"
                            placeholder="https://quora.com/abc">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-flex align-items-center gap-3">
                          <button class="btn btn-primary">Submit</button>
                          <button class="btn bg-danger-subtle text-danger">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
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