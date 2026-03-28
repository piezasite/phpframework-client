# How To

```
<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once "./phpframework-client.php";

phpframework('!DOCTYPE html|c'); 

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php phpframework('title|phpFrameWork|title|a'); ?>
    <style>
        <?php 
            phpframework ('*|margin:0;padding:0;box-sizing:border-box;|d'); 
            phpframework ('body|text-align:center;|d');
        ?>
    </style>
</head>
<body>

    <header>
        <?php phpframework('tricolor'); phpframework('h1|phpFrameWork-Client|h1|a'); ?>
    </header>

    <main>
        <?php 
            phpframework('h2|Welcome !|h2|a'); 
            phpframework('a|e');
            phpframework('hr|b');
            phpframework('n|e');
        ?>
    </main>

    <footer>
        <?php phpframework('em|&copy; Rgg. 2026.|em|a'); ?>
    </footer>

</body>
</html>
```