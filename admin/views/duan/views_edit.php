<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chỉnh sửa dự án
                </h1>
            </div>
            <?php if($err): ?>
               <div class="clearfix"></div>
               <?php foreach ($err as $value): ?>
                <div class="alert alert-danger">
                    <?php echo $value; ?>
                </div>
            <?php endforeach; ?>

        <?php endif;?>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            <form action="index.php?controller=duan&action=edit&id=<?php echo $data['id'];?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Tiêu đề:</label>
                    <input type="text" class="form-control" name="txtTitle" value="<?php echo $data['title'];?>"/>
                </div>
                <div class="form-group">
                    <label>Logo cũ:</label>
                    <img src="../media/images/duan/<?php echo $data['logo'];?>" width="200">
                </div>
                <div class="form-group">
                    <label>Logo mới:</label>
                    <input type="file" name="fNewLogo"/>
                </div>
                <div class="form-group">
                    <label>Hình ảnh cũ:</label>
                    <img src="../media/images/duan/<?php echo $data['image'];?>" width="200">
                </div>
                <div class="form-group">
                    <label>Hình ảnh mới:</label>
                    <input type="file" name="fNewImage"/>
                </div>
<!--                <div class="form-group" style="">
                    <label>Vị trí hiển thị ở trang chủ:</label>
                    <input type="number" class="form-control" name="txtVitrihienthi" value="<?php echo $data['vitrihienthi'];?>"/>
                </div>-->
                <div class="form-group">
                    <label>Giới thiệu:</label>
                    <textarea name="txtDescription" class="form-control" rows="8"><?php echo $data['description'];?></textarea>
                </div>
                <div class="form-group">
                    <label>Thông tin dự án:</label>
                    <textarea name="txtThongtin" class="form-control" rows="10"><?php echo $data['thongtin'];?></textarea>
                </div>
                <div class="form-group">
                    <label>Mặt bằng tổng thể:</label>
                    <textarea name="txtMatbang" class="form-control" rows="10"><?php echo $data['matbang'];?></textarea>
                </div>
                <div class="form-group">
                    <label>Vị trí:</label>
                    <input type="text" class="form-control" name="txtVitri" value="<?php echo $data['vitri'];?>"/>
                </div>
                <div class="form-group">
                    <label>Thể loại: </label>
                    <label class="radio-inline">
                        <input name="rdoFeatured" value="1" <?php if ($data['is_noithanh'] == 1) echo 'Checked'; ?> type="radio">Nội thành
                    </label>
                    <label class="radio-inline">
                        <input name="rdoFeatured" value="2" <?php if ($data['is_noithanh'] == 2) echo 'Checked'; ?> type="radio">Ngoại thành
                    </label>
                    <label class="radio-inline">
                        <input name="rdoFeatured" value="3" <?php if ($data['is_noithanh'] == 3) echo 'Checked'; ?> type="radio">Officetel
                    </label>
                </div>
                <button type="submit" name="submit" class="btn btn-success">Chỉnh sửa</button>
                <button type="reset" class="btn btn-danger">Làm lại</button>
                <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->