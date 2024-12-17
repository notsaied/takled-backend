<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  @@include("partials/head.html")
  <title>Modernize Bootstrap Admin</title>
  <link rel="stylesheet" href="{{ URL::asset('build/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
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
          @@include("partials/breadcrumb.html", {"title": "Datatable Api", "subtitle": 'Home'})
          <div class="datatables">
            <!-- start Add Row -->
            <div class="card">
              <div class="card-body">
                <div class="mb-2">
                  <h4 class="card-title">Add Row</h4>
                </div>
                <p class="card-subtitle mb-3">
                  New rows can be added to a DataTable using the
                  <code> row.add()</code> API method. Simply call the API
                  function with the data for the new row (be it an array or
                  object). Multiple rows can be added using the
                  <code> rows.add()</code> method (note the plural). Data
                  can likewise be updated with the
                  <code>row().data()</code> and
                  <code> row().remove()</code> methods. You can refer full
                  documentation from here
                  <a href="https://datatables.net/">Datatables</a>
                </p>
                <button id="addRow" class="btn btn-primary mb-2">
                  <i class="ti ti-plus fs-4"></i>&nbsp; Add
                  new row
                </button>
                <div class="table-responsive">
                  <table id="t_add_row" class="table table-striped w-100 table-bordered display text-nowrap">
                    <thead>
                      <!-- start row -->
                      <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                        <th>Column 3</th>
                        <th>Column 4</th>
                        <th>Column 5</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tfoot>
                      <!-- start row -->
                      <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                        <th>Column 3</th>
                        <th>Column 4</th>
                        <th>Column 5</th>
                      </tr>
                      <!-- end row -->
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
            <!-- end Add Row -->
            <!-- start Individual column searching (select inputs) -->
            <div class="card">
              <div class="card-body">
                <div class="mb-2">
                  <h4 class="card-title">
                    Individual column searching (select inputs)
                  </h4>
                </div>
                <p class="card-subtitle mb-3">
                  After the table is initialised, the API is used to build
                  the select inputs through the use of the
                  <code> column().data()</code> method to get the data for
                  each column in turn. The helper methods
                  <code>unique()</code> and <code> sort()</code> are also
                  used to reduce the data for set input to unique and
                  ordered elements. Finally the change event from the select
                  input is used to trigger a column search using the
                  <code>column().search()</code> method.
                </p>
                <div class="table-responsive">
                  <table
                    class="table table-striped w-100 table-bordered datatable-select-inputs text-nowrap">
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
            <!-- end Individual column searching (select inputs) -->
            <!-- start Individual column searching (text inputs) -->
            <div class="card">
              <div class="card-body">
                <div class="mb-2">
                  <h4 class="card-title">
                    Individual column searching (text inputs)
                  </h4>
                </div>
                <p class="card-subtitle mb-3">
                  DataTables has the ability to apply searching to a
                  specific column through the
                  <code> column().search()</code> method (note that the name
                  of the method is search not filter, since
                  <code> filter()</code> is used to apply a filter to a
                  result set).
                </p>
                <div class="table-responsive">
                  <table class="table table-striped w-100 table-bordered text-inputs-searching text-nowrap">
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
            <!-- end Individual column searching (text inputs) -->
            <!-- start Row selection (multiple rows) -->
            <div class="card">
              <div class="card-body">
                <div class="mb-2">
                  <h4 class="card-title">Row selection (multiple rows)</h4>
                </div>
                <p class="card-subtitle mb-3">
                  It can be useful to provide the user with the option to
                  select rows in a DataTable. This can be done by using a
                  click event to add / remove a class on the table rows. The
                  <code> rows().data()</code> method can then be used to get
                  the data for the selected rows. In this case it is simply
                  counting the number of selected rows, but much more
                  complex interactions can easily be developed.
                </p>
                <button id="button" class="btn btn-primary mb-2">
                  <i class="ri-filter-line"></i> Row count
                </button>
                <div class="table-responsive">
                  <table id="row_select"
                    class="table table-striped w-100 table-bordered display text-nowrap">
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
            <!-- end Row selection (multiple rows) -->
            <!-- start Form Inputs -->
            <div class="card">
              <div class="card-body">
                <div class="mb-2">
                  <h4 class="card-title">Form Inputs</h4>
                </div>
                <p class="card-subtitle mb-3">
                  In order to perform paging, ordering, searching etc,
                  DataTables can remove rows and cells from the document
                  (i.e. those rows / cells which are not needed are not
                  inserted into the document). This increases performance
                  and compatibility, however, it means that submitting forms
                  which span multiple pages requires a little bit of
                  additional work to get the information that is not in the
                  document any longer.
                </p>
                <button class="btn btn-primary me-1 inputs-submit">
                  <i class="ri-file-fill align-middle"></i> Submit form
                </button>
                <div class="table-responsive mt-3">
                  <table id="form_inputs"
                    class="table table-striped w-100 table-bordered display text-nowrap align-middle">
                    <thead>
                      <!-- start row -->
                      <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th>Office</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                      <!-- start row -->
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>
                          <input type="text" class="form-control" id="row-1-age" name="row-1-age" value="61" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-1-position" name="row-1-position"
                            value="System Architect" />
                        </td>
                        <td>
                          <select class="form-select" size="1" id="row-1-office" name="row-1-office">
                            <option value="Edinburgh" selected="selected">
                              Edinburgh
                            </option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Garrett Winters</td>
                        <td>
                          <input type="text" class="form-control" id="row-2-age" name="row-2-age" value="63" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-2-position" name="row-2-position"
                            value="Accountant" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-2-office" name="row-2-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo" selected="selected">
                              Tokyo
                            </option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Ashton Cox</td>
                        <td>
                          <input type="text" class="form-control" id="row-3-age" name="row-3-age" value="66" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-3-position" name="row-3-position"
                            value="Junior Technical Author" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-3-office" name="row-3-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco" selected="selected">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>
                          <input type="text" class="form-control" id="row-4-age" name="row-4-age" value="22" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-4-position" name="row-4-position"
                            value="Senior Javascript Developer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-4-office" name="row-4-office">
                            <option value="Edinburgh" selected="selected">
                              Edinburgh
                            </option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Airi Satou</td>
                        <td>
                          <input type="text" class="form-control" id="row-5-age" name="row-5-age" value="33" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-5-position" name="row-5-position"
                            value="Accountant" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-5-office" name="row-5-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo" selected="selected">
                              Tokyo
                            </option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>
                          <input type="text" class="form-control" id="row-6-age" name="row-6-age" value="61" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-6-position" name="row-6-position"
                            value="Integration Specialist" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-6-office" name="row-6-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York" selected="selected">
                              New York
                            </option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>
                          <input type="text" class="form-control" id="row-7-age" name="row-7-age" value="59" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-7-position" name="row-7-position"
                            value="Sales Assistant" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-7-office" name="row-7-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco" selected="selected">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>
                          <input type="text" class="form-control" id="row-8-age" name="row-8-age" value="55" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-8-position" name="row-8-position"
                            value="Integration Specialist" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-8-office" name="row-8-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo" selected="selected">
                              Tokyo
                            </option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>
                          <input type="text" class="form-control" id="row-9-age" name="row-9-age" value="39" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-9-position" name="row-9-position"
                            value="Javascript Developer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-9-office" name="row-9-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco" selected="selected">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Sonya Frost</td>
                        <td>
                          <input type="text" class="form-control" id="row-10-age" name="row-10-age" value="23" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-10-position" name="row-10-position"
                            value="Software Engineer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-10-office" name="row-10-office">
                            <option value="Edinburgh" selected="selected">
                              Edinburgh
                            </option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jena Gaines</td>
                        <td>
                          <input type="text" class="form-control" id="row-11-age" name="row-11-age" value="30" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-11-position" name="row-11-position"
                            value="Office Manager" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-11-office" name="row-11-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London" selected="selected">
                              London
                            </option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>
                          <input type="text" class="form-control" id="row-12-age" name="row-12-age" value="22" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-12-position" name="row-12-position"
                            value="Support Lead" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-12-office" name="row-12-office">
                            <option value="Edinburgh" selected="selected">
                              Edinburgh
                            </option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Charde Marshall</td>
                        <td>
                          <input type="text" class="form-control" id="row-13-age" name="row-13-age" value="36" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-13-position" name="row-13-position"
                            value="Regional Director" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-13-office" name="row-13-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco" selected="selected">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>
                          <input type="text" class="form-control" id="row-14-age" name="row-14-age" value="43" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-14-position" name="row-14-position"
                            value="Senior Marketing Designer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-14-office" name="row-14-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London" selected="selected">
                              London
                            </option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>
                          <input type="text" class="form-control" id="row-15-age" name="row-15-age" value="19" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-15-position" name="row-15-position"
                            value="Regional Director" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-15-office" name="row-15-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London" selected="selected">
                              London
                            </option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Michael Silva</td>
                        <td>
                          <input type="text" class="form-control" id="row-16-age" name="row-16-age" value="66" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-16-position" name="row-16-position"
                            value="Marketing Designer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-16-office" name="row-16-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London" selected="selected">
                              London
                            </option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Paul Byrd</td>
                        <td>
                          <input type="text" class="form-control" id="row-17-age" name="row-17-age" value="64" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-17-position" name="row-17-position"
                            value="Chief Financial Officer (CFO)" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-17-office" name="row-17-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York" selected="selected">
                              New York
                            </option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Gloria Little</td>
                        <td>
                          <input type="text" class="form-control" id="row-18-age" name="row-18-age" value="59" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-18-position" name="row-18-position"
                            value="Systems Administrator" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-18-office" name="row-18-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York" selected="selected">
                              New York
                            </option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Bradley Greer</td>
                        <td>
                          <input type="text" class="form-control" id="row-19-age" name="row-19-age" value="41" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-19-position" name="row-19-position"
                            value="Software Engineer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-19-office" name="row-19-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London" selected="selected">
                              London
                            </option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Dai Rios</td>
                        <td>
                          <input type="text" class="form-control" id="row-20-age" name="row-20-age" value="35" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-20-position" name="row-20-position"
                            value="Personnel Lead" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-20-office" name="row-20-office">
                            <option value="Edinburgh" selected="selected">
                              Edinburgh
                            </option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>
                          <input type="text" class="form-control" id="row-21-age" name="row-21-age" value="30" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-21-position" name="row-21-position"
                            value="Development Lead" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-21-office" name="row-21-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York" selected="selected">
                              New York
                            </option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Yuri Berry</td>
                        <td>
                          <input type="text" class="form-control" id="row-22-age" name="row-22-age" value="40" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-22-position" name="row-22-position"
                            value="Chief Marketing Officer (CMO)" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-22-office" name="row-22-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York" selected="selected">
                              New York
                            </option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Caesar Vance</td>
                        <td>
                          <input type="text" class="form-control" id="row-23-age" name="row-23-age" value="21" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-23-position" name="row-23-position"
                            value="Pre-Sales Support" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-23-office" name="row-23-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York" selected="selected">
                              New York
                            </option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Doris Wilder</td>
                        <td>
                          <input type="text" class="form-control" id="row-24-age" name="row-24-age" value="23" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-24-position" name="row-24-position"
                            value="Sales Assistant" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-24-office" name="row-24-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>
                          <input type="text" class="form-control" id="row-25-age" name="row-25-age" value="47" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-25-position" name="row-25-position"
                            value="Chief Executive Officer (CEO)" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-25-office" name="row-25-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London" selected="selected">
                              London
                            </option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>
                          <input type="text" class="form-control" id="row-26-age" name="row-26-age" value="42" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-26-position" name="row-26-position"
                            value="Developer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-26-office" name="row-26-office">
                            <option value="Edinburgh" selected="selected">
                              Edinburgh
                            </option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>
                          <input type="text" class="form-control" id="row-27-age" name="row-27-age" value="28" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-27-position" name="row-27-position"
                            value="Regional Director" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-27-office" name="row-27-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>
                          <input type="text" class="form-control" id="row-28-age" name="row-28-age" value="28" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-28-position" name="row-28-position"
                            value="Software Engineer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-28-office" name="row-28-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco" selected="selected">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Fiona Green</td>
                        <td>
                          <input type="text" class="form-control" id="row-29-age" name="row-29-age" value="48" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-29-position" name="row-29-position"
                            value="Chief Operating Officer (COO)" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-29-office" name="row-29-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco" selected="selected">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Shou Itou</td>
                        <td>
                          <input type="text" class="form-control" id="row-30-age" name="row-30-age" value="20" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-30-position" name="row-30-position"
                            value="Regional Marketing" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-30-office" name="row-30-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo" selected="selected">
                              Tokyo
                            </option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Michelle House</td>
                        <td>
                          <input type="text" class="form-control" id="row-31-age" name="row-31-age" value="37" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-31-position" name="row-31-position"
                            value="Integration Specialist" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-31-office" name="row-31-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Suki Burks</td>
                        <td>
                          <input type="text" class="form-control" id="row-32-age" name="row-32-age" value="53" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-32-position" name="row-32-position"
                            value="Developer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-32-office" name="row-32-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London" selected="selected">
                              London
                            </option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Prescott Bartlett</td>
                        <td>
                          <input type="text" class="form-control" id="row-33-age" name="row-33-age" value="27" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-33-position" name="row-33-position"
                            value="Technical Author" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-33-office" name="row-33-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London" selected="selected">
                              London
                            </option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Gavin Cortez</td>
                        <td>
                          <input type="text" class="form-control" id="row-34-age" name="row-34-age" value="22" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-34-position" name="row-34-position"
                            value="Team Leader" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-34-office" name="row-34-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco" selected="selected">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Martena Mccray</td>
                        <td>
                          <input type="text" class="form-control" id="row-35-age" name="row-35-age" value="46" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-35-position" name="row-35-position"
                            value="Post-Sales support" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-35-office" name="row-35-office">
                            <option value="Edinburgh" selected="selected">
                              Edinburgh
                            </option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Unity Butler</td>
                        <td>
                          <input type="text" class="form-control" id="row-36-age" name="row-36-age" value="47" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-36-position" name="row-36-position"
                            value="Marketing Designer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-36-office" name="row-36-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco" selected="selected">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Howard Hatfield</td>
                        <td>
                          <input type="text" class="form-control" id="row-37-age" name="row-37-age" value="51" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-37-position" name="row-37-position"
                            value="Office Manager" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-37-office" name="row-37-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco" selected="selected">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Hope Fuentes</td>
                        <td>
                          <input type="text" class="form-control" id="row-38-age" name="row-38-age" value="41" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-38-position" name="row-38-position"
                            value="Secretary" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-38-office" name="row-38-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco" selected="selected">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Vivian Harrell</td>
                        <td>
                          <input type="text" class="form-control" id="row-39-age" name="row-39-age" value="62" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-39-position" name="row-39-position"
                            value="Financial Controller" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-39-office" name="row-39-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco" selected="selected">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Timothy Mooney</td>
                        <td>
                          <input type="text" class="form-control" id="row-40-age" name="row-40-age" value="37" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-40-position" name="row-40-position"
                            value="Office Manager" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-40-office" name="row-40-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London" selected="selected">
                              London
                            </option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jackson Bradshaw</td>
                        <td>
                          <input type="text" class="form-control" id="row-41-age" name="row-41-age" value="65" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-41-position" name="row-41-position"
                            value="Director" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-41-office" name="row-41-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York" selected="selected">
                              New York
                            </option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Olivia Liang</td>
                        <td>
                          <input type="text" class="form-control" id="row-42-age" name="row-42-age" value="64" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-42-position" name="row-42-position"
                            value="Support Engineer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-42-office" name="row-42-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Bruno Nash</td>
                        <td>
                          <input type="text" class="form-control" id="row-43-age" name="row-43-age" value="38" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-43-position" name="row-43-position"
                            value="Software Engineer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-43-office" name="row-43-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London" selected="selected">
                              London
                            </option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Sakura Yamamoto</td>
                        <td>
                          <input type="text" class="form-control" id="row-44-age" name="row-44-age" value="37" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-44-position" name="row-44-position"
                            value="Support Engineer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-44-office" name="row-44-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo" selected="selected">
                              Tokyo
                            </option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Thor Walton</td>
                        <td>
                          <input type="text" class="form-control" id="row-45-age" name="row-45-age" value="61" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-45-position" name="row-45-position"
                            value="Developer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-45-office" name="row-45-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York" selected="selected">
                              New York
                            </option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Finn Camacho</td>
                        <td>
                          <input type="text" class="form-control" id="row-46-age" name="row-46-age" value="47" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-46-position" name="row-46-position"
                            value="Support Engineer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-46-office" name="row-46-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco" selected="selected">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Serge Baldwin</td>
                        <td>
                          <input type="text" class="form-control" id="row-47-age" name="row-47-age" value="64" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-47-position" name="row-47-position"
                            value="Data Coordinator" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-47-office" name="row-47-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Zenaida Frank</td>
                        <td>
                          <input type="text" class="form-control" id="row-48-age" name="row-48-age" value="63" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-48-position" name="row-48-position"
                            value="Software Engineer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-48-office" name="row-48-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York" selected="selected">
                              New York
                            </option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Zorita Serrano</td>
                        <td>
                          <input type="text" class="form-control" id="row-49-age" name="row-49-age" value="56" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-49-position" name="row-49-position"
                            value="Software Engineer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-49-office" name="row-49-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco" selected="selected">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jennifer Acosta</td>
                        <td>
                          <input type="text" class="form-control" id="row-50-age" name="row-50-age" value="43" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-50-position" name="row-50-position"
                            value="Junior Javascript Developer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-50-office" name="row-50-office">
                            <option value="Edinburgh" selected="selected">
                              Edinburgh
                            </option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Cara Stevens</td>
                        <td>
                          <input type="text" class="form-control" id="row-51-age" name="row-51-age" value="46" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-51-position" name="row-51-position"
                            value="Sales Assistant" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-51-office" name="row-51-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York" selected="selected">
                              New York
                            </option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Hermione Butler</td>
                        <td>
                          <input type="text" class="form-control" id="row-52-age" name="row-52-age" value="47" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-52-position" name="row-52-position"
                            value="Regional Director" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-52-office" name="row-52-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London" selected="selected">
                              London
                            </option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Lael Greer</td>
                        <td>
                          <input type="text" class="form-control" id="row-53-age" name="row-53-age" value="21" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-53-position" name="row-53-position"
                            value="Systems Administrator" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-53-office" name="row-53-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London" selected="selected">
                              London
                            </option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Jonas Alexander</td>
                        <td>
                          <input type="text" class="form-control" id="row-54-age" name="row-54-age" value="30" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-54-position" name="row-54-position"
                            value="Developer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-54-office" name="row-54-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco" selected="selected">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Shad Decker</td>
                        <td>
                          <input type="text" class="form-control" id="row-55-age" name="row-55-age" value="51" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-55-position" name="row-55-position"
                            value="Regional Director" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-55-office" name="row-55-office">
                            <option value="Edinburgh" selected="selected">
                              Edinburgh
                            </option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Michael Bruce</td>
                        <td>
                          <input type="text" class="form-control" id="row-56-age" name="row-56-age" value="29" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-56-position" name="row-56-position"
                            value="Javascript Developer" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-56-office" name="row-56-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York">New York</option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                      <!-- start row -->
                      <tr>
                        <td>Donna Snider</td>
                        <td>
                          <input type="text" class="form-control" id="row-57-age" name="row-57-age" value="27" />
                        </td>
                        <td>
                          <input type="text" class="form-control" id="row-57-position" name="row-57-position"
                            value="Customer Support" />
                        </td>
                        <td>
                          <select size="1" class="form-select" id="row-57-office" name="row-57-office">
                            <option value="Edinburgh">Edinburgh</option>
                            <option value="London">London</option>
                            <option value="New York" selected="selected">
                              New York
                            </option>
                            <option value="San Francisco">
                              San Francisco
                            </option>
                            <option value="Tokyo">Tokyo</option>
                          </select>
                        </td>
                      </tr>
                      <!-- end row -->
                    </tbody>
                    <tfoot>
                      <!-- start row -->
                      <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th>Office</th>
                      </tr>
                      <!-- end row -->
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
            <!-- end Form Inputs -->
            <!-- start Row selection and deletion (single row) -->
            <div class="card">
              <div class="card-body">
                <div class="mb-2">
                  <h4 class="card-title">
                    Row selection and deletion (single row)
                  </h4>
                </div>
                <p class="card-subtitle mb-3">
                  This example modifies the multiple row selection example
                  by only allowing the selection of a single row. This is
                  done by checking to see if the row already has a selected
                  class, and if so removing it, but if not then the class is
                  removed from all other rows in the table and then applied
                  to the row being selected.
                </p>
                <button id="delete-row" class="btn btn-primary me-1">
                  <i class="ri-delete-bin-line fs-5 align-middle"></i>
                  Delete selected row
                </button>
                <div class="table-responsive mt-3">
                  <table id="sing_row_del"
                    class="table table-striped w-100 table-bordered display text-nowrap">
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
            <!-- end Row selection and deletion (single row) -->
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
  <script src="{{ URL::asset('build/js/datatable/datatable-api.init.js') }}"></script>
</body>

</html>