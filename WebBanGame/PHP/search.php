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
                        <p class="tieude" style='text-transform: uppercase;'>Tìm kiếm sản phẩm</p>

                        <?php
                           include("../include/connect.inc");
                           $sql     =       "select * from tblgame where name_game like '%".$_GET['search']."%'";
                           $rs      =       mysqli_query($conn, $sql);
                           $count   =       mysqli_num_rows($rs);
           /*                $abc          =       mysqli_query($conn,$sql);
                           while($row=mysqli_fetch_array($rs))
                           $take=$row['id_subject'];*/
                           // Hiển thị
                           $pageSize    =       12;
                           $pos         =       (!isset($_GET['page']))?0:($_GET['page']-1)*$pageSize;
                           $sql         =       "select * from tblgame where name_game like '%".$_GET['search']."%' limit $pos, $pageSize"  ;
                           $rs          =       mysqli_query($conn,$sql);
                           $i           =       1;
                           if (mysqli_num_rows($rs)>0)
                           while($row=mysqli_fetch_array($rs))
{
                            echo "
                            <div class='gm'>
                                <p class='ten'><a href='chitietsanpham.php?id=" . $row["id_game"] . "' style='text-decoration: none'>".$row['name_game']."</a><br>
                                </p>
                                <a href='chitietsanpham.php?id=" . $row["id_game"] . "'><img src='../images/".$row["images"]."' class='hinh'></a>
                                <p class='gia'>".$row['price']." đ</p>
                                <a href='chitietsanpham.php?id=" . $row["id_game"] . "'><input type='image' src='../Images/linh tinh/mua.png' class='nut'></a>
                            </div>";
                            }
                            else echo "<h2>Hiện chưa có sản phẩm nào. X_X</h2>
";?>
                                                <div class="page">
                            <?php
                            for($i=1; $i<=ceil($count/$pageSize);$i++)
                            echo "<a class='nan'
                            ' href='index.php?page=$i'>".$i."</a>";
                            ?>
						</div>
                    
</section>



<?php
include 'bot.php';
?> 
