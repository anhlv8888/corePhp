<?php
    $arr1 = array('1','2','number'=>'3');
    $arr2 = array('a1','a2','a3','a4','a5');
    $arr3 = array('v1'=>'leanh','V2'=>'quocanh','v3'=>'quanganh');
    $str = "cam-tao-mit-dua";

    echo "Current:".current($arr2) ."<br>";  // lay phan tu hien tai cua mang
    echo "Next : ".next($arr2)."<br>"; // lay gia tri ben canh
    echo "Previous:".prev($arr2)."<br>"; // truy xuat phan tu truoc pt hien tai
    echo "reset:".reset($arr2)."<br>"; // quay ve pt dau tien
    echo "end:".end($arr2)."<br>"; // truy xuat phan tu cuoi cung cua mang

            // array to special String
    echo '<br>';
    echo serialize($arr1);
    echo '<br>';
        // From special string to Array
    print_r( unserialize(serialize($arr1)));
    echo "<br>";
        // xao tron phan tu trong mang
    shuffle($arr3);
    var_dump($arr3);
        // create array from exits valiable
    echo "<br>";
    $name = "minhphuong";
    $age = 100;
    $newArr = compact('name','age');
    print_r($newArr);
        // create array by range()
    echo "<br>";
    print_r(range(1,10,2));
        // create array by array_combine()
    echo '<br>';
    $key = array('id','name','age');
    $value = array('001','levietanh','20');
    print_r(array_combine($key,$value));
?>