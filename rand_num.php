<?php
include "dsnpdo.php";

$count=6;
for ($i=0; $i < $count; $i++) { 
    $num=rand(10000000,99999999);
    $money=rand(10,500);
    $sql="insert into `receipt`(`id`,`year`,`month`,`num`,`money`)values(null,'2019','11','".$num."','".$money."')";


    $pdo->exec($sql);
}
echo "---------------------------<br>";
// $sql="select * from receipt ";
// $rows=$pdo->query($sql);
// $data=$rows->fetch();
// print_r($data['num']);
// echo "<br>";
 
// $data=$rows->fetch();
// print_r($data['num']);
// echo "<br>";
 
// $data=$rows->fetch();
// print_r($data['num']);
// echo "<br>";


?>