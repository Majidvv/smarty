<?php get_header(); ?>

<body style="margin-top:-32px;">

	<div id="page-loader">
        <div class="loader-square loader-square-1">
        	<div class="loader-square-content">
            	<div class="loader-square-inner bg-pattern dark-screen"></div>
            </div>
        </div>
        <div class="loader-square loader-square-2">
        	<div class="loader-square-content">
            	<div class="loader-square-inner bg-pattern dark-screen"></div>
            </div>
        </div>
        <div class="loader-square loader-square-3">
        	<div class="loader-square-content">
            	<div class="loader-square-inner bg-pattern dark-screen"></div>
            </div>
        </div>
        <div class="loader-square loader-square-4">
        	<div class="loader-square-content">
            	<div class="loader-square-inner bg-pattern dark-screen"></div>
            </div>
        </div>
        <div class="loader-square loader-square-5">
        	<div class="loader-square-content">
            	<div class="loader-square-inner bg-pattern dark-screen"></div>
            </div>
        </div>
        <div class="loader-square loader-square-6">
        	<div class="loader-square-content">
            	<div class="loader-square-inner bg-pattern dark-screen"></div>
            </div>
        </div>
        <div class="loader-square loader-square-7">
        	<div class="loader-square-content">
            	<div class="loader-square-inner bg-pattern dark-screen"></div>
            </div>
        </div>
        <div class="loader-square loader-square-8">
        	<div class="loader-square-content">
            	<div class="loader-square-inner bg-pattern dark-screen"></div>
            </div>
        </div>
        <div class="loader-square loader-square-9">
        	<div class="loader-square-content">
            	<div class="loader-square-inner bg-pattern dark-screen"></div>
            </div>
        </div>
        <div class="loader-container">
        	<div class="loader-content">
            <?php
                        $logo =get_option('smarty_load_logo') ;
                      echo '<img class="loader-logo" src=" '.$logo.' "/>';
                        ?>
            </div>
        </div>-->
        <!-- .loader-container -->
        <div id="copy_right" class="loader-footer">
        	<p>
            	Copyright &copy; 2014 <span class="text-white">Smarty</span>.<br>All
            	Rights Reserved.
           	</p>
        </div>
    </div>
    
    <!-- #page-loader -->
    
	<div id="all">
    	<div id="menu">
                            
        	<div class="menu-container">
            	<div class="menu-inner">
                    <div class="logo-container">
                        <?php
                        $logo =get_option('smarty_site_logo') ;
                      echo '<img  src=" '.$logo.' "/>';
                        ?>
                       
                    </div>
                    <nav class="main-navigation">
                   
                        <ul> 
                        <?php wp_page_menu(); ?>
                            <!-- <li class="active"><a href="index-2.html"> 
                           home
                            </a></li>
                            <li><a href="about_us.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="our_team.html">Our Team</a></li>
                            <li class="has-submenu"><a href="portfolio_grid_v1.html">Portfolio</a>
                            	<ul>
                                	<li><a href="portfolio_grid_v2.html">Grid 2</a></li>
                                    <li><a href="portfolio_grid_v3.html">Grid 3</a></li>
                                    <li><a href="portfolio_grid_v4.html">Grid 4</a></li>
                                    <li><a href="portfolio_grid_v5.html">Grid 5</a></li>
                                    <li><a href="portfolio_mansory_v1.html">Mansory 1</a></li>
                                    <li><a href="portfolio_mansory_v2.html">Mansory 2</a></li>
                                    <li><a href="portfolio_mansory_v3.html">Mansory 3</a></li>
                                    <li><a href="portfolio_mansory_v4.html">Mansory 4</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="blog_grid_v1.html">Blog</a>
                            	<ul>
                                	<li><a href="blog_grid_v2.html">Grid 2</a></li>
                                    <li><a href="blog_mansory.html">Mansory</a></li>
                                    <li><a href="blog_mansory_sidebar.html">Mansory Sidebar</a></li>
                                    <li><a href="blog_standart.html">Blog Standart</a></li>
                                    <li><a href="blogpost.html">Blogpost</a></li>
                                    <li><a href="blogpost_comments.html">Blogpost Comments</a></li>
                                    <li><a href="blogpost_typography.html">Blogpost Typography</a></li>
                                </ul>
                            </li>
                            <li><a href="contact_us.html">Contact</a></li>
                        </ul> -->
                    </nav>
                    <div class="menu-content">    
                       <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('left Sidebar')) : ?>
                                    <?php 
                               
                                endif; ?>
                        <!-- <form id="form-search">
                            <input type="text" placeholder="Search...">
                     
                                        <div class="widget widget_tags">
                                    <h4 class="widget-title">برچسبهای محبوب</h4>
                                    </div> 
                            <div class="submit-container">
                            	<input type="submit" value="Send">
                        	</div>
                        </form>  -->
                    </div>
                    <div class="menu-bottom">
                    	<div class="text-center">
                            <?php $facebook = get_option('smarty_social');
                             echo '<a href=" '.$facebook.' "><i class="fa fa-facebook-square"></i></a>' ;?>
                            <?php $twitter=get_option('_twitter'); ?>
                            <?php  echo ' <a href="'.$twitter.'"><i class="fa fa-twitter"></i></a>'; ?>
                           <?php $instagram=get_option('_instagram');?>
                           <?php echo '  <a href="'.$instagram.'"><i class="fa fa-instagram"></i></a>';?>
                            <!-- <a href="#"><i class="fa fa-dribbble"></i></a> -->
                            <!-- <a href="#"><i class="fa fa-facebook"></i></a> -->
                          
                            
                        </div>
                        <div class="margin-10"></div>
                        <p>Copyright &copy; 2019 <span class="text-white">Smarty Theme</span>. All Rights Reserved.</p>
                    </div>
        		</div><!-- .menu-inner -->
            </div><!-- .menu-container -->
        </div><!-- #menu -->
        <div id="menu-trigger">
        	<i class="fa fa-reorder"></i>
        </div>

      

        <div class="ms-fullscreen-template" id="slider1-wrapper">
            <!-- masterslider -->
            <div class="master-slider ms-skin-default has-thumbnails" id="masterslider">
                <div class="ms-slide ms-slide1" data-delay="7">
                    <div class="ms-slide-pattern bg-pattern dark-screen"></div>

                    <?php $picture1 = get_option('smarty_1_picture');
         echo '<img src="http://localhost/wordpress/wp-content/themes/smarty/masterslider/blank.gif" data-src="'.$picture1.'">' ;?>   
                    <!-- <img src="http://localhost/wordpress/wp-content/themes/smarty/masterslider/blank.gif" data-src="http://localhost/wordpress/wp-content/themes/smarty/images/slider/8.jpg" >    -->
                    <div class="ms-layer ms-layer1 ms-text-size3 text-uppercase" data-type="text" data-effect="rotate3dtop(70,0,0,180)" data-duration="2000" data-ease="easeInOutQuint">
                        <div class="container">
                             <?php $head1 = get_option('smarty_1_title');
                            echo '<h1>'.$head1.'</h1>'; ?>
                            
                        </div>
                    </div>
                    <div class="ms-layer ms-layer2 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="rotate3dbottom(-70,0,0,180)" data-duration="2000" data-ease="easeInOutQuint">
                        <div class="container">
                           <?php $sub1 = get_option('smarty_1_subtitle');
                           echo "<p>".$sub1."</p>";?>
                        	
                        </div>
                    </div>
                    <div class="ms-layer ms-layer3 ms-text-size7 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="rotate3dbottom(-70,0,0,180)" data-duration="2000" data-delay="300" data-ease="easeInOutQuint">
                        <div class="container">
                        <a class="button" href="#">Learn More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="ms-thumb"><img alt="img" src="http://localhost/wordpress/wp-content/themes/smarty/images/slider_thumbs/1.jpg"></div>
                </div>
                
                <!-- .ms-slide -->
                <div class="ms-slide ms-slide2 text-right" data-delay="7">
                    <div class="ms-slide-pattern bg-pattern dark-screen"></div>
                    <?php $picture2=get_option('smarty_2_picture'); ?>
                    <?php echo '<img src="http://localhost/wordpress/wp-content/themes/smarty/masterslider/blank.gif" data-src="'.$picture2.'" alt="Picture2">'; ?>
                       
                    <div class="ms-layer ms-layer1 ms-text-size1" data-type="text" data-effect="skewleft(10,100,true)" data-duration="1500" data-ease="easeInOutQuint">
                        <div class="container">
                        
                            <h2 class="text-highlight text-uppercase">
                            <?php $title2 = get_option('smarty_2_title');
                        echo $title2 ;?>
                            </h2>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer2 ms-text-size5" data-type="text" data-effect="skewleft(10,100,true)" data-duration="1500" data-delay="300" data-ease="easeInOutQuint">
                        <div class="container text-right">
                            <h2 class="text-uppercase">
                            <?php $sub2=get_option('smarty_2_subtitle');
                        echo $sub2 ?>
                            </h2>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer3 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="skewleft(10,100,true)" data-duration="1500" data-delay="600" data-ease="easeInOutQuint">
                        <div class="container">
                        	<p>
                            <?php $sub2b=get_option('smarty_2b_subtitle');
                        echo $sub2b;?>
                        	</p>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer4 ms-text-size7 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="skewleft(10,100,true)" data-duration="1500" data-delay="900" data-ease="easeInOutQuint">
                        <div class="container">
                            <a class="button-simple" href="#">Learn More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="ms-thumb"><img alt="img" src="http://localhost/wordpress/wp-content/themes/smarty/images/slider_thumbs/2.jpg"></div>
                </div><!-- .ms-slide -->
                <div class="ms-slide ms-slide3 text-right" data-delay="7">
                    <div class="ms-slide-pattern bg-pattern dark-screen"></div>

                    <?php $picture3=get_option('smarty_3_picture');
                   echo  '<img src="http://localhost/wordpress/wp-content/themes/smarty/masterslider/blank.gif" data-src="'.$picture3.'" alt="picture 3">' ; ?> 
                   
                    <div class="ms-layer ms-layer1 ms-text-size2" data-type="text" data-effect="rotateleft(5,long,br,true)" data-duration="1500" data-ease="easeInOutQuint">
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-6">
                                    <h2 class="text-uppercase text-highlight">
                                    <?php $title3=get_option('smarty_3_title');echo $title3;?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer2 ms-text-size5" data-type="text" data-effect="bottom(70, true)" data-duration="2000" data-delay="1000" data-ease="easeInOutQuint">
                        <div class="container text-uppercase">
                            <div class="row">
                                <div class="col-xxl-6">
                                    <h3>
                                    <?php $sub3=get_option('smarty_3_subtitle');echo $sub3; ?> 
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer3 ms-text-size7 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="bottom(50, true)" data-duration="2000" data-delay="1400" data-ease="easeInOutQuint">
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-6">
                                    <a class="button-simple" href="#">Learn More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-thumb"><img alt="img" src="http://localhost/wordpress/wp-content/themes/smarty/images/slider_thumbs/3.jpg"></div>
                </div><!-- .ms-slide -->
                <div class="ms-slide ms-slide4" data-delay="7">
                    <div class="ms-slide-pattern bg-pattern dark-screen"></div>

                    <?php  $picture4=get_option('smarty_4_picture') ;
                    echo '<img src="http://localhost/wordpress/wp-content/themes/smarty/masterslider/blank.gif" data-src="'.$picture4.'" alt="picture4">';?>                    <div class="ms-layer ms-layer1 ms-text-size2 text-uppercase" data-type="text" data-effect="rotate3dtop(70,0,0,180)" data-duration="2000" data-ease="easeInOutQuint">
                        <div class="container">
                        
                    
                            <h2>
                            <?php $title4=get_option('smarty_4_title');echo $title4; ?>
                            </h2>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer2 ms-text-size4 text-uppercase" data-type="text" data-effect="rotate3dright(-70,0,0,180)" data-duration="2000" data-ease="easeInOutQuint">
                        <div class="container">
                            <h3>
                            <?php $title4b=get_option('smarty_4b_title');echo $title4b; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer3 ms-text-size7 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="rotate3dbottom(-70,0,0,180)" data-duration="2000" data-delay="300" data-ease="easeInOutQuint">
                        <div class="container">
                            <a class="button-simple" href="#">Learn More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="ms-thumb"><img alt="img" src="http://localhost/wordpress/wp-content/themes/smarty/images/slider_thumbs/4.jpg"></div>
                </div><!-- .ms-slide -->
                <div class="ms-slide ms-slide1" data-delay="7">
                    <div class="ms-slide-pattern bg-pattern dark-screen"></div>

                    <?php $picture5=get_option('smarty_5_picture');
                    echo '<img src="http://localhost/wordpress/wp-content/themes/smarty/masterslider/blank.gif" data-src="'.$picture5.'" alt="lorem ipsum dolor sit">'; ?>
                    <div class="ms-layer ms-layer1 ms-text-size3 text-uppercase" data-type="text" data-effect="rotate3dtop(70,0,0,180)" data-duration="2000" data-ease="easeInOutQuint">
                        <div class="container">
                            <h2>
                            <?php $title5 = get_option('smarty_5_title'); echo $title5; ?>
                            </h2>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer2 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="rotate3dbottom(-70,0,0,180)" data-duration="2000" data-ease="easeInOutQuint">
                        <div class="container">
                        	<p>
                            <?php $sub5=get_option('smarty_5_subtitle'); echo $sub5; ?>
                            </p>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer3 ms-text-size7 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="rotate3dbottom(-70,0,0,180)" data-duration="2000" data-delay="300" data-ease="easeInOutQuint">
                        <div class="container">
                            <a class="button" href="#">Learn More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="ms-thumb"><img alt="img" src="http://localhost/wordpress/wp-content/themes/smarty/images/slider_thumbs/5.jpg"></div>
                </div><!-- .ms-slide -->
                <div class="ms-slide ms-slide2 text-right" data-delay="7">
                    <div class="ms-slide-pattern bg-pattern dark-screen"></div>
                    <?php $picture6=get_option('smarty_6_picture');
                    echo '<img src="http://localhost/wordpress/wp-content/themes/smarty/masterslider/blank.gif" data-src="'.$picture6.'" alt="picture6"> '; ?> 
                    <div class="ms-layer ms-layer1 ms-text-size1" data-type="text" data-effect="skewleft(10,100,true)" data-duration="1500" data-ease="easeInOutQuint">
                        <div class="container">
                            <h2 class="text-highlight text-uppercase">
                            <?php $title6=get_option('smarty_6_title');echo $title6; ?>
                            </h2>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer2 ms-text-size5" data-type="text" data-effect="skewleft(10,100,true)" data-duration="1500" data-delay="300" data-ease="easeInOutQuint">
                        <div class="container text-right">
                            <h2 class="text-uppercase">
                            <?php $sub6=get_option('smarty_6_subtitle');echo $sub6;  ?>
                            </h2>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer3 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="skewleft(10,100,true)" data-duration="1500" data-delay="600" data-ease="easeInOutQuint">
                        <div class="container">
                        	<p>
                            <?php $sub6b=get_option('smarty_6b_subtitle');echo $sub6b; ?>
                        	</p>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer4 ms-text-size7 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="skewleft(10,100,true)" data-duration="1500" data-delay="900" data-ease="easeInOutQuint">
                        <div class="container">
                            <a class="button-simple" href="#">Learn More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="ms-thumb"><img alt="img" src="http://localhost/wordpress/wp-content/themes/smarty/images/slider_thumbs/6.jpg"></div>
                </div><!-- .ms-slide -->
                <div class="ms-slide ms-slide3 text-right" data-delay="7">
                    <div class="ms-slide-pattern bg-pattern dark-screen"></div>
                    <?php $picture7=get_option('smarty_7_picture');
                    echo ' <img src="http://localhost/wordpress/wp-content/themes/smarty/masterslider/blank.gif" data-src="'.$picture7.'" alt="picture7">';?>
                    <div class="ms-layer ms-layer1 ms-text-size2" data-type="text" data-effect="rotateleft(5,long,br,true)" data-duration="1500" data-ease="easeInOutQuint">
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-6">
                                    <h2 class="text-uppercase text-highlight">
                                    <?php $title7=get_option('smarty_7_title');echo $title7; ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer2 ms-text-size5" data-type="text" data-effect="bottom(70, true)" data-duration="2000" data-delay="1000" data-ease="easeInOutQuint">
                        <div class="container text-uppercase">
                            <div class="row">
                                <div class="col-xxl-6">
                                    <h3>
                                    <?php $sub7=get_option('smarty_7_subtitle');echo $sub7; ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer3 ms-text-size7 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="bottom(50, true)" data-duration="2000" data-delay="1400" data-ease="easeInOutQuint">
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-6">
                                    <a class="button-simple" href="#">Learn More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-thumb"><img alt="img" src="http://localhost/wordpress/wp-content/themes/smarty/images/slider_thumbs/7.jpg"></div>
                </div><!-- .ms-slide -->
                <div class="ms-slide ms-slide4" data-delay="7">
                    <div class="ms-slide-pattern bg-pattern dark-screen"></div>
                    <?php $picture8=get_option('smarty_8_picture');
                    echo ' <img src="http://localhost/wordpress/wp-content/themes/smarty/masterslider/blank.gif" data-src="'.$picture8.'" alt="picture8">';?>
                    <div class="ms-layer ms-layer1 ms-text-size2 text-uppercase" data-type="text" data-effect="rotate3dtop(70,0,0,180)" data-duration="2000" data-ease="easeInOutQuint">
                        <div class="container">
                            <h2>
                            <?php $title8=get_option('smarty_8_title');echo $title8; ?>
                            </h2>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer2 ms-text-size4 text-uppercase" data-type="text" data-effect="rotate3dright(-70,0,0,180)" data-duration="2000" data-ease="easeInOutQuint">
                        <div class="container">
                            <h3>
                            <?php $sub8=get_option('smarty_8_subtitle');echo $sub8; ?>
                            </h3>
                        </div>
                    </div>
                    <div class="ms-layer ms-layer3 ms-text-size7 visible-xxxl visible-xxl visible-xl visible-lg visible-md" data-type="text" data-effect="rotate3dbottom(-70,0,0,180)" data-duration="2000" data-delay="300" data-ease="easeInOutQuint">
                        <div class="container">
                            <a class="button-simple" href="#">Learn More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="ms-thumb"><img alt="img" src="http://localhost/wordpress/wp-content/themes/smarty/images/slider_thumbs/8.jpg"></div>
                </div><!-- .ms-slide -->
            </div>
            <!-- end of masterslider -->

        </div><!-- .ms-fullscreen-template -->
        

        <section class="posts">
<?php if(have_posts()) : ?> <?php while(have_posts()) : the_post(); ?>
<h2 style=><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
<?php endwhile; ?>
<?php endif; ?>
</section>

    </div><!-- #all -->


</body>