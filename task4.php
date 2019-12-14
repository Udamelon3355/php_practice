<?php

function f1($a){
    return $a *2;
}
echo f1(1000);
echo "\n";

function f2($a,$b){
    return $a + $b;
}
echo f2(10,20);
echo "\n";

function f3($arr){
    $result = 1;
    foreach($arr as $a){
        $result = $result * $a;
    }
    return $result;
}
echo f3([1,3,5,7,9]);
echo "\n";

function f4($arr){
    $result = 1;
    foreach($arr as $a){
        if ($result < $a){
            $result = $a;
        }

    }
    return $result;
}
echo f4([1,3,5,17,9]);
echo "\n";


$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
// あるいは strtotime() を使用します
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";

echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997))."\n";
echo date("M-d-Y", mktime(0, 0, 0, 13, 1, 1997))."\n";
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998))."\n";
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 98))."\n";

