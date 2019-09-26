<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

    <div class="row">
        <div class="style-641">
            <div class="w3-content w3-display-container" backgoud>
                <div class="sc_section margin_top_null margin_bottom_null aligncenter testimonials_custom_block_3">
                    <img class="mySlides" src="images/8.png">
                    <img class="mySlides" src="images/9.png">
                    <img class="mySlides" src="images/10.png">
                    <div class="nuthai">
                        <a href="#" class="w3-btn-floating w3-display-left" onclick="plusDivs(-2)">&#10094;</a>
                        <a class="w3-btn-floating w3-display-right" onclick="plusDivs(2)">&#10095;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) {
                        myIndex = 1
                    }
                    x[myIndex - 1].style.display = "block";
                    setTimeout(carousel, 2000); // Change image every 2 seconds
                }
            </script>
            <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                    showDivs(slideIndex += n);
                }

                function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    if (n > x.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = x.length
                    }
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    x[slideIndex - 1].style.display = "block";
                }
            </script>        

