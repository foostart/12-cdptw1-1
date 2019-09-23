
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
    $less->compileFile('less/1157.less', 'css/1157.css');
?>
<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>1157</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1157.less', 'css/1157.css');
        ?>
        <link href="<?php echo $url_path ?>/css/1157.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo $url_path ?>/js/jquery.min.js"></script>
        <script src="<?php echo $url_path ?>/js/code.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $url_path ?>/js/close-element-2.js"></script>
    </head>
    <body>   
         <?php  $dir_block.include'1157-content.php'; ?>
    </body>
</html>