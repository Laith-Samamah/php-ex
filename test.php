<?php
// Q1-Write a PHP script to see if the specified year is a leap year or not.

// $year = 1960;

// if (($year % 4 == 0) & ($year % 100 !== 0) | ($year % 400 == 0))
// {
//     echo "$year is a leap year";
// } else {
//     "$year is not a leap year";
// }


//********************************************************************************* */

//Q2-Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.


// $temp = 32;
// if ($temp < 20 ) {
//     echo " It's winter! ";
// } else {
//     echo "Summer is here";
// }
//********************************************************************************* */


//Q3-Write a PHP script to calculate the sum of the two integers. If the two values ​​are the same, then calculate the triple of their sum.

// $num = 10;
// $num2 =9;
// if($num !== $num2){
//     echo $num+$num2;
// } else {
//     echo ($num+$num2)*3 ;
// }

//********************************************************************************* */



//Q5-Write in PHP script to check if the given positive number is a multiple of 3.

// $num=12;
// if($num > 0 & $num % 3 == 0 ){
//     echo "true";
// } else {
//     echo "false";
// }


//********************************************************************************* */



//Q7-Write PHP script to find the largest number between the three integers

// $num=1;
// $num2=6;
// $num3=44;

// if($num>$num3 & $num > $num2 ){
//     echo "$num is the largest number";
// } elseif ($num2>$num3 & $num2 > $num) {
//     echo "$num2 is the largest number";
// } elseif ($num3>$num & $num3 > $num2) {
//     echo "$num3 is the largest number";
// }

//********************************************************************************* */



//Q9- Write php script to make a calculator, the calculator should contain the four main operations 
?>
<!-- 
<html>
<body>
<form action="test.php" method="post">
first number: <input type="number" name= "num1"><br>
second number: <input type="number" name= "num2"><br>
<input type="submit" value="+" name="op">
<input type="submit" value="-" name="op">
<input type="submit" value="*" name="op">
<input type="submit" value="/" name="op">
</form>

</body>
</html> -->

<?php

// if( isset($_POST["op"])){

//     $num1= $_POST["num1"];
//     $num2=$_POST["num2"];
//     $op=$_POST["op"];
//     $result="";
    
//     if ($op == "+") {
//         $result= $num1 + $num2;
//         echo $result;
//     }elseif($op == "-"){
//         $result= $num1-$num2;
//     }elseif($op == "*"){
//         $result= $num1*$num2;
//     }elseif($op == "/"){
//         $result= $num1/$num2;
//     }
//     echo   "answer is $result";
// }
//********************************************************************************* */



////////////////////////////////////////////////////////////////////   ARRAY   ////////////////////////////////////////////////////////////////

//Q1-Write a script to generate the following paragraph 
 // "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
// The words 'red', 'green' and 'white' should come from $colors array.
// $colors = array('white', 'green', 'red') 


// $colors = array("red", "green", "white");

// echo "The memory of that scene for me is like a frame of film forever frozen at that moment:
//     the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky.
//     The new president and his first lady.
//     - Richard M. Nixon";


//********************************************************************************* */

//Q2-Write a PHP script that will display the colors as unordered list :

// $colors = array("red", "green", "white");

// echo "• $colors[1]"."<br>";
// echo "• $colors[0]"."<br>";
// echo "• $colors[2]"."<br>";

//********************************************************************************* */



//Q3-Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 

// $cities = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
// "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
// "Finland"=>"Helsinki", "France" => "Paris",
// "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
// "Germany" => "Berlin", "Greece" => "Athens",
// "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
// "Portugal"=>"Lisbon", "Spain"=>"Madrid") ;
// asort($cities) ;
// foreach($cities as $country => $capital)
// {
// echo "The capital of $country is $capital"."<br>" ;
// }

//********************************************************************************* */

//Q4-color = array (4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to display the first element of the above array. 

// $color = array (4 => 'white', 6 => 'green', 11=> 'red');
// echo $color[4];
//********************************************************************************* */

//Q7-Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures 

// $temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
// sort($temps);
// $sum;
// for ($i=0; $i < count($temps) ; $i++) { 
//     $sum= $sum + $temps[$i];
// };

// // echo $sum . "<br>";
// $avg=$sum/count($temps);
// echo "Avg temp is : ". $avg . "<br>";

// echo "lowest 5 temps are : ". "<br>";

// for ($i=0; $i < 4 ; $i++) { 
//     echo $temps[$i] . "<br>";
// };
// echo "highest 5 temps are : ". "<br>" ;
// for ($i=(count($temps)-5); $i < count($temps) ; $i++) { 
//     echo $temps[$i] . "<br>";
// };



//********************************************************************************* */

//Q9-Write a PHP function to change the following array's and convert all the strings to upper case. 

// $colors = array("red","blue", "white","yellow");
// $colors = array_flip($colors);
// print_r (array_change_key_case($colors,CASE_UPPER));

//********************************************************************************* */

////////////////////////////////////////////////////////////////////   LOOPS   ////////////////////////////////////////////////////////////////

//Q1-Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the start and end position. 

// for ($i=1; $i <= 10 ; $i++) { 
//     if ($i < 10) {
//     echo "$i-";    
//     }else{
//         echo $i;
//     }
    
// }
//********************************************************************************* */

//Q3-Create a script to generate the following pattern, using the nested for loop. 
 
// Expected Output:
// A A A A A 
// A A A B B 
// A A C C C 
// A D D D D 
// E E E E E




// for($i=0 ; $i <5 ; $i++){
//     echo "<pre>";
//     for ($j=0; $j <5 ; $j++) {
        
//         if($i==0 || $i==1 && $j<=2 || $i==2 && $j<=1 || $i==3 && $j==0){
//         echo "A ";
//         }
//         if($i==1 && $j>=3 ){
//             echo "B ";
//         }
//         if($i==2 && $j>=2 ){
//             echo "C ";
//         }
//         if($i==3 && $j>=1 ){
//             echo "D ";
//         }
//         if($i==4 ){
//             echo "E ";
//         }
        
//     }
//     echo "<pre/>";
// }



//********************************************************************************* */

//Q5-Create a script to generate the following pattern, using the nested for loop. 
 
// Expected Output:
 
// 1 0 0 0 0 
// 0 2 0 0 0 
// 0 0 3 0 0 
// 0 0 0 4 0 
// 0 0 0 0 5




// for($i=0 ; $i <5 ; $i++){
//         echo "<pre>";
//         for ($j=0; $j <5 ; $j++) {
//             if( $i==$j ){
//                 echo $i+1 ." ";
//             }else{
//                 echo 0 ." ";
//             }
//         }
//         echo "<pre/>";
        
//     }


//********************************************************************************* */



// function isPrime(int $number): bool
// {
//     if ($number == 1) {
//         return false;
//     } elseif ($number == 2) {
//         return true;
//     }
//     for ($i = 2; $i < $number; $i++) {
//         if ($number % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }
// $result = isPrime(1);

// print($result);






?>


