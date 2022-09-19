<?php   
session_start();
if(isset($_SESSION['username']))
unset($_SESSION['username']);
echo "<script>alert('Đăng xuất thành công !')</script>";
        header("location:index.php");
        ?>