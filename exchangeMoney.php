<?php

$friends = array(
    "thin"=>"100",
    "thel"=>"200",
    "phyu"=>"300"
);

$hours = array(
    "openHour"=>9,
    "closeHour"=>17
);
$curHour =11;

function getTax($total,$curTax=5){
    return ($total / 100)* $curTax;
}
function calMMK($dollars,$curExchange=1500){
    global $hours,$curHour;
    if($curHour>$hours['openHour'] && $curHour<$hours['closeHour']){
        $total = $dollars * $curExchange;
        $tax = getTax($total);
        return array(
            "total"=>$total. " mmk",
            "tax"=>$tax. " mmk",
            "subTotal" => $total + $tax
        );
    }
    return "We are close";

}
// for ($i=0;$i<count($friends);$i++){
//     print_r(calMMK($friends[$i]));
// }

// $arr=array(
//     "name"=>"thin",
//     "age"=>"22",
//     "weight"=>"100",
//     "status"=>"true",
// );
// foreach( $arr as $x=>$y){
//     echo "$y"." ";
// }

foreach($friends as $name=>$val){
    print_r (calMMK($name=$val));
}