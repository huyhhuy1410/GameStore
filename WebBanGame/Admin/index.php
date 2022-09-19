<?php
session_start();
?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../Script/admin.css">
<?php
if (isset($_POST['txtusername'])) {
    include("../include/connect.inc");
    $username = $_POST['txtusername'];
    $password = md5($_POST['txtpassword']);
    $sql = "select username, password from tblusers where username ='$username' and password= '$password'";
    $rs = mysqli_query($conn, $sql);
    if (mysqli_num_rows($rs) > 0) {
		$_SESSION['username'] = $username;
		echo "<script>alert('Đăng nhập thành công !');</script>";
		if (isset($_SESSION['username']))
		echo "<script>window.location.href='main.php'</script>";
    } else if (mysqli_num_rows($rs) == 0 && $_POST['txtusername']!="" && $_POST['txtpassword']!="") echo "<script>alert('Tài khoản hoặc mật khẩu không tồn tại!')</script>";
}
?>
<script>
    function checkLogin() {
        if (document.frmLogin.txtusername.value == "") {
            alert("Xin vui lòng nhập tài khoản");
            document.frmLogin.txtusername.focus();
            return;
        }
        if (document.frmLogin.txtpassword.value == "") {
            alert("Xin vui lòng nhập mật khẩu");
            document.frmLogin.txtpassword.focus();
            return;
        }
        document.frmLogin.submit();
    }
</script>
<div class="to">
    <div class="form">
        <form name="frmLogin" method="post">
            <fieldset>
                <legend>Đăng nhập</legend>
                <div class="logodangky">
                    <a href="">
                        <img src="../Images/linh tinh/logo3.png" class="logohinh" alt=""></a>
                </div>
                <div class="nhap">
                    <i class="far fa-user"></i>
                    <input type="username" name="txtusername" value="" placeholder="Tên đăng nhập" id="input-username">
                </div>
                <div class="nhap">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="txtpassword" value="" placeholder="Mật khẩu" id="input-password">
                </div>
                <div class="nutdangnhap"><input type="submit" value="Đăng nhập" onClick="checkLogin()">
                </div>

            </fieldset>

        </form>
    </div>
</div>