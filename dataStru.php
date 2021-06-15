<?php
$myClass= array (
    array(
        "name"=>"thin kabyar oo",
        "age"=>22,
        "ph"=>"09775203108",
        "mark"=>20,
        "status"=>true,
        "money"=>60
    ),
    array(
        "name"=>"kabyar oo",
        "age"=>20,
        "ph"=>"09775203188",
        "mark"=>90,
        "status"=>false,
        "money"=>40

    ),
    array(
        "name"=>"thin kabyar",
        "age"=>32,
        "ph"=>"09695203108",
        "mark"=>60,
        "status"=>true,
        "money"=>20

    ),
    array(
        "name"=>"thimm",
        "age"=>18,
        "ph"=>"09695203108",
        "mark"=>50,
        "status"=>false,
        "money"=>10

    ),
    array(
        "name"=>"kabyar",
        "age"=>12,
        "ph"=>"09695203108",
        "mark"=>28,
        "status"=>true,
        "money"=>90

    ),
    array(
        "name"=>"thel",
        "age"=>12,
        "ph"=>"09785203108",
        "mark"=>28,
        "status"=>true,
        "money"=>900
    )
);
function calMark($mark){
    if($mark >= 80 ){
        return distination;
    }
    elseif($mark >= 40){
        return pass;
    }
    else {
        return fail;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,tr,td,th{
        border: 1px solid;
        border-collapse:collapse;
        padding: 10px 15px;
    }
    </style>
</head>
<body>
<?php
    print_r (array_keys($myClass[0]));
    $keyValue = array_keys($myClass[0]);
    array_unshift($keyValue,"Id");
?>
    <table>
        <thead>
            <?php foreach ($keyValue as $arr) { ?>
                <th><?php echo $arr; ?></th>
            <?php } ?>
        </thead>
        <tbody>
        <?php foreach ($myClass as $arr=>$i) { ?>
            <tr>
            
                <!-- <td> <?php echo $arr+1; ?> </td> -->
                <!-- <td> <?php echo $arr+1; ?> </td>
                <td> <?php echo $i["name"]; ?> </td>
                <td> <?php echo $i["age"]; ?> </td>
                <td> <?php echo $i["ph"]; ?> </td>
                <td> <?php echo $i["money"]; ?> </td> -->
                <?php 
                    $i["id"]=$arr+1;
                    foreach ($keyValue as $arr) { ?>
                    <td>
                        <?php
                                echo $i[$arr];

                        ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>

        </tbody>
    </table>
</body>
</html>