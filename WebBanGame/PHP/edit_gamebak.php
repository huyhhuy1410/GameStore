<?php
include "../include/left_admin.php";
if (isset($_SESSION['username']))
    $username       =       $_SESSION['username'];
else
    header("location:index.php");
?>

</nav>
<script src="../js/ckeditor/ckeditor.js"></script>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cập nhật game</h1>
            </div>

            <!-- /.col-lg-12 -->
        </div>
        <?php
        include("../include/connect.inc");
        if (isset($_POST['txtidsubject'])) {
            $id_subject         =       $_POST['txtidsubject'];
            $id_game            =       $_POST['txtidgame'];
            $name_game          =       $_POST['txtname'];
            $price              =       $_POST['txtprice'];
            $status             =       $_POST['txtstatus'];
            $ver                =       $_POST['txtver'];
            $region             =       $_POST['txtregion'];
            $active             =       $_POST['txtactive'];
            $images             =       $_FILES['txtimages']['name'];
            $name_tmp           =       $_FILES['txtimages']['tmp_name'];
            $videos             =       $_FILES['txtvideos']['name'];
            $name_tmp         =     $_FILES['txtvideos']['tmp_name'];
            $des                =       $_POST['txtdes'];

            if ($images != "" ) 
                $sql    = "update tblgame set id_subject=$id_subject,  name_game='$name_game', price=$price, status='$status', ver='$ver', region='$region', active= '$active', images='$images', videos='$videos', des='$des' where id_game=$id_game";
             else 
                $sql    = "update tblgame set id_subject=$id_subject, name_game='$name_game', price=$price, status='$status', ver='$ver', region='$region', active= '$active',videos='$videos', des='$des' where id_game=$id_game";
            
                $rs         =       mysqli_query($conn, $sql);
                if ($rs) {
                    unlink("../Images/" . $_POST['txtimages']);
                    move_uploaded_file($name_tmp, "../Images/" . $images);
                
                echo "<script>window.location.href='list_game.php'</script>";
            } else
                echo "<script>alert('Cập nhật không thành công.')</script>";
               
             if ($videos == "") 
                $sql    = "update tblgame set videos='$videos' where id_game=$id_game";
            

                $rs         =       mysqli_query($conn, $sql);

                if ($rs) {            
                    unlink("../Videos/" . $_POST['txtvideos']);
                    move_uploaded_file($name_tmp, "../Videos/" . $videos);
                
                echo "<script>window.location.href='list_game.php'</script>";}
                else
                echo "<script>alert('Cập nhật không thành công.')</script>";    
                
        } else {
            $sql        =       "select * from tblgame where id_game= " . $_GET['id'];
            $rs         =       mysqli_query($conn, $sql);
            $row        =       mysqli_fetch_array($rs);
            $name_game          =       $row['name_game'];
            $price              =       $row['price'];
            $status             =       $row['status'];
            $ver                =       $row['ver'];
            $region             =       $row['region'];
            $active             =       $row['active'];
            $images             =       $row['images'];
            $videos             =       $row['videos'];
            $des                =       $row['des'];
        }

        ?>
        <form method="post" enctype="multipart/form-data">
            <table class="table table-striped table-bordered table-hover" style="width:90%" align="center">
                <tbody>
                    <tr>
                        <p>(*): Bắt buộc nhập.</p>
                        <input type="hidden" name='txtidgame' value='<?= $_GET["id"] ?>'>
                        <input type="hidden" name='txtimage' value='<?= $images ?>'>
                        <td>Thể loại:</td>
                        <td><select class="form-control" name='txtidsubject'><?php
                                                                                $sql = "select * from tblsubject";
                                                                                $rs     =   mysqli_query($conn, $sql);
                                                                                while ($row = mysqli_fetch_row($rs)) {
                                                                                    if ($_GET["idsubject"] == $row[0])
                                                                                        echo "<option selected value=" . $row[0] . ">" . $row[1] . "</option>";
                                                                                    else
                                                                                        echo "<option value=" . $row[0] . ">" . $row[1] . "</option>";
                                                                                }
                                                                                ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Tên game(*):</td>
                        <td><input class="form-control" name="txtname" value="<?= $name_game
                                                                                ?>"></td>
                    </tr>
                    <tr>
                        <td>Giá(*):</td>
                        <td><input class="form-control" name="txtprice" placeholder="Ex: 200000 - Đơn vị: VNĐ" value="<?= $price
                                                                                                                        ?>"></td>
                    </tr>
                    <tr>
                        <td>Trạng thái:</td>
                        <td><input class="form-control" name="txtstatus" value="<?= $status ?>"></td>
                    </tr>
                    <tr>
                        <td>Phiên bản:</td>
                        <td><input class="form-control" name="txtver" value="<?= $ver
                                                                                ?>"></td>
                    </tr>
                    <tr>
                        <td>Vùng:</td>
                        <td><input class="form-control" name="txtregion" value="<?= $region
                                                                                ?>"></td>
                    </tr>
                    <tr>
                        <td>Kích hoạt:</td>
                        <td><select class="form-control" name="txtactive">
                                <?php
                                $sql = "select * from tblactive";
                                $rs     =   mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($rs)) {
                                    if ($_GET["idactive"] == $row[0])
                                        echo "<option selected value=" . $row[0] . ">" . $row[1] . "</option>";
                                    else
                                        echo "<option value=" . $row[0] . ">" . $row[1] . "</option>";
                                }
                                ?></td>
                    </tr>
                    <tr>
                        <td>Bìa ảnh game:</td>
                        <td><input type="file" class="form-control" name="txtimages" id="fileField" value="<?=$images
                                                                                                            ?>"></td>
                    </tr>
                    <tr>
                        <td>Video game:</td>
                        <td><input type="file" class="form-control" name="txtvideos" id="fileField" value="<?=$videos 
                                                                                                            ?>"></td>
                    </tr>
                    <tr>
                        <td>Mô tả:</td>
                        <td><textarea class="form-control" name="txtdes"><?=$des
                                                                            ?></textarea></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" class="btn btn-primary" value="Cập nhật"><button type="reset" class="btn btn-warning" style="margin-left: 10px">Làm lại</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <script>
            CKEDITOR.replace('txtdes');
        </script>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<!-- Replace the with a CKEditor -->

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