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
<link rel="stylesheet" href="css/prettyPhoto.css" />
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
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.quicksand.js"></script>
<script src="js/jquery.custom.js"></script>


</head>

<body>
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container main-container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
        	<a href="index.php"><img src="img/logo%20formasta.png" alt="" class="img-responsive" width="150" height="200"></a>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li><a href="">Home</a></li>
           <li><a href="features.php">Features</a></li>
            <li><a href="">Gallery</a></li>
             
                </ul>
             </li>

            </ul>
           
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
                    <option value="features.php">Features</option>
                    <option value="gallery-4col.php">Gallery</option>
                        <option value="gallery-3col.php">- Event</option>
                        <option value="gallery-4col.php">- Dll</option>
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
    <div class="row">

        <!-- Gallery Items
        ================================================== --> 
        <div class="span12 gallery">

            <ul id="filterOptions" class="gallery-cats clearfix">
                <li class="active"><a href="#" class="all">All</a></li> 
                <li><a href="" class="video">Video</a></li>
                <li><a href="" class="web">Web</a></li>
            </ul>

            <div class="row clearfix">
                <ul class="gallery-post-grid holder">

                    <!-- Gallery Item 1 -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/YDXJ3168 - 1.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.php">Buka Bersama</a></span>
                    </li>

                    <!-- Gallery Item 2 -->
                    <li class="span4 gallery-item" data-id="id-2" data-type="illustration">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/YDXJ3168 - 1.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.php">Reuni Akbar</a></span>
                    </li>

                    <!-- Gallery Item 3 -->
                    <li class="span4 gallery-item" data-id="id-3" data-type="web">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/YDXJ3168 - 1.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.php">Rapat Internal</a></span>
                    </li>

                    <!-- Gallery Item 4 -->
                    <li class="span4 gallery-item" data-id="id-4" data-type="video">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                       <a href="gallery-single.php"><img src="img/YDXJ3168 - 1.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.php">Rekreasi</a></span>
                    </li>

                    <!-- Gallery Item 5 -->
                    <li class="span4 gallery-item" data-id="id-5" data-type="web illustration">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/YDXJ3168 - 1.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.php">Malam Keakraban</a></span>
                    </li>

                    <!-- Gallery Item 6 -->
                    <li class="span4 gallery-item" data-id="id-6" data-type="illustration design">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/YDXJ3168 - 1.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.php">Penyambutan Keluarga Baru</a></span>
                    </li>

                    <!-- Gallery Item 7 -->
                    <li class="span4 gallery-item" data-id="id-7" data-type="design">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/YDXJ3168 - 1.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.php">Liburan Akhir</a></span>
                    </li>

                    <!-- Gallery Item 8 -->
                    <li class="span4 gallery-item" data-id="id-8" data-type="web video">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/YDXJ3168 - 1.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.php">Tasyakuran</a></span>
                    </li>

                    <!-- Gallery Item 9 -->
                    <li class="span4 gallery-item" data-id="id-9" data-type="design">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/YDXJ3168 - 1.jpg" alt="Gallery"></a>
                        <span class="project-details"><a href="gallery-single.php">Nonton Bersama</span>
                    </li>

                </ul>
            </div>


        </div><!-- End gallery list-->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
	<div class="footer-container"><!-- Begin Footer -->
    	<div class="container">
        	<div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>About Us</h5>
                    <img src="img/logo%20formasta.png" alt="Formasta" />
                        <br />
                        <br />
                        <address><strong>Design Team</strong><br />
                        Formasta Surabaya<br />
                    </address>
                    <ul class="social-icons">
                        <li><a href="#" class="social-icon facebook"></a></li>
                        <li><a href="#" class="social-icon twitter"></a></li>
                        <li><a href="#" class="social-icon dribble"></a></li>
                        <li><a href="#" class="social-icon rss"></a></li>
                        <li><a href="#" class="social-icon forrst"></a></li>
                    </ul>
                </div>
                
                <div class="span3 footer-col">
                    <h5>Latest Posts</h5>
                     <ul class="post-list">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">

                </div>
            </div>

            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2017 Formasta. All rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Blog</a>&nbsp;&nbsp;&nbsp;</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer -->

    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
</html>
