<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
</html>

<!DOCTYPE html>
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Formasta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS
================================================== -->
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href=<?php= base_url()."css/bootstrap.css"?> >
        <link rel="stylesheet" href=<?php= base_url()."css/bootstrap-responsive.css"?> >
        <link rel="stylesheet" href=<?php= base_url()."css/prettyPhoto.css"?> >
        <link rel="stylesheet" href=<?php= base_url()."css/flexslider.css"?> >
        <link rel="stylesheet" href=<?php= base_url()."css/custom-styles.css"?> >
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
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/jquery.custom.js"></script>
        <script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

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
    <body class="home">
        <!-- Color Bars (above header)-->
        <div class="color-bar-1">
            <h3></h3>
        </div>
        <div class="color-bar-2 color-bg"></div>
        <div class="container">
            <h1 align="center" class="text-nowrap"><h1><h2><img src="img/logo%20formasta.png" alt="" class="img-responsive" width="150" height="200">FORUM MAHASISWA TULUNGAGUNG SE-SURABAYA</h2></h1></h1>
            <div class="row header">
                <div class="navbar hidden-phone">
                    <ul class="nav">
                        <li class="dropdown active">
                            <a>Home</a>
                        </li>
                        <li>
                            <a href="features.php">ARTIKEL</a>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.php">Gallery <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="event.php">EVENT</a>
                                </li>
                                <li>
                                    <a href="dll.php">DLL</a>
                                </li>
                                <!--<li>
        <a href="gallery-4col-circle.htm">Gallery 4 Round</a>
    </li>-->
                            </ul>
                    
                    <ul class="nav navbar-nav"></ul>
                </div>
                <!-- Begin Header -->
                <!-- Logo
        ================================================== -->
                <div class="span3 logo" "data-pg-collapsed">
                    <a href="index.php"></a>
                    <h1></h1>
                </div>
                <!-- Main Navigation
        ================================================== -->
                <div class="span navigation">
                    <header>
</header>
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
                                <option value="gallery-3col.htm">- 3 Column</option>
                                <option value="gallery-4col.htm">- 4 Column</option>
                                <option value="gallery-6col.htm">- 6 Column</option>
                                <option value="gallery-4col-circle.htm">- Gallery 4 Col Round</option>
                                <option value="gallery-single.php">- Gallery Single</option>
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
                <div></div>
        
        
            </div>
            <!-- End Header -->
            <div class="row headline">
                <!-- Begin Headline -->
                <!-- Slider Carousel
                            ================================================== -->
                    <div class="span8">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <a href="gallery-single.php">
                                    <img src="img/YDXJ3168 - 1.jpg" alt="slider" height="200" width="250" class="img-responsive" />
                                </a>
                            </li>
                            <li>
                                <a href="gallery-single.php">
                                    <img src="img/1495468113287.jpg" alt="slider" height="200" width="250" class="img-responsive" />
                                </a>
                            </li>
        
                            
                        </ul>
                    </div>
                </div>
                <!-- Headline Text
        ================================================== -->
                <div class="span4">
                    <h3>tentang formasta surabaya</h3>
                    <p class="lead">Forum daerah ini dibentuk pada tanggal 12 Januari 2001.</p>
                    <p>Masih proses bikin artikel</p>
                    <a href="#"><i class="icon-plus-sign"></i>Read More</a> 
                </div>
            </div>
            <!-- End Headline -->
            <!-- <div class="row gallery-row"> -->
                <!-- Begin Gallery Row -->                 
                <div class="span12">

                    <h5 class="title-bg">Recent Post<button class="btn btn-mini btn-inverse hidden-phone" type="button">Lihat Semua</button></h5>
                    <!-- Gallery Thumbnails
        ================================================== -->
                    <div class="row clearfix no-margin">
                        <ul class="gallery-post-grid holder">
                            <!-- Gallery Item 1 -->
                            <li class="span3 gallery-item" data-id="id-1" data-type="illustration">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet"><span class="gallery-icons"><a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a><a href="gallery-single.php" class="item-details-link"></a></span></span>
                                <a href="gallery-single.php">
                                    <img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery">
                                </a>
                                <span class="project-details"><a href="gallery-single.php">Custom Illustration</a>For an international ad campaign.</span>
                            </li>
                            <!-- Gallery Item 2 -->
                            <li class="span3 gallery-item" data-id="id-2" data-type="illustration">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet"><span class="gallery-icons"><a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a><a href="gallery-single.php" class="item-details-link"></a></span></span>
                                <a href="gallery-single.php">
                                    <img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery">
                                </a>
                                <span class="project-details"><a href="gallery-single.php">3 Color Poster Design</a>For a regional festival event.</span>
                            </li>
                            <!-- Gallery Item 3 -->
                            <li class="span3 gallery-item" data-id="id-3" data-type="web">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet"><span class="gallery-icons"><a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a><a href="#" class="item-details-link"></a></span></span>
                                <a href="gallery-single.php">
                                    <img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery">
                                </a>
                                <span class="project-details"><a href="gallery-single.php">Ink Pen Illustration</a>Created for a best selling children's book.</span>
                            </li>
                            <!-- Gallery Item 4 -->
                            <li class="span3 gallery-item" data-id="id-4" data-type="video">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet"><span class="gallery-icons"><a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a><a href="gallery-single.php" class="item-details-link"></a></span></span>
                                <a href="gallery-single.php">
                                    <img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery">
                                </a>
                                <span class="project-details"><a href="gallery-single.php">Custom Illustration</a>For an international add campaign.</span>
                            </li>
                            <!-- Gallery Item 5 -->
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Gallery Row -->
            <div class="row">
                <!-- Begin Bottom Section -->
                <!-- Blog Preview
        ================================================== -->
                <div class="span6">
                    <h5 class="title-bg">From the Blog <small>All the latest news</small><button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button><button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button></h5>
                    <div id="blogCarousel" class="carousel slide ">

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <!-- Blog Item 1 -->

                            <div class="active item">
                                 <a href="blog-single.php">
                                    <img src="img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview" />
                                </a>


                                <div class="post-info clearfix">
                                    
                                    <ul class="blog-details-preview">
                                        <li>
                                            <i class="icon-calendar"></i>
                                            <strong>Posted on:</strong> May 25, 2017

                                        <li>

                                        <li>
                                            <i class="icon-user"></i>
                                            <strong>Posted by:</strong> 
                                            <a href="#" title="Link">Admin</a>

                                        <li>

                                        <li>
                                            <i class="icon-comment"></i>
                                            <strong>Comments:</strong> 
                                            <a href="#" title="Link">2</a>

                                        <li>

                                    </ul>
                                </div>
                                <p class="blog-summary"><a href="#">Read more</a>
                                <p>
                            </div>
                            <!-- Blog Item 2 -->
                            <div class="item">
                                <a href="blog-single.php">
                                    <img src="img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview" />
                                </a>
                                <div class="post-info clearfix">
                                    <h4><a href="blog-single.php"></a></h4>
                                    <ul class="blog-details-preview">
                                        <li>
                                            <i class="icon-calendar"></i>
                                            <strong>Posted on:</strong> Sept 4, 2015

                                        <li>

                                        <li>
                                            <i class="icon-user"></i>
                                            <strong>Posted by:</strong> 
                                            <a href="#" title="Link">Admin</a>

                                        <li>

                                        <li>
                                            <i class="icon-comment"></i>
                                            <strong>Comments:</strong> 
                                            <a href="#" title="Link">12</a>

                                        <li>

                                        <li>
                                            <i class="icon-tags"></i> 
                                            <a href="#">artikel</a>, 
                                            <a href="#">foto</a>, 
                                            <a href="#">latar belakang</a>
                                    </ul>
                                </div>
                                <p class="blog-summary"><a href="#">Read more</a>
                                <p>
                            </div>
                            <!-- Blog Item 3 -->
                            <div class="item">
                                <a href="blog-single.php">
                                    <img src="img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview" />
                                </a>
                                <div class="post-info clearfix">
                                    <h4><a href="blog-single.php">Is art everything to anybody?</a></h4>
                                    <ul class="blog-details-preview">
                                        <li>
                                            <i class="icon-calendar"></i>
                                            <strong>Posted on:</strong> May 26, 2017

                                        <li>

                                        <li>
                                            <i class="icon-user"></i>
                                            <strong>Posted by:</strong> 
                                            <a href="#" title="Link">Admin</a>

                                        <li>

                                        <li>
                                            <i class="icon-comment"></i>
                                            <strong>Comments:</strong> 
                                            <a href="#" title="Link">12</a>

                                        <li>

                                        <li>
                                            <i class="icon-tags"></i> 
                                            <a href="#"></a>, 
                                            <a href="#"></a>, 
                                            <a href="#"></a>
                                    </ul>
                                </div>
                                <p class="blog-summary"><a href="#">Read more</a>
                                <p>
                            </div>
                        </div>
                    </div>                     
                </div>
                <!-- Client Area
        ================================================== -->
                
                    <!-- Client Logo Thumbs-->
                    
            </div>
            <!-- End Bottom Section -->
        </div>         
        <!-- End Container -->
        <!-- Footer Area
        ================================================== -->
        <div class="footer-container">
            <!-- Begin Footer -->
            <div class="container">
                <div class="row footer-row">
                    <div class="span3 footer-col">
                        <h5>About Us</h5>
                        <img src="img/logo%20formasta.png" alt="Formasta" />
                        <br />
                        <br />
                        <address><strong>Design Team</strong><br />
                        Formasta Surabaya<br /></address>
                        <ul class="social-icons">
                            <li>
                                <a href="" class="social-icon facebook"></a>
                            </li>
                            <li>
                                <a href="" class="social-icon twitter"></a>
                            </li>
                            <li>
                                <a href="" class="social-icon dribble"></a>
                            </li>
                            <li>
                                <a href="" class="social-icon rss"></a>
                            </li>
                            <li>
                                <a href="" class="social-icon forrst"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="span3 footer-col">
                        <h5>informasi lebih lanjut</h5>
                        <ul>
                            <li>FORUM MAHASISWA TULUNGAGUNG SE-SURABAYA</li>
                            <li>
                                <a>Follow Us</a>
                            </li>

                            <li>
                                <a href="http://instagram.com">Instagram : @formasta_surabaya</a>
                            </li>

                            <li>
                                <a href="http://twitter.com">Twitter : @formasta</a>
                            </li>

                            <li>
                                <a href="http://wordpress.com">Blogger : formasta.wordpress.com</a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="span3 footer-col">
                        <h5>Latest Posts</h5>
                        <ul class="post-list">
                            <li>
                                <a href="">Artikel 1</a>
                            </li>
                            <li>
                                <a href="">Artikel 2</a>
                            </li>
                            <li>
                                <a href="">Artikel 3</a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="span3 footer-col">
                        <!--<h5>Flickr Photos</h5>-->
                        <!--<ul class="img-feed">
    <li data-pg-id="421">
        <a href="#" data-pg-id="422">
            <img src="img/gallery/flickr-img-1.jpg" alt="Image Feed" data-pg-id="423">
        </a>
    </li>
    <li data-pg-id="424">
        <a href="#" data-pg-id="425">
            <img src="img/gallery/flickr-img-1.jpg" alt="Image Feed" data-pg-id="426">
        </a>
    </li>
    <li data-pg-id="427">
        <a href="#" data-pg-id="428">
            <img src="img/gallery/flickr-img-1.jpg" alt="Image Feed" data-pg-id="429">
        </a>
    </li>
    <li data-pg-id="430">
        <a href="#" data-pg-id="431">
            <img src="img/gallery/flickr-img-1.jpg" alt="Image Feed" data-pg-id="432">
        </a>
    </li>
    <li data-pg-id="433">
        <a href="#" data-pg-id="434">
            <img src="img/gallery/flickr-img-1.jpg" alt="Image Feed" data-pg-id="435">
        </a>
    </li>
    <li data-pg-id="436">
        <a href="#" data-pg-id="437">
            <img src="img/gallery/flickr-img-1.jpg" alt="Image Feed" data-pg-id="438">
        </a>
    </li>
    <li data-pg-id="439">
        <a href="#" data-pg-id="440">
            <img src="img/gallery/flickr-img-1.jpg" alt="Image Feed" data-pg-id="441">
        </a>
    </li>
    <li data-pg-id="442">
        <a href="#" data-pg-id="443">
            <img src="img/gallery/flickr-img-1.jpg" alt="Image Feed" data-pg-id="444">
        </a>
    </li>
    <li data-pg-id="445">
        <a href="#" data-pg-id="446">
            <img src="img/gallery/flickr-img-1.jpg" alt="Image Feed" data-pg-id="447">
        </a>
    </li>
    <li data-pg-id="448">
        <a href="#" data-pg-id="449">
            <img src="img/gallery/flickr-img-1.jpg" alt="Image Feed" data-pg-id="450">
        </a>
    </li>
    <li data-pg-id="451">
        <a href="#" data-pg-id="452">
            <img src="img/gallery/flickr-img-1.jpg" alt="Image Feed" data-pg-id="453">
        </a>
    </li>
    <li data-pg-id="454">
        <a href="#" data-pg-id="455">
            <img src="img/gallery/flickr-img-1.jpg" alt="Image Feed" data-pg-id="456">
        </a>
    </li>
</ul>-->
                    </div>
                </div>
                <div class="row">
                    <!-- Begin Sub Footer -->
                    <div class="span12 footer-col footer-sub">
                        <div class="row no-margin">
                            <div class="span6">
                                <span class="left">Copyright 2017 Formasta Surabaya. All rights reserved.</span>
                            </div>
                            <div class="span6">
                                <span class="right"><a href="">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="">Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="">Blog</a>&nbsp;&nbsp;&nbsp;</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sub Footer -->
            </div>
        </div>
        <!-- End Footer -->         
        <!-- Scroll to Top -->         
        <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    </body>
</html>
