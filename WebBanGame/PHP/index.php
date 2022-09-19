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
                        <p class="tieude">TẤT CẢ SẢN PHẨM</p>
                        <?php
                           include("../include/connect.inc");
                           $sql     =       "select * from tblgame";
                           $rs      =       mysqli_query($conn, $sql);
                           $count   =       mysqli_num_rows($rs);
                           // Hiển thị
                           $pageSize    =       12;
                           $pos         =       (!isset($_GET['page']))?0:($_GET['page']-1)*$pageSize;
                           $sql         =       "select * from tblgame limit $pos, $pageSize";
                           $rs          =       mysqli_query($conn,$sql);
                           $i           =       1;
                           while($row=mysqli_fetch_array($rs)){

                            echo "
                            <div class='gm'>
                                <p class='ten'><a href='chitietsanpham.php?id=" . $row["id_game"] . "' style='text-decoration: none'>".$row['name_game']."</a><br>
                                </p>
                                <a href='chitietsanpham.php?id=" . $row["id_game"] . "'><img src='../images/".$row["images"]."' class='hinh'></a>
                                <p class='gia'>".$row['price']." đ</p>
                                <input type='image' src='../Images/linh tinh/mua.png' class='nut'>
                            </div>";
                            }
                    ?>
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
