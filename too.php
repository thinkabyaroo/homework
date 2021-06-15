<?php
$ass= array(

    "name"=>"thin kabyar oo",
    "age"=>22,
    "ph"=>"09775203108"
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,tr,td{
        border: 1px solid;
    }
    </style>
</head>
<body>
    <table>
    <?php foreach($ass as $key=>$val){ ?>
        <tr>
            <td>
                <?php echo $key; ?>
            </td>
            <td>
                <?php echo $val; ?>
            </td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>