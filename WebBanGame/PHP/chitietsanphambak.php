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
<?php
      include("../include/connect.inc");
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
	  $videos			  =		  $row['videos'];
	  $des                =       $row['des'];
?>
<section>
<div>
	<?php
					echo"<p class='tieude'></p>
					<div class='chitiet'>
					<div><img src='../Images/$images'></div>
					<div class='mieuta'><p class='mt'>$name_game</p>
						<div class='ndc'>
						<p>$des</p>
						<hr><div class='video'>
							<p>TRAILER</p><video src='../videos/$videos' controls muted width=80%  autoplay></video>
						</div>
						</div>
					</div>
					<div class='noidung'>
					<p class='tengm'></p>
					<div class='ndc'>
					<p>Tình trạng: <span>$status</span></p>
					<p>Thơi gian chuyển key: <span>Trong vòng 2h thông báo vào email của bạn.</span></p>
					<p>Phiên bản: <span>$ver</span></p>
					<p>Ngôn ngữ: <span>English</span></p>
					<p>Region: <span>$region?</span></p>
					<p>Kích hoạt và tải game: <span>$active</span></p>

					<p>Giá bán: <span>$price đ</span></p>
					</div>
					<hr>
					<img class='hinh'style='display:none;' src='../Images/$images'>
					<span class='ten' style='display:none;'>$name_game</span>
					<span class='gia' style='display:none;'>$price đ</span>
					<input type='image' class='nut' src='../Images/linh tinh/muahang.png' >
					</div>";
					
					?>
				</div>

</section>



<?php
include 'bot.php';
?> 
