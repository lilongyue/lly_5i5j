<?php
	$arr = [1,3,4,5];
    $brr = [2,4,5,7];
    //in_array();
    if(in_array('1',$arr)){
        //echo '存在数组';
    }
    //array_merge
    $crr = array_merge($arr,$brr);
    //print_R($crr);
    //array_unique();
    //print_R(array_unique($crr));
    //array_keys
    //print_R(array_keys($crr));
    //array_values()
    //print_R(array_values($crr));
    //array_push 数组尾部追加元素(可追加多个)
    array_push($arr,999,111,777);
    print_R($arr);die;
    //array_unshift 数组头部增加元素(可追加多个)
    array_unshift($arr,'a','b');
    //print_R($arr);
    //array_pop 去掉数组最后一个元素
    array_pop($arr);
    print_R($arr);
    