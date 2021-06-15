<?php

// $name = "thin kayar Oo";
// $age = 22;
// $weight =100;
// $status =false;

 $arr1=["thin Kabyar Oo",22,100,true];

 $arr=array(
     "name"=>"thin",
     "age"=>22,
     "weight"=>100,
     "status"=>true,
 );
 


 $assi=array(
     "name"=> "thin" ,
     "age"=> 22,
     "status" =>false
    );


$thisClass=array(
    array(
        "name"=> "thin" ,
        "age"=> 22,
        "status" =>false
    ),
    array(
        "name"=> "kabyar" ,
        "age"=> 22,
        "status" =>false
    ),
    array(
        "name"=> "oo" ,
        "age"=> 22,
        "status" =>false
    ),
    array(
        "name"=> "thel" ,
        "age"=> 22,
        "status" =>false
    ),
);
// echo $thisClass[1]["name"];
// print_r ($thisClass);
// var_dump ($arr);

$fName ="thin";
$lName="OO";
// echo $fName.$lName;

// echo $age<$weight;

// $age++;
// echo $age;




function getTex($total,$currentTex=5){
    return ($total/100)*$currentTex;
}
function calDollarToMMK($myDollar,$poutZay=1000){
    $total=$myDollar*$poutZay;
    $tex=getTex($total);
    return array(
        "total"=>$total." mmk",
        "tex"=>$tex." mmk",
        "subTotal"=>$total+$tex
    );
}
// print_r (calDollarToMMK(100));


$x=111;
function aa(){
    // $x=122;
    global $x;
    return $x;
}
// echo aa();

$friend=[100,200,300];

$hours= array(
    "openHour"=>9,
    "closeHour"=>17
);

$currentHour=11;
function getTax($total,$currentTax=2){
    return ($total/100)*$currentTax;
}
function Cal($dollar,$exchange=1500){
    global $currentHour,$hours;
    if($currentHour>$hours['openHour'] && $currentHour<$hours['closeHour']){
        $total= $dollar * $exchange;
        $getTax= getTax($total);
        return array(
            "total"=>$total. " mmk",
            "tax"=>$getTax." mmk",
            "sub_total"=>$total + $getTax
        );
    }
    return "We are close";
}
// print_r (Cal(100));

// for ($i=0;$i<count($allMyFriend);$i++){
//     print_r(calDollarToMMK($allMyFriend[$i]));
// }

// foreach($arr as $key =>$val){
//     echo $key;
// }