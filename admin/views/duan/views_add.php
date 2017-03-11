<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm dự án
                </h1>
            </div>
            <?php if ($err): ?>
                <div class="clearfix"></div>
                <?php foreach ($err as $value): ?>
                    <div class="alert alert-danger">
                        <?php echo $value; ?>
                    </div>
                <?php endforeach; ?>

            <?php endif; ?>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="index.php?controller=duan&action=add" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Tiêu đề:</label>
                        <input type="text" class="form-control" name="txtTitle" />
                    </div>
                    <div class="form-group">
                        <label>Logo:</label>
                        <input type="file" name="fImageLogo">
                    </div>
<!--                    <div class="form-group">
                        <label>Hình ảnh hiển thị ở trang chủ:</label>
                        <input type="file" name="fImage">
                    </div>-->
                    <div class="form-group">
                        <label>Vị trí hiển thị ở trang chủ:</label>
                        <input type="number" class="form-control" name="txtVitrihienthi" />
                    </div>
                    <div class="form-group">
                        <label>Giới thiệu:</label>
                        <textarea name="txtDescription" class="form-control" rows="8"></textarea>
                    </div>
                    <div class="form-group" style="display:none">
                        <label>Thông tin dự án:</label>
                        <textarea name="txtThongtin" class="form-control" rows="15"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Mặt bằng tổng thể:</label>
                        <textarea name="txtMatbang" class="form-control" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Vị trí:</label>
                        <input type="text" class="form-control" name="txtVitri" />
                    </div>
                    <div class="form-group">
                        <label>Thể loại: </label>
                        <label class="radio-inline">
                            <input name="rdoFeatured" value="1" checked="" type="radio">Nội thành
                        </label>
                        <label class="radio-inline">
                            <input name="rdoFeatured" value="2" type="radio">Ngoại thành
                        </label>
                        <label class="radio-inline">
                            <input name="rdoFeatured" value="3" type="radio">Officetel
                        </label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Làm lại</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->