
<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

            <div class="type-807">
                <!-- FOOTER -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer_content">
                                <div class="footer_row_1">
                                    <div class="col-md-4">
                                        <a href="#">
                                        <img src="../807/images/footer_logo.png" alt="electroinnovation" />
                                        </a>
                                        <p>Comfort is a very important thing nowadays because it is a condition of satisfaction and calmness. It<br> is clear that our way of life must be as comfortable as possible.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li class="active">
                                                <a href="#"><h4>Home</h4></a>
                                            </li>
                                            <li>
                                                <a href="#"><h4>Contact Us</h4></a>
                                            </li>
                                            <li>
                                                <a href="#"><h4>Product</h4></a>
                                            </li>
                                            <li>
                                                <a href="#"><h4>Company</h4></a>
                                            </li>
                                            <li>
                                                <a href="#"><h4>Categories</h4></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="address">
                                            <h4>Email</h4>
                                            <input type="text" name="search">
                                            <button class="btn btn-info" type="button" value="search"><span>Send</span></button>
                                            <a href="#"><i class="fa fa-map-marker"></i>21 Phan Văn Trị, P.13, Q.Gò Vấp</a>
                                            <a href="#"><i class=" fa fa-phone"></i>+1 (234) 323345</a>
                                            <a href="#"><i class="fa fa-envelope"></i>electro@gmail.com</a>
                                        </div>
                                        <ul class="social-network social-circle">
                                            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#" class="icoYoutube" title="Youtube"><i class="fa fa-youtube-play"></i></a></li>
                                            <li><a href="#" class="icoSkype" title="Skype"><i class="fa fa-skype"></i></a></li>
                                            <li><a href="#" class="icoPinterest" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer_row_2">
                                    <p role="contentinfo">© 2017 electroinnovation. All rights reserved. Design by <a href="#">TemplateMonster.com</a>. <a target="_blank" rel="nofollow" href="#">Powered by Shopify</a></p><!-- Design by templatemonster.com -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End footer-->
            </div>
