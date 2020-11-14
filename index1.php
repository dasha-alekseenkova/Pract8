<!DOCTYPE html>
<html>
<body>

<?php
define("N",10);
define("M",5);
$array = [];
 

 
for ( $i = 0; $i < N; $i++ ) {
    for ($j = 0; $j < M; $j++) {
        $array[$i][$j] = rand( 1, 9 );        
    }
}
 

 
echo "<table>";
foreach ($array as $result){
        echo "<tr>";
        foreach ($result as $rValue){
                echo "<td>{$rValue}</td>";
        }
        echo "</tr>";
}
echo "</table>";
 
?>
</body>
</html>

