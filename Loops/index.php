<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise #4</title>
</head>
<body>
    <?php
//  (1) Create Script that displays 1-2-3-4-5-6-7-8-9-10 on one line,there will not be dash(-) before first number and after last number.
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i < 10) {
        echo "-";
    }
}
echo "<br>"."<br>"."<br>";

// (2)  Create a script using a for loop to add all the integers between 0 and 30 and display the total. 
$sum = 0;
for ($i=0; $i<30;$i++){
    if (is_int($i) == true){
        $sum=$sum+$i;
    }
}
echo $sum;
echo "<br>"."<br>"."<br>";


// (3)  Create a script to generate the following pattern, using the nested for loop. 
$str2 = 'A';
for($i=1;$i<=5;$i++){
    for($j=5-$i;$j>0;$j--)
        echo "A ";
        for($k=1;$k<=$i;$k++)
            echo "$str2 ";
    echo "<br>";
    $str2++;
}
echo "<br>"."<br>"."<br>";


// (4) Create a script to generate the following pattern, using the nested for loop. 
$str3 = 1;
for($i=1;$i<=5;$i++){
    for($j=5-$i;$j>0;$j--)
        echo "1 ";
        for($k=1;$k<=$i;$k++)
            echo "$str3 ";
    echo "<br>";
    $str3++;
}

echo "<br>"."<br>"."<br>";

// (5) Create a script to generate the following pattern, using the nested for loop. 
$num3 = 1;
for($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++)
    if($i == $j){
        echo "$num3 ";
    }
    else{echo "0 ";}
    echo "<br>";
    $num3++;
}

echo "<br>"."<br>"."<br>";

// (6) Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number. 
$num4 =5;
$factorial =1;
for ($i=$num4;$i>=1;$i--){
    $factorial =$factorial*$i;
}
echo $factorial;

echo "<br>"."<br>"."<br>";


// (7) Write a program to calculate and print the Fibonacci sequence using a for loop. Fibonacci is a series of numbers where a number is the sum of previous two numbers. 
echo "0".",";
echo "1".",";
$x=0;
$y=1;
for($i=0; $i<7; $i++){
    $z=$x+$y;
    echo $z.",";
    $x=$y;
    $y=$z;
}

echo "<br>"."<br>"."<br>";



// (8) Write a program which will count the "c" characters in the text 
$text = "Orange Coding Academy";
$count=0;
     for($i=0;$i<strlen($text);$i++){
       if(strtolower($text[$i]) ==="c"){
           $count++;
       }
     }
     echo $count;

echo "<br>"."<br>"."<br>";


// (9) Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cell spacing="Opx" to the table tag. 
echo "<table style='border :1px;cellpadding:3px; cellspacing:0px'><br/>";
for($col=1;$col<7;$col++){
    echo "<tr>";
     for($num=1;$num<6;$num++){
         $result=$col*$num;
         echo "<td style='padding: 3px;  border: 1px solid black;'>$col * $num = $result </td>";
 }  
 echo "</tr>";

}
echo "</table>";
echo "<br>"."<br>"."<br>";



// (10) Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz". 
for($i=1;$i<=50;$i++){
    if($i % 5 ==0 && $i % 3 == 0 ){
        echo "FizzBuzz ";
    }
    elseif($i % 3 == 0){
        echo "Fizz ";
    }
    elseif($i % 5 == 0){
        echo "Buzz ";
    }
    else{
    echo $i." ";}
}
echo "<br>"."<br>"."<br>";


// (11) Write a PHP program to generate and display the first n lines of a Floyd triangle 
for($i=1;$i<=5;$i++){
    if($i==1){echo "1"."<br>";}
    if($i==2){echo "2 3"."<br>";}
    if($i==3){echo "4 5 6"."<br>";}
    if($i==4){echo "7 8 9 10"."<br>";}
    if($i==5){echo "11 12 13 14 15"."<br>";}
}

echo "<br>"."<br>"."<br>";

// (12) Write a PHP program to print the following pattern. 

?>
</body>
</html>