<?php   
session_start();
if(isset($_SESSION['username']))
$username       =       $_SESSION['username'];
else
    header("location:index.php");
    include("../include/connect.inc");
    $id     =       $_GET['id'];
    // Xóa game 
    $sql        =       "delete from tblgame where id_subject=$id";
    $rs         =       mysqli_query($conn, $sql);
    // Xóa thể loại
    $sql        =       "delete from tblsubject where id_subject=$id";
    $rs         =       mysqli_query($conn, $sql);

    if($rs)
        header("location:list_subjects.php");
        ?>