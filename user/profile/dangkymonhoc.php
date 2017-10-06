<div class="outter-wp">    
    <div id="dangky_mon" class="forms-main">                     
        <h2 class="inner-tittle"><center>Đăng Ký môn</center></h2>
        <div class="col-md-6" >	
            <div class="graph-form">
                <div class="validation-form">               
                    <form method="GET">
                        <div class="vali-form">
                            <div class="col-md-12 form-group2 group-mail">
                                <label class="control-label">Lớp</label>
                                <select name="lop" id="lop" onchange="change_country(this.value)" class="frm-field required lop">
                                    <option value="">123</option>
                                </select>
                            </div>

                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="col-md-12 form-group2 group-mail">
                            <label class="control-label">Môn</label>
                            <table class="table">
                                <tr><th><input type='checkbox' class="all" name='all' value='all' > Chọn tất cả các môn</th></tr><tr>
                            </table>
                            <table  name="mon" id="mon" class="table mon">
                            </table>
                        </div>
                        <div class="clearfix"> </div>
                        <input id="btnDangky" name="p" type="hidden" value="5">
                        <div class="col-md-12 form-group button-2">
                            <input id="btnDangky" name="btnDangky" type="submit" class="btn btn-primary" value="Đăng Ký">
                        </div>
                        <div class="clearfix"> </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6" >	
            <div class="graph-form">
                <div class="validation-form">
                    <h3><center>Kết quả đăng ký</center></h3>
                    <form method="GET">
                        <input id="btnDangky" name="p" type="hidden" value="5">
                        <input id="btnHuydangky" name="btnHuydangky" type="submit" class="btn btn-primary" value="Huỷ Đăng Ký">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"> </div> 