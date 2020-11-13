<html>
<head>
<title>Test</title>
</head>
<body>
<?php
// function search($s, $row, $col){

// for($i=0;$i<$row;$i++){
// for($j=0;$j<$col;$j++)
// echo $s[$i][$j] . " ";
// echo "<br>";
// }
// }

// $a = array();

// $r = rand(1,10);
// $c = rand(1,10);

// for($i=0;$i<$r;$i++)
// for($j=0;$j<$c;$j++)
// $a[$i][$j]= rand(1,10);


// arr($a, $r, $c);
$arr = array(1, 2, 3, 4, 5, 6);
for($i = 0; $i < $snum; $i++)
{
   $symbol = $arr[rand(0, count($arr)];
   if($i % 3)
   {
      echo"{$symbol}</ br>";
   }
   else
   {
      echo $symbol;
   }
}
echo"<br>"
?>
</body>
</html> 