<?php
    $a = 'a1';
    $b = 'b1';
    $c = 'c1';
    $courses = array();
    $courses[] = 'a1';
    $courses[] = 'b1';
    $courses[] = 'c1';
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
    $abc['sv2']['name'] = "samsam"; // thay quoc anh thanh sam
    echo '<pre>';
    print_r($abc['sv2']['name'] . '<br>'); //quocanh
    print_r($abc);
    print_r($courses);
    echo '</pre>';

    if (empty($courses)){
        echo "mang rong";
    }else{
        echo 'khong rong';
    }
    echo '<br>';
    if (!empty($abc)){
        foreach ($abc as $value){
            $name = $value['name'];

            if ($value['sex']  == 1){
                $sex = "Male";
            }else{
                $sex = "FeMale";
            }
            $scores = 0;
            for ($i = 0;$i < count($value['score']);$i++){
                $scores += $value['score'][$i];
            }
            echo $name."/".$sex."/".$scores .'<br>';
        }
    }
?>