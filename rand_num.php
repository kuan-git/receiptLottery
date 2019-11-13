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

// INSERT INTO `receipt` (`id`, `year`, `month`, `num`, `money`) 
// VALUES (NULL, '2019', '9', '34567890', '180'), 
// (NULL, '2019', '9', '12345789', '102'), 
// (NULL, '2019', '10', '98765432', '450'), 
// (NULL, '2019', '10', '87654321', '55'), 
// (NULL, '2019', '10', '87965412', '100'), 
// (NULL, '2019', '10', '23654789', '102');

?>