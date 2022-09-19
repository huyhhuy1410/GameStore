
            <?php
            include "../include/left_admin.php";
            ?>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa tên thể loại</h1>
                    </div>
                </div>
<?php 
include("../include/connect.inc");
if(isset($_POST['txtsubject'])){
    $id     =       $_POST['txtid'];
    $subjectname    =       $_POST['txtsubject'];
    $sql        =       "update tblsubject set name_subject='$subjectname' where id_subject=$id";
    $rs   =       mysqli_query($conn, $sql);
    if($rs)
    echo "<script>alert('Cập nhật thể loại thành công !')</script>";
    echo "<script>window.location.href='list_subjects.php'</script>";}
else{
    $id     =       $_GET['id'];
    $sql    =       "select * from tblsubject where id_subject=$id";
    $rs     =       mysqli_query($conn, $sql);
    $row    =       $row=mysqli_fetch_array($rs);
    $subjectname    =       $row['name_subject'];
}
?>
                <form method="post">
                    <table class="table table-striped table-bordered table-hover" style="width:50%" align="center">

                        <tbody>
                            <tr>

                                <td>Tên thể loại(*):</td>
                                <td><input class="form-control" name="txtsubject" value="<?=$subjectname?>"></td>
                                <input type="hidden" class="form-control" name="txtid" value="<?=$id?>">
                            </tr>
                            <tr>

                                <td></td>
                                <td><button type="submit" class="btn btn-primary">Cập nhật</button><button type="reset" class="btn btn-warning" style="margin-left: 10px">Làm lại</button></td>
                            </tr>

                    </table>
                </form>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/raphael.min.js"></script>
    <script src="../js/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/startmin.js"></script>

</body>

</html>