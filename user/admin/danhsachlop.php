
<div class="outter-wp">
    <!--/sub-heard-part-->
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li><a href="index.php?admin=5">Mở lớp</a></li>
            <li>Danh Sách Lớp</li>
        </ol>
    </div>
    <!-- tab content -->
    <div class="col-md-12 tab-content tab-content-in">
        <div class="tab-pane active text-style" id="tab1">
            <div class="inbox-right">
                <div class="mailbox-content">
                    <table class="table">
                        <tbody>
                            <?php
                            $molop = new Recruit();
                            $list_molop = $molop->select_list();                            
                            foreach ($list_molop as $key=>$value){
                                $image = new Image();
                                                          ?>
                            <tr class="table-row">
                                <td>
                                    <img width="200px" height="auto" src="../<?php echo $image->select_once($value["ID_IMG"])["NAME_IMG"];    ?>" alt="" />
                                </td>
                                <td class="table-text">
                                    <h6><?=$value['TEN_CHIEUSINH'];?></h6>                                    
                                </td>
                                <td >
                                    <a style="padding: 10px 20px 10px 20px; background-color: #CECDCD;" href="admin/xoalop.php?p=<?= $value['ID_CHIEUSINH']?>"> Xóa </a>
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