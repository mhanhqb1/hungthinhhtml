<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chỉnh sửa video
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
            <form action="index.php?controller=video&action=edit&id=<?php echo $data['id'];?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Tiêu đề:</label>
                    <input type="text" class="form-control" name="txtTitle" value="<?php echo $data['title'];?>"/>
                </div>
                <div class="form-label">
                    <label>Hình ảnh cũ:</label>
                    <img src="../media/images/video/<?php echo $data['image'];?>" width="200">
                </div>
                <div class="form-label">
                    <label>Hình ảnh mới:</label>
                    <input type="file" name="fNewImage"/>
                </div>
                <div class="form-group">
                    <label>Link video:</label>
                    <input type="text" class="form-control" name="txtLink" value="<?php echo $data['link'];?>"/>
                </div>
                <button type="submit" name="submit" class="btn btn-default">Chỉnh sửa</button>
                <button type="reset" class="btn btn-default">Làm lại</button>
                <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
        <!-- /#page-wrapper -->