<?php 

// echo $valu = 10;
// echo "<br>";
// echo $valu2 = 20;

// echo "<hr>";
// echo $valu + $valu2;
// echo "<br>";
// echo $valu - $valu2;
// echo "<br>";
// echo $valu * $valu2;
// echo "<br>";
// echo $valu / $valu2;
// echo "<br>";
// echo $valu % $valu2;


// $x = 5;
// $y = '5';

// //Equal == Check if tow values are equal. 
// var_dump($x == $y); // output == ? 0 | 1

// // checks if tow values are qeual and of the same data type
// var_dump($x === $y);  

// // not Equal : check if tow values are not equal 
// var_dump($x != $y);  


// $age = 100; 

// if($age >= 18){
//     echo "you are an adult.";
// }
// else{
//     echo "you are a minor";
// }

$currentDate = date('l'); 

// echo "today is ".$currentDate ;

switch ($currentDate){

    case "Mon";
    echo "Today is monday";
    break;

    case "Tue";
    echo "Today is Tue";
    break;

    case "Friday";
    echo "Today is Friday";
    break;

    default:
    echo "Its anotner day";
}









?>