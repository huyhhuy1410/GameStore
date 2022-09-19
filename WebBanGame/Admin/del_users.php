<?php   
session_start();
if(isset($_SESSION['username']))
$username       =       $_SESSION['username'];
else
    header("location:index.php");
    include("../include/connect.inc");
    $id     =       $_GET['id'];
    // Xóa customer 
    $sql        =       "delete from tblusers where id_user=$id";
    $rs         =       mysqli_query($conn, $sql);


    if($rs){
    echo "<script>alert('Xóa tài khoản thành công !')</script>";
    echo "<script>window.location.href='list_users.php'</script>";
}
    else echo "<script>alert('Xóa không thành công !')</script>";
        ?>