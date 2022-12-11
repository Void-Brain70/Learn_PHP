<?php
$n = 70;

//IF Condition 
// if($n < 100){
//     echo "$n is less then 100";
// }

//if-else condition 
// if($n %2 ==0){
//     echo "$n is even number";
// }
// else{
//     echo "$n is odd number";
// }

//else-if condition
$marks = 79;
if($marks<33){
    echo "Failed";
}
else if ($marks>=33 && $marks<=39){
    echo "Grade D";
}
else if ($marks>=40 && $marks<=49){
    echo "Grade C";
}
else if ($marks>=50 && $marks<=59){
    echo "Grade B";
}
else if ($marks>=60 && $marks<=69){
    echo "Grade A-";
}
else if ($marks>=70 && $marks<=79){
    echo "Grade A";
}
else if ($marks>=80 && $marks<=100){
    echo "Grade A+";
}
?>