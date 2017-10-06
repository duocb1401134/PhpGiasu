<div class="sidebar-menu">
    <header class="logo">
        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="../index.html"> <span id="logo"> <h1><?= ($isAdmin==1)?"Admin":"Profile"; ?></h1></span>
        </a> 
    </header>
    <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
    <!--/down-->
    <div class="down">	
        <a href="../index.html"><img style="width: 100px; height: auto;" src="../<?=$_SESSION["NAME_IMG"];?>"></a>
        <a href="../index.html"><span class="name-caret"><?=$_SESSION["TEN_GS"];?></span></a>
        <p><?=$_SESSION["GIOITHIEU_GS"];?></p>
        <ul>
            <li><a class="tooltips" href="../index.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
            <li><a class="tooltips" href="../index.php"><span>Cài đặt</span><i class="lnr lnr-cog"></i></a></li>
            <li><a class="tooltips" href="../index.php?dangxuat=1"><span>Đăng xuất</span><i class="lnr lnr-power-switch"></i></a></li>
        </ul>
    </div>
    <!--//down-->
    <div class="menu">
        <ul id="menu" >
            <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Cập Nhật Hồ Sơ </span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="index.php?profile=1"> Cập Nhật Thông Tin</a></li>
                    <li id="menu-academico-boletim" ><a href="index.php?profile=2">Đổi Mật Khẩu</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="index.php?profile=3">Cập Nhật Ảnh Đại Diện</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="index.php?profile=4">Chuyên Ngành</a></li>
                </ul>
            </li>
            <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Đăng Ký</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="index.php?profile=5">Đăng Ký Môn Dạy</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="index.php?profile=7">Đăng Ký Nơi Dạy</a></li>
                </ul>
            </li>
        </ul>       
    </div>
</div>
<div class="clearfix"></div>		