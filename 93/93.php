<!DOCTYPE html>
<html lang="en-US">
    <head>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title></title>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-93.less', 'css/type-93.css');
        ?>
         <link href="css/type-93.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.js" type="text/javascript"></script>
    </head>
    <body class="type-93 home page page-id-299 page-template page-template-page-templates page-template-template-fullwidth-not-header page-template-page-templatestemplate-fullwidth-not-header-php wpb-js-composer js-comp-ver-4.10 vc_responsive">
        <div>
            <div class="wrapper">
                <nav class="top-menu">
                    <div class="nav-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="mobnav-btn"></div>
                                    <ul data-breakpoint="800" id="menu-main-menu" class="sf-menu"><li id="menu-item-332" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-332"><a href="#">Home</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-301" class="menu-item   current-menu-item page_item page-item-299 current_page_item menu-item-301"><a href="#">With Revolution</a></li>
                                                <li id="menu-item-288" class="menu-item   menu-item-288"><a href="#">With Search Bar</a></li>
                                                <li id="menu-item-289" class="menu-item   menu-item-289"><a href="#">With Subscription</a></li>
                                                <li id="menu-item-537" class="menu-item   menu-item-537"><a href="#">With Video</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-253" class="menu-item   menu-item-253"><a href="#">About us</a></li>
                                        <li id="menu-item-255" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-255"><a href="#">Course</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-247" class="menu-item   menu-item-247"><a href="#">Courses Grid</a></li>
                                                <li id="menu-item-246" class="menu-item   menu-item-246"><a href="#">Courses List</a></li>
                                                <li id="menu-item-416" class="menu-item  menu-item-object-course menu-item-416"><a href="#">Course Details v1</a></li>
                                                <li id="menu-item-415" class="menu-item  menu-item-object-course menu-item-415"><a href="#">Course Details v2</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-256" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-256 menu-item-mega"><a href="#">Pages (Megamenu)</a>
                                            <div class="mega-menu-container container" style="width:100%">
                                                <div class="mega-menu-columns">
                                                    <div id="menu-item-448" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-448 mega-sub-menu col-md-4"><a>Communicate</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-248" class="menu-item   menu-item-248"><a href="#">Teacher</a></li>
                                                            <li id="menu-item-291" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-291"><a href="#">Teacher profile</a></li>
                                                            <li id="menu-item-554" class="menu-item   menu-item-554"><a href="#">Login / Register</a></li>
                                                            <li id="menu-item-609" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-609"><a href="#">Events</a></li>
                                                        </ul>
                                                    </div>	
                                                    <div id="menu-item-449" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-449 mega-sub-menu col-md-4"><a>Other Pages</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-251" class="menu-item   menu-item-251"><a href="#">Prices and Plans</a></li>
                                                            <li id="menu-item-252" class="menu-item   menu-item-252"><a href="#">Gallery Page</a></li>
                                                            <li id="menu-item-250" class="menu-item   menu-item-250"><a href="#">Shortcodes</a></li>
                                                            <li id="menu-item-455" class="menu-item   menu-item-455"><a href="#">Contact</a></li>
                                                        </ul>
                                                    </div>	
                                                    <div id="menu-item-450" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-450 mega-sub-menu col-md-4"><a>Submenu with icons</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-451" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-451"><a href="#">Downloads<i class="fa fa-download"></i></a></li>
                                                            <li id="menu-item-452" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-452"><a href="#">Video files<i class="fa fa-video-camera"></i></a></li>
                                                            <li id="menu-item-453" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-453"><a href="#">Audio files<i class="fa fa-microphone"></i></a></li>
                                                            <li id="menu-item-454" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-454"><a href="#">Members<i class="fa fa-user"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                            <li id="menu-item-74" class="menu-item   menu-item-74"><a href="#">Blog</a></li>
                                        <li id="menu-item-73" class="menu-item   menu-item-73"><a href="#">Contact</a></li>
                                    </ul>                        
                                    <div class="col-md-3 pull-right hidden-sm hidden-xs">
                                        <div id="sb-search" class="sb-search">
                                            <form action=#">
                                                <span class="fa fa-search"></span>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End row -->
                        </div><!-- End container -->
                    </div>
                </nav>         
                <!-- content close -->
            </div>
        </div> 
        <script src="js/superfish.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
    </body>
</html>