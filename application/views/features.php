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
                    <li><a href="index.htm">Full Page</a></li>
                    <li><a href="index-gallery.htm">Gallery Only</a></li>
                    <li><a href="index-slider.htm">Slider Only</a></li>
                </ul>
            </li>

             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.php">Gallery <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="gallery-4col-circle.php">EVENT</a></li>
                    <li><a href="gallery-single.php">DLL</a></li>
                </ul>
             </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.php">Blog <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="blog-style1.php">Blog Style 1</a></li>
                    <li><a href="blog-style2.php">Blog Style 2</a></li>
                    <li><a href="blog-style3.php">Blog Style 3</a></li>
                    <li><a href="blog-style4.php">Blog Style 4</a></li>
                    <li><a href="blog-single.php">Blog Single</a></li>
                </ul>
             </li>
           
            </div>

             <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Navigate...</option>
                    <option value="index.htm">Home</option>
                        <option value="index.htm">- Full Page</option>
                        <option value="index-gallery.htm">- Gallery Only</option>
                        <option value="index-slider.htm">- Slider Only</option>
                    <option value="features.htm">Features</option>
                    <option value="page-full-width.htm">Pages</option>
                        <option value="page-full-width.htm">- Full Width</option>
                        <option value="page-right-sidebar.htm">- Right Sidebar</option>
                        <option value="page-left-sidebar.htm">- Left Sidebar</option>
                        <option value="page-double-sidebar.htm">- Double Sidebar</option>
                    <option value="gallery-4col.htm">Gallery</option>
                        
                        <option value="gallery-6col.htm">- 6 Column</option>
                        <option value="gallery-4col-circle.htm">- Gallery 4 Col Round</option>
                        <option value="gallery-single.htm">- Gallery Single</option>
                    <option value="blog-style1.htm">Blog</option>
                        <option value="blog-style1.htm">- Blog Style 1</option>
                        <option value="blog-style2.htm">- Blog Style 2</option>
                        <option value="blog-style3.htm">- Blog Style 3</option>
                        <option value="blog-style4.htm">- Blog Style 4</option>
                        <option value="blog-single.htm">- Blog Single</option>
               
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
    <div class="row no-margin">
        <div class="span6"><h6 class="title-bg">Typography: <small>Headings and Dividers</small></h6></div>
    </div>
        
        <div class="span6">
            <p class="lead">
                FORMASTA.
            </p>
            <p>
                Tempat berkumpulnya mahasiswa Tulungagung di Surabaya.
            </p>

            <p class="well">SELAMAT BERGABUNG!</p>

            <p><button class="btn btn-inverse" type="button">Read more</button></p>
        </div>


<!-- Carousel
================================================== -->



    <div class="row">
        <div class="span6">
            <h6 class="title-bg">Gallery: <small>Formasta</small></h6>
            <div class="flexslider">
              <ul class="slides">
                <li><a href="gallery-single.php"><img src="img/CK23AVEUkAAcAK3.jpg" alt="slider" /></a></li>
                <li><a href="gallery-single.php"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>>
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
