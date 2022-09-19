<?php 
session_start();
?>
<?php
include 'top.php';
?>
<?php
include 'nav.php';
?>
 <?php
include 'left.php';
?> 
<section>
<?php
if (isset($_POST['username'])) {
    include("../include/connect.inc");
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "select id_customer, password from tblcustomer where account ='$username' and password= '$password'";
    $rs = mysqli_query($conn, $sql);
    if (mysqli_num_rows($rs) > 0) {
		$_SESSION['account'] = $username;
		$_SESSION['id'] = $row['id_customer'];
		echo "<script>alert('Đăng nhập thành công !');</script>";
		if (isset($_SESSION['account']))
		echo "<script>window.location.href='index.php'</script>";
    } else if (mysqli_num_rows($rs) == 0 && $_POST['username']!="" && $_POST['password']!="") echo "<script>alert('Tài khoản hoặc mật khẩu không tồn tại!')</script>";
}
?>
<div class="to">
							<div class="form">
								<form onsubmit="return KiemTra()" method="post" enctype="multipart/form-data">
									<fieldset>
										<legend>Đăng nhập</legend>
										<div class="logodangky">
											<a href="">
												<img src="../Images/linh tinh/logo3.png" class="logohinh" alt=""></a>
										</div>
										<div class="nhap">
											<i class="far fa-user"></i>
											<input type="username" name="username" value="" placeholder="Tên đăng nhập"
												id="input-username">
										</div>
										<div class="nhap">
											<i class="fas fa-lock"></i>
											<input type="password" name="password" value="" placeholder="Mật khẩu"
												id="input-password">
										</div>
										<div class="nutdangnhap"><input type="submit" value="Đăng nhập">
										</div>
										<div class="quayve">
											<span class="bentrai"><a href="#">Quên mật khẩu ?</a></span>
											<span class="benphai" style="margin-left:6%;"><a href="index.php">Trở về trang
													chủ</a></span>
										</div>
									</fieldset>

								</form>
								<script>
									    function KiemTra() {
var mail=document.getElementById("input-username");  
var mk=document.getElementById("input-password");  
if ((mk.value || mail.value)=="")
{
    alert("Vui lòng nhập đầy đủ thông tin.");
    return false;
}
if(mk.value.length < 6)
{
    alert("Tài khoản hoặc mật khẩu sai.");
    return false;
}
return true;
    }
								</script>
                            </div>
</section>
<?php
include 'bot.php';
?> 
