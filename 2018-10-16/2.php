<?php
/**
 * Created by PhpStorm.
 * User: chaohui
 * Date: 2018/10/16
 * Time: 18:22
 * desc: 数组去空
 * adress: https://mp.weixin.qq.com/s/lhsLaPlSI8pYCWbxsXoyrQ
 */
$arr = array(' ',1,2,3,' ',5);


#方法一：通过数组函数array_filter来回调过滤数组空元素的函数
#去除之后key值不会改变
print_r(array_filter($arr,"del"));
echo "<br>";
function del($var){
    return (trim($var));
}


#方法二：通过preg_grep去除
#同样没有改变key
#正则匹配可见字符
$ptn = "/\S+/i";
print_r(preg_grep($ptn,$arr));

