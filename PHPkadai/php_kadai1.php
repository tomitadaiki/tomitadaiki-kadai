<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題1</title>
</head>
<body>
  
 式と演算子課題（1） <br>
 (1)<br>
  <?php
     $var1=100;
     if($var1==100){
        echo"同じ文字列";
     }
    ?><br><br>
 (2)<br>
   <?php
     $name1="Tomita";
     $name2="Daiki";
     echo $name1;
	 echo $name2;
	 
    ?><br><br>
 (3)<br>
    <?php
     $a=2022;
     $b='年';
     $c=$a.$b;

     echo $c;
    ?><br><br>
 (4)1<br>
  <?php
     define("TAX",1);
     $a=5;
     $answer=TAX+$a;
     print'1+5='.$answer;
    ?><br><br>
 (4)2<br>
    <?php
      const COSTANT ='Hello';
      echo COSTANT ;
      ?><br><br>
 (5)<br>
    <?php
    echo"行番号".__LINE__."<br/>";
    ?><br><br>
 (5)<br>
    <?php
    echo basename ('C:\xampp\htdocs\index.php');
    ?><br><br>
 (6)<br>
    <?php
    $a=300;
    $answer=$a/360;
    echo $answer;

    ?><br><br>
 (7)<br>
    <?php
      $a=5;
      echo $a++."<br>\n";
      echo $a;
      
    ?><br><br>
 (8)<br>
    <?php
    $a=5;
    echo $a--."<br>\n";
    echo $a;
    ?><br><br>
 (9)<br>
    <?php
    $a=3;
    echo ++$a."<br>\n";
    echo $a++."<br>\n";
    echo $a;

    ?><br><br>
 (10)<br>
   <?php
   $a=3;
   $b=2;
   $c=$a+$b;
   echo $c;
   ?><br><br>
 (11)<br>
   <?php
   $a=1234;
   $str=(STRING)$a;
   var_dump($str);
   

   ?><br><br>
 (12)<br>
  <?php
  $locations=3;
  $c=2 + $locations ;
  print($c);
  ?><br><br>

  
</body>
</html>