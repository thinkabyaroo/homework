<?php
$dir = scandir("store");
//echo "<pre>";
//print_r($dir);

//srr int arr
$str="    min ga lar par    ";
$arr=["orange","apple","banana"];

//array_push($arr,"aaaa");
//array_unshift($arr,"aaaa");
//array_shift($arr);
//array_pop($arr);
//print_r($arr);

$arr[0]="aaaa";
$arr[count($arr)]="bbb";
print_r($arr);

//echo join("*",$arr);
//echo in_array("mango",$arr);
//
//echo in_array("apple",$arr);


//echo str_replace(" ","",$str);

//echo substr($str,2,7);

//space delete
//echo trim($str);
//echo ltrim($str);
//echo rtrim($str);

//encrypt string
//echo md5($str);

//
//echo str_shuffle($str);

//change str to array
//print_r(str_split($str,5));
//
//print_r(explode("a",$str));

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
//echo json_encode($thisClass);

$thel=array(
    "name"=> "thel" ,
    "age"=> 22,
    "status" =>false
);
echo in_array(222,$thel,true);
print_r(array_keys($thel));
echo array_key_exists("weight",$thel);


$num=range(2,11,5);
print_r($num);

//array sort or reverse sort
rsort($arr);
print_r($arr);

//associated array // key ko sort
//krsort($thel);
ksort($arr);

print_r($thel);
?>

