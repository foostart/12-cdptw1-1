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
                        <div class="stars">
                                  <form action="">
                                    <input class="star star-10" id="star-10" type="radio" name="star"/>
                                    <label class="star star-10" for="star-10"></label>
                                    <input class="star star-9" id="star-9" type="radio" name="star"/>
                                    <label class="star star-9" for="star-9"></label>
                                    <input class="star star-8" id="star-8" type="radio" name="star"/>
                                    <label class="star star-8" for="star-8"></label>
                                    <input class="star star-7" id="star-7" type="radio" name="star"/>
                                    <label class="star star-7" for="star-7"></label>
                                    <input class="star star-6" id="star-6" type="radio" name="star"/>
                                    <label class="star star-6" for="star-6"></label>
                                  </form>
                                </div>
                    </a>
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
                        <div class="stars">
                                  <form action="">
                                    <input class="star star-20" id="star-20" type="radio" name="star"/>
                                    <label class="star star-20" for="star-20"></label>
                                    <input class="star star-19" id="star-19" type="radio" name="star"/>
                                    <label class="star star-19" for="star-19"></label>
                                    <input class="star star-18" id="star-18" type="radio" name="star"/>
                                    <label class="star star-18" for="star-18"></label>
                                    <input class="star star-17" id="star-17" type="radio" name="star"/>
                                    <label class="star star-17" for="star-17"></label>
                                    <input class="star star-16" id="star-16" type="radio" name="star"/>
                                    <label class="star star-16" for="star-16"></label>
                                  </form>
                                </div>
                    </a>
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
                        <div class="stars">
                                  <form action="">
                                    <input class="star star-15" id="star-30" type="radio" name="star"/>
                                    <label class="star star-15" for="star-30"></label>
                                    <input class="star star-14" id="star-29" type="radio" name="star"/>
                                    <label class="star star-14" for="star-29"></label>
                                    <input class="star star-13" id="star-28" type="radio" name="star"/>
                                    <label class="star star-13" for="star-28"></label>
                                    <input class="star star-12" id="star-27" type="radio" name="star"/>
                                    <label class="star star-12" for="star-27"></label>
                                    <input class="star star-11" id="star-26" type="radio" name="star"/>
                                    <label class="star star-11" for="star-26"></label>
                                  </form>
                                </div>
                    </a>
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
                        <div class="stars">
                                  <form action="">
                                    <input class="star star-25" id="star-25" type="radio" name="star"/>
                                    <label class="star star-25" for="star-25"></label>
                                    <input class="star star-24" id="star-24" type="radio" name="star"/>
                                    <label class="star star-24" for="star-24"></label>
                                    <input class="star star-23" id="star-23" type="radio" name="star"/>
                                    <label class="star star-23" for="star-23"></label>
                                    <input class="star star-22" id="star-22" type="radio" name="star"/>
                                    <label class="star star-22" for="star-22"></label>
                                    <input class="star star-21" id="star-21" type="radio" name="star"/>
                                    <label class="star star-21" for="star-21"></label>
                                  </form>
                                </div>
                    </a>
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
                        <div class="stars">
                                  <form action="">
                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                    <label class="star star-1" for="star-1"></label>
                                  </form>
                                </div>  
                    </a>
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
                        <div class="stars">
                                  <form action="">
                                    <input class="star star-30" id="star-30" type="radio" name="star"/>
                                    <label class="star star-30" for="star-30"></label>
                                    <input class="star star-29" id="star-29" type="radio" name="star"/>
                                    <label class="star star-29" for="star-29"></label>
                                    <input class="star star-28" id="star-28" type="radio" name="star"/>
                                    <label class="star star-28" for="star-28"></label>
                                    <input class="star star-27" id="star-27" type="radio" name="star"/>
                                    <label class="star star-27" for="star-27"></label>
                                    <input class="star star-26" id="star-26" type="radio" name="star"/>
                                    <label class="star star-26" for="star-26"></label>
                                  </form>
                                </div>  
                    </a>
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
                        <div class="stars">
                                  <form action="">
                                    <input class="star star-31" id="star-31" type="radio" name="star"/>
                                    <label class="star star-31" for="star-31"></label>
                                    <input class="star star-32" id="star-32" type="radio" name="star"/>
                                    <label class="star star-32" for="star-32"></label>
                                    <input class="star star-33" id="star-33" type="radio" name="star"/>
                                    <label class="star star-33" for="star-33"></label>
                                    <input class="star star-34" id="star-34" type="radio" name="star"/>
                                    <label class="star star-34" for="star-34"></label>
                                    <input class="star star-35" id="star-35" type="radio" name="star"/>
                                    <label class="star star-35" for="star-35"></label>
                                  </form>
                                </div>  
                    </a>
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
