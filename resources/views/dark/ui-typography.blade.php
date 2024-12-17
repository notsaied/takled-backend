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
          @@include("partials/breadcrumb.html", {"title": "Typography", "subtitle": 'Home'})
          <div class="row">
            <!-- -------------------------------------------------- -->
            <!-- 1. Typography -->
            <!-- -------------------------------------------------- -->
            <div class="col-lg-6">
              <!-- start Typography -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Typography</h4>
                  <p class="mb-3 card-subtitle">
                    Use tags <mark><code>h1 to h6</code></mark> for get desire
                    heading.
                  </p>
                  <!-- -------------------- -->
                  <!-- Design -->
                  <!-- -------------------- -->
                  <h1 class="lh-base">h1. Bootstrap heading</h1>
                  <h2 class="lh-base">h2. Bootstrap heading</h2>
                  <h3 class="lh-base">h3. Bootstrap heading</h3>
                  <h4 class="lh-base">h4. Bootstrap heading</h4>
                  <h5 class="lh-base">h5. Bootstrap heading</h5>
                  <h6 class="lh-base">h6. Bootstrap heading</h6>
                </div>
              </div>
              <!-- end Typography -->
            </div>
            <!-- -------------------------------------------------- -->
            <!-- 2. Typography with P tag -->
            <!-- -------------------------------------------------- -->
            <div class="col-lg-6">
              <!-- start Heading with P tag -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Heading with P tag</h4>
                  <p class="mb-3 card-subtitle">
                    Use class in p tag <mark><code>h1 to h6</code></mark> for
                    get desire heading.
                  </p>
                  <!-- -------------------- -->
                  <!-- Design -->
                  <!-- -------------------- -->
                  <p class="lh-base h1">h1. Bootstrap heading</p>
                  <p class="lh-base h2">h2. Bootstrap heading</p>
                  <p class="lh-base h3">h3. Bootstrap heading</p>
                  <p class="lh-base h4">h4. Bootstrap heading</p>
                  <p class="lh-base h5">h5. Bootstrap heading</p>
                  <p class="lh-base h6">h6. Bootstrap heading</p>
                </div>
              </div>
              <!-- end Heading with P tag -->
            </div>
            <!-- -------------------------------------------------- -->
            <!-- 3. Customizing headings -->
            <!-- -------------------------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Customizing headings -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title">Customizing headings</h4>
                  <p class="mb-3 card-subtitle">
                    Use the included utility classes to recreate the small
                    secondary heading text from Bootstrap 3.
                  </p>
                  <h1 class="lh-base">
                    Heading 1 <small class="text-muted">Sub-heading</small>
                  </h1>
                  <h2 class="lh-base">
                    Heading 2 <small class="text-muted">Sub-heading</small>
                  </h2>
                  <h3 class="lh-base">
                    Heading 3 <small class="text-muted">Sub-heading</small>
                  </h3>
                  <h4 class="lh-base">
                    Heading 4 <small class="text-muted">Sub-heading</small>
                  </h4>
                  <h5 class="lh-base">
                    Heading 5 <small class="text-muted">Sub-heading</small>
                  </h5>
                  <h6 class="lh-base">
                    Heading 6 <small class="text-muted">Sub-heading</small>
                  </h6>
                  <!-- Lead -->

                  <div class="d-flex border-top pt-4 mt-4">
                    <div>
                      <h4 class="card-title mb-3 mb-md-2">Lead</h4>
                      <p class="card-subtitle mb-3 lh-base">
                        Make a paragraph stand out by adding
                        <mark>.lead</mark>.
                      </p>
                    </div>
                  </div>
                  <p class="lead">
                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                    dolor auctor. Duis mollis, est non commodo luctus.
                  </p>
                </div>
              </div>
              <!-- end Customizing headings -->
            </div>
            <!-- -------------------------------------------------- -->
            <!-- 4. Display headings -->
            <!-- -------------------------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Display headings -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title mb-3">Display headings</h4>
                  <h1 class="lh-base display-1">Display 1</h1>
                  <h1 class="lh-base display-2">Display 2</h1>
                  <h1 class="lh-base display-3">Display 3</h1>
                  <h1 class="lh-base display-4">Display 4</h1>
                  <h1 class="lh-base display-5">Display 5</h1>
                  <h1 class="lh-base display-6">Display 6</h1>
                </div>
              </div>
              <!-- end Display headings -->
            </div>
            <!-- -------------------------------------------------- -->
            <!-- 5. Inline text elements -->
            <!-- -------------------------------------------------- -->
            <div class="col-12">
              <!-- start Inline text elements -->
              <div class="card">
                <div class="card-body pb-3">
                  <h4 class="card-title">Inline text elements</h4>
                  <p class="mb-3 card-subtitle">
                    Styling for common inline HTML5 elements.
                  </p>
                </div>
                <div class="table-responsive">
                  <table class="table table-hover mb-0">
                    <thead >
                      <tr>
                        <th scope="col" class="fw-bold">Tag</th>
                        <th scope="col" class="fw-bold">Description</th>
                        <th scope="col" class="fw-bold">Demo</th>
                      </tr>
                    </thead>
                    <tbody class="border-top">
                      <tr>
                        <th scope="row">
                          <h6><span class="badge text-bg-info">mark</span></h6>
                        </th>
                        <td>
                          <p class="mb-0">
                            mark represents text which is marked or
                            highlighted for reference or notation purposes.
                          </p>
                        </td>
                        <td>
                          <p class="mb-0">
                            You can use the mark tag to
                            <mark>highlight</mark> text.
                          </p>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">
                          <h6><span class="badge text-bg-info">del</span></h6>
                        </th>
                        <td>
                          <p class="mb-0">
                            del represents treated as deleted text.
                          </p>
                        </td>
                        <td>
                          <p class="mb-0">
                            <del>This line of text is meant to be treated as
                              deleted text.</del>
                          </p>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">
                          <h6><span class="badge text-bg-info">s</span></h6>
                        </th>
                        <td>
                          <p class="mb-0">
                            s represents treated as no longer accurate.
                          </p>
                        </td>
                        <td>
                          <p class="mb-0">
                            <s>This line of text is meant to be treated as no
                              longer accurate.</s>
                          </p>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">
                          <h6><span class="badge text-bg-info">ins</span></h6>
                        </th>
                        <td>
                          <p class="mb-0">
                            ins represents treated as an addition to the
                            document.
                          </p>
                        </td>
                        <td>
                          <p class="mb-0">
                            <ins>This line of text is meant to be treated as an
                              addition to the document.</ins>
                          </p>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">
                          <h6><span class="badge text-bg-info">u</span></h6>
                        </th>
                        <td>
                          <p class="mb-0">
                            u represents render as underlined.
                          </p>
                        </td>
                        <td>
                          <p class="mb-0">
                            <u>This line of text will render as underlined.</u>
                          </p>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">
                          <h6><span class="badge text-bg-info">small</span></h6>
                        </th>
                        <td>
                          <p class="mb-0">
                            small represents treated as fine print.
                          </p>
                        </td>
                        <td>
                          <p class="mb-0">
                            <small>This line of text is meant to be treated as
                              fine print.</small>
                          </p>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">
                          <h6><span class="badge text-bg-info">strong</span></h6>
                        </th>
                        <td>
                          <p class="mb-0">
                            strong represents rendered as bold text.
                          </p>
                        </td>
                        <td>
                          <p class="mb-0">
                            <strong>This line rendered as bold text.</strong>
                          </p>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">
                          <h6><span class="badge text-bg-info">em</span></h6>
                        </th>
                        <td>
                          <p class="mb-0">
                            strong represents rendered as italicized text.
                          </p>
                        </td>
                        <td>
                          <p class="mb-0">
                            <em>This line rendered as italicized text.</em>
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- end Inline text elements -->
            </div>
            <!-- -------------------------------------------------- -->
            <!-- 6. Abbreviations -->
            <!-- -------------------------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Abbreviations -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title">Abbreviations</h4>
                  <p class="mb-3 card-subtitle">
                    Stylized implementation of HTML’s
                    <mark><code>&lt;abbr&gt;</code></mark> element for
                    abbreviations and acronyms to show the expanded version on
                    hover. Abbreviations have a default underline and gain a
                    help cursor to provide additional context on hover and to
                    users of assistive technologies.
                  </p>
                  <p><abbr title="attribute">attr</abbr></p>
                  <p>
                    <abbr title="HyperText Markup Language" class="initialism">HTML</abbr>
                  </p>
                </div>
              </div>
              <!-- end Abbreviations -->
            </div>

            <!-- -------------------------------------------------- -->
            <!-- 8. Naming a source -->
            <!-- -------------------------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Naming a source -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title">Naming a source</h4>
                  <p class="mb-3 card-subtitle">
                    The HTML spec requires that blockquote attribution be
                    placed outside the
                    <mark><code>&lt;blockquote&gt;</code></mark>. When providing attribution, wrap your
                    <mark><code>&lt;blockquote&gt;</code></mark> in a
                    <mark><code>&lt;figure&gt; </code></mark> and use a
                    <mark><code>&lt;figcaption&gt;</code></mark> or a block
                    level element (e.g., &lt;p&gt;) with the
                    .blockquote-footer class. Be sure to wrap the name of the
                    source work in <mark><code>&lt;cite&gt;</code></mark> as
                    well.
                  </p>
                  <figure>
                    <blockquote class="blockquote">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Integer posuere erat a ante.
                      </p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Someone famous in
                      <cite title="Source Title">Source Title</cite>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <!-- end Naming a source -->
            </div>
            <!-- -------------------------------------------------- -->
            <!-- 7. Blockquotes -->
            <!-- -------------------------------------------------- -->
            <div class="col-lg-6">
              <!-- start Blockquotes -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Blockquotes</h4>
                  <p class="mb-3 card-subtitle">
                    For quoting blocks of content from another source within
                    your document. Wrap
                    <mark><code>&lt;blockquote class=&quot;blockquote&quot;&gt;</code></mark>
                    around any HTML as the quote.
                  </p>
                  <blockquote class="blockquote">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Integer posuere erat a ante.
                    </p>
                  </blockquote>
                </div>
              </div>
              <!-- end Blockquotes -->
            </div>
            <!-- -------------------------------------------------- -->
            <!-- 9. Blockquote Alignment - center -->
            <!-- -------------------------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Blockquote Alignment - Center -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title">Blockquote Alignment - Center</h4>
                  <p class="mb-3 card-subtitle">
                    Use text utilities as needed to change the alignment of
                    your blockquote.
                  </p>
                  <figure class="text-center">
                    <blockquote class="blockquote">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Integer posuere erat a ante.
                      </p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Someone famous in
                      <cite title="Source Title">Source Title</cite>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <!-- end Blockquote Alignment - Center -->
            </div>
            <!-- -------------------------------------------------- -->
            <!-- 10. Blockquote Alignment - end -->
            <!-- -------------------------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Blockquote Alignment - End -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title">Blockquote Alignment - End</h4>
                  <p class="mb-3 card-subtitle">
                    Use text utilities as needed to change the alignment of
                    your blockquote.
                  </p>
                  <figure class="text-end">
                    <blockquote class="blockquote">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Integer posuere erat a ante.
                      </p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Someone famous in
                      <cite title="Source Title">Source Title</cite>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <!-- end Blockquote Alignment - End -->
            </div>
            <h4 class="card-title mt-3">Lists</h4>
            <!-- -------------------------------------------------- -->
            <!-- 14. ol listing -->
            <!-- -------------------------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Ol Listing -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="mb-3">Ol Listing</h4>
                  <ol>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                  </ol>
                </div>
              </div>
              <!-- end Ol Listing -->
            </div>
            <!-- -------------------------------------------------- -->
            <!-- 15. ul listing -->
            <!-- -------------------------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Ul Listing -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title mb-3">Ul Listing</h4>
                  <ul>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                  </ul>
                </div>
              </div>
              <!-- end Ul Listing -->
            </div>
            <!-- -------------------------------------------------- -->
            <!-- 11. List Unstyled -->
            <!-- -------------------------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start List Unstyled -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title">List Unstyled</h4>
                  <p class="mb-3 card-subtitle">
                    Remove the default <mark>list-style</mark> and left margin
                    on list items (immediate children only). This only applies
                    to immediate children list items, meaning you will need to
                    add the class for any nested lists as well.
                  </p>
                  <ul class="list-unstyled">
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>
                      Nulla volutpat aliquam velit
                      <ul>
                        <li>Phasellus iaculis neque</li>
                        <li>Purus sodales ultricies</li>
                        <li>Vestibulum laoreet porttitor sem</li>
                        <li>Ac tristique libero volutpat at</li>
                      </ul>
                    </li>
                    <li>Faucibus porta lacus fringilla vel</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                  </ul>
                </div>
              </div>
              <!-- end List Unstyled -->
            </div>
            <!-- -------------------------------------------------- -->
            <!-- 12. Description list alignment -->
            <!-- -------------------------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Description list alignment -->
              <div class="card w-100">
                <div class="card-body">
                  <h5 class="card-title">Description list alignment</h5>
                  <p class="mb-3 card-subtitle">
                    Align terms and descriptions horizontally by using our
                    grid system’s predefined classes (or semantic mixins). For
                    longer terms, you can optionally add a
                    <mark>.text-truncate</mark> class to truncate the text
                    with an ellipsis.
                  </p>
                  <dl class="row">
                    <dt class="col-sm-3">Description lists</dt>
                    <dd class="col-sm-9">
                      A description list is perfect for defining terms.
                    </dd>

                    <dt class="col-sm-3">Euismod</dt>
                    <dd class="col-sm-9">
                      <p>
                        Vestibulum id ligula porta felis euismod semper eget
                        lacinia odio sem nec elit.
                      </p>
                      <p>Donec id elit non mi porta gravida at eget metus.</p>
                    </dd>

                    <dt class="col-sm-3">Malesuada porta</dt>
                    <dd class="col-sm-9">
                      Etiam porta sem malesuada magna mollis euismod.
                    </dd>

                    <dt class="col-sm-3 text-truncate">
                      Truncated term is truncated
                    </dt>
                    <dd class="col-sm-9">
                      Fusce dapibus, tellus ac cursus commodo, tortor mauris
                      condimentum nibh, ut fermentum massa justo sit amet
                      risus.
                    </dd>

                    <dt class="col-sm-3">Nesting</dt>
                    <dd class="col-sm-9">
                      <dl class="row">
                        <dt class="col-sm-4">Nested definition list</dt>
                        <dd class="col-sm-8">
                          Aenean posuere, tortor sed cursus feugiat, nunc
                          augue blandit nunc.
                        </dd>
                      </dl>
                    </dd>
                  </dl>
                </div>
              </div>
              <!-- end Description list alignment -->
            </div>
            <!-- -------------------------------------------------- -->
            <!-- 13. Inline List -->
            <!-- -------------------------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Inline List -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title">Inline List</h4>
                  <p class="mb-3 card-subtitle">
                    Remove a list’s bullets and apply some light
                    <mark>margin</mark> with a combination of two classes,
                    <mark>.list-inline</mark> and
                    <mark>.list-inline-item</mark>.
                  </p>
                  <ul class="list-inline">
                    <li class="list-inline-item">Lorem ipsum</li>
                    <li class="list-inline-item">Phasellus iaculis</li>
                    <li class="list-inline-item">Nulla volutpat</li>
                  </ul>
                </div>
              </div>
              <!-- end Inline List -->
            </div>
            <!-- -------------------------------------------------- -->
            <!-- 16. Fancy listing -->
            <!-- -------------------------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Fancy Listing -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title mb-3">Fancy Listing</h4>
                  <ul class="list-style-none">
                    <li>
                      <a href="javascript:void(0)" class="link-dark"><i class="ti ti-check me-2 fs-4 text-info"></i>
                        Lorem ipsum dolor sit amet</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="link-dark"><i class="ti ti-check me-2 fs-4 text-info"></i>
                        Consectetur adipiscing elit</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="link-dark"><i class="ti ti-check me-2 fs-4 text-info"></i>
                        Integer molestie lorem at massa
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- end Fancy Listing -->
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