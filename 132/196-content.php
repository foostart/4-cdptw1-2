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
                         <img src="images/custom_brand1_img.jpg" alt=""/>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                         <img src="images/custom_brand2_img.jpg" alt=""/>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                         <img src="images/custom_brand3_img.jpg" alt=""/>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                         <img src="images/custom_brand4_img.jpg" alt=""/>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                         <img src="images/custom_brand5_img.jpg" alt=""/>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="block">
                     <div class="image">
                         <img src="images/custom_brand6_img.jpg" alt=""/>
                     </div>
                  </div>
               </div>
            </div>
                <div class="alldot"style="text-align:center">
                  <span class="dot" onclick="currentSlide(0)"></span> 
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
              </div>
         </div>
      </div>
   </div>   
    <script>
      //khai báo biến slideIndex đại diện cho slide hiện tại
      var slideIndex;
      // KHai bào hàm hiển thị slide
      function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }

          slides[slideIndex].style.display = "block";  
          dots[slideIndex].className += " active";
          //chuyển đến slide tiếp theo
          slideIndex++;
          //nếu đang ở slide cuối cùng thì chuyển về slide đầu
          if (slideIndex > slides.length - 1) {
            slideIndex = 0
          }    
          //tự động chuyển đổi slide sau 5s
          setTimeout(showSlides, 5000);
      }
      //mặc định hiển thị slide đầu tiên 
      showSlides(slideIndex = 0);


      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
    </script>
</div>

