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
                           <h1 class="page-header">Danh mục game</h1>
                           <form action="timgame.php" method="get" target="_blank">
                           <div class="input-group custom-search-form" style="width:25%; left:-10;">
                    <input type="search" name="search" class="form-control" placeholder="Tìm kiếm...">
                    <span class="input-group-btn">
                        <button style="bottom:10; height:35" class="btn btn-primary" type="submit">
                            <i  class="fa fa-search"></i>
                        </button>
                    </span>                       </form><div style="margin-left:1020%;">
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
                                   <th>Tên game</th>
                                   <th>Giá</th>
                                   <th>Hình</th>
                                   <th>Sửa</th>
                                   <th>Xóa</th>
                               </tr>
                           </thead>
                           <tbody <?php
                                    include("../include/connect.inc");
                                    $sql     =       "select * from tblgame";
                                    $rs      =       mysqli_query($conn, $sql);
                                    $count   =       mysqli_num_rows($rs);
                                    // Hiển thị
                                    $pageSize    =       5;
                                    $pos         =       (!isset($_GET['page'])) ? 0 : ($_GET['page'] - 1) * $pageSize;
                                    $sql         =       "select * from tblgame limit $pos, $pageSize";
                                    $rs          =       mysqli_query($conn, $sql);
                                    $i           =       1;
                                    while ($row = mysqli_fetch_array($rs)) {
                                        echo "<tr>
                               <td>" . $i . "</td>
                               <td>" . $row["name_game"] . "</td>
                               <td>" . $row["price"] . "</td>
                               <td><img src='../images/" . $row["images"] . "' width=200 height=200></td>
                               <td><a href='edit_game.php?id=" . $row["id_game"] . "&idsubject=" . $row["id_subject"] . "&idactive=" . $row["active"] . "'>Sửa</a></td>
                               <td><a href='javascript:del_confirm(\"del_game.php?id=" . $row['id_game'] . "\")'>Xóa</a></td>
                               </tr>";
                                        $i++;
                                    }


                                    ?> <tr>
                               <th colspan="6" style='padding-bottom:0px; padding-top:0'>
                                   <?php
                                    for ($i = 1; $i <= ceil($count / $pageSize); $i++)
                                        echo "<a style='
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
' href='list_game.php?page=$i'>" . $i . "</a>";
                                    ?>
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