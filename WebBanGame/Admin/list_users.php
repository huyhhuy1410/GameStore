<?php
session_start();
if (!isset($_SESSION['username']))
header("location:index.php");
include "../include/left_admin.php";
?>
          </nav>

          <div id="page-wrapper">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-12">
                          <h1 class="page-header">Danh sách tài khoản Admin</h1>
                          <form method="get" action="timacc.php">

                          <div class="input-group custom-search-form" style="width:25%;">
                    <input type="search" name="search" class="form-control" placeholder="Tìm kiếm...">
                    <span class="input-group-btn">
                        <button style="bottom:10; height:35" class="btn btn-primary" type="submit">
                            <i  class="fa fa-search"></i>
                        </button>
                    </span></form><div style="margin-left:830%;">
                    <button type="button" class="btn btn-success" style="margin-bottom: 20px" onClick="javascript:window.location.href='insert_users.php'">Thêm tài khoản</button>
</div>
                </div>

                <!-- /input-group -->

                      </div>
                  </div>
                  <div class="table-responsive table-bordered">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>STT</th>
                                  <th>Tên người dùng</th>
                                  <th>Tên đăng nhập</th>
                                  <th>Xóa</th>
                              </tr>
                          </thead>
                          <tbody>
          <?php
            include("../include/connect.inc");
            $sql        =   "select * from tblusers";
            $rs         =   mysqli_query($conn, $sql);
            $count      =   mysqli_num_rows($rs);

            $pageSize   =   10;
            $pos        =   (!isset($_GET['page']))?0:($_GET['page']-1)*$pageSize;
            $sql        =   "select * from tblusers limit $pos, $pageSize";
            $rs         =   mysqli_query($conn, $sql);
            $i          =   1;
        while($row=mysqli_fetch_array($rs)){
            echo "<tr>
            <td>$i</td>
            <td>".$row['name_user']."</td>
            <td>".$row['username']."</td>
            <td><a href='javascript:del_confirm(\"del_users.php?id=".$row['id_user']."\")'>Xóa</a></td>
            </tr>";
            $i++;
        }
        ?> <tr>
            <th colspan="4">
            <?php
for($i=1; $i<=ceil($count/$pageSize);$i++)
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
' href='list_subjects.php?page=$i'>".$i."</a>";
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
          <script>
              function del_confirm(strlink) {
                  ok = confirm("Bạn có muốn xóa không?");
                  if (ok != 0)
                      window.location.href = strlink;
              }
          </script>

          <script src="../js/jquery.min.js"></script>
          <script src="../js/bootstrap.min.js"></script>
          <script src="../js/metisMenu.min.js"></script>
          <script src="../js/raphael.min.js"></script>
          <script src="../js/morris.min.js"></script>
          <script src="../js/morris-data.js"></script>
          <script src="../js/startmin.js"></script>

          </body>

          </html>