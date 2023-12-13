<?php

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sumbangan - User</title>

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
  <link rel="stylesheet" href="..\..\..\assets\css\style.css">
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
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 22 21" fill="none" class="iconsvg" style="
    margin-right: 5px;">
          <g clip-path="url(#clip0_378_2680)">
            <path d="M3.86656 12.1899H0.637812C0.565625 12.1899 0.5 12.249 0.5 12.3278V18.8312C0.5 18.9067 0.565625 18.969 0.637812 18.969H3.86328C3.94203 18.969 4.00109 18.9034 4.00109 18.8312V12.3278C4.00191 12.3097 3.99901 12.2917 3.99258 12.2748C3.98615 12.258 3.97632 12.2426 3.96371 12.2297C3.9511 12.2168 3.93597 12.2066 3.91926 12.1997C3.90255 12.1929 3.88461 12.1896 3.86656 12.1899ZM2.61641 18.3587C2.30469 18.3587 2.04875 18.1028 2.04875 17.791C2.04875 17.476 2.30469 17.2201 2.61641 17.2201C2.93141 17.2201 3.18734 17.476 3.18734 17.791C3.18734 18.1028 2.93141 18.3587 2.61641 18.3587ZM20.6305 14.8445L15.4625 16.5474C15.2623 16.7312 14.9998 16.8362 14.7308 16.8362H9.34953C9.30471 16.8362 9.26173 16.8184 9.23004 16.7867C9.19835 16.755 9.18055 16.712 9.18055 16.6672C9.18055 16.6224 9.19835 16.5794 9.23004 16.5477C9.26173 16.516 9.30471 16.4982 9.34953 16.4982H14.7308C14.9178 16.4982 15.0983 16.426 15.2361 16.3014C15.2459 16.2882 15.2591 16.2784 15.2722 16.2653C15.4002 16.1307 15.4723 15.947 15.4723 15.7534C15.4723 15.3432 15.1409 15.0085 14.7308 15.0085H11.0164C10.918 15.0085 10.8327 14.9725 10.7638 14.897C9.1625 13.0792 6.22906 12.8035 4.62125 12.8035C4.52281 12.8035 4.42766 12.8068 4.33906 12.8068V18.1028L9.27734 19.786C10.4455 20.1831 11.6956 20.2881 12.9261 20.0682C13.7088 19.9319 14.4644 19.6704 15.1639 19.2939L21.1555 16.0389C21.3687 15.924 21.4967 15.7042 21.4967 15.4646C21.4967 15.3662 21.477 15.2743 21.4311 15.1857C21.3636 15.0398 21.2444 14.9241 21.0965 14.861C20.9485 14.798 20.7825 14.7921 20.6305 14.8445ZM9.22484 3.69151L9.20187 5.28948C9.20187 5.30589 9.21172 5.31573 9.22484 5.31573H21.4803C21.4902 5.31573 21.5 5.30589 21.5 5.28948V3.7112L9.22484 3.69151ZM14.4388 12.9085V5.64714H9.80562V12.7379C9.80562 12.8331 9.88109 12.9118 9.97625 12.9118H14.4388V12.9085ZM20.8995 12.7379V5.64714H16.2631V12.9085H20.7289C20.8208 12.9085 20.8995 12.8298 20.8995 12.7379ZM14.7734 5.64714H15.9317V12.9085H14.7734V5.64714ZM13.4511 3.30104L14.2222 3.55698H16.3452L17.1195 3.30104C17.326 3.23345 17.5116 3.11365 17.6582 2.95326C17.8048 2.79286 17.9075 2.59732 17.9563 2.38558C18.0613 1.95573 17.9333 1.50948 17.6183 1.1912C17.3787 0.948389 17.0605 0.817139 16.7225 0.817139C16.6208 0.817139 16.5223 0.830264 16.4239 0.853232C16.2122 0.90209 16.0167 1.00478 15.8563 1.15137C15.6959 1.29796 15.5761 1.48347 15.5084 1.68995L15.2886 2.35604L15.0655 1.68995C14.9178 1.26667 14.5766 0.95167 14.1434 0.853232C13.9321 0.801614 13.711 0.805614 13.5017 0.864843C13.2924 0.924072 13.102 1.03651 12.9491 1.1912C12.6341 1.5062 12.5061 1.95245 12.6078 2.38558C12.6586 2.59745 12.7627 2.79282 12.9103 2.95306C13.0579 3.11331 13.2441 3.23311 13.4511 3.30104ZM16.2041 1.92292C16.2631 1.74573 16.4075 1.61448 16.588 1.57183C16.6306 1.56198 16.6733 1.55542 16.7127 1.55542C16.8538 1.55542 16.9883 1.6112 17.0867 1.71292C17.218 1.84089 17.2738 2.0312 17.2311 2.21167C17.1852 2.39542 17.0539 2.53979 16.8767 2.59886L15.8595 2.93683L16.2041 1.92292ZM13.4708 1.7162C13.5725 1.61448 13.707 1.5587 13.8481 1.5587C13.8908 1.5587 13.9334 1.56526 13.9761 1.57511C14.1566 1.61776 14.3009 1.74901 14.36 1.9262L14.698 2.94339L13.6808 2.60542C13.5036 2.54636 13.3723 2.40198 13.3264 2.22151C13.287 2.03448 13.3395 1.84745 13.4708 1.7162Z" fill="#4D4D4D"/>
          </g>
          <defs>
            <clipPath id="clip0_378_2680">
              <rect width="21" height="21" fill="white"/>
            </clipPath>
          </defs>
        </svg>
          <span class="sidebarsumbang">Sumbang</span>
        </a>
      </li>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Sumbangan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Sumbangan</li>
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
                    <form action="sumbang(submitfix).php" method="post">
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
                                <img src="..\..\..\assets\img\Upload icon.png" class="img-rectangle mx-auto d-block">
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
          <div class="col thx-menyumbang">
            <div class="container-thx">
              <p class="thx">TERIMA KASIH TELAH <p class="thx menyumbang">MENYUMBANG!</p></p>
              <div class="row thx2">
                <div class="thx-container">
                  <span class="thx-text">Sumbangan mu sebelumnya</span>
                  <div class="row align-items-start thx2-container">
                    <div class="col thx">
                      <div class="card thx">
                        <div class="thx-card-body">
                            <img src="..\..\..\assets\img\Dont make me think.png">
                            <p class="card-title-thx1">Don’t Make Me think</p>
                            <p class="card-title-thx2">Steve Krug, 2000</p>
                            <p class="card-title-thx3">14k Readers</p>
                        </div>
                    </div>
                    </div>
                    <div class="col thx">
                      <div class="card thx">
                        <div class="thx-card-body">
                          <img src="..\..\..\assets\img\The design of everyday things.png" width="123" height="170">
                          <p class="card-title-thx1">The Design of Every..</p>
                          <p class="card-title-thx2">Don Norman, 1988</p>
                          <p class="card-title-thx3">14k Readers</p>
                        </div>
                    </div>
                    </div>
                    <div class="col thx">
                      <div class="card thx">
                        <div class="thx-card-body">
                          <img src="..\..\..\assets\img\Sprint.png" width="123" height="170">
                          <p class="card-title-thx1">Sprint : How to solve...</p>
                          <p class="card-title-thx2">Jake Knapp, 2000</p>
                          <p class="card-title-thx3">14k Readers</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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