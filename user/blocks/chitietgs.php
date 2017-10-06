<!--outter-wp-->
<div class="outter-wp">
    <!--sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li><a href="index.php">Home</a></li>
            <li class="active">Chi Tiết Gia Sư</li>
        </ol>
    </div>   
    <?php
    ?>
    <div class="profile-widget">
        <img src="<?php echo $rows['NAME_IMG']; ?>" alt=" " />
        <h2>ID Gia Sư: <?php echo $rows['ID_GS']; ?></h2>
    </div>
    <!--/profile-inner-->
    <div class="profile-section-inner">
        <div class="col-md-6 profile-info">
            <h3 class="inner-tittle">Thông tin cơ bản</h3>
            <div class="main-grid3">
                <div class="p-20">
                    <div class="about-info-p">
                        <strong>Họ và Tên</strong>
                        <br>
                        <p class="text-muted"><?php echo $rows['TEN_GS']; ?></p>
                    </div>
                    <div class="about-info-p">
                        <strong>Số Điện Thoại</strong>
                        <br>
                        <p class="text-muted"><?php echo $rows['SDT_GS']; ?></p>
                    </div>
                    <div class="about-info-p">
                        <strong>Mức Lương</strong>
                        <br>
                        <p class="text-muted"><?php echo $rows['LUONGKHOIDIEM_GS']; ?> - <?php echo $rows['LUONGCAONHAT_GS']; ?></p>
                    </div>
                    <div class="about-info-p">
                        <strong>Email</strong>
                        <br>
                        <p class="text-muted"><?php echo $rows['EMAIL_GS']; ?></p>
                    </div>
                </div>
            </div>
            <h3 class="inner-tittle">Giới thiệu cơ bản </h3>
            <div class="main-grid3 p-skill">
                <p class="para"><?php echo $rows['GIOITHIEU_GS']; ?></p>
            </div>
            <br/>
            <div class="clearfix"> </div>
            <div class="main-grid3">
                <form method="POST">
                    <input type="submit" name="DUYET"  value="Duyệt">
                </form>
                <?php
                ?>
            </div>
        </div>
        <div class="col-md-6 profile-info two">
            <h3 class="inner-tittle">Danh sách đăng ký môn dạy </h3>
            <div class="main-grid3 p-skill">
                <ul class="timeline">
                    <li>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <?php
                                ?>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>		
            </div>
        </div>
        <div class="col-md-6 profile-info two">
            <h3 class="inner-tittle">Danh sách đăng ký nơi dạy </h3>
            <div class="main-grid3 p-skill">
                <ul class="timeline">
                    <li>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <?php
                                ?>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>		
            </div>
        </div>
        <!--/map-->
        <div class="clearfix"></div>
    </div>
    <!--//profile-inner-->
    <!--//profile-->
</div>