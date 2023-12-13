<?php

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Buku - Admin</title>

  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="..\..\..\assets\img\suklib (2).png" rel="icon">
  <link href="..\..\..\assets\Photo\suk" rel="icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="..\..\..\assets\vendor\bootstrap\css\bootstrap.min.css" rel="stylesheet">
  <link href="..\..\..\assets\vendor\bootstrap-icons\bootstrap-icons.css" rel="stylesheet">
  <link href="..\..\..\assets\vendor\boxicons\css\boxicons.min.css" rel="stylesheet">
  <link href="..\..\..\assets\vendor\quill\quill.snow.css" rel="stylesheet">
  <link href="..\..\..\assets\vendor\quill\quill.bubble.css" rel="stylesheet">
  <link href="..\..\..\assets\vendor\remixicon\remixicon.css" rel="stylesheet">
  <link href="..\..\..\assets\vendor\simple-datatables\style.css" rel="stylesheet">
  <link rel="stylesheet" href="..\..\..\assets\css\style(admin).css">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="..\..\..\assets\img\suklib (2).png" alt="" class="sidelogo">
        <span class="d-none d-lg-block">SukLib</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="..\..\..\assets\img\messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="..\..\..\assets\img\messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="..\..\..\assets\img\messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="..\..\..\assets\img\profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 23 23" fill="none" class="" style="margin-right: 5px;">
          <path d="M18 2C18.5304 2 19.0391 2.21071 19.4142 2.58579C19.7893 2.96086 20 3.46957 20 4V16.99C20 17.158 19.962 17.312 19.887 17.462L19.342 18.552C19.2725 18.6909 19.2363 18.8441 19.2363 18.9995C19.2363 19.1549 19.2725 19.3081 19.342 19.447L19.885 20.535C19.965 20.6874 20.0044 20.8578 19.9992 21.0299C19.9941 21.2019 19.9446 21.3697 19.8556 21.5171C19.7666 21.6644 19.6411 21.7863 19.4912 21.8709C19.3413 21.9555 19.1721 21.9999 19 22H7C6.20435 22 5.44129 21.6839 4.87868 21.1213C4.31607 20.5587 4 19.7956 4 19V5C4 4.20435 4.31607 3.44129 4.87868 2.87868C5.44129 2.31607 6.20435 2 7 2H18ZM17.408 18H7C6.74512 18.0003 6.49997 18.0979 6.31463 18.2728C6.1293 18.4478 6.01777 18.687 6.00283 18.9414C5.98789 19.1958 6.07067 19.4464 6.23426 19.6418C6.39786 19.8373 6.6299 19.9629 6.883 19.993L7 20H17.408C17.2053 19.4266 17.1816 18.8052 17.34 18.218L17.408 18ZM18 4H7C6.75507 4.00003 6.51866 4.08996 6.33563 4.25272C6.15259 4.41547 6.03566 4.63975 6.007 4.883L6 5V16.17C6.25 16.082 6.516 16.026 6.791 16.007L7 16H18V4ZM14 7C14.2549 7.00028 14.5 7.09788 14.6854 7.27285C14.8707 7.44782 14.9822 7.68695 14.9972 7.94139C15.0121 8.19584 14.9293 8.44638 14.7657 8.64183C14.6021 8.83729 14.3701 8.9629 14.117 8.993L14 9H10C9.74512 8.99972 9.49997 8.90212 9.31463 8.72715C9.1293 8.55218 9.01776 8.31305 9.00283 8.05861C8.98789 7.80416 9.07067 7.55362 9.23426 7.35817C9.39785 7.16271 9.6299 7.0371 9.883 7.007L10 7H14Z" fill="#4D4D4D"/>
        </svg>
          <span class="sidebarsumbang">Add Buku</span>
        </a>
      </li>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Buku</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Add Buku</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <!-- Left side columns -->
        <div class="row align-items-start">
          <div class="col">
            <!-- Sales Card -->
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Isi Detail Buku</h5>
                  <div class="d-flex align-items-center">
                  <div class="detailbuku">
                    <form action="addbuku(submit).php" method="post">
                      <div class="row mb-3 formbuku">
                        <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Nama Buku" name="buku">
                                <input type="text" class="form-control" placeholder="Nama Pengarang" name="pengarang">
                                <textarea class="form-control" style="height: 100px" placeholder="Tambah Detail Buku (Opsional)" name="detailbuku"></textarea>
                        </div>
                        <div class="col-sm-6">
                              <div class="dropdown sumbangan">
                                <a class="btn btn-secondary dropdown-toggle kategori" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Kategori
                                </a>
                              </div>
                              <div class="dropdown sumbangan">
                                <a class="btn btn-secondary dropdown-toggle lang" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Lang
                                </a>
                              </div>
                              <div class="checkbox sumbangan">
                                <span class="span checkbox"><b>Format Yang Tersedia</b></span>
                                <div class="form-check form-check-reverse">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    Hard Copy
                                  </label>
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                              </div>
                        </div>
                        <div class="row sumbangan">
                          <div class="sumbit-container">
                            <span class="submit-text">Tampilkan Bukti Telah Menyumbang</span>
                            <div class="submit-rectangle">
                              <div class="rectangle-text">
                                <img src="..\..\..\assets\img\Upload icon(admin).png" class="img-rectangle mx-auto d-block">
                                <p class="text-center rectangle top">Drag & drop files or <a href="#" class="color-orange">Browse</a></p>
                                <p class="text-center rectangle bottom">Supported formats: JPG, PNG, HEIC</p>
                              </div>
                            </div>
                            <div class="submit-button-rectangle">
                              <input class="btn btn-primary submit-button-rectangle" type="submit" value="Submit">
                            </div>
                          </div>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
                </div>
              </div><!-- End Sales Card -->
            <!-- Revenue Card -->
          </div>
          <div class="col figma">
            <div class="group-289284">
              <div class="rectangle-31"></div>
              <div class="group-table-upload">
                <div class="tanggal-terisi">Tanggal Terisi</div>
                <div class="nama-buku">Nama Buku</div>
                <div class="_19-11-2023">19/11/2023</div>
                <div class="_19-11-20232">19/11/2023</div>
                <div class="_19-11-20233">19/11/2023</div>
                <div class="don-t-make-me-think">Don’t Make Me think</div>
                <div class="the-design-of-everyday-things">
                  The Design of Everyday Things
                </div>
                <div class="sprint-how-to-solve-big-problems">
                  Sprint : How to solve big problems
                </div>
                <div class="no">No</div>
                <div class="ukuran-file">Ukuran File</div>
                <div class="_1">1</div>
                <div class="_2">2</div>
                <div class="_3">3</div>
                <div class="_2-3-mb">2.3 mb</div>
                <div class="_2-3-mb">2.3 mb</div>
                <div class="_2-mb">2 mb</div>
                <div class="_4-2-mb">4.2 mb</div>
                <div class="line-1"></div>
                <div class="list-buku">LIST BUKU</div>
              </div>
            </div>
          </div> 
          <!-- Reveneu card end -->
        </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="..\..\..\assets\vendor\apexcharts\apexcharts.min.js"></script>
  <script src="..\..\..\assets\vendor\bootstrap\js/bootstrap.bundle.min.js"></script>
  <script src="..\..\..\assets\vendor\chart.js\chart.umd.js"></script>
  <script src="..\..\..\assets\vendor\echarts\echarts.min.js"></script>
  <script src="..\..\..\assets\vendor\quill\quill.min.js"></script>
  <script src="..\..\..\assets\vendor\simple-datatables\simple-datatables.js"></script>
  <script src="..\..\..\assets\vendor\tinymce\tinymce.min.js"></script>
  <script src="..\..\..\assets\vendor\php-email-form\validate.js"></script>

  <!-- Template Main JS File -->
  <script src="..\..\..\assets\js\main.js"></script>

</body>

</html>