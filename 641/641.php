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
    $less->compileFile('less/641.less', 'css/641.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>641</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/641.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" ></script>
        <script src="js/bootstrap.js" ></script>
        <script src="js/641.js" type="text/javascript"></script>
        <script src="js/swiper.min.js" type="text/javascript"></script>
        <script src="js/swiper.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" ></script>
        <link href="css/swiper.css" rel="stylesheet" type="text/css"/>
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php  include'./641-content.php'; ?>
        
    </body>
</html>
