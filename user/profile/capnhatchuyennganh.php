<div class="outter-wp">    
    <div id="chuyennganh" class="forms-main">                     
        <h2 class="inner-tittle"><center>Cập Nhật Chuyên Ngành</center></h2>
        <div class="graph-form">
            <div class="validation-form">
                <form method ="GET" class="form-horizontal">
                    <div class="form-group">
                        <?php
                        $sp = new Specialized();
                        $tutor = new Tutor();
                        $row_tutor = $tutor->select_once_tutor($_SESSION["ID_GS"]);
                        ?>
                        <label for="khoinganh" class="control-label col-sm-2">Khối ngành</label>
                        <div class="col-sm-10">
                            <select multiple class="form-control" id="khoinganh" name="khoinganh">
                                <?php foreach ($sp->select_all() as $row_sp) { ?>
                                    <option value="<?php echo $row_sp['ID_KHOINGANH']; ?>" <?php
                                    if ($row_sp['ID_KHOINGANH'] == $row_tutor['ID_KHOINGANH']) {
                                        echo "selected='selected'";
                                    }
                                    ?>><?php echo $row_sp['TEN_KHOINGANH'] ?></option>
<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Chuyên Ngành</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="chuyennganh" placeholder="<?php echo $row_tutor['CHUYENNGANH_GS'] ?>">
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="form-group">
                        <?php
                        $ed = new Education();
                        ?>
                        <label for="trinhdo" class="control-label col-sm-2">Trình Độ</label>
                        <div class="col-sm-10">
                            <select multiple class="form-control" id="trinhdo" name="trinhdo">
                                <?php foreach ($ed->select_all() as $row_ed) { ?>
                                    <option value="<?php echo $row_ed['ID_TRINHDO'] ?>"<?php
                                            if ($row_ed['ID_TRINHDO'] == $row_tutor['ID_TRINHDO']) {
                                                echo "selected='selected'";
                                            }
                                            ?>><?php echo $row_ed['TEN_TRINHDO']; ?></option>                          
<?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 form-group button-2">
                        <button name="btn_chuyennganh" type="submit" class="btn btn-primary">Cập Nhật</button>
                    </div>
                    <div class="clearfix"> </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"> </div> 