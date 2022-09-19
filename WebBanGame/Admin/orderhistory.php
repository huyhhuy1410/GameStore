<?php
session_start();
if (!isset($_SESSION['username']))
    header("location:index.php");
include "../include/left_admin.php";
?>
</nav>
<script>
    function del_confirm(strlink) {
        ok = confirm("Bạn có muốn xóa ?");
        if (ok != 0)
            window.location.href = strlink;
    }
</script>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Lịch sử đơn hàng</h1>
                <form action="timgame.php" method="get" target="_blank">
                    <div class="input-group custom-search-form" style="width:25%; left:-10;">
                        <input type="search" name="search" class="form-control" placeholder="Tìm kiếm...">
                        <span class="input-group-btn">
                            <button style="bottom:10; height:35" class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                </form>
                <div style="margin-left:1020%;">
                    <button type="button" class="btn btn-success" style="margin-bottom: 20px" onClick="javascript:window.location.href='insert_game.php'">Thêm game</button>
                </div>
            </div>

            <!-- /.col-lg-12 -->
        </div>

        <div class="table-responsive table-bordered">
            <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã đơn hàng</th>
                        <th>Tên game</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <Th>Tổng</th>
                        <th>Ngày đặt</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>Dead By Daylight</td>
                    <td>1</td>
                    <td>190000</td>

                    <td>190000</td>
                    <td>2021-12-15</td>
                    <td style="color:blue;">Hoàn thành</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1</td>
                        <td>Horizon Zero Dawn</td>
                        <td>1</td>

                        <td>549000</td>
                        <td>549000</td>

                        <td>2021-12-15</td>
                        <td style="color:red;">Chưa hoàn thành</td>
                    </tr>

                    <tr>
                        <th colspan="6" style='padding-bottom:0px; padding-top:0'>

                            <a style='
text-decoration: none;
color: white;
font-size: 25px;
margin: 0 5px;
padding-right:10px;
padding-left:10px;
border:solid 2px;
outline:none;
background:#5cb85c;
border-radius:5px;
' href='list_game.php?page=$i'>1</a>

                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

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