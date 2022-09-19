<?php
session_start();
if (!isset($_SESSION['username']))
header("location:index.php");
include "../include/left_admin.php";
?>
</nav>

<script src="../js/ckeditor/ckeditor.js"></script>
<div id="page-wrapper">
    <script>
        CKEDITOR.replace('txtdes');

        function KiemTra() {
            var name = document.getElementByName('txtname');
            var price = document.getElementByName('txtprice');
            if ((name.value) == "") {
                alert("Vui lòng nhập tên game.");
                return false;
            }
            if ((price.value) == "") {
                alert("Vui lòng nhập giá bán.");
                return false;
            }
            return true;
        }
    </script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm game mới</h1>
            </div>

            <!-- /.col-lg-12 -->
        </div>
        <?php
        include("../include/connect.inc");
        if (isset($_POST['txtidsubject'])) {
            $id_subject         =       $_POST['txtidsubject'];
            $name_game          =       $_POST['txtname'];
            $price              =       $_POST['txtprice'];
            $status             =       $_POST['txtstatus'];
            $ver                =       $_POST['txtver'];
            $region             =       $_POST['txtregion'];
            $active             =       $_POST['txtactive'];
            $images             =       $_FILES['txtimages']['name'];
            $name_tmp           =       $_FILES['txtimages']['tmp_name'];
            $videos             =       $_FILES['txtvideos']['name'];
            $videos_tmp         =       $_FILES['txtvideos']['tmp_name'];
            $des                =       $_POST['txtdes'];

            $sql                =       "insert into tblgame(id_subject, name_game, price, status, ver, region, active, images, videos, des) values($id_subject, '$name_game', $price, '$status', '$ver', '$region', '$active', '$images', '$videos', '$des')";

            $rs                 =       mysqli_query($conn, $sql);
            $maxsize = 15728640; // 15MB

            if ($rs && ($_FILES['txtvideos']['size'] <= $maxsize)) {{
                move_uploaded_file($name_tmp, "../Images/" . $images);
                move_uploaded_file($videos_tmp, "../videos/" . $videos);
            }
            echo "<script>alert('Thêm sản phẩm thành công !')</script>";
                echo "<script>window.location.href='list_game.php'</script>";
            } else {
                echo "<script>alert('Lỗi thêm không thành công !')</script>";
                $sql                =       "select * from tblsubject";
                $rs                 =       mysqli_query($conn, $sql);
            }
        } else {
            $sql                =       "select * from tblsubject";
            $rs                 =       mysqli_query($conn, $sql);
        }

        ?>

        <form method="post" enctype="multipart/form-data">
            <table class="table table-striped table-bordered table-hover" style="width:90%" align="center">

                <tbody>
                    <tr>
                        <p>(*): Bắt buộc nhập.</p>
                        <td>Thể loại:</td>
                        <td><select class="form-control" name='txtidsubject'>
                                <?php
                                while ($row = mysqli_fetch_array($rs))
                                    echo "<option value=" . $row[0] . ">" . $row[1] . "</option>";
                                ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Tên game(*):</td>
                        <td><input class="form-control" name="txtname"></td>
                    </tr>
                    <tr>
                        <td>Giá(*):</td>
                        <td><input class="form-control" name="txtprice" placeholder="Ex: 200000 - Đơn vị: VNĐ"></td>
                    </tr>
                    <tr>
                        <td>Trạng thái:</td>
                        <td><input class="form-control" name="txtstatus"></td>
                    </tr>
                    </td>
                    </tr>
                    <tr>
                        <td>Phiên bản:</td>
                        <td><input class="form-control" name="txtver"></td>
                    </tr>
                    <tr>
                        <td>Vùng:</td>
                        <td><input class="form-control" name="txtregion"></td>
                    </tr>
                    <tr>
                        <td>Kích hoạt:</td>
                        <td><select class="form-control" name="txtactive">
                                <?php
                                $sql                =       "select * from tblactive";
                                $rs                 =       mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($rs))
                                    echo "<option value=" . $row[1] . ">" . $row[1] . "</option>";
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Bìa ảnh game:</td>
                        <td><input type="file" class="form-control" name="txtimages" id="fileField"></td>
                    </tr>
                    <tr>
                        <td>Video game:</td>
                        <td><input type="file" class="form-control" name="txtvideos" id="fileField"></td>
                    </tr>
                    <tr>
                        <td>Mô tả:</td>
                        <td><textarea class="form-control" name="txtdes"></textarea></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" onclick="KiemTra()" class="btn btn-primary" value="Thêm"><button type="reset" class="btn btn-warning" style="margin-left: 10px">Làm lại</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!-- /.row -->
    </div>
    <script>
        CKEDITOR.replace('txtdes');
    </script>
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