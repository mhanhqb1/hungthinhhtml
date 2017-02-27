<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh sách dự án
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Logo</th>
                                <th>Tiêu đề</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($data): ?>
                                <?php foreach ($data as $v): ?>
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $v['id']; ?></td>
                                <td><img src="../media/images/duan/<?php echo $v['logo']; ?>" width="100"/></td>
                                <td><?php echo $v['title']; ?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có muốn xóa dự án này?')" href="index.php?controller=duan&action=del&id=<?php echo $v['id'];?>">Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="index.php?controller=duan&action=edit&id=<?php echo $v['id'];?>">Sửa</a></td>
                            </tr>
                                <?php endforeach;?>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->