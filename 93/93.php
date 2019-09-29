<!DOCTYPE html>
<html lang="en-US">
    <head>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title></title>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-93.less', 'css/type-93.css', 'js/93.js');
        ?>
         <link href="css/type-93.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/93.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
   <body>
        <?php include './93-content.php'; ?>
    </body >
</html>