
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="style-641">
    <div class="prograti">
    <div class="swiper-container">  
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="mySlides" src="images/8.png">
            </div>
            <div class="swiper-slide">
                <img class="mySlides" src="images/9.png"> 
            </div>
            <div class="swiper-slide">
                <img class="mySlides" src="images/10.png">
            </div>           
        </div>       
    </div>
        <div class="btn">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>    
        </div>
     </div>   
    <!-- Add Arrows -->

</div>


