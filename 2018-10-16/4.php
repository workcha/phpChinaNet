<?php
/**
 * Created by PhpStorm.
 * User: chaohui
 * Date: 2018/10/16
 * Time: 18:58
 * Desc: 字符串转义与还原
 * address: https://mp.weixin.qq.com/s/26TBrLPRSbUm_9ouzlDG4Q
 */
$str = "['name' => '张三', 'age' => 19]";
$a = addslashes($str);
echo $str . "<br>";
echo $a . "<br>";
$b = stripcslashes($a);     //还原转义
echo $b;


