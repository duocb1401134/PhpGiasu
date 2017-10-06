<?php
session_start();
require_once 'libs/tutor.php';
require_once 'libs/image.php';
require_once 'libs/menu.php';
require_once 'libs/tinh.php';
require_once 'libs/Lop.php';
$p = 3;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Quang Trí</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Plottage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <!-- //for-mobile-apps -->

        <link href="images/icon.jpg" rel="shortcut icon" type="image/x-icon" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/acornmediaplayer.base.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/clndr.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- //js -->
        <link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript" src="js/responsiveslides.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        <!--code hiện huyện của tỉnh-->
<!--        <script type="text/javascript" src="js/ajax-huyen.js">
        </script>-->

        <script>
            var click = 1;
            $(document).ready(function () {
                $('#select_tinh').change(function () {
                    var id_tinh = $("#select_tinh").val();
                    $.post("libs/loadajax.php", {id: id_tinh, type: "huyen"}, function (data) {
                        $("#select_huyen").html(data);
                    });
                });
                $('#select_lop').change(function () {
                    var id_lop = $('#select_lop').val();
                    $.post("libs/loadajax.php", {id: id_lop, type: "monhoc"}, function (data) {
                        $("#select_monhoc").html(data);
                    });
                });
                $.get("libs/loadgiasu.php", {trang: click, type: "default"}, function (data) {
                    $("#list_tutor").append(data);
                });
                $('#xemthem').click(function () {
                    click = click + 1;
                    $.get("libs/loadgiasu.php", {trang: click, type: "default"}, function (data) {
                        $("#list_tutor").append(data);
                    });
                });
            });
        </script>
        <!--code đăng ký luận văn-->
        <script type="text/javascript" src="js/ajax-hdluanvan.js"></script>
        <script>
            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
                var t = setTimeout(startTime, 500);
            }

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                ;
                return i;
            }
        </script>
    </head>
    <body onload="startTime()">
        <!-- header -->
        <?php
        if (!isset($_SESSION["ID_GS"])) {
            require 'blocks/menu-login-before.php';
        } else {
            require 'blocks/menu-login-after.php';
        }
        ?>        <!-- //header -->
        <!-- banner -->
        <div class="col-md-8 single-left events">
            <h3><span>Gia sư</span></h3>
            <p class="autem">Danh sách gia sư của trung tâm</p>
            <br/>
            <form method="POST">
                <div class="col-md-6">
                    <?php
                    $tinh = new Tinh();
                    $tinh_list = $tinh->get_all_tinh();
                    ?>
                    <div class="input-group input-group-lg animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <span class="input-group-addon" id="sizing-addon1">Tỉnh</span>
                        <select id="select_tinh" name="select_tinh" class="form-control">
                            <option selected="selected" disabled="disabled">-- Tỉnh --</option>
                            <?php
                            foreach ($tinh_list as $row_tinh) {
                                ?>
                                <option value="<?php echo $row_tinh['ID_TINH'] ?>"><?php echo $row_tinh['TEN_TINH'] ?></option>
                                <?php                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-lg animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <span class="input-group-addon" id="sizing-addon1">Tỉnh</span>
                        <select id="select_huyen" name="select_huyen" class="form-control">
                            <option selected="selected" disabled="disabled">-- Huyện --</option>
                        </select>
                    </div>
                </div>
                <?php
                $lop = new Lop();
                $lop_list = $lop->getAll_lop();
                ?>
                <div class="col-md-6">
                    <div class="input-group input-group-lg animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <span class="input-group-addon" id="sizing-addon1">Lớp</span>
                        <select id="select_lop" name="select_lop" class="form-control lop">
                            <option disabled="disabled" selected="selected">-- Lớp --</option>
                            <?php
                            foreach ($lop_list as $row) {
                                ?>
                                <option value="<?php echo $row['ID_LOP']; ?>"><?php echo $row['TEN_LOP'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-lg animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <span class="input-group-addon" id="sizing-addon1">Môn</span>
                        <select id="select_monhoc" name="select_monhoc" class="form-control mon">
                            <option disabled="disabled" selected="selected">-- Môn học --</option>
                        </select>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
            <div class="single-left3">
                <table class="table">
                    <tbody id="list_tutor">
                    </tbody>
                </table>
                <div id="xemthem" style="float: right; cursor: pointer">Xem thêm >></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="related-posts events">
            <!--5 tin tuc nho-->
        </div>
    </div>
    <div class="clearfix"> </div>
    <!--phân trang-->
    <!-- footer -->
<?php
require 'blocks/fotter_index.php';
?>
</div>
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

            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
</script>
<!-- //here ends scrolling icon -->
<!--code tỉnh hiện huyện-->
</body>
</html>
