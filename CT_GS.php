<?php
error_reporting(0);
session_start();
require_once 'libs/tutor.php';
require_once 'libs/image.php';
require_once 'libs/education.php';
require_once 'libs/teach.php';
require_once 'libs/menu.php';
$p = 3;
//lấy giá trị ID_GS
$ID_GS = isset($_GET["q"]) ? (string) (int) $_GET["q"] : false;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Chi tiết Gia Sư</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="images/icon.jpg" rel="shortcut icon" type="image/x-icon"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Plottage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- js -->
        <link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
    </head>
    <body>
        <!-- header -->
        <?php
        if (!isset($_SESSION["ID_GS"])) {
            require 'blocks/menu-login-before.php';
        } else {
            require 'blocks/menu-login-after.php';
        }
        $_tutor = new Tutor();
        $row = $_tutor->select_once_tutor($ID_GS);
        ?>
        <div class="contact">
            <div class="container"
                 <div class="contact-grid1">
                    <div class="col-md-3 contact-grid1-left">
                        <div class="contact-grid1-left1">
                            <span aria-hidden="true" class="image"> <img src="
                                <?php
                                $img = new Image();
                                $img_name = $img->select_once($row['ID_IMG']);
                                echo $img_name['NAME_IMG'];
                                ?>" class="img-responsive" style="width: 200px; height: auto;">
                            </span>
                            <nav class="nav-sidebar" style=" margin-top: 10px;">
                                <ul class="nav tabs">
                                    <li>
                                        <a href="dkgs.php?gs=<?php echo $_GET['q']; ?>"><center> <h2>  Đăng ký gia sư này</h2> </center></a>
                                    </li>                                                                          
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 contact-grid1-left">
                        <div class="contact-grid1-left1">
                            <h1 style="text-align:center; margin: 10px;">Thông tin gia sư</h1>
                            <hr>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td class="table-text">ID Gia sư:</td>
                                        <td class="table-text"><?php echo $row["ID_GS"]; ?></td>
                                    </tr>
                                    <tr class="table-text">
                                        <td>Họ tên:</td>
                                        <td><?php echo htmlentities($row["TEN_GS"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Ngày sinh:</td>
                                        <td><?php echo $row["NGAYSINH_GS"]; ?></td>
                                    </tr>
                                    <tr class="table-text">
                                        <td>Giới tính:</td>
                                        <td><?php
                                            switch ($row["GIOITINH_GS"]) {
                                                case 1: echo "NAM";
                                                    break;
                                                case 0: echo "NỮ";
                                                    break;
                                                default : echo NULL;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="table-text" id="gioithieu">
                                        <td>Giới thiệu:</td>
                                        <td>
                                            <?php echo htmlentities($row["GIOITHIEU_GS"]); ?>
                                        </td>
                                    </tr>

                                    <tr class="table-text">
                                        <td>Chuyên ngành:</td>
                                        <td>
                                            <?php echo htmlentities($row["CHUYENNGANH_GS"]); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Trình độ:</td>
                                        <td>
                                            <?php
                                            if ($row["ID_TRINHDO"] == null) {
                                                echo null;
                                            } else {
                                                $edu = new Education();
                                                echo $edu->select_once($row["ID_TRINHDO"])["TEN_TRINHDO"];
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr id="monday">
                                        <td>Môn dạy:</td>
                                        <td>
                                            <?php
                                            $teach = new Teach();
                                            if (count($teach->select_all($row["ID_GS"])) > 0) {
                                                foreach ($teach->select_all($row["ID_GS"]) as $row) {
                                                    echo $row["TEN_MONHOC"] . ' - ' . $row['ID_LOP'];
                                                    echo "<br/>";
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Thời gian biểu:</td>
                                        <td>                                            
                                        </td>

                                    </tr>                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //mail -->
            <!-- footer -->
            <?php
            require 'blocks/fotter_index.php';
            ?>            <!-- //footer -->
            <!-- for bootstrap working -->
            <script src="js/bootstrap.js"></script>
            <!-- //for bootstrap working -->
            <!-- here stars scrolling icon -->
            <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear'
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
            </script>
            <!-- //here ends scrolling icon -->
    </body>
</html>
