<?php
	$str = 'abcd';
	//strstr() 函数搜索一个字符串在另一个字符串中的第一次出现。
	if(strstr($str,'a')){
		//echo 'aaa';
	}
	//strpos 函数返回boolean值.FALSE和TRUE.strpos在执行速度上都比以上两个函数快,另外strpos有一个参数指定判断的位置
	if(strpos($str,'a') !==false){
		echo 'aaa';
	}
	//explode() 函数使用一个字符串分割另一个字符串，并返回由字符串组成的数组。
	$str = "www.runoob.com";
	print_r (explode(".",$str));
	//echo substr('abc',0,1);

	//echo strtr("Hilla Warld","ia","eo");

	//echo date('y-m-d',strtotime('-1 day'));
	