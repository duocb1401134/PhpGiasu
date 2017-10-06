<h3>Các tin tức mới</h3>
<?php
$nam_tintuc = Hien5tinnho();

while ($row_5tintuc = (mysql_fetch_array($nam_tintuc))) {
    ?>
    <div class="related-post">
        <div class="related-post-left">
            <a href="tintucchitiet.php?q=<?php echo $row_5tintuc["ID_TT"];
    ?>">
                <img src="<?php
    $hinh = Hienhinh($row_5tintuc["ID_IMG"]);

    $row_hinh = (mysql_fetch_array($hinh));

    echo $row_hinh["NAME_IMG"];
    ?>" alt=" " class="img-responsive" /></a>
        </div>
        <div class="related-post-right">
            <h4><a href="tintucchitiet.php?q=<?php echo $row_5tintuc["ID_TT"];
            ?>"><?php echo $row_5tintuc["TIEUDE_TT"];
            ?></a></h4>
            <p><?php echo $row_5tintuc["GIOITHIEU"];
    ?>
            </p>
        </div>
        <div class="clearfix"> </div>
    </div>
    <hr>
    <?php
}
?>
