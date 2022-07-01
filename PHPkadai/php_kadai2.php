<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題2</title>
</head>
<body>



 式と演算子課題（２） <br>
 (1)<br>
  <?php
   $a=2+4-5;
   echo $a; 

  ?>

 <br>
 <?php
    $b=2+4-5;
    echo $b; 
  ?><br>

  <?php
    $c=4*5/2;
    echo $c; 

  ?><br>

  <?php
    $d=5/2*4;
    echo $d; 

  ?><br><br>

  (2)<br>

  <?php
    $a=2*3+4+1;
    echo $a; 
  ?><br>

  <?php
    $a=2*(3+4+1);
    echo $a; 
  ?><br><br>

  (3)<br>
    
  <?php
   $username="Admin";
   if($username == "Admin") {
      echo ("Welcome to the admin page.");
    } else {
      echo ("Welcome to the user page.");
    }
    
  ?><br><br>

  <?php
   $username="Admi";
   if($username == "Admin") {
      echo ("Welcome to the admin page.");
    } else {
      echo ("Welcome to the user page.");
    }
    
  ?><br><br>


  (4)<br>
  <?php
    $a=["b","a","c"];
    foreach($a as $value){
     print $value;
    }
  ?><br><br>

  (5)<br>
  <?php
    $a=["b","a","c"];
      sort($a);
      foreach($a as $value){
        print$value;
      }
  ?><br><br>

  (6)<br>

  <?php
    $number=[[1,2,3,],
    [4,5,6]];
      
    foreach($number as $number){
      echo $number[0]."<br>";
      echo $number[1]."<br>";
      echo $number[2]."<br>";

    }
      
  ?><br><br>
  
<?php
 
 $number=[[1,2,3],[4,5,6,]];
 $i=0;
 $j=0;
 
 while($i<2){
   while($j<3){
    echo $number[$i][$j]."</br>";
    $j++;
     
    } 
    $i++; 
    $j=0;
  }

?>

</body>
</html>