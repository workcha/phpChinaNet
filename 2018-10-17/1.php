<?php
/**
 * Created by PhpStorm.
 * User: chaohui
 * Date: 2018/10/17
 * Time: 9:29
 * Desc: 实现字符串全排列组合
 * address: https://mp.weixin.qq.com/s/OXLzMT4N1T4_1fBSyVHojA
 */

$str = 'abc';
#str_split(string,length) 将string类型分割为array
$a = str_split($str);
perm($a, 0,count($a) - 1);
/**
 * @param $arr  //排列的字符串
 * @param $k    //初始值
 * @param $m    //最大值
 */
function perm(&$arr, $k, $m){
    //检测初始值是否等于最大值
    if ($k == $m){
        # PHP_EOL PHP换行符
        echo join('',$arr), PHP_EOL;
    }else{
        for ($i = $k; $i <= $m; $i++){
            swap($arr[$k],$arr[$i]);
            perm($arr, $k+1, $m);
            swap($arr[$k], $arr[$i]);
        }
    }
}

/**
 * @param $a
 * @param $b
 * 单纯地进行值交换
 */
function swap(&$a, &$b){
    $c = $a;
    $a = $b;
    $b = $c;
}