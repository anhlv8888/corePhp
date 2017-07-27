<?php
    $arr1 = array('1','2','number'=>'3');
    $arr2 = array('a1','a2','a3','a4','a5','v1'=>'leanh');
    $arr3 = array('v1'=>'hung','V2'=>'quocanh','v3'=>'quanganh','a1');

    print_r($arr1);
    echo "<br>";
    print_r($arr2);
    echo "<br>";
    print_r($arr3);
    echo "<br>";
    echo "so sanh khac nhau";
echo "<br>";
        // so sanh khac nhau ( Compare diffirent)
    print_r(array_diff($arr2,$arr3)) ;
    // array_diff($arr2,$arr3) so sanh 2 mang va tra ve mang bao gom phan tu co gia tri $arr2 nhung khong ton tai $arr3
    echo "<br>";
    print_r(array_diff_key($arr2,$arr3));
// array_diff_key($arr2,$arr3) so sanh 2 mang va tra ve mang bao gom phan tu co key $arr2 nhung khong ton tai $arr3
    echo '<br>';
    print_r(array_diff_assoc($arr3,$arr2));
// array_diff_assoc($arr2,$arr3) so sanh 2 mang va tra ve mang bao gom phan tu co key,gia tri $arr2 nhung khong ton tai $arr3
            // so sanh giống nhau

    echo "<br>";
    echo "so sanh giong nhau";
    echo "<br>";
    print_r(array_intersect($arr2,$arr3));
    echo "<br>";
    print_r(array_intersect_key($arr2,$arr3));
    echo '<br>';
    print_r(array_intersect_assoc($arr2,$arr3));



?>