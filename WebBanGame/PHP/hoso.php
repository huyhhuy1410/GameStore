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
<div id="page1">
<p class="tieude">THÔNG TIN TÀI KHOẢN</p>

    <div class="form" style="width:65%; margin-top:10px">
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
    echo "<script>alert('Cập nhật tài khoản thành công !')</script>";
    echo "<script>window.location.href='index.php'</script>";}

else{
    $account     =       $_SESSION['account'];
    $sql    =       "select * from tblcustomer where account='$account'";
    $rs     =       mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($rs);
    $id= $row['id_customer'];
    $account        =       $row['account'];
    $name_customer	=		$row['name_customer'];
    $tel			=		$row['tel'];
    $email			=		$row['email'];

}
?>
                <form method="post">
								<div class="nhap"style="font-size:25px; font-weight:bold;">

                                Tên khách hàng:
                                <input class="form-control" name="name_customer" value="<?=$name_customer?>" style="padding-left:2%;">
                                <input type="hidden" class="form-control" name="customid" value="<?=$id?>">  
</div>



<div class="nhap" style="font-size:25px; font-weight:bold;">Tài Khoản:
<input class="form-control" name="account" disabled name="favcolor" value="<?=$account?>" style="padding-left:2%;">
</div>


<div class="nhap"style="font-size:25px; font-weight:bold;">
Số Điện Thoại:
<input class="form-control" name="tel" value="<?=$tel?>" style="padding-left:2%;">
</div>
<div class="nhap"style="font-size:25px; font-weight:bold;">
Email:<br>
<input class="form-control" name="email" value="<?=$email?>" style="padding-left:2%;">
</div>
<div class="nutdangky"   style="margin-left: 37%;">
<button style="font-size:25px;" type="submit" class="btn btn-primary">Cập nhật</button>    </div>       

        
                </form>
								</div>
</div>
                    
</section>



<?php
include 'bot.php';
?> 
