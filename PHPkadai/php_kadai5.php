<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題5</title>
 </head>

 <body>
     関数課題１<br><br>
      <?php

      include 'php_kadai5_function.php';
      $a=6; $b=5;
      echo(sum($a,$b).'<br/>');
      echo(mul($a,$b).'<br/>');
      echo(div($a,$b).'<br/>');
      echo(sub($a,$b).'<br/>');
      echo(num($a,$b).'<br/>');
      ?><br><br>

      関数課題2<br><br>

      <?php

      require_once 'php_kadai5_function.php';

      $a=$b;$b=&$a; 
      echo(sum($a,$b).'<br/>');
      echo(mul($a,$b).'<br/>');
      echo(div($a,$b).'<br/>');
      echo(sub($a,$b).'<br/>');
      echo(num($a,$b).'<br/>');
      ?><br><br>
     








    </body>
</html>