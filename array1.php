<?php
$abc = array(
    'sv1'=> array('name' => 'vietanh',
        'sex'=>1,
        'score'=>array(3,4,5)
    ),
    'sv2'=> array('name' => 'quocanh',
        'sex'=>0,
        'score'=>array(3,4,10)
    ),
    'sv3'=> array('name' => 'minhanh',
        'sex'=>0,
        'score'=>array(1,4,10)
    )
);
$test = array('a'=>'PHP','a2'=>'PHP2','a3'=>'PHP3','a4'=>'PHP4','a5'=>'PHP5' );
//    print_r($test);
//   print_r(array_values($test)); //get value
//    print_r( array_keys($test) );   //get key
//    print_r(array_pop($test)); //lấy phần tử cuối cùng, và cắt đi phan tu
    //print_r(array_shift($test)); // lay gia tri dau tien cua arraydo, và cat di phan tu do
  //  print_r($test);
   // array_unique() // lay ra gia tri trong mang khong trung nhau
//    unset($test[0],$test[2]) // xoa bo phan tu o vi tri bat ki nao trong mang
    $push =  array_push($test,'levietanh') ; // them phan tu cuoi mang
    print_r($test);
    $unShift = array_unshift($test,'doanh'); // them phan tu dau mang
    print_r($unShift);
    echo '<br>';
    $reverse = array_reverse($test); // đảo ngược (reverse) array
    print_r($reverse);
    echo '<br>';
    $flip = array_flip($test); // change key to value and value to key
    print_r($flip);
    echo '<br>';
    $test1 = array(2,4,5,6,3,6,1,7,5);
    echo array_sum($test1); // tính tổng
    echo '<br>';
    echo max($test1) ."<br>"; // gia tri max trong array
    echo min($test1) ."<br>"; // gia tri min trong array
    print_r(array_count_values($test1)) ;
?>