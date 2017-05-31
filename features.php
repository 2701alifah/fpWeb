<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Formasta</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/flexslider.css" />
<link rel="stylesheet" href="css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/logo%20formasta.png">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.custom.js"></script>
<script type="text/javascript">
     $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});
</script>

</head>

<body>

	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container main-container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
        	<a href="index.php"><h1 align="center" class="text-nowrap"><h1><h2><img src="img/logo%20formasta.png" alt="" class="img-responsive" width="150" height="200"></a>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="index.php>Home <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php">Full Page</a></li>
                    <li><a href="index-gallery.php">Gallery Only</a></li>
                    <li><a href="index-slider.php">Slider Only</a></li>
                </ul>
            </li>

             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.php">Gallery <b class="caret"></b></a>
                
             </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.php">Blog <b class="caret"></b></a>

             </li>
           
            </div>

             <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Navigate...</option>
                    <option value="index.php">Home</option>
                        <option value="index.php">- Full Page</option>
                        <option value="index-gallery.php">- Gallery Only</option>
                        <option value="index-slider.php">- Slider Only</option>
                    <option value="features.htm">Features</option>
                    <option value="page-full-width.php">Pages</option>
                        <option value="page-full-width.php">- Full Width</option>
                        <option value="page-right-sidebar.php">- Right Sidebar</option>
                        <option value="page-left-sidebar.php">- Left Sidebar</option>
                        <option value="page-double-sidebar.php">- Double Sidebar</option>
                    <option value="gallery-4col.php">Gallery</option>
                        
                        <option value="gallery-6col.php">- 6 Column</option>
                        <option value="gallery-4col-circle.php">- Gallery 4 Col Round</option>
                        <option value="gallery-single.php">- Gallery Single</option>
                    <option value="blog-style1.php">Blog</option>
                        <option value="blog-style1.php">- Blog Style 1</option>
                        <option value="blog-style2.php">- Blog Style 2</option>
                        <option value="blog-style3.php">- Blog Style 3</option>
                        <option value="blog-style4.php">- Blog Style 4</option>
                        <option value="blog-single.php">- Blog Single</option>
               
                </select>
                </div>
                </form>
            
        </div>
        
      </div><!-- End Header -->
     
    <!-- Page Content
    ================================================== --> 
    
    <!-- Title Header -->
    <div class="row">
        <div class="span12">
            <h2>KUMPULAN ARTIKEL FORMASTA</h2>
            <p class="lead"> <a href="http://twitter.github.com/bootstrap/index.php" target="_blank">the official site</a>.</p>
        </div> 


        </div>
    

    <!-- Typography
    ================================================== --> 
    <div class="span6">
            <p class="lead">
               Cuplikan kegiatan Welcome Party Mahasiswa Baru Forum Mahasiswa Tulungagung se Surabaya.
            </p>


            <p class="well">SELAMAT BERGABUNG KELUARGA BARU FORMASTA 2017!</p>

            <p><button class="btn btn-inverse" type="button">Read more</button></p>
        </div>


<!-- Carousel
================================================== -->



    <div class="row">
        <div class="span6">
            <h6 class="title-bg">Gallery: <small>Formasta</small></h6>
            <div class="flexslider">
              <ul class="slides">
                <li><a href="gallery-single.php"><img src="img/YDXJ3168 - 1.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.php"><img src="img/1495468113287.jpg" alt="slider" /></a></li>>
              </ul>
            </div>
        </div>


<!-- Accordian (Collapse)
================================================== --> 
    

    <!-- Modal -->
    <div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel">Modal header</h5>
        </div>
        <div class="modal-body">
            <p>One fine body…</p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-inverse">Save changes</button>
        </div>
    </div>


    <!-- Form Elements
    ================================================== --> 
    <div class="row form-examples">

       
        </div>


        <div class="span4">
            <form class="form-search">
            <div class="input-append">
                <input type="text" class="span2 search-query">
                <button type="submit" class="btn">Search</button>
            </div>

            </form>
        </div>
          
    </div>


            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2017 Formasta. All rights reserved.</span></div>
                    
                    </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer -->

    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
</html>
