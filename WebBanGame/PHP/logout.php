<?php   
session_start();
if(isset($_SESSION['account']))
unset($_SESSION['account']);
echo "<script>alert('Đăng xuất thành công !')</script>";
        header("location:index.php");
        ?>