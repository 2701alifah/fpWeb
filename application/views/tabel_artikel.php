<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FORMASTA SURABAYA</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">

    <!-- MetisMenu CSS -->
    <!--<link href="<?php base_url()?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/js/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!--<link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()."index.php/"?>">FORMASTA SURABAYA</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <!--<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <-- /input-group 
                        </li>-->

                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav side-nav">
                            <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url()."index.php"?>"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()."index.php/control/add_data/"?>"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tabel</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Tabel Artikel
                        <br/></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <table border="1px" style="width:70%;">
									<tr style="background:red;">
										<th>Judul</th>
										<th>Author</th>
										<th>Gambar</th>
										<th>Teks Artikel</th>
										<th>Action</th>
									</tr>
									<?php foreach($data as $list){ ?>
									<tr>
										<td><?php echo $list['judul'];?></td>
										<td><?php echo $list['author'];?></td>
										<td><img src="/upload/<?php echo $list['foto'];?>"></td>
										<td><?php echo $list['teks_artikel'];?></td>
										<td align="center">
										<a href="<?php echo base_url()."index.php/control/do_delete/".$list['judul'];?>">Delete</a>||
										<a href="<?php echo base_url()."index.php/control/edit_data/".$list['judul'];?>">Update</a></td>
									</tr>
									<?php } ?>
								</table>
							                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                   
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/dist/js/sb-admin-2.js"></script>

</body>

</html>