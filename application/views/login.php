<!DOCTYPE html>
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<head>
<title>Login</title>


<link rel="stylesheet" href="<?php echo base_url("css/bootstrap.css")?>">
<link rel="stylesheet" href="<?php echo base_url("css/bootstrap.css")?>">
<link rel="stylesheet" href="<?php echo base_url("css/bootstrap-responsive.css")?>">
<link rel="stylesheet" href="<?php echo base_url("css/prettyPhoto.css")?>">
<link rel="stylesheet" href="<?php echo base_url("css/flexslider.css")?>">
<link rel="stylesheet" href="<?php echo base_url("css/custom-styles.css")?>">


<link rel="shortcut icon" href=<?php echo base_url("img/favicon.ico")?>">

  
</head>
<style type="text/css">
table{
position: absolute;
height: 100px;
top: 50%;
left: 50%;
margin: -100px 0 0 -150px;
}
</style>
</head>
<body>
<form method="post" action="<?php echo site_url('MyController/login')?>">

<section class="contact " >
		<div class="container">
	        <form class="row  login" method="POST" action="<?php echo site_url('MyController/login');?>">
                <h3 class="section-title black">Login</h3>
                <div class="row">
                	<div class="col-md-4 col-xs-4">
                    </div> 
                    <div class="col-md-4 col-xs-4 form-group">
                       <input name="username" class="form-control " type="text" placeholder="username">
                    </div> 
                </div>
                <div class="row">
                	<div class="col-md-4 col-xs-4">
                    </div>
                    <div class="col-md-4 col-xs-4 form-group">
                       <input name="pass" class="form-control " type="password" placeholder="password">
                    </div> 
                </div>
                <input name="submit" class="btn btn-sub" type="submit" value="Login" >
            </form> 

            <div><?php echo $this-> session->flashdata('');?></div>
		 
		</div>
	</section>
	
</form>
</body>
</html>