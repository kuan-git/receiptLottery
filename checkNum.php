<?php
include "dsnpdo.php";
include "kMatch.php";

$sql = "SELECT `num`  FROM `receipt` WHERE `year` = 2019 && `month` BETWEEN 9 and 10 && `num` LIKE '%789'";
$data=$pdo->query($sql)->fetchAll();

print_r($data);
echo "<br>";

foreach ($data as $k => $v) {
    $n=$v['num'];

    $prize=kMatch(23456789,$n);

    echo $prize."--".$n."<br>";

}


?>