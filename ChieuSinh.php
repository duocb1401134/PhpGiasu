<?php
session_start();
require_once 'libs/recruit.php';
require_once 'libs/image.php';
require_once 'libs/tutor.php';
require 'libs/menu.php';

$p = 4;

//lấy giá trị biến i
if (isset($_GET["i"])) {
    $i = $_GET["i"];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Chiêu Sinh - Quang Trí</title>
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
        <!-- //js -->
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
        ?>
        <!-- //header -->
        <div class="events">
            <div class="container">
                <h3><span>Chiêu Sinh</span></h3>
                <p class="autem">Các khoá học mới đang mở ở trung tâm</p>
                <div class="events-grids">
                    <?php
                    $i = 0;
                    $recruit = new Recruit();
                    $list_recruit = $recruit->select_list();
                    if (count($list_recruit) == 0) {
                        echo '<p class="autem" style="color:red; font-weight:bold;">Không có khóa chiêu sinh nào cả</p>';
                    }
                    foreach ($list_recruit as $row) {
                        $i++; ?>
                        <div class="col-md-4 events-grid">
                            <div class="events-grid1 hvr-sweep-to-top">
                                <a href="chitietchieusinh.php?q=<?php echo $row["ID_CHIEUSINH"]; ?>"><img src="<?php
                                                                                                           $img = new Image();
                                                                                                              echo $img->select_once($row["ID_IMG"])["NAME_IMG"]; ?>" alt=" " class="img-responsive" /></a>
                                <h4><a href="chitietchieusinh.php?q=<?php echo $row["ID_CHIEUSINH"]; ?>"><?php echo $row["TEN_CHIEUSINH"]; ?></a></h4>
                                <ul>
                                    <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php
                                            $tutor = new Tutor();
                        echo $tutor->select_once_tutor($row["ID_GS"])["TEN_GS"]; ?></a></li>
                                    <li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><?php echo $row["NGAYMO_CHIEUSINH"]; ?></li>
                                </ul>
                                <p> <?php echo $row["MOTA_CHIEUSINH"]; ?> </p>
                            </div>
                        </div>
                        <?php

                    }
                    ?>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--phân trang-->
        <nav style="text-align: center;">
            <ul class="pagination">
                <li class="<?php if ($i == 0) {
                        echo 'disabled';
                    } ?>"><a href="ChieuSinh.php?i=
                    <?php
                    if (isset($_GET["i"])) {
                        $i = $_GET["i"];
                        $i = $i - 5;
                    } else {
                        $i = 0;
                    }
                    if ($i < 0) {
                        $i = 0;
                    } echo $i;
                    ?>&trang=
                                                                      <?php
                                                                      if ($i == 0) {
                                                                          echo $i + 1;
                                                                      } else {
                                                                          echo $i;
                                                                      }
                                                                      ?>"><span aria-hidden="true">&laquo;</span></a></li>
                    <?php
                    for ($j = 1; $j <= 5; $j++) {
                        $i++; ?>
                    <li><a href="ChieuSinh.php?i=<?php
                        if ($i % 5 == 0) {
                            echo $i;
                        } else {
                            $temb = (int) ($i / 5);
                            echo(($temb * 5) + 5);
                        } ?>&trang=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php
                    }
                    ?>
                <li class="<?php if ($i >= $tongsotrang) {
                        echo 'disabled';
                    } ?>">
                    <a href="ChieuSinh.php?i=<?php echo $i = $i + 5; //if ($i >= $tongsotrang){echo $i;} //else {echo $i = $i + 5;}?>&trang=<?php echo $i - 4; ?>"><span aria-hidden="true">&raquo;</span></a></li>
            </ul>
        </nav>
        <!-- //events -->
        <!-- footer -->
        <?php
        require 'blocks/fotter_index.php';
        ?>
        <!-- //footer -->
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
