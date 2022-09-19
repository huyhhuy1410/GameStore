<?php
include "../include/left_admin.php";
?>
</nav>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm tài khoản quản trị</h1>
            </div>
        </div>
        <?php
        include("../include/connect.inc");
        if (isset($_POST['username'])) {
            $name_user    =        $_POST['name_user'];
            $username      =       $_POST['username'];
            $password            =    md5($_POST['password']);
            $sql                =       "insert into tblusers (name_user, username, password) values('$name_user','$username','$password')";
            $rs   =       mysqli_query($conn, $sql);
            if ($rs){
                echo "<script>alert('Thêm tài khoản thành công !')</script>";
            echo "<script>window.location.href='list_users.php'</script>";
        }else echo "<script>alert('Thêm không thành công !')</script>";
    }
        ?>
        <form method="post" onsubmit="return KiemTra()">
            <table class="table table-striped table-bordered table-hover" style="width:50%" align="center">

                <tbody>
                    <tr>

                        <td>Tên người dùng:</td>
                        <td><input type="text" class="form-control" id="name_user" name="name_user" pattern="[a-zA-Z][a-zA-Z ]{2,}" required></td>
                    </tr>
                    <tr>

                        <td>Tài khoản:</td>
                        <td><input type="text" id="username" class="form-control" name="username"></td>
                    </tr>

                    <tr>

                        <td>Mật khẩu:</td>
                        <td><input type="password" id="password" class="form-control" name="password"></td>
                    </tr>
                    <td>Nhập lại mật khẩu:</td>
                        <td><input type="password" id="confirm" class="form-control"></td>
                    </tr>

                        <td></td>
                        <td><button type="submit" class="btn btn-primary">Xác nhận</button><button type="reset" class="btn btn-warning" style="margin-left: 10px">Làm lại</button></td>
                    </tr>

            </table>
        </form>
        <script>
        function KiemTra() {
var acc=document.getElementById("username");  
var mk1=document.getElementById("password");  
var mk2=document.getElementById("confirm");   
var phoneno = /^\d{10}$/;
var letterNumber = /^[0-9a-zA-Z]+$/;


if (!acc.value.match(letterNumber))
{
	if (acc.value=="")
{

	alert("Vui lòng nhập tài khoản.");
	return false;
	acc.focus();
}
	alert("Tải khoản không chứa các kí tự đặc biệt.");
	return false;
	acc.focus();
}
if (mk1.value.length < 6)
{
	if (mk1.value ==""){
	alert("Vui lòng nhập mật khẩu.");
	return false;
	mk1.focus();
	}
	alert("Mật khẩu phải từ 6 kí tự trở lên.");
	return false;
	mk1.focus();
}
if (mk2.value != mk1.value)
{
	if (mk2.value =="")
	{
		alert("Vui lòng nhập lại mật khẩu.");
	return false;
	mk2.focus();
	}
	alert("Nhập lại mật khẩu chưa đúng.");
	return false;
	mk2.focus();
}

						}						</script>
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