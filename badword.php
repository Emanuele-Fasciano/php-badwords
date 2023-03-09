<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php $text = $_GET["text"]; 
          $badWord = $_GET["badword"];
          $censuredText = str_replace($badWord, "***", $text);
    ?>



    <p>
        <span><?= $text ?></span>
        <?php var_dump(strlen($text))?>
    </p>

    <p> 
        <span><?= $censuredText ?></span>
        <?php var_dump(strlen($censuredText))?>
    </p>
</body>

<style>
    span{
        margin-right: 20px
    }
</style>
</html>