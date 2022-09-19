<?php
session_start();
if (!isset($_SESSION['username']))
header("location:index.php");
include "../include/left_admin.php";
?>
</nav>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm thể loại</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?php
        if (isset($_POST['txtsubject'])) {
            include("../include/connect.inc");
            $subjectname        =       $_POST['txtsubject'];
            $sql                =       "insert into tblsubject(name_subject) values('$subjectname')";
            if ($subjectname != "") {
                $rs           =       mysqli_query($conn, $sql);
                if ($rs)
                echo "<script>alert('Thêm thành công !')</script>";
                    echo "<script>window.location.href='list_subjects.php'</script>";
            } else echo "<script>alert('Vui lòng nhập tên thể loại')</script>";
        }
        ?>
        <form method="post">
            <table class="table table-striped table-bordered table-hover" style="width:50%" align="center">
                <tbody>
                    <tr>
                        <td>Tên thể loại(*):</td>
                        <td><input class="form-control" name="txtsubject"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" class="btn btn-primary">Thêm</button>
                            <button type="reset" class="btn btn-warning" style="margin-left: 10px">Làm lại</button>
                        </td>
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