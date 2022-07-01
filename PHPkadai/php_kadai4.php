<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題4</title>
</head>
<body>

 配列課題<br><br>

 (1)<br>

 <?php
    $a=array("月曜日","火曜日","水曜日","木曜日","金曜日");
    echo $a[0];
    echo $a[1];
    echo $a[2];
    echo $a[3];
    echo $a[4];
  ?><br><br>
 (2)<br>
  <?php
    $a=array(
      'apple'=>'りんご',
      'grape'=>'ぶどう',
      'lemon'=>'レモン',
    );
    foreach ($a as $b=> $c){
     print($b.':'.$c."\n");
    };
      
  ?><br><br>

  (3)1<br>

  <?php
   $a=array("月曜日","火曜日","水曜日","木曜日","金曜日");
   echo $a[0];
 
  ?><br><br>

  (3)2<br>
  <?php
    $a=array(
      "apple=>りんご",
      "grape=>ぶどう",
      "lemo=>'レモン",
    );
     
    print $a [0];
         
  ?><br><br>

  (4)1<br>

  <?php
    $a=array("月曜日","火曜日","水曜日","木曜日","金曜日");
    $count=count($a);
    echo $count;

  ?><br><br>

  (4)2<br>

  <?php
    $a=array(
      "apple=>りんご",
      "grape=>ぶどう",
      "lemo=>'レモン",
    );
    $count=count($a);
    echo $count;
  ?><br><br>

    (5)<br>
    <?php
     $array = [
       '赤'=>['リンゴ','イチゴ','トマト'],
       '緑'=>['メロン','キュウリ','ピーマン'],
       '黄'=>['バナナ','パイナップル','レモン']
      ];
      foreach($array as $value){
     echo $value[0];
     echo $value[1];
     echo $value[2];
     
      }
       
    ?><br><br>



  </body>
</html>