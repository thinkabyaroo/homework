<?php

function getTax($total,$curTax=5){
    return ($total / 100)* $curTax;
}
function calMMK($dollars,$curExchange=1500){
    global $hours,$curHour;
        $total = $dollars * $curExchange;
        $tax = getTax($total);
        return array(
            "total"=>$total. " mmk",
            "tax"=>$tax. " mmk",
            "subTotal" => $total + $tax
        );
    }

$input=$_REQUEST["myDollar"];
 echo "<pre>";
 print_r(calMMK($input));
 echo "</pre>";
 echo "<a href='index.php'>To Home</a>";
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
   <a href="index.php">Back To Home</a>
</body>
</html>