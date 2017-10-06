<!DOCTYPE HTML>
<?php
session_start();
require_once "../libs/tutor.php";
require_once '../libs/image.php';
require_once "../libs/education.php";
require_once '../libs/specialized.php';
require_once '../libs/Lop.php';
require_once '../libs/recruit.php';
$isAdmin = $_SESSION["ADMIN"];
$page = (isset($_GET['profile'])) ? ($_GET['profile']) : NULL;
$page_admin = (isset($_GET['admin'])) ? ($_GET['admin']) : NULL;
$tutor = new Tutor();
$row_user = $tutor->select_once_tutor($_SESSION["ID_GS"]);
require_once 'libs/molop.php';
require_once 'libs/update_avatar.php';
?>
<html>
    <head>
        <?php require_once 'blocks/head.php'; ?>        
    </head>
    <body>
        <div class="page-container">
            <!--/content-inner-->
            <div class="left-content">
                <div class="inner-content">
                    <!--/header-stars-->
                    <div class="header-section">
                        <!--/menu-right-->
                        <?php
                        if ($isAdmin == 1) {
                            require_once 'blocks/menu_admin.php';
                        }
                        ?>
                    </div>
                    <!--//menu-right-->
                    <!--//header-stars-->
                    <!-- header-starts -->                                       
                    <?php
                    if ($page_admin) {
                        switch ($page_admin) {
                            case '1':require 'admin/kemtainha.php';
                                break;
                            case '2' : require 'admin/dangkymolop.php';
                                break;
                            case '3' : require 'admin/hocviendangkygs.php';
                                break;
                            case '4' : require 'admin/hocviendkchieusinh.php';
                                break;
                            case '5': require 'admin/molop.php';
                                break;
                            case '6': require 'admin/danhsachlop.php';
                                break;
                            case '7': require 'admin/danhsachgiasu.php';
                                break;
                            case '8' :require 'admin/danhsachGS-chuaduyet.php';
                                break;
                            case '9' :require 'admin/danhsachGS-daduyet.php';
                                break;
                            case '10' :require 'admin/themlop.php';
                                break;
                            case '11' :require 'admin/themmonvaolop.php';
                                break;
                            case '12' :require 'admin/danhsachtintuc.php';
                                break;
                            case '13' :require 'admin/vietbao.php';
                                break;
                        }
                    } else {
                        switch ($page) {
                            case '1': require 'profile/capnhatthongtin.php';
                                break;
                            case '2': require 'profile/doimatkhau.php';
                                break;
                            case '3': require 'profile/capnhathinhanh.php';
                                break;
                            case '4': require 'profile/capnhatchuyennganh.php';
                                break;
                            case '5': require 'profile/dangkymonhoc.php';
                                break;
                            case '7': require 'profile/dangkynoiday.php';
                                break;
                            default: require 'profile/capnhatthongtin.php';
                        }
                    }
                    ?>
                    <!-- //header-ends -->

                    <!--footer section start-->

                    <!--footer section end-->
                </div>
            </div>
            <!--//content-inner-->
            <!--/sidebar-menu-->
            <?php require_once 'blocks/siderbar.php'; ?>
            <!--//siderbar-menu-->
        </div>
        <script>
            var toggle = true;
            $(".sidebar-icon").click(function () {
                if (toggle) {
                    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                    $("#menu span").css({
                        "position": "absolute"
                    });
                } else {
                    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                    setTimeout(function () {
                        $("#menu span").css({
                            "position": "relative"
                        });
                    }, 400);
                }

                toggle = !toggle;
            });
        </script>       
        <script src="js/bootstrap.min.js"></script>
    </body>

</html>
