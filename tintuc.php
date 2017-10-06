<?php
session_start();
require_once 'libs/news.php';
require_once 'libs/image.php';
require 'libs/menu.php';
$p = 2;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tin Tức - Quang Trí</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="images/icon.jpg" rel="shortcut icon" type="image/x-icon"/>
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
        <!-- special-services -->

        <div class="events">
            <h3><span>Tin tức mỗi ngày</span></h3>
            <p class="autem">Thông tin tri thức bổ ích trong tầm tay</p>
            <div class="special-services-grids">
                <?php
                $news = new News();
                $list_news = $news->select_list();
                if (count($list_news) == 0) {
                    echo '<p class="autem" style="color:red; font-weight:bold;">Không có tin tức nào cả</p>';
                }
                $i=0;
                foreach ($list_news as $row) {
                    $i++; ?>
                    <div class="col-md-3 special-services-grid">
                        <div class="special-services-grid1">
                            <a href="tintucchitiet.php?q=<?php echo $row["ID_TT"]; ?>" class="more-sub hvr-bounce-to-bottom hvr-bounce-to-bottom1">
                                <img style="width:360; height:175;" src="<?php
                                $image = new Image();
                    echo $image->select_once($row["ID_IMG"])["NAME_IMG"]; ?>" alt=" " class="img-responsive" />
                            </a>
                        </div>
                        <h4>
                            <a href="tintucchitiet.php?q=<?php echo $row["ID_TT"]; ?>">
                                <?php echo $row["TIEUDE_TT"]; ?></a></h4>
                        <p><?php echo $row["GIOITHIEU"]; ?></p>
                        <div class="m2">
                            <a href="tintucchitiet.php?q=<?php echo $row["ID_TT"]; ?>" class="more-sub hvr-bounce-to-bottom hvr-bounce-to-bottom1">Xem chi tiết</a>
                        </div>
                    </div>
                    <?php
                    if ($i % 4 == 0) {
                        echo '<div class="clearfix"> </div>';
                    }
                }
                ?>
                <div class="clearfix"> </div>
            </div>
            <!--phân trang-->

        </div>

        <!-- //special-services -->

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
