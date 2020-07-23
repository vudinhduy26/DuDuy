<?php
include('../../../lb/connect.php');
$sql = "SELECT * FROM tinmoi where id = 2";
$data = select_one($sql);
//print_r($data);exit();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $data['tieude'];?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=dee111124c6ff0d26bfa90b1e5d278ef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=a87a985d6fa0c6b2264ed3b6e4fc35bb">
    <link rel="stylesheet" href="assets/css/css.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="height: 100px;">
        <div class="container"><a class="navbar-brand logo" href="#" style="font-size: 20px;"><img
                    style="width: 50px;height: 30px;"
                    src="assets/img/admin-ajax-1.png?h=d4f6b23781af20d7538512652bd61348"></a><button
                data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="background-color: #ffffff;">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../../../index.php"
                            style="font-size: 11px;color: rgb(0,0,0);">TRANG CHỦ</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="../new.php"
                            style="color: rgb(0,0,0);font-size: 11px;">NEW</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../sale.php"
                            style="color: rgb(0,0,0);font-size: 11px;">SALE</a></li>
                    <li class="nav-item" role="presentation">
                        <style>
                            .dropdown-toggle::after {
                                content: none;
                            }

                            a {
                                color: black;
                            }

                            a:hover {
                                text-decoration: none;
                                color: #ff8c00;
                            }

                            .carousel-indicators li {
                                width: 15px;
                                height: 15px;
                                border-radius: 50%;
                            }
                        </style>
                        </style>
                        <div class="nav-item dropdown" id="1-columna"
                            style="height: 35px;padding: 8px;font-size: 12.8px;">
                            <a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle"
                                href="../thoitrangnam.php" style="font-size: 11px;color: rgb(0,0,0);">
                                <strong>THỜI TRANG NAM</strong>
                            </a>
                            <div role="menu" class="dropdown-menu"
                                style="background-color: rgb(255,255,255); width: 780px;">
                                <div class="row">
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" role="presentation" href="../thoitrangnam/thoitrangnamao.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Áo</a>
                                            </br>
                                            <li><a class="dropdown-item" role="presentation" href="../thoitrangnam/thoitrangnamao.php">Áo Sơ Mi</a></li>
                                            <li><a class="dropdown-item" role="presentation" href="../thoitrangnam/thoitrangnamao.php">Áo Phông</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangnam/thoitrangnamao.php">Áo Vest</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangnam/thoitrangnamao.php">Áo Polo Kiện</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangnam/thoitrangnamao.php">Áo Len,Nỉ</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangnam/thoitrangnamao.php">Áo Hoodie</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangnam/thoitrangnamao.php">Áo Khoác</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" href="../thoitrangnam/thoitrangnamquan.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Quần</a>
                                            </br>
                                            <li><a class="dropdown-item" href="../thoitrangnam/thoitrangnamquan.php">Quần Âu</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangnam/thoitrangnamquan.php">Quần Jeans</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangnam/thoitrangnamquan.php">Quần Kaki</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangnam/thoitrangnamquan.php">Quần Short</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangnam/thoitrangnamquan.php">Quần Jogger</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangnam/thoitrangnamquan.php">Quần Nỉ</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" href="../thoitrangnam.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Phụ
                                                Kiện</a>
                                            </br>
                                            <li><a class="dropdown-item" href="../thoitrangnam.php">Balo Túi Đeo</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangnam.php">Chéo</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangnam.php">Kính</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangnam.php">Mũ</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangnam.php">Dây Lưng</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangnam.php">Ví Da</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" href="../thoitrangnam.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Giày
                                                Dép</a>
                                            </br>
                                            <li><a class="dropdown-item" href="thoitrangnam.php">Giày</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam.php">Dép</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-item dropdown" id="2-columnas"
                            style="font-size: 12.8px;height: 35px;padding: 8px;color: rgb(0,0,0);"><a
                                class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
                                href="../thoitrangkids.php" style="font-size: 11px;color: rgb(12,13,13);"><strong>THỜI
                                    TRANG KIDS</strong></a>
                            <div class="dropdown-menu multi-column columns-2" role="menu"
                                style="background-color: rgb(255,255,255);">
                                <style>
                                    .navbar-nav .dropdown-menu {
                                        width: 630px;
                                    }
                                </style>
                                <div class="row">
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" role="presentation" href="../thoitrangkids/thoitrangkids-nam.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Bé
                                                Trai</a>
                                            </br>
                                            <li><a class="dropdown-item" role="presentation" href="../thoitrangkids/thoitrangkids-nam.php">Áo</a></li>
                                            <li><a class="dropdown-item" role="presentation" href="../thoitrangkids/thoitrangkids-nam.php">Quần</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangkids/thoitrangkids-nam.php">Bộ Đồ</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangkids/thoitrangkids-nam.php">Phụ Kiện</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangkids/thoitrangkids-nam.php">Giày Dép</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" href="../thoitrangkids/thoitrangkids-nu.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Bé
                                                Gái</a>
                                            </br>
                                            <li><a class="dropdown-item" href="../thoitrangkids/thoitrangkids-nu.php">Áo</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangkids/thoitrangkids-nu.php">Quần</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangkids/thoitrangkids-nu.php">Bộ Đồ</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangkids/thoitrangkids-nu.php">Chân Váy</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangkids/thoitrangkids-nu.php">Váy</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangkids/thoitrangkids-nu.php">Phụ Kiện</a></li>
                                            <li><a class="dropdown-item" href="../thoitrangkids/thoitrangkids-nu.php">Giày, Dép</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" href="../thoitrangkids.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Đồ
                                                chơi</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul><input type="url"><button class="btn btn-primary border rounded-0" type="button"
                    style="height: 30px;font-size: 13px;opacity: 1;background-color: rgb(255,255,255);padding: 5px;color: rgb(0,0,0);filter: brightness(100%) contrast(100%);">Tim</button>
            </div>
        </div>
    </nav>
    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark">
            <div class="container">
                <div class="block-heading" style="color: rgb(0,0,0);">
                    <h2 class="text-info" style="font-size: 30px;color: rgb(0,0,0) !important;"><strong></strong>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-6" style="background-color: #ffffff;">
                        <div class="row">
                            <div class="col-xl-1" style="width: 82px;"><img src="admin-ajax-1.png"
                                    style="height: 21px;width: 44px;margin-top: 10px;margin-right: 0px;" /></div>
                            <div class="col">
                                <p><strong>ADMIN</strong></p>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                            <?php
                            echo '<p style="font-size: 13px;margin: 0px;"><strong>'.$data['tieude'].'</strong></p>
                    <p><br /><a
                            href="https://vi.wikipedia.org/wiki/Qu%E1%BA%A7n_t%C3%A2y"></a><br /><br /> <a
                            href="#">
                            </a></p>
                    <p><strong></strong><br /></p><img src="'.$data['img1'].'"
                        style="width: 500px;min-width: 200px;max-width: 500px;" />
                    <p><br /><br /></p>
                    <p><strong>'.$data['noidung'].'</strong><a
                            href="\"><strong></strong></a><br /><br /><br /><br /></p><img src="'.$data['img2'].'"
                        style="min-width: 200px;max-width: 500px;" />
                    <p><br />';
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6" style="background-color: #e8e3e3;padding-right: 0px;">
                        <div class="p-5 bg-white rounded shadow mb-5">
                            <ul id="myTab2"
                                class="nav nav-tabs nav-pills with-arrow lined flex-column flex-sm-row text-center">
                                <li class="nav-item flex-sm-fill"><a id="home2-tab" data-toggle="tab" href="#home2"
                                        class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 active">TIN MỚI</a>
                                </li>
                                <li class="nav-item flex-sm-fill"><a id="profile2-tab" data-toggle="tab"
                                        href="#profile2"
                                        class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0">XEM NHIỀU</a>
                                </li>
                            </ul>
                            <div id="myTab2Content" class="tab-content">
                                <div id="home2" class="tab-pane fade px-4 py-5 show active">
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <img style="max-width: 80px;" src="assets/img/QAUTK004-5.jpg" alt="">
                                        </div>
                                        <div class="col-xl-9" style="padding-left: 0px;padding-right: 0px;">
                                            <a href="">MẸO HAY GIẶT VÀ BẢO QUẢN QUẦN ÂU NAM ĐÚNG CÁCH</a>
                                            <p>Giặt và bảo quản quần âu đúng cách giúp bạn giữ được màu và dáng quần như mới với khoảng thời gian sử dụng lâu dài. Hãy cùng 360 Boutique tìm hiểu cách giặt và bảo quản quần âu nam đúng cách nhé.

                                                Giặt đồ âu càng ít càng tốt
                                    
                                                Theo lời khuyên của các..</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <img style="max-width: 80px;" src="assets/img/SMNTK004.jpg" alt="">
                                        </div>
                                        <div class="col-xl-9" style="padding-left: 0px;padding-right: 0px;">
                                            <a href="">BÍ QUYẾT LỰA CHỌN ÁO SƠ MI HỌA TIẾT ĐI BIỂN</a>
                                            <p>Dễ mặc, dễ phối và dễ biến tấu thành nhiều phong cách khác nhau, áo sơ mi họa tiết phong là item phải-có trong tủ đồ của mọi chàng trai vào dịp hè.
                                                Lựa chọn cho mình một chiếc áo sơ mi đi biển không chỉ mang lại vẻ ngoài thời trang mà còn...</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="profile2" class="tab-pane fade px-4 py-5">
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <img style="max-width: 80px;" src="assets/img/8191.jpg" alt="">
                                        </div>
                                        <div class="col-xl-9" style="padding-left: 0px;padding-right: 0px;">
                                            <a href="">TOP NHỮNG GAM MÀU ÁO LEN NAM CƠ BẢN CHO MÙA ĐÔNG</a>
                                            <p>Áo len là trang phục không thể thiếu của bất kì chàng trai nào trong mùa đông. Với những sắc màu cơ bản dưới đây, phái mạnh có thể diện áo len ấn tượng khi đi làm hoặc dạo phố, hẹn hò.
                                                Áo len đen
                                                Màu đen là tông màu...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Start: Corporate Footer Clean -->
    <footer class="page-footer" style="background-color: rgb(0,0,0);height: 350px;">
        <div class="container" style="background-color: #000000;">
            <div class="row">
                <div class="col-6 col-md-3">
                    <h4 style="font-size: 13px;font-family: Lora, serif;color: #ff8c00;">HỆ THỐNG CỦA HÀNG</h4>
                    <ul class="footer-links" style="color: rgb(212,217,222);">
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">242 Thái Hà - HN</a></li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">20 Dương Quảng Hàm - HN</a>
                        </li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">63 Đại Cồ Việt - HN</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 col-xl-4">
                    <h4 style="font-size: 13px;color: #ff8c00;">CHÍNH SÁCH VÀ QUY ĐỊNH CHUNG</h4>
                    <ul class="footer-links">
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">Hướng dẫn mua hàng</a></li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">Hình thức thanh toán</a></li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">Quy định bảo mật thông tin</a>
                        </li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">Chính sách và quy trình khiếu
                                nại</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-5" style="background-color: #000000;">
                    <h4 style="color: #ff8c00;font-size: 13px;">ĐỊA CHỈ</h4>
                    <ul class="footer-links">
                        <li><a href="#"></a></li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">CÔNG TY CỔ PHẦN THỜI TRANG
                                360</a></li>
                    </ul>
                    <ul class="footer-links">
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">VPGD: 37 Trung Kính - Trung Hòa
                                - Cầu Giấy - Hà Nội</a></li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">Facebook thời trang nam :
                                360Boutique</a></li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">Facebook thời Kids :
                                360Kids</a></li>
                    </ul>
                </div>
            </div>
            <div class="row" style="background-color: #000000;">
                <div class="col">
                    <p><br>Copyright © 2017&nbsp;<a href="http://www.360boutique.vn/">360boutique.</a> All Rights
                        Reserved<br><br></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End: Corporate Footer Clean -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js?h=037c4117326bceadaedc2681de8afadc"></script>
    <script src="assets/js/script.min.js?h=037c4117326bceadaedc2681de8afadc"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/myScript.js"></script>
    <script>
        $(function () {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 1800000,
                values: [0, 1800000],
                slide: function (event, ui) {
                    $("#amount").val(ui.values[0] + " ₫ - " + ui.values[1] + " ₫");
                }
            });
            $("#amount").val($("#slider-range").slider("values", 0) +
                " ₫ - " + $("#slider-range").slider("values", 1) + " ₫");
        });
    </script>
    <style>
        .dropdown-toggle::after {
            content: none;
        }

        a {
            color: black;
        }

        a:hover {
            text-decoration: none;
            color: #ff8c00;
        }

        .carousel-indicators li {
            width: 15px;
            height: 15px;
            border-radius: 50%;
        }

        .ui-widget.ui-widget-content {
            border: 1px solid #c5c5c5;
        }

        .ui-corner-all,
        .ui-corner-bottom,
        .ui-corner-right,
        .ui-corner-br {
            border-bottom-right-radius: 3px;
        }

        .ui-corner-all,
        .ui-corner-bottom,
        .ui-corner-left,
        .ui-corner-bl {
            border-bottom-left-radius: 3px;
        }

        .ui-corner-all,
        .ui-corner-top,
        .ui-corner-right,
        .ui-corner-tr {
            border-top-right-radius: 3px;
        }

        .ui-corner-all,
        .ui-corner-top,
        .ui-corner-left,
        .ui-corner-tl {
            border-top-left-radius: 3px;
        }

        .ui-widget-content {
            border: 1px solid #dddddd;
            background: #ffffff;
            color: #0065ff;
        }

        .ui-slider-horizontal {
            height: .8em;
        }

        .ui-slider {
            position: relative;
            text-align: left;
        }

        .ui-slider-horizontal .ui-slider-range {
            top: 0;
            height: 100%;
        }

        .ui-slider .ui-slider-range {
            position: absolute;
            z-index: 1;
            font-size: .7em;
            display: block;
            border: 0;
            background-position: 0 0;
            background-color: #8d8a86;
        }

        .ui-widget-header {
            border: 1px solid #dddddd;
            background: #e9e9e9;
            background-position-x: 0%;
            background-position-y: 0%;
            color: #333333;
            font-weight: bold;
        }

        .ui-state-default,
        .ui-widget-content .ui-state-default,
        .ui-widget-header .ui-state-default,
        .ui-button,
        html .ui-button.ui-state-disabled:hover,
        html .ui-button.ui-state-disabled:active {
            border: 1px solid #c5c5c5;
            background: #f6f6f6;
            font-weight: normal;
            color: #454545;
        }

        .ui-slider-horizontal .ui-slider-handle {
            top: -.3em;
            margin-left: -.6em;
        }

        .ui-slider .ui-slider-handle {
            position: absolute;
            z-index: 2;
            width: 1.2em;
            height: 1.2em;
            cursor: default;
            -ms-touch-action: none;
            touch-action: none;
            border-radius: 50%;
            background-color: #ff8c00;
        }

        .loc:hover {
            border-color: #ff8c00;
            color: #ff8c00;
        }

        .show img {
            max-width: 100%;
            transition: all 1s;
        }

        .show .anh1 {
            position: absolute;
            opacity: 1;
        }

        .show:hover .anh1 {
            opacity: 0;
        }

        .price-box {
            position: absolute;
            width: 110px;
            height: 110px;
            margin: auto;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 6;
            color: #fff;
            font-family: Montserrat, Arial, Helvetica, sans-serif;
            font-weight: 700;
            transition: all 0.4s ease;
            opacity: 0;
        }

        .price-box:hover {
            opacity: 1;
        }

        .price-box .special-price {
            display: block;
            font-size: 24px;
            margin-top: 40px;
        }

        .frame {
            border: none;
        }

        @media (max-width: 960px) {
            img.anh1 {
                width: 83% !important;
                height: auto;
            }
        }

        @media (max-width: 1010px) {
            img.anh1 {
                width: 87% !important;
                height: auto;
            }
        }

        @media (min-width: 1011px) {
            img.anh1 {
                width: 90% !important;
                height: auto;
            }
        }

        @media (max-width: 760px) {
            img.anh1 {
                width: 89% !important;
                height: auto;
            }
        }
        .p-5{
            padding: 0px!important;
        }
    </style>
</body>

</html>