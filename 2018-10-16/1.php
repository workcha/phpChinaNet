<?php
/**
 * Created by PhpStorm.
 * User: chaohui
 * Date: 2018/10/16
 * Time: 18:13
 * desc: 字符串反转的方法
 */

$str = "Hello";
#递归逆输出，每次截取一个字符进入递归，最后一个为最开始结束输出的
function reversall($str){
    if (strlen($str) > 0){
        reversall(substr($str,1));
    }
    echo substr($str,0,1);
    return;
}

#循环从后面开始截取
function reversall2($str){
    for ($i = 1 ; $i <= strlen($str); $i++){
        echo substr($str, -$i, 1);
    }
    return;
}
reversall($str);

#函数逆转函数（自带）
echo strrev($str);