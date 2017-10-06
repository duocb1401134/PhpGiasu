<div class="outter-wp">    
    <div id="dangky_noiday" class="forms-main">    
        <h2 class="inner-tittle"><center>Đăng Ký Nơi Dạy</center></h2>	
        <div class="col-md-8" >			
            <div class="graph-form">
                <div class="validation-form">
                    <form method="GET">
                        <div class="col-md-12 form-group2 group-mail">

                            <label class="control-label">Tỉnh</label>
                            <select name="tinh" id="tinh" class="frm-field required city">
                                <option disabled="disabled" selected="selected">-- Tên tỉnh --</option>
                            </select>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="col-md-12 form-group2 group-mail">
                            <label class="control-label">Huyện</label>
                            <table class="table">
                                <tr><th><input type='checkbox' class="all" name='all' value='all' > Chọn tất cả</th></tr><tr>
                            </table>
                            <table  name="huyen" id="huyen" class="table huyen">
                            </table>
                        </div>
                        <div class="clearfix"> </div>
                        <input id="btnDangky" name="p" type="hidden" value="7">
                        <div class="col-md-12 form-group button-2">
                            <input id="btnDangky" name="btnDangky" type="submit" class="btn btn-primary" value="Đăng Ký">
                        </div>
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">	
            <div class="graph-form">
                <div class="validation-form">
                    <h3><center>Kết quả đăng ký</center></h3>
                    <form method="GET">
                        <input id="btnDangky" name="p" type="hidden" value="7">
                        <input id="btnHuydangky" name="btnHuydangky" type="submit" class="btn btn-primary" value="Huỷ Đăng Ký">
                    </form>
                </div>        
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>	
</div>
<div class="clearfix"> </div> 