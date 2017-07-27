<?php
    $arr1 = array('1','2','number'=>'3');
    $arr2 = array('a1','a2','a3','a4','a5','v1'=>'leanh');
    $arr3 = array('v1'=>'hung','V2'=>'quocanh','v3'=>'quanganh','a1');
    $arr4 = array(2,3,4,5,6);
    $arr5 = array(1,2,3,4,5);
    function myFunction($value,$key,$param){
        echo $key.$param.$value."<br>";
    }
    array_walk($arr3,"myFunction"," : ");
    // array_walk() giong foreach se gui cac gia tri den mot ham de xu ly va nhan ket qua tra ve la mot mang moi
    echo "<br>";

    function test1(&$value,$key,$param= 1){
        $value = $value * $param;
    }
    array_walk($arr4,"test1",3);
    print_r($arr4);
    echo "<br>";
    // array_map() se gui cac gia tri cua mot hay nhieu mang den mot ham nao do,de xu ly va nhan ket qua moi

    function checkNumber($value){
        $result = ($value % 2 == 0) ? "even":"odd";
        return $result;
    }
    $newArr = array_map("checkNumber",$arr4);

    print_r($newArr);
    echo "<br>";

    function multiplieds($n1,$n2){
        $result = $n1 + $n2 ;
        return $result;
    }
    $newArr2 = array_map("multiplieds",$arr4,$arr5);
    print_r($newArr2);

?>