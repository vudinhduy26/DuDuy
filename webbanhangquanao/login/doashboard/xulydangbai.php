<?php
session_start();
require_once('../../lb/connect.php');
$tieudebaidang = isset($_REQUEST['tieudebaiviet']) ? $_REQUEST['tieudebaiviet'] : "";
$noidungbaidang = isset($_REQUEST['noidungbaiviet']) ? $_REQUEST['noidungbaiviet'] : "";
$anh1 = upload_file_by_name("anhdang1");
$anh2 = upload_file_by_name("anhdang2");

$data = array();
$data["img1"] = $anh1;
$data["img2"] = $anh2;
$data["tieude"] = $tieudebaidang;
$data["noidung"] = $noidungbaidang;

$tbl = "tinmoi";
$sql = data_to_sql_insert($tbl, $data);
$ret = exec_update($sql);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Đăng Bài</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=1a6588fb6b100c24e01c7a3e479ceb55">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Brand</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php"><i class="fas fa-user"></i><span>Hồ Sơ</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="danhsachsanphamnam.php"><i class="fas fa-table"></i><span>DANH SÁCH NAM</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active"
                            href="danhsachsanphamkids.php"><i class="fas fa-table"></i><span>DANH SÁCH
                                KIDS</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="dangbai.php"><i class="fas fa-exclamation-circle"></i><span>Đăng bài</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="dangbainam.php"><i class="fas fa-exclamation-circle"></i><span>Đăng bài nam</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="suabaivietnam.php"><i class="fas fa-exclamation-circle"></i><span>Sửa bài nam</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="xoabaivietnam.php"><i class="fas fa-exclamation-circle"></i><span>Xóa bài viết nam</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="dangbaikids.php"><i class="fas fa-exclamation-circle"></i><span>Đăng bài kids</span></a></li>     
                    <li class="nav-item" role="presentation"><a class="nav-link" href="suabaivietkids.php"><i class="fas fa-exclamation-circle"></i><span>Sửa bài kids</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="xoabaivietkids.php"><i class="fas fa-exclamation-circle"></i><span>Xóa bài viết kids</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">

                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">

                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $_SESSION['login_user']?></span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg?h=0ecc82101fb9a10ca459432faa8c0656"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a
                                            class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                            <div class="dropdown-divider"></div><a onclick="logout()" class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid">
            <h2 class="text-center">ĐĂNG BÀI</h2>
              <p class="text-center">BẠN ĐÃ ĐĂNG BÀI THÀNH CÔNG</p>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Brand 2020</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.min.js?h=b86d882c5039df370319ea6ca19e5689"></script>
    <script>
      function logout() {
          var r = confirm("ARE YOU LOG OUT ???");
          if (r == true) {
              window.location="logout.php";
          }
      }
    </script>
</body>
</html>