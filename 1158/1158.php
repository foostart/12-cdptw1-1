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
    $less->compileFile('less/1158.less', 'css/1158.css');   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>1158</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>./css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?php echo $url_path ?>./css/font-awesome.min.css" rel="stylesheet"/>
        <script src="<?php echo $url_path ?>./js/jquery.min.js" rel="stylesheet"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1158.less', 'css/1158.css');
        ?>
        <link href="css/1158.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-3.1.1.min.js" ></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/close-element-6.js"></script>
    </head>
    <body>
            <?php  include'./1158-content.php'; ?>

    </body>

</html>