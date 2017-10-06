<div class="outter-wp">
    <div class="sub-heard-part">
        <ol class="breadcrumb m-b-0">
            <li>Đăng tin tức</li>
            <li><a href="index.php?p=12">Danh sách tin tức</a></li>
        </ol>
    </div>
    <!--//sub-heard-part-->
    <div class="graph-visual">
        <h2 class="inner-tittle"> Cập nhật tinh tức </h2>
        <div class="maark-edit graph">
            <?php
            ?>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-sm-4">
                        <input class="form-control" name="tieude" type="text" placeholder="Tiêu đề">
                    </div>
                    <div class="col-sm-4">
                        <input type="file" name="img" >
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <div class="col-sm-8">
                        <textarea class="form-control" name="gioithieu" type="text" placeholder="Giới thiêu sơ nét"></textarea>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <div class="col-sm-8">
                        <textarea name="noidung" id="text" name="text" style="resize: none;">                                    
                        </textarea>
                    </div>
                    <script>
                        config = {};
                        config.filebrowserBrowserUrl = 'js/ckfinder/ckfinder.html';
                        config.filebrowserImageBrowserUrl = 'js/ckfinder/ckfinder.html';
                        config.entities_latin = false;
                        config.language = 'vi';
                        CKEDITOR.replace('text', config);
                    </script>
                </div>
                <hr>
                <button name="dangtin" type="submit" class="btn">Đăng</button>
            </form>
        </div>
    </div>
</div>