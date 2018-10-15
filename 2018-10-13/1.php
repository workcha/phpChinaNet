<?php
/**
 * Created by PhpStorm.
 * User: chaohui
 * Date: 2018/10/13
 * Time: 19:11
 * desc: 冒泡算法--php版本
 * thinking: 进行数组长度次循环，每次循环又进行数组长度-1次的比较
 * 手工操作：
 * 第一次循环(所有比较取出最大值)结果：6,2,3,4,8,5,9
 * 第二次结果（n-1次比较）结果：2,3,4,6,5,8,9
 * 第三次结果：2,3,4,5,6,8,9
 * ....
 * 第n次
 * 所以说冒泡很费
 */

$arr = [9,6,2,3,4,8,5];

function maopao($arr){
    $len = count($arr) - 1;
    for ($i = 0 ;$i < $len; $i++){
        for ($j = 0; $j < $len - $i; $j++ ){
            if ($arr[$j] > $arr[$j + 1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}
print_r(maopao($arr));
