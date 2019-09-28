<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
    <!-- Swiper -->
   <div class="type-196">
   <div class="banner">
      <div class="container">
         <div class="swiper-container">
               <h3>BRANDS
                   <div class="arrow">
              <div class="swiper-button-next next"><i class="fa fa-chevron-right" style="color: #fff; font-size: 20px;"></i></div>
              <div class="swiper-button-prev prev"><i class="fa fa-chevron-left" style="color: #fff; font-size: 20px;"></i></div>
           </div>  
               </h3>
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                      <a href="#"> <img src="images/custom_brand1_img.jpg" alt=""/> </a>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                      <a href="#"> <img src="images/custom_brand2_img.jpg" alt=""/> </a>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                    <div class="image">
                      <a href="#"> <img src="images/custom_brand1_img.jpg" alt=""/> </a>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                    <div class="image">
                      <a href="#"> <img src="images/custom_brand2_img.jpg" alt=""/> </a>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                      <a href="#"> <img src="images/custom_brand1_img.jpg" alt=""/> </a>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                      <a href="#"> <img src="images/custom_brand2_img.jpg" alt=""/> </a>
                     </div>
                  </div>
               </div>
            </div>
            <br><br>
            <div class="swiper-pagination"></div>
         </div>
      </div>
   </div>   
</div>

