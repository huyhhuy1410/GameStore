<?php
session_start();
if (!isset($_SESSION['username']))
header("location:../admin/index.php");
ini_set('display_errors', 0);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Hệ thống quản lý Web</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
	integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <script>
			function del_confirm1(strlink) {
                   ok = confirm("Bạn có muốn đăng xuất ?");
                   if (ok != 0)
                       window.location.href = strlink;
               }
    </script>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Admin</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="../php/index.php"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i><?php echo  '&nbsp'. $_SESSION['username']. '&nbsp'?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href='javascript:del_confirm1("logout1.php")'><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
                <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">


            <li>
                <a href="#"><i class="fas fa-gamepad"></i> Quản lý Game<span class="fas arrow fas fa-arrow-circle-down"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="../admin/list_subjects.php">Danh mục thể loại game</a>
                    </li>
                    <li><a href="../admin/list_game.php">Danh mục game</a></li>
                </ul>
                <!-- /.nav-second-level -->
            </li>



            <li>
                <a href="#"><i class="fas fa-file-invoice"></i> Quản lý tài khoản<span class="fas arrow fas fa-arrow-circle-down"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="../admin/list_cus.php">Tài khoản người dùng</a>
                    </li>
                    <li>
                        <a href="../admin/list_users.php">Tài khoản admin </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fas fa-shopping-cart"></i> Quản lý đơn hàng<span class="fas arrow fas fa-arrow-circle-down"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="../admin/list_cuscart.php">Tài khoản người dùng</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
</div>