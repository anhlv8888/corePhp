<?php
            // merge 2 array
    $arr1 = array('1','2','3');
    $arr2 = array('a1','s2','d3');
    $arr3 = array('v1'=>'leanh','V2'=>'quocanh','v3'=>'quanganh');
    $str = "cam-tao-mit-dua";
    $merge = array_merge($arr1,$arr2,$arr3); //merge many array to array
    print_r($merge);
    echo "<br>";
            // Random key of array
    print_r(array_rand($arr3,2)) ; //show 2 key random
    echo '<br>';
        // search value from Key
    $search =  array_search('v1',$arr3);
    echo $search;
        // check $key or $value exit in array
    echo '<br>';
    if (array_key_exists('v1',$arr3)){ //check key exits
        echo "key exits";
    }
    echo '<br>';
    if (in_array('leanh1',$arr3)){ // check value exits
        echo 'value exits';
    }else{
        echo "value don't exits";
    }
            // change key thành in hoa or thuong
    echo "<br>";
    print_r(array_change_key_case($arr3,CASE_LOWER)); //in thuong
    echo '<br>';
    print_r(array_change_key_case($arr3,CASE_UPPER)); //inhoa
    echo  '<br>';
            // Change array to string and reverse
    echo $str1 = implode('--',$arr2); // Array to String
    echo '<br>';
    print_r(explode('-',$str)) ; // String To Array
?>