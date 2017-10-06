<?php
session_start();
require_once 'libs/news.php';
require_once 'libs/menu.php';

$p = 2;
if (isset($_GET['q'])) {
    $id = $_GET['q'];
} else {
    $id = "";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Chi tiết tin tức - Quang Trí </title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="images/icon.jpg" rel="shortcut icon" type="image/x-icon"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Plottage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/light-carousel.css" rel="stylesheet" type="text/css">
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- //js -->
        <link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
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
        <div class="single">
            <div class="container">
                <div class="col-md-8 single-left events" id="tintuc">
                    <div class="single-left3">
                        <?php
                        $news = new News();
                        $news_row = $news->select_once($id);
                        ?>
                        <h1> <?php echo $news_row['TIEUDE_TT']; ?> </h1>
                        <p>
                            <span class="thumbnails">
                                <?php
//                                $hinh = Hienhinh($row_tintucchitiet['ID_IMG']);
//                                $row_hinh = mysql_fetch_array($hinh);
                                ?>
                            </span>
                        <h6>
                            <?php
//                            echo $row_hinh['MOTA'];
                            ?>
                        </h6>
                        <span>
                            <?php
                            echo $news_row['NOIDUNG_TT'];
                            ?>
                        </span>
                        </p>
                    </div>

                </div>

                <div class="col-md-4 single-right">

                    <div class="related-posts events" id="ttcungloai">
                        <h3>Tin tức cùng loại</h3>
                        <!-- nhung tin tuong tu -->
                            <div class="related-post">
                                <div class="related-post-left">
                                    <a href="tintucchitiet.php?q= "alt=" " class="img-responsive" /></a>
                                </div>
                                <div class="related-post-right">
                                    <h4><a href="tintucchitiet.php?q="></a></h4>
                                    <p><!-- tieu de -->   </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //single -->
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
