<?php
$text = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas deleniti sed ea explicabo impedit! Vel in amet sunt repellat eius vero animi doloribus rerum explicabo aspernatur, optio nostrum recusandae quaerat.';

$word = $_GET['word'];
$replace = '***';
var_dump(str_replace($word, $replace, $text));

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> <?php echo strlen($text) . ' ' . str_replace($word, $replace, $text); ?></h1>
</body>

</html>