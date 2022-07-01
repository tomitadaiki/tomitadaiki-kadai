<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題3</title>
</head>
<body>

 制御文課題<br><br>

 (1)<br>
 <?php
   $a= rand(1,3);
   if($a>2){
     echo $a."->";
     echo "3です";
    } 
   elseif($a==2){;
     echo  $a."->";
     echo "2です";
    }
   else{
     echo $a."->";
     echo "3でない";
    }
 ?><br><br>
 
 (2)<br>
 <?php
   $num1=rand(1,3);
   $num2=rand(1,5);
   $num3=$num1 > $num2 ? 'num1はnum2より大きい' : 'num1はnum2より小さい';
   echo $num3;
  ?>

 (3)<br>
 
 <?php
    $a=rand(1,4);
      switch($a){
        case'1':
        print'1';
        break;
        case'2':
        print'2';
        break;
        case'3':
        print'3';
        break;
        case'4':
        print'4';
        break;
     }
 ?><br><br>

 (4)<br>
 <?php
   $a=rand(1,4);
    switch($a){
      case'1':
      print'1';  
      case'2':
      print'2'; 
      case'3':
      print'3';  
      case'4':
      print'4';
    }
 ?><br><br>

 (5)<br>
 <?php
    $a=rand(1,6);
    switch($a){
     case'1':
     print'1';
     break;
     case'2':
     print'2';
     break;
     case'3':
     print'3';
     break;
     case'4':
     print'4';
     break;
     default :
     print 'error';
    }
  ?><br><br>

 (6)<br>
 
 <?php
    $a=rand(1,4);
    switch($a):
    case'1':
    print'1';
    break;
    case'2':
    print'2';
    break;
    case'3':
    print'3';
    break;
    case'4':
    print'4';
    break;
    endswitch 
  ?><br><br>

 (7)<br>
 <?php
    $a=1;
    while($a<=10){
      echo $a;
      $a++; 
    }
  ?><br><br>

 (8)<br>
 <?php
    $a=1;
    do{
      print  'a='.$a.'<br/>';
      $a+=1;
    }while($a<=10);
  ?><br><br>

 (9)<br>
 <?php
   for ($counter = -3;$counter<10;$counter++) {  
     if($counter===0){
     break;
    }
    echo 100/$counter;
  }
 
 ?><br><br>

 (10)<br>
 <?php
    for ($counter = -3;$counter<10;$counter++) {  
      if($counter===0){
        continue;
      }
      echo 100/$counter;
    }
 ?><br><br>

 
 

 


</body>
</html>