<div class="outter-wp">    
    <div id="doimatkhau" class="forms-main">                     
        <h2 class="inner-tittle"><center>Đổi mật khẩu</center></h2>   
        <div class="graph-form">
            <div class="validation-form">
                <form class="form-horizontal" name="chage_pass" id="chage_pass" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data"> 
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="passwword_old">Mật Khẩu cũ:</label>
                        <div class="col-sm-10">          
                            <input class="form-control" id="passwword_old" name="passwword_old" type="password" placeholder="Mật Khẩu Cũ">
                        </div>                    
                    </div>
                    <div id="error_pass" class="thatbai"></div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Mật Khẩu Mới:</label>
                        <div class="col-sm-10">          
                            <input class="form-control" type="password" id="password" name="password" placeholder="Mật Khẩu Mới">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Nhập lại:</label>
                        <div class="col-sm-10">          
                            <input  class="form-control"name="password2" id="password2" type="password" placeholder="Mật Khẩu Mới">
                        </div>
                    </div>                
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button name="btn_change_pass" id="btn_change_pass" type="submit" class="btn btn-default">Cập Nhật</button>
                        </div>
                    </div>
                </form>            
            </div>
        </div>
    </div>
</div>
<div class="clearfix"> </div> 