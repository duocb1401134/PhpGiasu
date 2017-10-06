<div class="outter-wp">    
    <div id="capnhatanh" class="forms-main">                     
        <h2 class="inner-tittle"><center>Cập Nhật Ảnh Đại Điện</center></h2>
        <div class="graph-form">
            <div class="validation-form">                
                <form method="POST" enctype="multipart/form-data" action="<?= $_SERVER['PHP_SELF']?>">
                    <div class="vali-form">
                        <image style="width: 200px; height: auto;" src="../<?=$_SESSION["NAME_IMG"]; ?>"/>
                    </div>
                    <div class="vali-form">
                        <div class="col-md-12 form-group1">
                            <label  class="control-label">Chọn Hình</label>
                            <input type="file" name="img">
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>                
                    <div class="col-md-12 form-group button-2">
                        <button type="submit" name="btn_avatar" class="btn btn-primary">Cập Nhật</button>
                    </div>
                    <div class="clearfix"> </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"> </div> 