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
    $less->compileFile('less/429.less', 'css/429.css');
    
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Module 429</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/bootstrap-v3.3.7.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/429.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo $url_path ?>/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo $url_path ?>/js/jquery.touchSwipe.min.js"></script>
        <script src="<?php echo $url_path ?>/js/429-script.js"></script>
    </head>
    <body>
      <?php include '429-content.php'; ?>
      <script src="js/bootstrap.min.js"></script>
    </body>
</html>
