<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1159">
    <div class="container">
        <div class="top-title">
            <div class="title">
                <h2>Cameras & Videos</h2>
            </div>
        </div>
        <div class="navhai">
            <nav class="navbar navbar-default" >
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Sony</a></li>
                        <li><a href="#">LG</a></li>
                        <li><a href="#">Nikon</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <hr class="line">
        <div class="row">
            <div class="owl-carousel owl-theme owl-loaded owl-drag">
                <div class="new-sign-up">
                    <a href="#">
                        <img src="./images/22a.jpg" class="img-responsive" alt="Fujifilm Instax Mini Neo Instant Film Camera">
                        <h3>Fujifilm Instax Mini Neo Instant Film Camera</h3>
                       
                    </a>
                     <div class="stars">
                            <form action="star">
                                <input class="star " id="star-10" type="radio" name="star"/>
                                <label class="star " for="star-10"></label>
                                <input class="star " id="star-9" type="radio" name="star"/>
                                <label class="star " for="star-9"></label>
                                <input class="star " id="star-8" type="radio" name="star"/>
                                <label class="star " for="star-8"></label>
                                <input class="star" id="star-7" type="radio" name="star"/>
                                <label class="star " for="star-7"></label>
                                <input class="star " id="star-6" type="radio" name="star"/>
                                <label class="star " for="star-6"></label>
                            </form>
                        </div>
                    <div class="product-btn row">
                        <div class="product-list">
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Qick view"><i class="far fa-eye"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="far fa-chart-bar"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-sign-up">
                    <a href="#">
                        <img src="./images/24a.jpg" class="img-responsive" alt="DJI Phantom 4 Quadcopter Camera">
                        <h3>DJI Phantom 4 Quadcopter Camera</h3>
                        
                    </a>
                    <div class="stars">
                            <form action="star">
                                <input class="star " id="star-20" type="radio" name="star"/>
                                <label class="star " for="star-20"></label>
                                <input class="star " id="star-19" type="radio" name="star"/>
                                <label class="star " for="star-19"></label>
                                <input class="star " id="star-18" type="radio" name="star"/>
                                <label class="star " for="star-18"></label>
                                <input class="star " id="star-17" type="radio" name="star"/>
                                <label class="star " for="star-17"></label>
                                <input class="star " id="star-16" type="radio" name="star"/>
                                <label class="star " for="star-16"></label>
                            </form>
                        </div>
                    <div class="product-btn row">
                        <div class="product-list">
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Qick view"><i class="far fa-eye"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="far fa-chart-bar"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-sign-up">
                    <a href="#">
                        <img src="./images/38a.jpg" class="img-responsive" alt="Gopro Quick Sliver Hero4 24K HD Camera">
                        <h3>Gopro Quick Sliver Hero4 24K HD Camera</h3>
                       
                    </a>
                     <div class="stars">
                            <form action="star">
                                <input class="star " id="star-15" type="radio" name="star"/>
                                <label class="star " for="star-15"></label>
                                <input class="star " id="star-14" type="radio" name="star"/>
                                <label class="star " for="star-14"></label>
                                <input class="star " id="star-13" type="radio" name="star"/>
                                <label class="star " for="star-13"></label>
                                <input class="star " id="star-12" type="radio" name="star"/>
                                <label class="star " for="star-12"></label>
                                <input class="star " id="star-11" type="radio" name="star"/>
                                <label class="star " for="star-11"></label>
                            </form>
                        </div>
                    <div class="product-btn row">
                        <div class="product-list">
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Qick view"><i class="far fa-eye"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="far fa-chart-bar"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-sign-up">
                    <a href="#">
                        <img src="./images/46a.jpg" class="img-responsive" alt="Nikon Coolpix 24 MP Camera">
                        <h3>Nikon Coolpix 24 MP Camera</h3>
                        
                    </a>
                    <div class="stars">
                            <form action="star">
                                <input class="star " id="star-25" type="radio" name="star"/>
                                <label class="star " for="star-25"></label>
                                <input class="star " id="star-24" type="radio" name="star"/>
                                <label class="star " for="star-24"></label>
                                <input class="star " id="star-23" type="radio" name="star"/>
                                <label class="star " for="star-23"></label>
                                <input class="star " id="star-22" type="radio" name="star"/>
                                <label class="star " for="star-22"></label>
                                <input class="star " id="star-21" type="radio" name="star"/>
                                <label class="star " for="star-21"></label>
                            </form>
                        </div>
                    <div class="product-btn row">
                        <div class="product-list">
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Qick view"><i class="far fa-eye"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="far fa-chart-bar"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-sign-up">
                    <a href="#">                       
                        <img src="./images/48a.jpg" class="img-responsive" alt="Sony HD 1080p, 13.5MP White Version">
                        <h3>Sony HD 1080p, 13.5MP White Version</h3>
                    </a>
                     <div class="stars">
                            <form action="star">
                                <input class="star " id="star-5" type="radio" name="star"/>
                                <label class="star " for="star-5"></label>
                                <input class="star " id="star-4" type="radio" name="star"/>
                                <label class="star " for="star-4"></label>
                                <input class="star " id="star-3" type="radio" name="star"/>
                                <label class="star " for="star-3"></label>
                                <input class="star " id="star-2" type="radio" name="star"/>
                                <label class="star " for="star-2"></label>
                                <input class="star " id="star-1" type="radio" name="star"/>
                                <label class="star " for="star-1"></label>
                            </form>
                        </div>  
                    <div class="product-btn row">
                        <div class="product-list">
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Qick view"><i class="far fa-eye"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="far fa-chart-bar"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-sign-up">
                    <a href="#">
                        <img src="./images/49a.jpg" class="img-responsive" alt="Amcrest Security Camera">
                        <h3>Amcrest Security Camera</h3>
                    </a>
                    <div class="stars">
                            <form action="star">
                                <input class="star " id="star-30" type="radio" name="star"/>
                                <label class="star " for="star-30"></label>
                                <input class="star " id="star-29" type="radio" name="star"/>
                                <label class="star " for="star-29"></label>
                                <input class="star " id="star-28" type="radio" name="star"/>
                                <label class="star " for="star-28"></label>
                                <input class="star " id="star-27" type="radio" name="star"/>
                                <label class="star " for="star-27"></label>
                                <input class="star " id="star-26" type="radio" name="star"/>
                                <label class="star " for="star-26"></label>
                            </form>
                        </div>  
                    <div class="product-btn row">
                        <div class="product-list">
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Qick view"><i class="far fa-eye"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="far fa-chart-bar"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-sign-up">
                    <a href="#">
                        <img src="./images/50a.jpg" class="img-responsive" alt="DBPOWER T20 1500 Lumens LCD Projector">
                        <h3>DBPOWER T20 1500 Lumens LCD Projector</h3>
                       
                    </a>
                     <div class="stars">
                            <form action="star">
                                <input class="star " id="star-35" type="radio" name="star"/>
                                <label class="star " for="star-35"></label>
                                <input class="star " id="star-34" type="radio" name="star"/>
                                <label class="star " for="star-34"></label>
                                <input class="star " id="star-33" type="radio" name="star"/>
                                <label class="star" for="star-33"></label>
                                <input class="star" id="star-32" type="radio" name="star"/>
                                <label class="star" for="star-32"></label>
                                <input class="star" id="star-31" type="radio" name="star"/>
                                <label class="star" for="star-31"></label>
                            </form>
                        </div>  
                    <div class="product-btn row">
                        <div class="product-list">
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Qick view"><i class="far fa-eye"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="far fa-chart-bar"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
