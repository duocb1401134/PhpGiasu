<?php
$tutor = new Tutor();
$list_tutor = $tutor->duyet();
?>
<div class="outter-wp">
    <!--/sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li><a href="index.php?p=7">Danh sách gia sư</a></li>
            <li>Phê duyệt dạy</li>
            <li><a href="index.php?p=9">Danh Sách gia đã duyệt</a></li>
        </ol>
    </div>	
    <div class="col-md-12 tab-content tab-content-in">
        <div class="tab-pane active text-style" id="tab1">
            <div class="inbox-right">
                <div class="mailbox-content">
                    <table class="table">
                        <tbody>
                            <?php
                            foreach($list_tutor as $key => $values ){
                            ?>
                            <tr class="table-row">
                                <td>
                                    <?php $image = new Image(); ?>
                                    <img width="100px" height="auto" src="../<?=$image->select_once($values['ID_IMG'])['NAME_IMG'];?>" alt="" />
                                </td>
                                <td class="table-text">
                                    <h6><?=$values['TEN_GS']?></h6>
                                    <p><?=$values['GIOITHIEU_GS'];?></p>
                                </td>                                
                                <td>
                                    <a href="admin/xoags_duyet.php?p=<?=$values['ID_GS'];?>"> Xóa </a>
                                </td>                                
                                <td >
                                    <a href="chitietgs.php?p=<?=$values['ID_GS'];?>"> Chi Tiết </a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>					
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"> </div> 
<br/>