<?php
// Problem-1: Sum of Digits
// Example: 707 = 7+0+7 = 14

$num = 707;
$rem = 0;
$sum = 0;

for($i= 0 ; $i<=strlen($num); $i++){
    $rem = $num % 10;
    $sum =  $sum + $rem ;
    $num = $num / 10;
}
echo "Sum of digit 707 is $sum";
?>