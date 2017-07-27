<?php
    // get data type in a variable
    $a = "lê vie anh ";
    var_dump($a);
    echo gettype($a);
    // ep kiểu
    $number = 12.34;
    echo (int)$number;
    settype($number,"integer");
    echo "<br>";
                // kiểm tra du lieu cua mot bien
//    is_numeric();
//    is_float();
    echo is_sritng('fdafa'); //get result is 1 or null
//    is_array();
//    is_object();
    echo "<br>";
                // define constant
    define('vietanh','le viet anh');
    echo vietanh;
echo "<br>";
    // x++
    echo '$x++ tăng $x lên một đơn vị,sau đó trả về giá trị $x'."<br>";
    echo '++$x trả về giá trị của $x, sau đó tăng x lên một đơn vị'.'<br>';
    $x = 10;
    $y = $x++;
    echo "y:".$y;
    echo "x:".$x;
echo "<br>";
//                So sánh <,>,==,===,!=,!===
    echo '=== la so sanh tuyet doi, so sanh ca kieu  du lieu';
    echo (is_string("avd")) ? "chuoi" : "khong phai chuoi";
    echo " nhay don xuat toan bo noi dung trong chuoi, nhay doi tim bien va xuat gia tri cua bien";
    // toc do cua nhay don nhanh hon nhay doi

?>