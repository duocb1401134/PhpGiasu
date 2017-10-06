<script>
    $(document).ready(function () {
        $('#select_lop').change(function () {
            var id_lop = $('#select_lop').val();
            $.post("../libs/loadajax.php", {id: id_lop, type: "monhoc"}, function (data) {
                $("#select_monhoc").html(data);
            });
        });
    });
</script>
<div class="outter-wp">
    <!--/sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li>Mở lớp</li>
            <li><a href="index.php?admin=6">Danh sách lớp</a></li>
        </ol>
    </div>	
    <!--/sub-heard-part-->	
    <!--/forms-->
    <div class="graph-2 general">
        <h2 class="inner-tittle"><center>Chiêu sinh</center> </h2>
        <div class="grid-1">
            <?php
            $class = new Lop();
            $list_class = $class->getAll_Lop();
            ?>
            <form method ="POST" action="<?= $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" class="form-horizontal"> 
                <div class="form-group">                   
                    <div class="col-sm-8">
                        <input type="text" class="form-control1 col-sm-8" name="tenlop" placeholder="Tên Lớp"> 
                    </div>
                </div>                
                <div class="form-group">
                    <div class="col-md-4 form-group2 group-mail">
                        <select name="select_lop" id="select_lop" class="frm-field required lop">
                            <option  disabled="disabled" selected="selected">-- Cấp Lớp --</option>
                            <?php
                            foreach ($list_class as $key => $value) {
                                ?>
                                <option value="<?= $value["ID_LOP"]; ?>"><?= $value["TEN_LOP"] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4 form-group2 group-mail">
                        <select id="select_monhoc" name="select_monhoc" class="frm-field required mon">
                            <option value=""> --- Môn Học --- </option>
                        </select>
                    </div>
                </div>                
                <div class="clearfix"> </div>
                <div class="form-group"> 
                    <div class="col-sm-8">                   
                        <input type="text" class="form-control" name="id_giasu" placeholder="ID gia su">
                    </div>
                </div> 
                <div class="form-group"> 
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control" name="gioithieu" placeholder="Nội dung bao quát"> 
                    </div>
                </div> 
                <div class="clearfix"> </div>
                <div class="form-group">                    
                    <div class="col-md-4">
                        <input type="file" name="img" id="img"/>                       
                    </div>
                    <div class="col-md-4">
                        <input type="date" name="ngaymo"> 
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="form-group">                    
                    <div class="col-sm-8">
                        <textarea class="form-control" id="ndct" name="ndct" placeholder="Nội dung chi tiết"></textarea>
                        <script>
                            config = {};
                            config.entities_latin = false;
                            config.language = 'vi';
                            CKEDITOR.replace('ndct');
                        </script>
                    </div>
                </div>
                <button name="btn_molop" type="submit" class="btn btn-default">Đăng</button>
            </form>
        </div>
        <!--//forms-inner-->
    </div> 
    <!--//forms-->											   
</div>
<br/>