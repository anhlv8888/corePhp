<?php
                // bien toan cuc va bien cuc bo
    // bien toan cuc (global) la khai bao ben ngoai tat ca cac ham
    // bien cuc bo la khai bao trong ham chi co the truy cap trong ham do

//
    $value = "le anh";
    function abc($a){
        // cach 1
        global $value;
        echo $value . '<br>';
        //cach 2
//        echo $GLOBALS['value'];
        return $a;
    }
    $b  = abc('hello');
    echo  $b . '<br>';
                // Tham chieu va tham tri
    // tham tri  khi truyen bien vao ham , khi ket thuc ham gia tri cua bien truyen vao khong thay doi
    // (&) tham chieu khi truyen bien vao ham , khi ket thuc ham gia trij cua bien se thay doi tuy vao phan su ly cua ham do
        function pow2(&$n1, $n2){
            $result = 0;
            $n1 *= $n1;
            $n2 *= $n2;
            $result = $n1 + $n2;
            return $result;
        }
    $a1 = 2;
    $a2 =4;
    $number = pow2($a1,$a2);
    echo $number . $a1 .$a2;
            // require and include
    // require sẽ ngừng thực hiện chương trình nếu lỗi
    // include sẽ thực hiện tiếp chương trình nếu có lỗi
    // require_once() khi chay no se check class do ton tai chua, neu co thif no khong cho them vao


?>