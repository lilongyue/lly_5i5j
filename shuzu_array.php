<?php

$a = 'b';

$arr = [1,2,3,4];
$brr = ['a','b','c','d'];

$array = array ("id" => 1, "name" => "name1");

//1、键值函数 array_values()返回数组元素值，组成一个新的索引数组
//print_r(array_values ($array));

//2、array_keys()返回数组所有键名，组成一个索引数组
//print_r(array_keys ($array));

//3、in_array()检查数组中是否存在某个值
// if(in_array($a,$brr) == true){
	// echo '存在'.$a;
// }
// if(in_array($a,$arr) == false){
	// echo '不存在'.$a;
// }

//4、array_key_exists()可以检查给定的键名或索引是否存在于数组中，isset()也可以，但对null值不会返回TRUE
// if(array_key_exists($a,$arr) == true){
	// echo '$arr存在键名或索引'.$a;
// }else{
	// echo '$arr不存在键名或索引'.$a;
// }

//5、array_flip()反转数组中的键和值
// $trans = array ("a" => 1, "b" => 1, "c" => 2,"d"=>2);
// $trans = array_flip ($trans);
// print_r($trans);

//6、count()统计数组中的元素数目，或对象中的属性个数
//echo count($arr);

//7、array_count_values()统计数组中所有值出现的次数，返回的数组中键名是原数组的值，键值是该值在原数组中出现的次数
// $array = array (1, "hello", 1, "world", "hello");
// print_r(array_count_values ($array));

//8、array_unique()删除数组中重复的值，并返回没有重复值的新数组
//$input = array ("a" => "green", "red", "b" => "green", "blue", "red");
//print_r($input);
//$result = array_unique ($input);
//print_r($result);

//10、排序函数 根据数组中元素从小到大sort()或从大到小rsort()排序
// sort($arr);
// print_r($arr);
// rsort($arr);
// print_r($arr);

//11.array_merge()把一个或多个数组合并为一个数组，键名后面覆盖前面，如果是索引数组则会重新索引，用+也可以合并数组，但后面不会覆盖前面
//$array1 = array ("color" => "red", 2, 4);
//$array2 = array ("a", "b", "color" => "green", "shape" => "trapezoid", 4);
//$result = array_merge ($array1, $array2);
//print_r($result);
//用+也可以合并数组，但后面不会覆盖前面
//$result = $array1+$array2;
//print_r($result);

//12.array_unshift 在数组开头插入一个或多个单元
//$queue = array ("orange", "banana");
//array_unshift ($queue, "apple", "raspberry");
//print_r($queue);

//13.array_chunk 将数组分割成多个数组
//$input_array = array('a', 'b', 'c', 'd', 'e');
//print_r(array_chunk($input_array, 2));
//print_r(array_chunk($input_array, 2, TRUE));

//14.array_diff -- 计算数组的差集
//$array1 = array ("a" => "green", "red", "blue", "red");
//$array2 = array ("b" => "green", "yellow", "red");
//$result = array_diff ($array1, $array2);
//print_r($result);

//15.array_rand --  从数组中随机取出一个或多个单元
//$input = array ("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
//$rand_keys = array_rand ($brr, 2);
//print_r($rand_keys);

