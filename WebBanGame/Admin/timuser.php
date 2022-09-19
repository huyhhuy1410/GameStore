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
                          <h1 class="page-header">Danh sách khách hàng</h1>
                          <form method="get" action="timuser.php">
                          <div class="input-group custom-search-form" style="width:16%; bottom:8;">
                    <input type="search" name="search" class="form-control" placeholder="Tìm kiếm...">
                    <span class="input-group-btn">
                        <button style="height:32;" class="btn btn-primary" type="submit">
                            <i  class="fa fa-search"></i>
                        </button>
                        </span>
                        </div>
                        </form>
                      </div>
                  </div>
                  <div class="table-responsive table-bordered">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>STT</th>
                                  <th>Tên khách hàng</th>
                                  <th>Tên đăng nhập</th>
                                  <th>Email</th>
                                  <th>SDT</th>
                                  <th>Sửa</th>
                                  <th>Xóa</th>
                              </tr>
                          </thead>
                          <tbody>
          <?php
            include("../include/connect.inc");
            $sql        =   "select * from tblcustomer where name_customer like '%".$_GET['search']."%'";
            $rs         =   mysqli_query($conn, $sql);
            $count      =   mysqli_num_rows($rs);

            $pageSize   =   10;
            $pos        =   (!isset($_GET['page']))?0:($_GET['page']-1)*$pageSize;
            $sql        =   "select * from tblcustomer where name_customer  like '%".$_GET['search']."%' limit $pos, $pageSize"  ;
            $rs         =   mysqli_query($conn, $sql);
            $i          =   1;
        while($row=mysqli_fetch_array($rs)){
            echo "<tr>
            <td>$i</td>
            <td>".$row['name_customer']."</td>
            <td>".$row['account']."</td>
            <td>".$row['email']."</td>
            <td>".$row['tel']."</td>
            <td><a href='edit_customer.php?id=".$row['id_customer']."'>Sửa</a></td>
            <td><a href='javascript:del_confirm(\"del_customer.php?id=".$row['id_customer']."\")'>Xóa</a></td>
            </tr>";
            $i++;
        }
        ?> <tr>
            <th colspan="7">
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