<?php
require_once 'libs/tutor.php';
require_once 'libs/image.php';
require_once 'csrf.php';
session_start();
$id = 0;
if (isset($_POST['btnDangnhap'])) {
    $captcha = isset($_POST['captcha']) ? $_POST['captcha'] : NULL;
    if ($captcha != NULL) {
        if ($captcha == $_SESSION['security_code']) {
            $email = $_POST['email'];
            $pass = md5($_POST['pass']);
            $tutor = new Tutor();
            $login = $tutor->login_encrypt($email, $pass);
            $id = $login['ID_GS'];
            if ($id != 0) {
                if (isset($_POST['remember'])) {
                    setcookie('ID_GS', $id, time() + 3600);
                }
                $_SESSION['ID_GS'] = $id;
                $_SESSION["EMAIL_GS"] = $login['EMAIL_GS'];
                $_SESSION["TEN_GS"] = $login['TEN_GS'];
                $_SESSION["MATKHAU_GS"] = $login['MATKHAU'];
                $_SESSION["ADMIN"] = $login['ADMIN'];
                $_SESSION["GIOITHIEU_GS"] = $login['GIOITHIEU_GS'];
                $image = new Image();
                $image_row = $image->select_once($login['ID_IMG']);
                $_SESSION["NAME_IMG"] = $image_row['NAME_IMG'];
                header('Location: index.php');
            } else {
                echo 'đăng nhập thất bại';
            }
        } else {
            echo "capcha không hợp lệ!";
        }
    } else {
        echo "Bạn chưa nhập captcha!";
    }
}
?>
<html>
    <head>
        <title> Đăng nhập tài khoản - Quang Trí</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="images/icon.jpg" rel="shortcut icon" type="image/x-icon"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/light-carousel.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="sign_in">
            <div class="typo-grids events" style="margin: 0px auto; padding: 30px 30px 20px 30px; width: 550px; background-color: white;">
                <center> <h1 style=" color: #00B6FF">ĐĂNG NHẬP</h1> </center>
                <hr>
                <div >
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="form-inline" enctype="multipart/form-data">
                        <div class="keywords">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                            <input type="email" id="email" name="email" placeholder="Email" required="">
                        </div>
                        <div class="keywords">
                            <span class=" glyphicon glyphicon-lock" aria-hidden="true"></span>
                            <input type="password" name ="pass" placeholder="Mật khẩu">
                        </div>
                        <div class="clearfix"></div>
                        <div style="float: right;"><image src="random_image.php"/></div>
                        <div class="clearfix"></div>
                        <div class="keywords">
                            <span class=" glyphicon glyphicon-lock" aria-hidden="true"></span>
                            <input type="text" name ="captcha" placeholder="Captcha">                            
                        </div>
                        <div class="clearfix"></div>
                        <div class="keywords">
                            <input name="remember" type="checkbox" id="brand">
                            <label style=" color: #00B6FF" for="brand" >Nhớ đăng nhập</label>
                            <div style="text-align: right; float: right">
                                <a href="quenmk.php">Quên mật khẩu?</a>
                            </div>
                        </div>
                        <div class="clearfix" style="padding-bottom: 10px;"> </div>
                        <div class="reservation-grids">
                            <div class="reservation-grids">
                            </div>
                            <div class="keywords">
                                <p class="thongbao" style="color:red; font-weight:bold; font-size:18px; text-align:center;">
                                </p>
                            </div>
                            <div class="keywords">
                                <input id="btnDangnhap" name="btnDangnhap" type="submit" value="Đăng Nhập">
                                <hr>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="keywords"style="text-align: center;" >
                                <a class="a_link" href="register.php">  Đăng Ký   </a>
                                <a class="a_link" href="index.php"> Trang Chủ </a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
