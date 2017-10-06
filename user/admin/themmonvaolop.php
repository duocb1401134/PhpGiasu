<div class="forms-main" id="capnhat">
    <h2 class="inner-tittle"><center>Thêm Môn Học</center></h2>
    <div class="graph-form">
        <div class="validation-form">
            <form method="POST">
                <?php                
                ?>
                <div class="col-md-6 form-group2">
                        <select name="lop" id="lop" onchange="change_country(this.value)" class="frm-field required lop">
                            <option  disabled="disabled" selected="selected">-- Cấp Lớp --</option>
                        </select>
                    </div>
                <div class="vali-form">
                    <div class="col-md-10 form-group1">
                        <label class="control-label">ID Môn học</label>
                        <input type="text" placeholder="ID Môn" required="" name="id_mon">
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="col-md-10 form-group1 group-mail">
                    <label class="control-label">Tên môn hoc</label>
                    <input type="text" placeholder="Tên môn" required="" name="tenmon">
                </div>                                       
                <div class="clearfix"> </div> 
                
                <input id="btnDangky" name="p" type="hidden" value="1">
                <div class="col-md-10 form-group button-2">
                    <button name="submit" type="submit" class="btn btn-primary">Cập Nhật</button>
                </div>
                <div class="clearfix"> </div>
            </form>
        </div>

    </div>
</div> 
<br/>