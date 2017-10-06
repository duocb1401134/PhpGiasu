<table class="table">
                    <tbody>
                        <?php
// tìm gia sư
if (isset($_POST["btnTimkiem"])) {
	
	if (!isset($_POST["select_monhoc"])) {
		
		$monhoc = null;
		
	}
	else
	$monhoc = $_POST["select_monhoc"];
	
	if (!isset($_POST["select_lop"])) {
		
		$lop = null;
		
	}
	else
	$lop = $_POST["select_lop"];
	
	if (!isset($_POST["select_tinh"])) {
		
		$tinh = null;
		
	}
	else
	$tinh = $_POST["select_tinh"];
	
	if (($tinh == null) && ($lop == null) && ($monhoc == null)) {
		
		echo '<p class="autem" style="color:red; font-weight:bold;">Bạn chưa chọn thông tin tìm kiếm</p>';
		
	}
	else {
		
		$giasu = Timkiem_GS($from, $sotin1trang, $monhoc, $tinh);
		
		if (mysql_num_rows($giasu) == 0)
		echo '<p class="autem" style="color:red; font-weight:bold;">Không tìm được gia sư theo yêu cầu</p>';
		
	}
	
}

else {
	
	$giasu = Hiengiasu_phantrang($from, $sotin1trang);
	
	if (mysql_num_rows($giasu) == 0)
	echo '<p class="autem" style="color:red; font-weight:bold;">Không có gia sư nào cả</p>';
	
}

//echo mysql_num_rows($giasu);

if (mysql_num_rows($giasu) != 0) {
	
	while ($row_giasu = mysql_fetch_array($giasu)) {
		
		?>
                                <tr class="table-row">
                                    <td class="table-img">
                                        <img src="user/<?php
$avt = Hienhinh($row_giasu["ID_IMG"]);

$row_avt = mysql_fetch_array($avt);

echo $row_avt["NAME_IMG"];

?>" style="width:150px; height: auto;" alt="" />
                                    </td>
                                    </td>
                                    <td class="table-text">
                                        <h6><a href="CT_GS.php?q=<?php echo $row_giasu["ID_GS"];
?>"><?php echo $row_giasu["TEN_GS"];
?></a></h6>
                                        <p><?php echo $row_giasu["GIOITHIEU_GS"];
?></p>
                                    </td>
                                    <td>
                                        <span class="fam"><a href="CT_GS.php?q=<?php echo $row_giasu["ID_GS"];
?>"> Chi Tiết </a></span>
                                    </td>
                                </tr>
                                <?php
}

}

?>
                    </tbody>
                </table>