<?php
    $arr = array('a','b','c','d','e');
    $arr1 = array('ag','bg','cg','dg','eg');
    $arr2 = array(2,5,25,6,67,23,45,80);
    $arr3 = array('v1'=>'hung','v3'=>'quocanh','v2'=>'quanganh','a1');
        // lay cac phan tu trong array
    $newArr = array_slice($arr,2); // =(s,d,e) 2 la vi tri key =2
    $newArr = array_slice($arr,1,3); // b,c,d
    $newArr = array_slice($arr,1,0); // null
    $newArr = array_slice($arr,1,0); // null
    $newArr = array_slice($arr,2,2,true); // true la du nguyen key,false la tao array moi

    print_r($newArr);

    echo "<br>";
       // lay cac phan tu trong array va xoa di phan tu do va co the thay the bang array
//    $newArr1 = array_splice($arr1,3,1);
    $newArr1 = array_splice($arr1,3,1,array(5,6));
    print_r($newArr1);
    echo "<br>";
    print_r($arr1);
        // sap xep theo value of array
    echo "<br>";
    sort($arr2); // sap xep value tang dan
    print_r($arr2);
    rsort($arr2);
    echo "<br>";
    print_r($arr2);
        // sap xep theo key of array
echo "<br>";
    ksort($arr3); // sap xep key tang dan
    print_r($arr3);
    echo "<br>";
    krsort($arr3);
    print_r($arr3);

?>