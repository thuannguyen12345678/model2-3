<?php 
include ('app/Maytinh.php');


$objMaytinh = new Maytinh();
$yourOutput = $objMaytinh->sum(2,3);
$expectedOutput = 5;

if($yourOutput == $expectedOutput) {
    echo "passed.<br>";
}else{
    echo "failed.<br>";
}


//2:
$yourOutput = $objMaytinh->sum(100,1000);
$expectedOutput = 1100;

if($yourOutput == $expectedOutput) {
    echo "passed.<br>";
}else{
    echo "failed.<br>";
}


$yourOutput = $objMaytinh->sum("",1000);
$expectedOutput = 1000;

if($yourOutput == $expectedOutput) {
    echo "passed.<br>";
}else{
    echo "failed.<br>";
}


$yourOutput = $objMaytinh->sum(100,"");
$expectedOutput = 100;

if($yourOutput == $expectedOutput) {
    echo "passed.<br>";
}else{
    echo "failed.<br>";
}