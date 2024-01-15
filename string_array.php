<?php

//1、str_split(): 将字符串转换为数组
//$str = "Hello Friend";
//$arr1 = str_split($str);
//$arr2 = str_split($str, 3);
//print_r($arr1);
//print_r($arr2);

//2、implode() 将一个一维数组的值转化为字符串
//$array = array('lastname', 'email', 'phone');
//$comma_separated = implode(",", $array);
//echo $comma_separated; // lastname,email,phone

//3、explode(): 使用一个字符串分割另一个字符串，返回数组
//$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
//$pieces = explode(" ", $pizza);
//print_R($pieces);

//4.substr_count(): 计算子串在字符串中出现的次数
//echo substr_count("This is a test", "is"); // 2

//5.strlen(): 获取字符串的长
//echo strlen("This is a test");

//6.substr_replace 把字符串的一部分替换为另一个字符串

//7.str_repeat 把字符串重复指定的次数
//echo str_repeat("-=", 10);//-=-=-=-=-=-=-=-=-=-=

//8.substr() 返回字符串的一部分（截取字符串）
//echo substr("abcdef", 0, 1); //a
//echo substr("abcdef", 1, 1); //b
//$arr = [];
//$str = '312654';
//for($i=0;$i<strlen($str);$i++){
//    array_push($arr,substr($str, $i, 1));
//}
//sort($arr);
//print_R($arr);

//$rest = substr("abcdef", -1);    // 返回 "f"
//$rest = substr("abcdef", -2);    // 返回 "ef"
//$rest = substr("abcdef", -3, 1); // 返回 "d"
//$rest = substr("abcdef", 0, -1);  // 返回 "abcde"
//$rest = substr("abcdef", 2, -1);  // 返回 "cde"
//$rest = substr("abcdef", 4, -4);  // 返回 ""; 在 PHP 8.0.0 之前，返回 false
//$rest = substr("abcdef", -3, -1); // 返回 "de"

//9.strstr() 返回字符串在另一字符串中第一次出现的位置到结束的所有字符串，区分大小写
//$email  = 'name@example.com';
//$domain = strstr($email, '@');
//echo $domain; // 打印 @example.com
//$user = strstr($email, '@', true);
//echo $user; // 打印 name

//10.trpos() 计算字符串在另一字符串中第一次出现的位置，区分大小写