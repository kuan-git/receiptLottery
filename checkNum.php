<?php
include "dsnpdo.php";

$sql = "SELECT `id`,`num`  FROM `receipt` WHERE `year` = 2019 && `month` BETWEEN 9 and 10 && `num` LIKE '%789'";
$data=$pdo->query($sql)->fetchAll();

print_r($data);


?>