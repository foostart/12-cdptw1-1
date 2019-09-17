<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    $less = new lessc; 
    $less->compileFile('less/25-37.less', 'css/25-37.css');   
?>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>.../...1158/css/bootstrap.min.css" rel="stylesheet"  />
        <link href="<?php echo $url_path ?>../...1158css/font-awesome.min.css" rel="stylesheet"/>
        <link href="<?php echo $url_path ?>.../...1158/css/25-37.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $url_path ?>.../1158/js/jquery.min.js" ></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/25-37.less', 'css/25-37.css');
        ?>
        <link href="css/25-37.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/close-element-6.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-25-37">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="row content6">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="x_panel6">
                                    <div class="x_title">
                                        <h2>Tooltips <small>Hover to view</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element6"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a id="close-link6"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element6">
                                        <p>Add small overlays of content for housing secondary information.</p>
                                            <button type="button" class="btn btn-default">Left</button>
                                            <button type="button" class="btn btn-default">Top</button>
                                            <button type="button" class="btn btn-default"> Bottom</button>
                                            <button type="button" class="btn btn-default"> Right</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </div>
    <body>   
            <?php  $dir_block.include'1158-content.php'; ?>

    </body>

</html>