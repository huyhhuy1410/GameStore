<!DOCTYPE php>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../Script/Style1.css">
	<link rel="stylesheet" type="text/css" href="../Script/User1.css">



	<head>
		<script type="text/javascript" src="../Script/JS/jquery-
1.9.1.min.js"></script>
		<script type="text/javascript" src="../Script/JS/Slider.js">
		</script>
		<script type="text/javascript" src="../Script/JS/products.js">
		</script>
		<title>Mua bán key games bản quyền</title>
	</head>

	<body>
<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "106049235277334");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
	FB.init({
	  xfbml            : true,
	  version          : 'v12.0'
	});
  };

  (function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
	fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
		<style>
			.dropdown-menu {
				/* Set width of the dropdown */
				background: yellow;
				display: none;
				position: absolute;
				z-index: 1;
				right:270;
				border-radius: 6px;
				width:12%;
  padding: 8px 0;
			}

			.dropdown-menu li {
				display: block;
			}
			.ddmenu:hover {
				background: red;
			}
		</style>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script>
			$(document).ready(function() {
				// Show hide popover
				$(".dropdown").click(function() {
					$(this).find(".dropdown-menu").slideToggle("fast");
				});
			});
			$(document).on("click", function(event) {
				var $trigger = $(".dropdown");
				if ($trigger !== event.target && !$trigger.has(event.target).length) {
					$(".dropdown-menu").slideUp("fast");
				}
			});
			function del_confirm(strlink) {
                   ok = confirm("Bạn có muốn đăng xuất ?");
                   if (ok != 0)
                       window.location.href = strlink;
               }
		</script>


		<div class="body">
			<header>
				<div class="hlogo">
					<a href="index.php" id="home"><img src="../Images/linh tinh/logo3.png"></a>
				</div>
				<div class="tim">
					<i class="fa fa-search"></i>
					<form action="search.php" method="get" target="_blank">
					<input type="search" name="search" id="search" placeholder="Tìm kiếm Game..." />
					<input type="submit" id="nuts" value="Tìm"></form>
				</div>
				<div class="hbutton">
					<?php
					if (!isset($_SESSION['account']))
						echo "
				<span>
				<a href='Dangnhap.php'><img src='../images/linh tinh/dn.png'>Đăng
						nhập</a></span><span><a href='Dangky.php'><img src='../images/linh tinh/dk.png'>Tạo tài
						khoản</a></span></span><span><a href='#' id='cart'><img src='../images/linh tinh/gh.png' />Giỏ
						hàng</a></span>";
					else
						echo "<span><a style='font-style:normal;'><img src='../images/linh tinh/dn.png'>Xin Chào, </a><span class='dropdown'><a href='#' style='color:black; font-style:normal;'>" . $_SESSION['account'] . "</a><ul class='dropdown-menu'>
						<li><a class='ddmenu' class='hoso' href ='hoso.php' style='color:black; font-size:18px; font-style:normal;'><img src='../images/linh tinh/info1.png'>Hồ sơ</a></li>
						<li><a class='ddmenu' class='hoso' href ='donhang.php' style='color:black; font-size:18px; font-style:normal;'><img src='../images/linh tinh/info.png'>Lịch sử đơn hàng</a></li>
						<li><a class='ddmenu' href='javascript:del_confirm(\"logout.php\")' style='color:black; font-size:18px; font-style:normal;'><img src='../images/linh tinh/out.png'>Đăng xuất</a></li>
						</ul></span></span><span><a href='' id='cart'><img src='../images/linh tinh/gh.png' />Giỏ hàng</a></span>";
					?>
				</div>
				<div id="myModal" class="modal">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Giỏ Hàng</h5>
							<span class="close">&times;</span>
						</div>
						<div class="modal-body">
							<div class="cart-row">
								<span class="cart-item cart-header cart-column">Sản Phẩm</span>
								<span class="cart-price cart-header cart-column">Giá</span>
								<span class="cart-quantity cart-header cart-column">Số Lượng</span>
							</div>
							<div class="cart-items">

							</div>
							<div class="cart-total">
								<strong class="cart-total-title">Tổng Cộng:</strong>
								<span class="cart-total-price">0 đ</span>
							</div>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary close-footer">Đóng</button>
							<button type="button" class="btn btn-primary order">Thanh Toán</button>
						</div>
					</div>
				</div>
			</header>
			<nav>
				<div class="nav">
					<ul>
						<li><a href="index.php">TRANG CHỦ</a></li>
						<li><a href="about.php">GIỚI THIỆU</a></li>
						<li><a href="thongtin.php">THÔNG TIN</a></li>
						<li class="danhsach">DANH SÁCH SẢN PHẨM
							<div class="dsnd">
								<a href='theloai.php?id=1'>Hành động</a>
								<a href='theloai.php?id=2'>Kinh dị</a>
								<a href='theloai.php?id=3'>Thể thao</a>
								<a href='theloai.php?id=7'>Giải đố</a>
								<a href='theloai.php?id=6'>Sinh tồn</a>
								<a href='theloai.php?id=8'>Phiêu lưu</a>
								<a href='theloai.php?id=4'>Thế giới mở</a>
								<a href='theloai.php?id=5'>Nhập vai</a>
								<a href='theloai.php?id=9'>Casual</a>
							</div>
						</li>
					</ul>
				</div>