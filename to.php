<?php
$arr= array("orange","mango","apple");
// array_push($arr,"banana");
// array_pop($arr);
// array_shift($arr);
array_unshift($arr,"banana"); //
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
    <ul>
    <?php foreach($arr as $d) { ?>
    <li>
        <?php echo $d; ?>

    </li>
    
    <?php } ?>
    </ul>
</body>
</html>