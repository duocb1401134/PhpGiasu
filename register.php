<?php
session_start();
require_once 'libs/tutor.php';
require_once 'libs/image.php';
?>
<html>
    <head>
        <title> Đăng Ký tài khoản - Quang Trí</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="images/icon.jpg" rel="shortcut icon" type="image/x-icon"/>  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/light-carousel.css" rel="stylesheet" type="text/css">        
        <!-- js -->        
        <link href="css/form.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.16.0/jquery.validate.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.16.0/additional-methods.js"></script>
        <script src="js/validation.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $("#email").blur(function () {
                    var email = $(this).val();
                    $.post("libs/check_email.php", {email: email}, function (data) {
                        if (data != 0) {
                            $("#error_email").html("Email không khả dụng");
                        } else {
                            $("#error_email").html("");
                        }
                    });
                });
            });
        </script>
    </head>    
    <?php
    if (isset($_POST['btnDangky'])) {
        $tutor = new Tutor();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = md5($_POST['password']);
        if ($tutor->register_encryption($name, $email, $pass)) {
            $login = $tutor->login_encrypt($email, $pass);
            $id = $login['ID_GS'];
            $_SESSION['ID_GS'] = $id;
            $_SESSION["EMAIL_GS"] = $login['EMAIL_GS'];
            $_SESSION["TEN_GS"] = $login['TEN_GS'];
            $_SESSION["MATKHAU_GS"] = $login['MATKHAU_GS'];
            $_SESSION["ADMIN"] = $login['ADMIN'];
            $image = new Image();
            $image_row = $image->select_once($login['ID_IMG']);
            $_SESSION["NAME_IMG"] = $image_row['NAME_IMG'];

            if (isset($_POST['remember'])) {
                setcookie('ID_GS', $id, time() + 3600);
            }            
            header('location: index.php');
        }
    }
    ?>
    <body>
        <div id="sign_in">
            <div class="typo-grids events" style="margin: 0px auto; padding: 30px 30px 20px 30px; width: 550px; background-color: white;">
                <center> <h1 style=" color: #00B6FF">Đăng ký</h1> </center>                                    
                <hr>
                <div >
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>"  class="form-inline" id="register-form" enctype="multipart/form-data">                       
                        <div class="keywords">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <input type="text" name="name" placeholder="Tên" required="">
                        </div>
                        <div class="clearfix"></div>
                        <div class="keywords">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                            <input type="email"  id="email" name="email" placeholder="Email" required="">                           
                        </div>
                        <div class="clearfix"></div>
                        <div class="keywords">
                            <label class="error" id="error_email"></label>
                        </div>
                        <div class="clearfix"></div>
                        <div class="keywords">
                            <span class=" glyphicon glyphicon-lock" aria-hidden="true"></span>
                            <input type="password" name ="password" id="password" placeholder="Mật khẩu">
                        </div> 
                        <div class="clearfix"></div>
                        <div class="keywords">
                            <span class=" glyphicon glyphicon-lock" aria-hidden="true"></span>
                            <input type="password" name ="password2" id="password2" placeholder="Nhập lại">
                            <label class="error" id="error_pass"></label>
                        </div> 
                        <div class="clearfix"></div>
                        <div class="keywords">                        
                            <input name="remember" type="checkbox" id="brand">                       
                            <label style=" color: #00B6FF" for="brand" >Nhớ đăng nhập</label>                             
                        </div>
                        <div class="clearfix" style="padding-bottom: 10px;"> </div>
                        <div class="reservation-grids">                          
                            <div class="keywords">
                                <input id="btnDangnhap" name="btnDangky" id="btnDangky" type="submit" value="Đăng ký">
                                <hr>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="keywords"style="text-align: center;" > 
                                <a class="a_link" href="login.php">  Đăng Nhập   </a>
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
