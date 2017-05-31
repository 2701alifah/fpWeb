<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Piccolo Theme</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/jquery.lightbox-0.5.css">
<link rel="stylesheet" href="css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.js"></script>
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
        	<a href="index.php"><img src="img/piccolo-logo.png" alt="" /></a>
            <h5>Big Things... Small Packages</h5>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="index.php">Home <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php">Full Page</a></li>
                    <li><a href="index-gallery.php">Gallery Only</a></li>
                    <li><a href="index-slider.php">Slider Only</a></li>
                </ul>
            </li>
           <li><a href="features.php">Features</a></li>
            <li class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="page-full-width.php">Pages <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="page-full-width.php">Full Width</a></li>
                    <li><a href="page-right-sidebar.php">Right Sidebar</a></li>
                    <li><a href="page-left-sidebar.php">Left Sidebar</a></li>
                    <li><a href="page-double-sidebar.php">Double Sidebar</a></li>
                </ul>
            </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.php">Gallery <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="gallery-3col.php">Gallery 3 Column</a></li>
                    <li><a href="gallery-4col.php">Gallery 4 Column</a></li>
                    <li><a href="gallery-6col.php">Gallery 6 Column</a></li>
                    <li><a href="gallery-4col.php">Gallery 4 Round</a></li>
                    <li><a href="gallery-single.php">Gallery Single</a></li>
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
                    <option value="page-full-width.php">Pages</option>
                        <option value="page-full-width.php">- Full Width</option>
                        <option value="page-right-sidebar.php">- Right Sidebar</option>
                        <option value="page-left-sidebar.php">- Left Sidebar</option>
                        <option value="page-double-sidebar.php">- Double Sidebar</option>
                    <option value="gallery-4col.php">Gallery</option>
                        <option value="gallery-3col.php">- 3 Column</option>
                        <option value="gallery-4col.php">- 4 Column</option>
                        <option value="gallery-6col.php">- 6 Column</option>
                        <option value="gallery-4col.php">- Gallery 4 Col Round</option>
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
    <div class="row"><!--Container row-->

    <!-- Title Header -->
        <div class="span8"><!--Begin page content column-->

            <h2>Right Sidebar Example</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie.</p>

            <h5 class="title-bg"> This is a sub head divider</h5>

            <div class="row">
                <div class="span2">
                    <img src="img/gallery/gallery-img-1-6col.jpg" alt="Image" class="thumbnail">
                    <h5>4 Column Layout</h5>
                    <p></p>
                    <button class="btn btn-mini btn-inverse" type="button">Read more</button>
                </div>
                <div class="span2">
                    <img src="img/gallery/gallery-img-1-6col.jpg" alt="Image" class="thumbnail">
                    <h5>4 Column Layout</h5>
                    <p></p>
                    <button class="btn btn-mini btn-inverse" type="button">Read more</button>
                </div>
                <div class="span2">
                    <img src="img/gallery/gallery-img-13-6col.jpg" alt="Image" class="thumbnail">
                    <h5>4 Column Layout</h5>
                    <p></p>
                    <button class="btn btn-mini btn-inverse" type="button">Read more</button>
                </div>
                <div class="span2">
                    <img src="img/gallery/gallery-img-14-6col.jpg" alt="Image" class="thumbnail">
                    <h5>4 Column Layout</h5>
                    <p></p>
                    <button class="btn btn-mini btn-inverse" type="button">Read more</button>
                </div>
            </div>

            <h3 class="title-bg"> This is a sub head divider</h3>

            <div class="clearfix">
                <img src="img/gallery/gallery-img-1-4col.jpg" class="thumbnail align-left" alt="Image" />
                <p></p>
                <button class="btn btn-small btn-inverse" type="button">Visit Website</button>
            </div>

            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Heads up!</strong> This alert is not super important. 
            </div>  

            <p></p>

        </div> <!--End page content column-->

        <!-- Blog Sidebar
        ================================================== --> 
        <div class="span4 sidebar page-sidebar"><!-- Begin sidebar column -->

            <!--Tabbed Content-->
            <h5 class="title-bg">More Info</h5>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#comments" data-toggle="tab">Comments</a></li>
                <li><a href="#tweets" data-toggle="tab">Tweets</a></li>
                <li><a href="#about" data-toggle="tab">About</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="comments">
                     <ul>
                        <li><i class="icon-comment"></i>admin on <a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><i class="icon-comment"></i>admin on <a href="#">Consectetur adipiscing elit</a></li>
                        <li><i class="icon-comment"></i>admin on <a href="#">Ipsum dolor sit amet consectetur</a></li>
                        <li><i class="icon-comment"></i>admin on <a href="#">Aadipiscing elit varius elementum</a></li>
                        <li><i class="icon-comment"></i>admin on <a href="#">ulla iaculis mattis lorem</a></li>
                    </ul>
                </div>
                <div class="tab-pane" id="tweets">
                    <ul>
                        <li><a href="#"><i class="icon-share-alt"></i>@room122</a> Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna.</li>
                        <li><a href="#"> <i class="icon-share-alt"></i>@room122</a> Nulla faucibus ligula eget ante varius ac euismod odio placerat.</li>
                        <li><a href="#"> <i class="icon-share-alt"></i>@room122</a> Pellentesque iaculis lacinia leo. Donec suscipit, lectus et hendrerit posuere, dui nisi porta risus, eget adipiscing</li>
                        <li><a href="#"> <i class="icon-share-alt"></i>@room122</a> Vivamus augue nulla, vestibulum ac ultrices posuere, vehicula ac arcu.</li>
                        <li><a href="#"> <i class="icon-share-alt"></i>@room122</a> Sed ac neque nec leo condimentum rhoncus. Nunc dapibus odio et lacus.</li>
                    </ul>
                </div>
                <div class="tab-pane" id="about">
                    <p>
                </div>
            </div>

            <!--Testimonials-->
            <h5 class="title-bg">Testimonials</h5>
    
            <p class="quote-text side">"</cite></p>
        
            <p class="quote-text side">""<cite>- Another Client Name, Big Company</cite></p>

            <!--Latest News-->
            <h5 class="title-bg">Latest News</h5>
            <ul class="popular-posts">
                <li>
                    <a href="#"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#"></a></h6>
                    <em>Posted on 09/01/15</em>
                </li>
                <li>
                    <a href="#"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#"></a></h6>
                    <em>Posted on 09/01/15</em>
                <li>
                    <a href="#"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#"></a></h6>
                    <em>Posted on 09/01/15</em>
                </li>
            </ul>

        </div><!-- End sidebar column -->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->

	<div class="footer-container"><!-- Begin Footer -->
    	<div class="container">
        	<div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>About Us</h5>
                   <img src="img/piccolo-footer-logo.png" alt="Piccolo" /><br /><br />
                    <address>
                        <strong>Design Team</strong><br />
                        123 Main St, Suite 500<br />
                        New York, NY 12345<br />
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
                    <h5>Latest Tweets</h5>
                    <ul>
                        <li><a href="#">@room122</a> </li>
                        <li><a href="#">@room122</a> </li>
                        <li><a href="#">@room122</a> </li>
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
                    <h5>Flickr Photos</h5>
                    <ul class="img-feed">
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    </ul>
                </div>
            </div>

            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2012 Piccolo Theme. All rights reserved.</span></div>
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
