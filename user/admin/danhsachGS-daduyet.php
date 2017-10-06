<div class="outter-wp">
    <!--/sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li><a href="index.php?p=7">Danh sách gia sư</a></li>
            <li><a href="index.php?p=8">Phê duyệt dạy</a></li>
            <li>Danh Sách gia đã duyệt</li>
        </ol>
    </div>
    <div class="container">
        <form method="POST">
            <div class="col-md-2">
                <div style="width:185px;" class="input-group input-group-lg animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <select id="trinhdo" name="trinhdo" class="form-control">
                        <option selected="selected" disabled="disabled">-- Trình độ --</option>
                        <?php
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div style="width:185px;" class="input-group input-group-lg animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <select id="khoinganh" name="khoinganh" class="form-control">
                        <option selected="selected" disabled="disabled">-- Khối ngành --</option>
                        <?php
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div style="width:185px;" class="input-group input-group-lg animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <select id="tinh" name="tinh" class="form-control tinh">
                        <option selected="selected" disabled="disabled">-- Tỉnh --</option>
                        <?php
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div style="width:185px;" class="input-group input-group-lg animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <select id="huyen" name="huyen" class="form-control huyen">
                        <option selected="selected" disabled="disabled">-- Huyện --</option>
                    </select>
                </div>
            </div>
            <div class="col-md-1">
                <div style="width:95px; padding-right:5px;" class="input-group input-group-lg animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <select name="lop" id="lop" class="form-control lop">
                        <option selected="selected" disabled="disabled">--Lớp--</option>
                        <?php
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div style="width:180px;" class="input-group input-group-lg animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <select id="monhoc" name="monhoc" class="form-control mon">
                        <option selected="selected" disabled="disabled">-- Môn học --</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div  class="input-group input-group-lg animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <input class="form-control" id="btnTimkiem" name="btnTimkiem" style="border-radius: 6px; padding: 9px; padding-top:0em;" type="submit" value="Tìm kiếm">
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-12 tab-content tab-content-in">
        <div class="tab-pane active text-style" id="tab1">
            <div class="inbox-right">
                <div class="mailbox-content">
                    <div>

                        <table class="table">
                            <tbody>                                
                                <tr class="table-row">
                                    <td>
                                        <img width="200px" height="auto" src="" alt="" />
                                    </td>
                                    <td class="table-text">
                                        <h6></h6>
                                        <p></p>
                                    </td>  
                                    <td >
                                        <a href="admin/xoags_moi.php?p="> Xóa </a>
                                    </td>
                                    <td >
                                        <a href="admin/xemgs.php?p="> Chi Tiết </a>
                                    </td>
                                </tr>
                                <?php
                                ?>
                            </tbody>
                        </table>            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"> </div> 
<br/>