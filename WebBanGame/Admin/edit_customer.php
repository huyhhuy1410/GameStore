
            <?php
            include "../include/left_admin.php";
            ?>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa thông tin khách hàng</h1>
                    </div>
                </div>
<?php 
         include("../include/connect.inc");
         if (isset($_POST['name_customer'])){
            $id     =       $_POST['customid'];
         $name_customer	=		$_POST['name_customer'];
         $tel			=		$_POST['tel'];
         $email			=		$_POST['email'];
         $sql                =       "update tblcustomer set name_customer='$name_customer', tel='$tel', email='$email' where id_customer=$id";
    $rs   =       mysqli_query($conn, $sql);
    if($rs)
    echo "<script>alert('Cập nhật tài khoản khách hàng thành công !')</script>";
    echo "<script>window.location.href='list_cus.php'</script>";}

else{
    $id     =       $_GET['id'];
    $sql    =       "select * from tblcustomer where id_customer=$id";
    $rs     =       mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($rs);
    $account        =       $row['account'];
    $name_customer	=		$row['name_customer'];
    $tel			=		$row['tel'];
    $email			=		$row['email'];
}
?>
                <form method="post">
                    <table class="table table-striped table-bordered table-hover" style="width:50%" align="center">

                        <tbody>
                            <tr>

                                <td>Tên khách hàng:</td>
                                <td><input class="form-control" name="name_customer" value="<?=$name_customer?>"></td>
                                <input type="hidden" class="form-control" name="customid" value="<?=$id?>">

                            </tr>
                            <tr>

<td>Tài khoản:</td>
<td><input class="form-control" name="account" readonly value="<?=$account?>"></td>
</tr>

<tr>

<td>SDT:</td>
<td><input class="form-control" name="tel" value="<?=$tel?>"></td>
</tr>
<tr>

<td>Email:</td>
<td><input class="form-control" name="email" value="<?=$email?>"></td>
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