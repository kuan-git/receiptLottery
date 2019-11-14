<?php
    $win="12345678" ;
    $num="12345678";
    
    // if(strlen($win)!=8 && strlen($win)!=8){
    //     echo "字數不對! 請檢查 需符合8位數。";
    //     $match=0 ;
    //     for ($i=4; $i>=0; $i--) { 
            
    //         if (substr($win,$i,1)==substr($num,$i,1)) {
    //             $match++ ;
    //         }$i=-1;

    //     }echo "符合的有 ".$match." 個字";
    // }
//      $match=0 ;
// if(strlen($win)!=8 && strlen($win)!=8){
//     echo "字數不對! 請檢查 需符合8位數。";
//     }
// else{   
//         for ($i=4; $i<=8; $i++) { 
            
//             if (substr($win,-$i,1)==substr($num,-$i,1)) {
//                 $match++ ;
//             }else{$i=9;}

//         }echo "符合的有 ".$match." 個字";
// }
include "kMatch.php";
$n1=87654321;
$n2=77754321;
$n3=[11154321,11654321,11114321,11111321];

$prize=kMatch($n1,$n2);




switch ($prize) {
    case 8:
      echo "恭喜妳中頭獎! ".$n2;
      break;
    case 7:
      echo "恭喜妳中 二獎! ".$n2;
      break;
    case 6:
      echo "恭喜妳中 三獎! ".$n2;
      break;
    case 5:
      echo "恭喜妳中 四獎! ".$n2;
      break;
    case 4:
      echo "恭喜妳中 五獎! ".$n2;
      break;
    case 3:
      echo "恭喜妳中 六獎! ".$n2;
      break;
    
  }
?>