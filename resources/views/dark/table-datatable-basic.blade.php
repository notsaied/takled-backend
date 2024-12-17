<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  @@include("partials/head.html")
  <title>Modernize Bootstrap Admin</title>
  <link rel="stylesheet" href="{{ URL::asset('build/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" />
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
          @@include("partials/breadcrumb.html", {"title": "Datatable Basic",
          "subtitle": 'Home'})
          <div class="datatables">
            <!-- start Zero Configuration -->
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Zero Configuration</h4>
                <p class="card-subtitle mb-3">
                  DataTables has most features enabled by default, so all
                  you need to do to use it with your own tables is to call
                  the construction function:<code> $().DataTable();</code>. You can refer full documentation from
                  here
                  <a href="https://datatables.net/">Datatables</a>
                </p>
                <div class="table-responsive">
                  <table id="zero_config"
                    class="table table-striped table-bordered text-nowrap align-middle">
                    <thead>
                      <!-- start row -->
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-4.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0"> Tiger Nixon</h6>
                          </div>

                        </td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0"> Garrett Winters</h6>
                          </div>
                        </td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-3.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0"> Ashton Cox</h6>
                          </div>
                        </td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-4.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0"> Cedric Kelly</h6>
                          </div>
                        </td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-5.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0"> Airi Satou</h6>
                          </div>
                        </td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-6.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0"> Brielle Williamson</h6>
                          </div>
                        </td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-7.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0"> Herrod Chandler</h6>
                          </div>
                        </td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-8.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Rhona Davidson</h6>
                          </div>
                        </td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-9.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Colleen Hurst</h6>
                          </div>
                        </td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-10.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Sonya Frost</h6>
                          </div>
                        </td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-11.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Jena Gaines</h6>
                          </div>
                        </td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Quinn Flynn</h6>
                          </div>
                        </td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-3.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Charde Marshall</h6>
                          </div>
                        </td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-4.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Haley Kennedy</h6>
                          </div>
                        </td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-5.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Tatyana Fitzpatrick</h6>
                          </div>
                        </td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-6.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Michael Silva</h6>
                          </div>
                        </td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-7.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Paul Byrd</h6>
                          </div>
                        </td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-8.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Gloria Little</h6>
                          </div>
                        </td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-9.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Bradley Greer</h6>
                          </div>
                        </td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-10.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Dai Rios</h6>
                          </div>
                        </td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-3.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Jenette Caldwell</h6>
                          </div>
                        </td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2011/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Yuri Berry</h6>
                          </div>
                        </td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2009/06/25</td>
                        <td>$675,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-3.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Caesar Vance</h6>
                          </div>
                        </td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2011/12/12</td>
                        <td>$106,450</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-4.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Doris Wilder</h6>
                          </div>
                        </td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>23</td>
                        <td>2010/09/20</td>
                        <td>$85,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-5.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Angelica Ramos</h6>
                          </div>
                        </td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2009/10/09</td>
                        <td>$1,200,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-6.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Gavin Joyce</h6>
                          </div>
                        </td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2010/12/22</td>
                        <td>$92,575</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-7.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Jennifer Chang</h6>
                          </div>
                        </td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2010/11/14</td>
                        <td>$357,650</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-8.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Brenden Wagner</h6>
                          </div>
                        </td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011/06/07</td>
                        <td>$206,850</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-9.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Fiona Green</h6>
                          </div>
                        </td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2010/03/11</td>
                        <td>$850,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-10.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Shou Itou</h6>
                          </div>
                        </td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2011/08/14</td>
                        <td>$163,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-11.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Michelle House</h6>
                          </div>
                        </td>
                        <td>Integration Specialist</td>
                        <td>Sidney</td>
                        <td>37</td>
                        <td>2011/06/02</td>
                        <td>$95,400</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Suki Burks</h6>
                          </div>
                        </td>
                        <td>Developer</td>
                        <td>London</td>
                        <td>53</td>
                        <td>2009/10/22</td>
                        <td>$114,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-3.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Prescott Bartlett</h6>
                          </div>
                        </td>
                        <td>Technical Author</td>
                        <td>London</td>
                        <td>27</td>
                        <td>2011/05/07</td>
                        <td>$145,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-4.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Gavin Cortez</h6>
                          </div>
                        </td>
                        <td>Team Leader</td>
                        <td>San Francisco</td>
                        <td>22</td>
                        <td>2008/10/26</td>
                        <td>$235,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-5.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Martena Mccray</h6>
                          </div>
                        </td>
                        <td>Post-Sales support</td>
                        <td>Edinburgh</td>
                        <td>46</td>
                        <td>2011/03/09</td>
                        <td>$324,050</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-6.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Unity Butler</h6>
                          </div>
                        </td>
                        <td>Marketing Designer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/12/09</td>
                        <td>$85,675</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-7.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Howard Hatfield</h6>
                          </div>
                        </td>
                        <td>Office Manager</td>
                        <td>San Francisco</td>
                        <td>51</td>
                        <td>2008/12/16</td>
                        <td>$164,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-8.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Hope Fuentes</h6>
                          </div>
                        </td>
                        <td>Secretary</td>
                        <td>San Francisco</td>
                        <td>41</td>
                        <td>2010/02/12</td>
                        <td>$109,850</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-9.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Vivian Harrell</h6>
                          </div>
                        </td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>62</td>
                        <td>2009/02/14</td>
                        <td>$452,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-10.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Timothy Mooney</h6>
                          </div>
                        </td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>37</td>
                        <td>2008/12/11</td>
                        <td>$136,200</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-11.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Jackson Bradshaw</h6>
                          </div>
                        </td>
                        <td>Director</td>
                        <td>New York</td>
                        <td>65</td>
                        <td>2008/09/26</td>
                        <td>$645,750</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Olivia Liang</h6>
                          </div>
                        </td>
                        <td>Support Engineer</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2011/02/03</td>
                        <td>$234,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-3.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Bruno Nash</h6>
                          </div>
                        </td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>38</td>
                        <td>2011/05/03</td>
                        <td>$163,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-4.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Sakura Yamamoto</h6>
                          </div>
                        </td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>37</td>
                        <td>2009/08/19</td>
                        <td>$139,575</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-5.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Thor Walton</h6>
                          </div>
                        </td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2013/08/11</td>
                        <td>$98,540</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-6.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Finn Camacho</h6>
                          </div>
                        </td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/07/07</td>
                        <td>$87,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-7.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Serge Baldwin</h6>
                          </div>
                        </td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2012/04/09</td>
                        <td>$138,575</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-8.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Zenaida Frank</h6>
                          </div>
                        </td>
                        <td>Software Engineer</td>
                        <td>New York</td>
                        <td>63</td>
                        <td>2010/01/04</td>
                        <td>$125,250</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-9.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Zorita Serrano</h6>
                          </div>
                        </td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>56</td>
                        <td>2012/06/01</td>
                        <td>$115,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-10.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Jennifer Acosta</h6>
                          </div>
                        </td>
                        <td>Junior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>43</td>
                        <td>2013/02/01</td>
                        <td>$75,650</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-11.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Cara Stevens</h6>
                          </div>
                        </td>
                        <td>Sales Assistant</td>
                        <td>New York</td>
                        <td>46</td>
                        <td>2011/12/06</td>
                        <td>$145,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-2.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Hermione Butler</h6>
                          </div>
                        </td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2011/03/21</td>
                        <td>$356,250</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-3.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Lael Greer</h6>
                          </div>
                        </td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>21</td>
                        <td>2009/02/27</td>
                        <td>$103,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-4.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Jonas Alexander</h6>
                          </div>
                        </td>
                        <td>Developer</td>
                        <td>San Francisco</td>
                        <td>30</td>
                        <td>2010/07/14</td>
                        <td>$86,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-5.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Shad Decker</h6>
                          </div>
                        </td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008/11/13</td>
                        <td>$183,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-6.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Michael Bruce</h6>
                          </div>
                        </td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>
                          <div class="d-flex align-items-center gap-6">
                            <img src="{{ URL::asset('build/images/profile/user-7.jpg') }}" width="45"
                              class="rounded-circle" />
                            <h6 class="mb-0">Donna Snider</h6>
                          </div>
                        </td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                      </tr>
                      <!-- end row -->
                    </tbody>
                    <tfoot>
                      <!-- start row -->
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                      <!-- end row -->
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
            <!-- end Zero Configuration -->
            <!-- start Default Ordering -->
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Default Ordering</h4>
                <p class="card-subtitle mb-3">
                  With DataTables you can alter the ordering
                  characteristics of the table at initialisation time.
                  Using the<code> order | option</code>
                  order initialisation parameter, you can set the table to
                  display the data in exactly the order that you want.
                </p>
                <div class="table-responsive">
                  <table id="default_order" class="table table-striped table-bordered display text-nowrap">
                    <thead>
                      <!-- start row -->
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                      <!-- start row -->
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2011/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Yuri Berry</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2009/06/25</td>
                        <td>$675,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2011/12/12</td>
                        <td>$106,450</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>23</td>
                        <td>2010/09/20</td>
                        <td>$85,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2009/10/09</td>
                        <td>$1,200,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2010/12/22</td>
                        <td>$92,575</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2010/11/14</td>
                        <td>$357,650</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011/06/07</td>
                        <td>$206,850</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2010/03/11</td>
                        <td>$850,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2011/08/14</td>
                        <td>$163,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Michelle House</td>
                        <td>Integration Specialist</td>
                        <td>Sidney</td>
                        <td>37</td>
                        <td>2011/06/02</td>
                        <td>$95,400</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Suki Burks</td>
                        <td>Developer</td>
                        <td>London</td>
                        <td>53</td>
                        <td>2009/10/22</td>
                        <td>$114,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Prescott Bartlett</td>
                        <td>Technical Author</td>
                        <td>London</td>
                        <td>27</td>
                        <td>2011/05/07</td>
                        <td>$145,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Gavin Cortez</td>
                        <td>Team Leader</td>
                        <td>San Francisco</td>
                        <td>22</td>
                        <td>2008/10/26</td>
                        <td>$235,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Martena Mccray</td>
                        <td>Post-Sales support</td>
                        <td>Edinburgh</td>
                        <td>46</td>
                        <td>2011/03/09</td>
                        <td>$324,050</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Unity Butler</td>
                        <td>Marketing Designer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/12/09</td>
                        <td>$85,675</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Howard Hatfield</td>
                        <td>Office Manager</td>
                        <td>San Francisco</td>
                        <td>51</td>
                        <td>2008/12/16</td>
                        <td>$164,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Hope Fuentes</td>
                        <td>Secretary</td>
                        <td>San Francisco</td>
                        <td>41</td>
                        <td>2010/02/12</td>
                        <td>$109,850</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Vivian Harrell</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>62</td>
                        <td>2009/02/14</td>
                        <td>$452,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Timothy Mooney</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>37</td>
                        <td>2008/12/11</td>
                        <td>$136,200</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jackson Bradshaw</td>
                        <td>Director</td>
                        <td>New York</td>
                        <td>65</td>
                        <td>2008/09/26</td>
                        <td>$645,750</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Olivia Liang</td>
                        <td>Support Engineer</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2011/02/03</td>
                        <td>$234,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>38</td>
                        <td>2011/05/03</td>
                        <td>$163,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Sakura Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>37</td>
                        <td>2009/08/19</td>
                        <td>$139,575</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Thor Walton</td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2013/08/11</td>
                        <td>$98,540</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Finn Camacho</td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/07/07</td>
                        <td>$87,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Serge Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2012/04/09</td>
                        <td>$138,575</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Zenaida Frank</td>
                        <td>Software Engineer</td>
                        <td>New York</td>
                        <td>63</td>
                        <td>2010/01/04</td>
                        <td>$125,250</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Zorita Serrano</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>56</td>
                        <td>2012/06/01</td>
                        <td>$115,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jennifer Acosta</td>
                        <td>Junior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>43</td>
                        <td>2013/02/01</td>
                        <td>$75,650</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Cara Stevens</td>
                        <td>Sales Assistant</td>
                        <td>New York</td>
                        <td>46</td>
                        <td>2011/12/06</td>
                        <td>$145,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Hermione Butler</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2011/03/21</td>
                        <td>$356,250</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Lael Greer</td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>21</td>
                        <td>2009/02/27</td>
                        <td>$103,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jonas Alexander</td>
                        <td>Developer</td>
                        <td>San Francisco</td>
                        <td>30</td>
                        <td>2010/07/14</td>
                        <td>$86,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008/11/13</td>
                        <td>$183,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                      </tr>
                      <!-- end row -->
                    </tbody>
                    <tfoot>
                      <!-- start row -->
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                      <!-- end row -->
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
            <!-- end Default Ordering -->
            <!-- start Multi-column ordering -->
            <div class="card">
              <div class="card-body">

                <h4 class="card-title">Multi-column ordering</h4>

                <p class="card-subtitle mb-3">
                  On a per-column basis (i.e. order by a specific column
                  and then a secondary column if the data in the first
                  column is identical), through the
                  <code> columns.orderData</code> option.
                </p>
                <div class="table-responsive">
                  <table id="multi_col_order" class="table table-striped table-bordered display text-nowrap">
                    <thead>
                      <!-- start row -->
                      <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Salary</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                      <!-- start row -->
                      <tr>
                        <td>Tiger</td>
                        <td>Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>$320,800</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Garrett</td>
                        <td>Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>$170,750</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Ashton</td>
                        <td>Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>$86,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Cedric</td>
                        <td>Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>$433,060</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Airi</td>
                        <td>Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>$162,700</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Brielle</td>
                        <td>Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>$372,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Herrod</td>
                        <td>Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>$137,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Rhona</td>
                        <td>Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>$327,900</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Colleen</td>
                        <td>Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>$205,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Sonya</td>
                        <td>Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>$103,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jena</td>
                        <td>Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>$90,560</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Quinn</td>
                        <td>Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>$342,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Charde</td>
                        <td>Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>$470,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Haley</td>
                        <td>Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>$313,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Tatyana</td>
                        <td>Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>$385,750</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Michael</td>
                        <td>Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>$198,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Paul</td>
                        <td>Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>$725,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Gloria</td>
                        <td>Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>$237,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Bradley</td>
                        <td>Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>$132,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Dai</td>
                        <td>Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>$217,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jenette</td>
                        <td>Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>$345,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Yuri</td>
                        <td>Berry</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>$675,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Caesar</td>
                        <td>Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>$106,450</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Doris</td>
                        <td>Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>$85,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Angelica</td>
                        <td>Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>$1,200,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Gavin</td>
                        <td>Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>$92,575</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jennifer</td>
                        <td>Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>$357,650</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Brenden</td>
                        <td>Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>$206,850</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Fiona</td>
                        <td>Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>$850,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Shou</td>
                        <td>Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>$163,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Michelle</td>
                        <td>House</td>
                        <td>Integration Specialist</td>
                        <td>Sidney</td>
                        <td>$95,400</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Suki</td>
                        <td>Burks</td>
                        <td>Developer</td>
                        <td>London</td>
                        <td>$114,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Prescott</td>
                        <td>Bartlett</td>
                        <td>Technical Author</td>
                        <td>London</td>
                        <td>$145,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Gavin</td>
                        <td>Cortez</td>
                        <td>Team Leader</td>
                        <td>San Francisco</td>
                        <td>$235,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Martena</td>
                        <td>Mccray</td>
                        <td>Post-Sales support</td>
                        <td>Edinburgh</td>
                        <td>$324,050</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Unity</td>
                        <td>Butler</td>
                        <td>Marketing Designer</td>
                        <td>San Francisco</td>
                        <td>$85,675</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Howard</td>
                        <td>Hatfield</td>
                        <td>Office Manager</td>
                        <td>San Francisco</td>
                        <td>$164,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Hope</td>
                        <td>Fuentes</td>
                        <td>Secretary</td>
                        <td>San Francisco</td>
                        <td>$109,850</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Vivian</td>
                        <td>Harrell</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>$452,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Timothy</td>
                        <td>Mooney</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>$136,200</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jackson</td>
                        <td>Bradshaw</td>
                        <td>Director</td>
                        <td>New York</td>
                        <td>$645,750</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Olivia</td>
                        <td>Liang</td>
                        <td>Support Engineer</td>
                        <td>Singapore</td>
                        <td>$234,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Bruno</td>
                        <td>Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>$163,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Sakura</td>
                        <td>Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>$139,575</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Thor</td>
                        <td>Walton</td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>$98,540</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Finn</td>
                        <td>Camacho</td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>$87,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Serge</td>
                        <td>Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>$138,575</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Zenaida</td>
                        <td>Frank</td>
                        <td>Software Engineer</td>
                        <td>New York</td>
                        <td>$125,250</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Zorita</td>
                        <td>Serrano</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>$115,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jennifer</td>
                        <td>Acosta</td>
                        <td>Junior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>$75,650</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Cara</td>
                        <td>Stevens</td>
                        <td>Sales Assistant</td>
                        <td>New York</td>
                        <td>$145,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Hermione</td>
                        <td>Butler</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>$356,250</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Lael</td>
                        <td>Greer</td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>$103,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jonas</td>
                        <td>Alexander</td>
                        <td>Developer</td>
                        <td>San Francisco</td>
                        <td>$86,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Shad</td>
                        <td>Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>$183,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Michael</td>
                        <td>Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>$183,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Donna</td>
                        <td>Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>$112,000</td>
                      </tr>
                      <!-- end row -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- end Multi-column ordering -->
            <!-- start DOM Positioning -->
            <div class="card">
              <div class="card-body">

                <h4 class="card-title">DOM Positioning</h4>

                <p class="card-subtitle mb-3">
                  When customising DataTables for your own usage, you
                  might find that the default position of the feature
                  elements (filter input etc) is not quite to your liking.
                  To address this issue DataTables takes inspiration from
                  the CSS 3 Advanced Layout Module and provides the
                  <code> dom</code> initialisation parameter which can be
                  set to indicate where you wish particular features to
                  appear in the DOM. You can also specify div wrapping
                  containers (with an id and / or class) to provide
                  complete layout flexibility.
                </p>
                <div class="table-responsive">
                  <table id="DOM_pos" class="table table-striped table-bordered display text-nowrap">
                    <thead>
                      <!-- start row -->
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                      <!-- start row -->
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2011/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Yuri Berry</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2009/06/25</td>
                        <td>$675,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2011/12/12</td>
                        <td>$106,450</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>23</td>
                        <td>2010/09/20</td>
                        <td>$85,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2009/10/09</td>
                        <td>$1,200,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2010/12/22</td>
                        <td>$92,575</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2010/11/14</td>
                        <td>$357,650</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011/06/07</td>
                        <td>$206,850</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2010/03/11</td>
                        <td>$850,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2011/08/14</td>
                        <td>$163,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Michelle House</td>
                        <td>Integration Specialist</td>
                        <td>Sidney</td>
                        <td>37</td>
                        <td>2011/06/02</td>
                        <td>$95,400</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Suki Burks</td>
                        <td>Developer</td>
                        <td>London</td>
                        <td>53</td>
                        <td>2009/10/22</td>
                        <td>$114,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Prescott Bartlett</td>
                        <td>Technical Author</td>
                        <td>London</td>
                        <td>27</td>
                        <td>2011/05/07</td>
                        <td>$145,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Gavin Cortez</td>
                        <td>Team Leader</td>
                        <td>San Francisco</td>
                        <td>22</td>
                        <td>2008/10/26</td>
                        <td>$235,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Martena Mccray</td>
                        <td>Post-Sales support</td>
                        <td>Edinburgh</td>
                        <td>46</td>
                        <td>2011/03/09</td>
                        <td>$324,050</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Unity Butler</td>
                        <td>Marketing Designer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/12/09</td>
                        <td>$85,675</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Howard Hatfield</td>
                        <td>Office Manager</td>
                        <td>San Francisco</td>
                        <td>51</td>
                        <td>2008/12/16</td>
                        <td>$164,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Hope Fuentes</td>
                        <td>Secretary</td>
                        <td>San Francisco</td>
                        <td>41</td>
                        <td>2010/02/12</td>
                        <td>$109,850</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Vivian Harrell</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>62</td>
                        <td>2009/02/14</td>
                        <td>$452,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Timothy Mooney</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>37</td>
                        <td>2008/12/11</td>
                        <td>$136,200</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jackson Bradshaw</td>
                        <td>Director</td>
                        <td>New York</td>
                        <td>65</td>
                        <td>2008/09/26</td>
                        <td>$645,750</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Olivia Liang</td>
                        <td>Support Engineer</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2011/02/03</td>
                        <td>$234,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>38</td>
                        <td>2011/05/03</td>
                        <td>$163,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Sakura Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>37</td>
                        <td>2009/08/19</td>
                        <td>$139,575</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Thor Walton</td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2013/08/11</td>
                        <td>$98,540</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Finn Camacho</td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/07/07</td>
                        <td>$87,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Serge Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2012/04/09</td>
                        <td>$138,575</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Zenaida Frank</td>
                        <td>Software Engineer</td>
                        <td>New York</td>
                        <td>63</td>
                        <td>2010/01/04</td>
                        <td>$125,250</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Zorita Serrano</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>56</td>
                        <td>2012/06/01</td>
                        <td>$115,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jennifer Acosta</td>
                        <td>Junior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>43</td>
                        <td>2013/02/01</td>
                        <td>$75,650</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Cara Stevens</td>
                        <td>Sales Assistant</td>
                        <td>New York</td>
                        <td>46</td>
                        <td>2011/12/06</td>
                        <td>$145,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Hermione Butler</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2011/03/21</td>
                        <td>$356,250</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Lael Greer</td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>21</td>
                        <td>2009/02/27</td>
                        <td>$103,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jonas Alexander</td>
                        <td>Developer</td>
                        <td>San Francisco</td>
                        <td>30</td>
                        <td>2010/07/14</td>
                        <td>$86,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008/11/13</td>
                        <td>$183,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                      </tr>
                      <!-- end row -->
                    </tbody>
                    <tfoot>
                      <!-- start row -->
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                      <!-- end row -->
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
            <!-- end DOM Positioning -->
            <!-- start Alternative Pagination -->
            <div class="card">
              <div class="card-body">

                <h4 class="card-title">Alternative Pagination</h4>

                <p class="card-subtitle mb-3">
                  The default page control presented by DataTables
                  (forward and backward buttons with up to 7 page numbers
                  in-between) is fine for most situations, but there are
                  cases where you may wish to customise the options
                  presented to the end user. This is done through
                  DataTables' extensible pagination mechanism, the
                  <code> pagingType</code> option.
                </p>
                <div class="table-responsive">
                  <table id="alt_pagination" class="table table-striped table-bordered display text-nowrap">
                    <thead>
                      <!-- start row -->
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                      <!-- start row -->
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2011/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Yuri Berry</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2009/06/25</td>
                        <td>$675,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2011/12/12</td>
                        <td>$106,450</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>23</td>
                        <td>2010/09/20</td>
                        <td>$85,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2009/10/09</td>
                        <td>$1,200,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2010/12/22</td>
                        <td>$92,575</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2010/11/14</td>
                        <td>$357,650</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011/06/07</td>
                        <td>$206,850</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2010/03/11</td>
                        <td>$850,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2011/08/14</td>
                        <td>$163,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Michelle House</td>
                        <td>Integration Specialist</td>
                        <td>Sidney</td>
                        <td>37</td>
                        <td>2011/06/02</td>
                        <td>$95,400</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Suki Burks</td>
                        <td>Developer</td>
                        <td>London</td>
                        <td>53</td>
                        <td>2009/10/22</td>
                        <td>$114,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Prescott Bartlett</td>
                        <td>Technical Author</td>
                        <td>London</td>
                        <td>27</td>
                        <td>2011/05/07</td>
                        <td>$145,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Gavin Cortez</td>
                        <td>Team Leader</td>
                        <td>San Francisco</td>
                        <td>22</td>
                        <td>2008/10/26</td>
                        <td>$235,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Martena Mccray</td>
                        <td>Post-Sales support</td>
                        <td>Edinburgh</td>
                        <td>46</td>
                        <td>2011/03/09</td>
                        <td>$324,050</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Unity Butler</td>
                        <td>Marketing Designer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/12/09</td>
                        <td>$85,675</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Howard Hatfield</td>
                        <td>Office Manager</td>
                        <td>San Francisco</td>
                        <td>51</td>
                        <td>2008/12/16</td>
                        <td>$164,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Hope Fuentes</td>
                        <td>Secretary</td>
                        <td>San Francisco</td>
                        <td>41</td>
                        <td>2010/02/12</td>
                        <td>$109,850</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Vivian Harrell</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>62</td>
                        <td>2009/02/14</td>
                        <td>$452,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Timothy Mooney</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>37</td>
                        <td>2008/12/11</td>
                        <td>$136,200</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jackson Bradshaw</td>
                        <td>Director</td>
                        <td>New York</td>
                        <td>65</td>
                        <td>2008/09/26</td>
                        <td>$645,750</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Olivia Liang</td>
                        <td>Support Engineer</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2011/02/03</td>
                        <td>$234,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>38</td>
                        <td>2011/05/03</td>
                        <td>$163,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Sakura Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>37</td>
                        <td>2009/08/19</td>
                        <td>$139,575</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Thor Walton</td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2013/08/11</td>
                        <td>$98,540</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Finn Camacho</td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/07/07</td>
                        <td>$87,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Serge Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2012/04/09</td>
                        <td>$138,575</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Zenaida Frank</td>
                        <td>Software Engineer</td>
                        <td>New York</td>
                        <td>63</td>
                        <td>2010/01/04</td>
                        <td>$125,250</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Zorita Serrano</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>56</td>
                        <td>2012/06/01</td>
                        <td>$115,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jennifer Acosta</td>
                        <td>Junior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>43</td>
                        <td>2013/02/01</td>
                        <td>$75,650</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Cara Stevens</td>
                        <td>Sales Assistant</td>
                        <td>New York</td>
                        <td>46</td>
                        <td>2011/12/06</td>
                        <td>$145,600</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Hermione Butler</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2011/03/21</td>
                        <td>$356,250</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Lael Greer</td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>21</td>
                        <td>2009/02/27</td>
                        <td>$103,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jonas Alexander</td>
                        <td>Developer</td>
                        <td>San Francisco</td>
                        <td>30</td>
                        <td>2010/07/14</td>
                        <td>$86,500</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008/11/13</td>
                        <td>$183,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                      </tr>
                      <!-- end row -->
                    </tbody>
                    <tfoot>
                      <!-- start row -->
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                      <!-- end row -->
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
            <!-- end Alternative Pagination -->
          </div>
        </div>
      </div>
    </div>
    @@include("partials/customizer.html")
  </div>

  

  <div class="dark-transparent sidebartoggler"></div>
  <script src="{{ URL::asset('build/js/vendor.min.js') }}"></script>
  @@include("partials/scripts.html")
  <script src="{{ URL::asset('build/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::asset('build/js/datatable/datatable-basic.init.js') }}"></script>
</body>

</html>