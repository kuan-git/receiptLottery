<?php
include "dsnpdo.php";
include "kMatch.php";

$searYear=2019;
$searMonth=7;
$ssp=45698621;
$sp=19614436;
$firp1=96182420;
$firp2=47464012;
$firp3=62781818;
$c1=928;
$c2=899;


$sql="select `num`,`id` from `receipt` where `year` =" .$searYear." && `month` in(".$searMonth.",".($searMonth+1).")";


$data=$pdo->query($sql)->fetchAll();

//print_r($data);
//echo "<br>";


foreach ($data as $k => $v) {
    $n=$v['num'];
    if ($ssp==$n) {
        echo $n."哇!恭喜你中特別獎 1000 萬";
    }else if ($sp==$n) {
        echo $n."哇!恭喜中特獎 200萬";
    }


    $piz[1]=kMatch($firp1,$n);
    $piz[2]=kMatch($firp2,$n);
    $piz[3]=kMatch($firp3,$n);
    $prize=max($piz);


    echo $prize."--".$n."--".$i."<br>";

}


?>