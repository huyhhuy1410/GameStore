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
         include("../include/connect.inc");
			if (isset($_POST['account'])){
			
			$account        =       $_POST['account'];
			$password		= 	 	md5($_POST['password']);
			$name_customer	=		$_POST['fullname'];
			$tel			=		$_POST['telephone'];
			$email			=		$_POST['email'];
			$sql                =       "insert into tblcustomer(account, password, name_customer, tel, email) values('$account', '$password', '$name_customer', '$tel', '$email')";
                $rs           =       mysqli_query($conn, $sql);
				if ($rs){
				echo "<script>alert('Đăng ký tài khoản thành công !')</script>";
                    echo "<script>window.location.href='dangnhap.php'</script>";}
			else echo "<script>alert('Lỗi đăng ký, xin vui lòng thử lại sau !')</script>";
			
			}
        ?>
<div class="to">
					<div class="form">
						<form onsubmit="return KiemTra()" method="post" enctype="multipart/form-data">
							<fieldset>
								<legend>Đăng kí</legend>
								<div class="logodangky">
									<a href="#">
										<img src="../Images/linh tinh/logo3.png" class="logohinh" alt=""></a>
								</div>
								<div class="nhap">
									<i class="far fa-address-card"></i>
									<input type="text" placeholder="Họ và tên" name="fullname" value=""
										id="input-fullname" pattern="[a-zA-Z][a-zA-Z ]{2,}" required>
								</div>
								<div class="nhap">
									<i class="far fa-user"></i>
									<input type="text" name="account" value="" placeholder="Username"
										id="input-username">
								</div>
								<div class="nhap">
									<i class="fas fa-lock"></i>
									<input type="password" name="password" value="" placeholder="Mật khẩu"
										id="input-password">
								</div>
								<div class="nhap">
									<i class="fas fa-lock"></i>
									<input type="password" name="confirm" value="" placeholder="Nhập lại mật khẩu"
										id="input-confirm">
								</div>
								<div class="nhap">
									<i class="far fa-envelope"></i>
									<input type="email" name="email" value="" placeholder="Địa chỉ Email"
										id="input-email">
								</div>
								<div class="nhap">
									<i class="fas fa-phone"></i>
									<input type="tel" name="telephone" value="" placeholder="09xxxxxxxx"
										id="input-telephone">
								</div>
								<div class="checkbox">
									<label class="dieukhoan">Tôi đã đọc và đồng ý với <a class="fancybox"
											href="dieukhoan.php" alt="Điều khoản dịch vụ" target="_blank"><b>Điều khoản dịch vụ</b></a>
										<input type="checkbox" name="agree" value="1" id="input-check" />
									</label>
								</div>
								<div class="nutdangky"><input type="submit" value="Đăng ký" onclick="if(!this.form.agree.checked){alert('Bạn chưa chấp nhận điều khoản dịch vụ của chúng tôi.');return false}"  >
								</div>
								<div class="quayve">
									<span class="bentrai"><a href="dangnhap.php">Trở lại trang
											đăng nhập</a></span>
									<span class="benphai"><a href="index.php">Trở về trang
											chủ</a></span>
								</div>
							</fieldset>

						</form>
						<script>
									    function KiemTra() {
var acc=document.getElementById("input-username");  
var mk1=document.getElementById("input-password");  
var mk2=document.getElementById("input-confirm");  
var tel=document.getElementById("input-telephone");  
var email=document.getElementById("input-email");  
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

	if (email.value=="") {
		alert("Vui lòng nhập email.");
		return false;
		email.focus();
	}


	if (!tel.value.match(phoneno)) {
		if (tel.value.length!=10)
{	alert("Vui lòng nhập đâỳ đủ sdt.");
	return false;
	tel.focus();
}
		alert("Vui lòng nhập đúng định dạng sdt.");
		return false;
		tel.focus();
	}
						}						</script>
					</div>
					</section>

<?php
include 'bot.php';
?> 