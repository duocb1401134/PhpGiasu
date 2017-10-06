<div class="outter-wp">
    <div class="forms-main" id="capnhat">
        <h2 class="inner-tittle"><center>Cập Nhật Thông Tin Gia Sư</center></h2>
        <div class="graph-form">
            <div class="validation-form">
                <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Họ Và Tên</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $row_user['TEN_GS']; ?>" placeholder="Họ và Tên" required="" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Giới tính</label>

                        <div class="col-sm-10">
                            <?php
                            if ($row_user['GIOITINH_GS'] == NULL)
                                $ch = -1;
                            else if ($row_user['GIOITINH_GS'] == TRUE)
                                $ch = 1;
                            else
                                $ch = 0;
                            ?>
                            <div class="radio-inline"><label><input type="radio" name="gioitinh" value="1" <?php if ($ch == 1) echo 'checked'; ?>> Nam</label></div>
                            <div class="radio-inline"><label><input type="radio" name="gioitinh" value="0"  <?php if ($ch == 0) echo 'checked'; ?>> Nữ</label></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sdt">Số điện thoại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $row_user['SDT_GS'] ?>" placeholder="Số điện thoại" required="" name="sdt">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ngaysinh">Ngày Sinh</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" value="<?php echo $row_user['NGAYSINH_GS'] ?>" required="" name="ngaysinh">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="gioithieu">Giới thiệu sơ nét</label>
                        <div class="col-sm-10">
                            <textarea class="form-control"  placeholder="Giới thiệu sơ nét" required="" name="gioithieu"><?php echo $row_user['GIOITHIEU_GS']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="noicongtac">Nơi công tác</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $row_user['NOICONGTAC_GS']; ?>" required="" name="noicongtac">
                        </div>
                    </div>               
                    <div class="form-group">
                        <label class="control-label col-sm-2">Mức lương đề nghị</label>
                        <div class="col-md-5">                                                
                            <input class="form-control" name="luongkhoidiem" type="text" placeholder="Khởi Điểm" required="" value="<?php echo $row_user['LUONGKHOIDIEM_GS']; ?>">
                        </div>
                        <div class="col-md-5">                                                
                            <input class="form-control" name="luongcaonhat" type="text" placeholder="Lớn Nhất" required="" value="<?php echo $row_user['LUONGCAONHAT_GS']; ?>">
                        </div>                    
                    </div>               
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="capnhatthongtin" class="btn btn-default">Cập Nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>
<div class="clearfix"> </div> 