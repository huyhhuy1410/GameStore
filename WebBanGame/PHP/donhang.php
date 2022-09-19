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
	<link rel="stylesheet" type="text/css" href="../Script/donhang.css">
<section>
<div id="page1">
<p class="tieude">LỊCH SỬ ĐƠN HÀNG</p>

<div class="form" style="width:100%;">
<span id=donhang>
		<table style="width:90%; margin-left:50px"> 
	    <tr> 
		<th>Mã đơn hàng</th>
	        <th>Tên sản phẩm</th> 
			<th>Số lượng</th>
	        <th>Giá</th> 
			<Th>Tổng</th>
	        <th>Trạng thái</th>
	    </tr> 
		<tr> 
			<td>2</td>
	        <td>Dead By Daylight</td> 
	        <td>1</th> 
	        <td>190000 VND</th> 
			<td>190000 VND</th> 
	        <td><a>Đã thanh toán</a></td> 
	    </tr> 
	     <tr> 
			 <td>1</td>
	        <td>Horizon Zero Dawn</td>
			<td>1</th> 
	        <td>549000 VND</th> 
			<td>549000 VND</th> 
	        <td><a  style="color:red;">Chưa thanh toán</a></td> 
	    </tr>

	</table>
</span>
								</div>
</div>           
</section>



<?php
include 'bot.php';
?> 
